// Address Picker Modal

            let selectedAddress = { country: '', division: '', district: '', upazila: '' };
            let historyStack = [];
            let cachedData = { countries: null, divisions: {}, districts: {}, upazilas: {} };
            let targetInput = null;
            let targetClear = null;

            // Open Address Picker
            function openAddressPicker(inputId, clearId) {
                targetInput = document.getElementById(inputId);
                targetClear = document.getElementById(clearId);

                document.getElementById('address-picker-modal').style.display = 'block';
                loadCountries();
                document.addEventListener('click', handleOutsideClick);
            }

            // Load Countries
            function loadCountries() {
                if (cachedData.countries) {
                    renderCountries(cachedData.countries);
                } else {
                    fetch('/get-countries')
                        .then(response => response.json())
                        .then(data => {
                            cachedData.countries = data;
                            renderCountries(data);
                        });
                }
            }

            // Render Countries
            function renderCountries(data) {
                let html = `<h5 style="text-align: left;">দেশ নির্বাচন করুন</h5><ul>`;
                data.forEach(country => {
                    html += `<li onclick="loadDivisions(${country.id}, '${country.bn_name}')">${country.bn_name} <i class="fa-solid fa-angle-right"></i></li>`;
                });
                html += `</ul>`;
                document.getElementById('address-steps').innerHTML = html;
                historyStack = [];
            }

            // Load Divisions
            function loadDivisions(countryId, countryName) {
                historyStack.push(() => loadCountries());
                selectedAddress.country = countryName;
                selectedAddress.countryId = countryId;

                if (cachedData.divisions[countryId]) {
                    renderDivisions(countryId, cachedData.divisions[countryId]);
                } else {
                    fetch(`/get-divisions/${countryId}`)
                        .then(response => response.json())
                        .then(data => {
                            cachedData.divisions[countryId] = data;
                            renderDivisions(countryId, data);
                        });
                }
            }

            // Render Divisions
            function renderDivisions(countryId, data) {
                let html = `<button class="back-btn" onclick="goBack()"><i class="fa-solid fa-arrow-left"></i></button>
                            <h5>বিভাগ নির্বাচন করুন</h5><ul>`;
                data.forEach(division => {
                    html += `<li onclick="loadDistricts(${division.id}, '${division.bn_name}')">${division.bn_name} <i class="fa-solid fa-angle-right"></i></li>`;
                });
                html += `</ul>`;
                document.getElementById('address-steps').innerHTML = html;
            }

            // Load Districts
            function loadDistricts(divisionId, divisionName) {
                historyStack.push(() => loadDivisions(selectedAddress.countryId, selectedAddress.country));
                selectedAddress.division = divisionName;
                selectedAddress.divisionId = divisionId;

                if (cachedData.districts[divisionId]) {
                    renderDistricts(divisionId, cachedData.districts[divisionId]);
                } else {
                    fetch(`/get-districts/${divisionId}`)
                        .then(response => response.json())
                        .then(data => {
                            cachedData.districts[divisionId] = data;
                            renderDistricts(divisionId, data);
                        });
                }
            }

            // Render Districts
            function renderDistricts(divisionId, data) {
                let html = `<button class="back-btn" onclick="goBack()"><i class="fa-solid fa-arrow-left"></i></button>
                            <h5>জেলা নির্বাচন করুন</h5><ul>`;
                data.forEach(district => {
                    html += `<li onclick="loadUpazilas(${district.id}, '${district.bn_name}')">${district.bn_name} <i class="fa-solid fa-angle-right"></i></li>`;
                });
                html += `</ul>`;
                document.getElementById('address-steps').innerHTML = html;
            }

            // Load Upazilas
            function loadUpazilas(districtId, districtName) {
                historyStack.push(() => loadDistricts(selectedAddress.divisionId, selectedAddress.division));
                selectedAddress.district = districtName;
                selectedAddress.districtId = districtId;

                if (cachedData.upazilas[districtId]) {
                    renderUpazilas(districtId, cachedData.upazilas[districtId]);
                } else {
                    fetch(`/get-upazilas/${districtId}`)
                        .then(response => response.json())
                        .then(data => {
                            cachedData.upazilas[districtId] = data;
                            renderUpazilas(districtId, data);
                        });
                }
            }

            // Render Upazilas
            function renderUpazilas(districtId, data) {
                let html = `<button class="back-btn" onclick="goBack()"><i class="fa-solid fa-arrow-left"></i></button>
                            <h5>উপজেলা নির্বাচন করুন</h5><ul>`;
                data.forEach(upazila => {
                    html += `<li onclick="selectUpazila('${upazila.bn_name}')">${upazila.bn_name}</li>`;
                });
                html += `</ul>`;
                document.getElementById('address-steps').innerHTML = html;
            }

            // Select Upazila
            function selectUpazila(upazilaName) {
                selectedAddress.upazila = upazilaName;
                const fullAddress = `${selectedAddress.upazila}, ${selectedAddress.district}, ${selectedAddress.division}, ${selectedAddress.country}`;

                targetInput.value = fullAddress;
                targetClear.style.display = 'inline';

                if (targetInput.id === 'permanent-address') {
                    document.getElementById('permanent-ads-extra-input').style.display = 'block';
                } else if (targetInput.id === 'current-address') {
                    document.getElementById('current-ads-extra-input').style.display = 'block';
                }

                // Arrow icon hide
                targetInput.parentElement.querySelector('.arrow-icon').style.display = 'none';

                closeAddressPicker();

                // Remove error class
                if (targetInput.id === 'permanent-address') {
                    $('#permanent-address').removeClass('is-invalid');
                    $('#error-permanent_address').text('');
                } else if (targetInput.id === 'current-address') {
                    $('#current-address').removeClass('is-invalid');
                    $('#error-current_address').text('');
                }
            }


            // Clear Address
            document.getElementById('permanent-address').addEventListener('input', function() {
                document.getElementById('clear-permanent-address').style.display = this.value ? 'inline' : 'none';
                document.querySelector('#permanent-address-wrapper .arrow-icon').style.display = this.value ? 'none' : 'inline';
            });

            document.getElementById('current-address').addEventListener('input', function() {
                document.getElementById('clear-current-address').style.display = this.value ? 'inline' : 'none';
                document.querySelector('#current-address-wrapper .arrow-icon').style.display = this.value ? 'none' : 'inline';
            });

             // ClearAddress
            function clearAddress(inputId, clearId) {
                document.getElementById(inputId).value = '';
                document.getElementById(clearId).style.display = 'none';

                selectedAddress = { country: '', division: '', district: '', upazila: '' };

                const inputElement = document.getElementById(inputId);
                const arrowIcon = inputElement.parentElement.querySelector('.arrow-icon');
                if (arrowIcon) {
                    arrowIcon.style.display = 'inline';
                }

                if (inputId === 'permanent-address') {
                    document.getElementById('permanent-ads-extra-input').style.display = 'none';
                } else if (inputId === 'current-address') {
                    document.getElementById('current-ads-extra-input').style.display = 'none';
                }
            }

            // Clear Address on Click
            function closeAddressPicker() {
                document.getElementById('address-picker-modal').style.display = 'none';
                document.removeEventListener('click', handleOutsideClick);
            }

            // Close Modal on Outside Click
            function handleOutsideClick(event) {
                const modal = document.getElementById('address-picker-modal');
                if (!modal.contains(event.target) && event.target !== targetInput) {
                    closeAddressPicker();
                }
            }

            // Prevent Default Action
            document.getElementById('address-steps').addEventListener('click', function(event) {
                event.stopPropagation();
            });

            // Back Button Functionality
            function goBack() {
                if (historyStack.length > 0) {
                    const prevStep = historyStack.pop();
                    prevStep();
                }
            }

            // Checkbox Functionality
            document.getElementById('location_checkbox').addEventListener('change', function () {
                const isChecked = this.checked;
                const currentAddressWrapper = document.getElementById('current-address-wrapper');
                const currentAddressExtraInput = document.getElementById('current-ads-extra-input');

                if (isChecked) {
                    currentAddressWrapper.style.display = 'none';
                    currentAddressExtraInput.style.display = 'none';
                    document.getElementById('current-address').value = '';
                    document.getElementById('current-ads-extra').value = '';
                    document.getElementById('clear-current-address').style.display = 'none';
                    document.querySelector('#current-address-wrapper .arrow-icon').style.display = 'inline';
                    document.getElementById('current-address').classList.remove('is-invalid');
                    document.getElementById('error-current_address').textContent = '';
                    document.getElementById('current-ads-extra').classList.remove('is-invalid');
                    document.getElementById('error-current_ads_extra').textContent = '';
                } else {
                    currentAddressWrapper.style.display = 'block';
                    currentAddressExtraInput.style.display = 'block';
                }
            });

            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('location_checkbox').dispatchEvent(new Event('change'));
            });

            // Initialize Address Picker
            $(document).ready(function () {
                const addressConfigs = [
                    {
                        inputId: 'permanent-address',
                        wrapperId: 'permanent-address-wrapper',
                        extraInputId: 'permanent-ads-extra-input',
                        clearBtnId: 'clear-permanent-address',
                    },
                    {
                        inputId: 'current-address',
                        wrapperId: 'current-address-wrapper',
                        extraInputId: 'current-ads-extra-input',
                        clearBtnId: 'clear-current-address'
                    }
                ];

                addressConfigs.forEach(cfg => {
                    const input = document.getElementById(cfg.inputId);
                    const extraInput = document.getElementById(cfg.extraInputId);
                    const clearBtn = document.getElementById(cfg.clearBtnId);
                    const wrapper = document.getElementById(cfg.wrapperId);
                    const arrowIcon = wrapper ? wrapper.querySelector('.arrow-icon') : null;

                    // Check if value
                    if (input && input.value.trim() !== '') {
                        if (extraInput) extraInput.style.display = 'block';
                        if (clearBtn) clearBtn.style.display = 'inline';
                        if (arrowIcon) arrowIcon.style.display = 'none';
                    }

                    // Add event input
                    if (clearBtn) {
                        clearBtn.addEventListener('click', function () {
                            if (input) input.value = '';
                            clearBtn.style.display = 'none';
                            if (arrowIcon) arrowIcon.style.display = 'inline';
                            if (extraInput) {
                                extraInput.style.display = 'none';
                                const extraInputField = extraInput.querySelector('input');
                                if (extraInputField) extraInputField.value = '';
                            }
                            selectedAddress = { country: '', division: '', district: '', upazila: '' };
                        });
                    }
                });
            });


