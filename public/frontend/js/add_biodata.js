
$(document).ready(function () {
    // Slick Slider
    $('.biodata_nav_group').slick({
      centerMode: false,
      focusOnSelect: false,
      dots: false,
      infinite: false,
      autoplay: false,
      speed: 400,
      slidesToShow: 5,
      slidesToScroll: 2,
      arrows: false,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 1199.98,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          }
        },
        {
          breakpoint: 991.98,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 767.98,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 575.98,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 399.98,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });


    // Steps and Current Step
    let currentStep = 0;
    let originalFormData = {};
    let validatedStep = initialStepFromServer || 0;

    const steps = document.querySelectorAll('.add_biodata_content');
    const navButtons = document.querySelectorAll('.biodata_nav_link');
    const progressBarFill = document.getElementById('progressFill');
    const progressPercentage = document.getElementById('progressPercentage');

    function saveOriginalFormData(stepIndex) {
        const form = $('#dsdb_form_step_' + (stepIndex + 1)).find('form');
        if (form.length) {
            originalFormData[stepIndex] = form.serialize();
        }
    }

      window.goToStep = function(stepIndex, callback) {
        currentStep = stepIndex;
        const totalSteps = 10;

         if (stepIndex > validatedStep) {
            validatedStep = stepIndex;
        }

        const progress = ((validatedStep) / totalSteps) * 100;

        $('#progressFill').css('width', progress + '%');
        $('#progressPercentage').text(Math.round(progress) + '%');
        $('.biodata_nav_link').removeClass('active');

        $('.biodata_nav_link').each(function (index) {
            if (index < stepIndex) {
                $(this).addClass('submitted');
            }
            if (index === stepIndex) {
                $(this).addClass('active ');
            }
        });
        //


        $('.biodata_nav_group').slick('slickGoTo', stepIndex);
        $('.add_biodata_content').removeClass('active');
        $('#dsdb_form_step_' + (stepIndex + 1)).addClass('active');

        // $('html, body').animate({
        //     scrollTop: $('#dsdb_form_step_' + (stepIndex + 1)).offset().top -500
        // }, 500);

        $('html, body').animate({
            scrollTop: $('#dsdb_form_step_' + (stepIndex + 1)).offset().top -500
        }, 500, function () {
            // callback
            if (typeof callback === 'function') {
                callback();
            }
        });

        saveOriginalFormData(stepIndex);
    };

    //Previous Step
    document.querySelectorAll('.back').forEach((btn) => {
        btn.addEventListener('click', function () {
            if (currentStep > 0) {
                currentStep--;
                goToStep(currentStep - 0);
            }
        });
    });

//
    $('.biodata_nav_link').on('click', function (e) {
    e.preventDefault();

    //Age-range-slider
    const ageSlider = $(".age-range-slider").data("ionRangeSlider");
    $('#expect_age').val(ageSlider.result.from + '-' + ageSlider.result.to);

    const targetStep = $(this).closest('li').index();

    const currentForm = $('#dsdb_form_step_' + (currentStep + 1)).find('form');
    const currentFormData = currentForm.serialize();
    const savedData = originalFormData[currentStep] || '';
    const stepName = currentForm.data('step') || currentForm.attr('data-step');


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: '/step/validation',
        type: 'POST',
        data: { step: stepName },
        success: function (response) {
            if (response.action === 'update') {
                if (currentFormData !== savedData) {
                    Swal.fire({
                        title: 'তথ্য আপডেট করেছেন',
                        text: "আপডেটকৃত তথ্য সংরক্ষণ করতে চান?",
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'হ্যাঁ',
                        cancelButtonText: 'না'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            submitAjax(currentForm, currentFormData, originalFormData[currentStep], true, function () {
                                originalFormData[currentStep] = currentFormData;
                                checkStepAccess(targetStep);
                            });
                        } else {
                            restoreFormData(currentForm, originalFormData[currentStep]);
                            return
                        }
                    });
                } else {
                    checkStepAccess(targetStep);
                }
            } else {
                checkStepAccess(targetStep);
            }
        }
    });
});

//
function submitAjax(form, data, currentData, forceUpdateOnly = false, callback = null) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: data,
        success: function (response) {
            if (response.action === 'update' || (!forceUpdateOnly && response.action === 'insert')) {
                let formId = form.attr('id');
                let alertId = formId.replace('-information', '') + '-alert';

                $('#' + alertId + ' span').html(response.message);
                $('#' + alertId).fadeIn();
                setTimeout(() => {
                    $('#' + alertId).fadeOut();
                }, 5000);

                if (typeof callback === 'function') {
                    callback();
                }
            }
        },
        error: function (xhr) {
            if (xhr.status === 422) {
                let errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    let field = $('[name="' + key + '"]');
                    field.addClass('is-invalid');
                    $('#error-' + key).text(value[0]);

                    if (field.hasClass('select2-hidden-accessible')) {
                        field.next('.select2').find('.select2-selection').css('border', '1px solid red');
                    }
                });
            } else {
                alert("Something went wrong.");
            }
        }
    });
}

//
window.restoreFormData = function (form, serializedData) {
    const data = new URLSearchParams(serializedData);

    form.find(':input').each(function () {
        const $input = $(this);
        const name = $input.attr('name');
        const type = $input.attr('type');

        if (!name) return;

        if (type === 'checkbox' || type === 'radio') {
            $input.prop('checked', false);
            data.getAll(name).forEach(val => {
                if ($input.val() === val) {
                    $input.prop('checked', true);
                }
            });
        } else {
            $input.val(data.get(name));
        }

        if ($input.hasClass('select2-hidden-accessible')) {
            $input.trigger('change');
        }
    });
}



//

    // AJAX দিয়ে স্টেপ অ্যাক্সেস চেক
    function checkStepAccess(targetStep) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/check/step/access',
            method: 'GET',
            data: { step: targetStep },
            success: function (response) {
                if (response.allowed) {
                    goToStep(targetStep);
                }
            }
        });
    }

    goToStep(currentStep);

    // Active Submitted step
    goToStep(validatedStep);

  });




    //border color change
    $(document).ready(function () {
        // Input field
        $('input, textarea').on('input', function () {
            $(this).removeClass('is-invalid');
            $('#error-' + $(this).attr('name')).text('');
        });

        // Select field
        $('select').on('change', function () {
            $(this).removeClass('is-invalid');
            $('#error-' + $(this).attr('name')).text('');

            //select2
            if ($(this).hasClass('select2-hidden-accessible')) {
                $(this).next('.select2').find('.select2-selection').css('border', '');
            }
        });
    });


// brother info hide show
  function toggleBrotherInfo(value) {
    const brotherInfoField = document.querySelector('.brother-info-field');
    const brotherInfo = document.getElementById('brother_info');

    if (value === "none" || value === "0" || value === "") {
      brotherInfoField.style.display = "none";
      if (brotherInfo) brotherInfo.value = "";
    } else {
      brotherInfoField.style.display = "block";
    }
  }

  // Sister info hide show
  function toggleSisterInfo(value) {
    const sisterInfoField = document.querySelector('.sister-info-field');
    const sisterInfo = document.getElementById('sister_info');

    if (value === "none" || value === "0" || value === "") {
      sisterInfoField.style.display = "none";
      if (sisterInfo) sisterInfo.value = "";
    } else {
      sisterInfoField.style.display = "block";
    }
  }

  // Database data info hide show
  document.addEventListener('DOMContentLoaded', function () {
    const brotherSelect = document.getElementById('brother_count');
    const sisterSelect = document.getElementById('sister_count');

    if (brotherSelect) {
      toggleBrotherInfo(brotherSelect.value);
    }

    if (sisterSelect) {
      toggleSisterInfo(sisterSelect.value);
    }
  });




// GROOM AND BRIDE FEILD SHOW HIDE

// দৃশ্যমানতা আপডেট ফাংশন
function toggleBiodataType(selectedValue) {
    const groomFields = document.querySelectorAll(".ds-groom-detail-field");
    const brideFields = document.querySelectorAll(".ds-bride-detail-field");

    // পাত্রের জন্য দৃশ্যমানতা
    if (selectedValue === "male") {
      groomFields.forEach((field) => (field.style.display = "block"));
      brideFields.forEach((field) => (field.style.display = "none"));
    }
    // পাত্রীর জন্য দৃশ্যমানতা
    else if (selectedValue === "female") {
      brideFields.forEach((field) => (field.style.display = "block"));
      groomFields.forEach((field) => (field.style.display = "none"));
    }
    // ডিফল্ট লুকানো
    else {
      groomFields.forEach((field) => (field.style.display = "none"));
      brideFields.forEach((field) => (field.style.display = "none"));
    }
  }

//   পেজ লোড হওয়ার পর ডিফল্ট স্টেট আপডেট
  document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.getElementById("biodata_type");
    if (dropdown) {
      toggleBiodataType(dropdown.value); // ডিফল্ট ভ্যালু অনুযায়ী ফিল্ড আপডেট হবে
    }
  });






function handleMaritalStatusChange(value) {
    // ভ্যারিয়েবল ডিফাইন করুন
    const allFields = document.querySelectorAll(
      '.ds-married-detail-field, .ds-divorced-detail-field, .ds-widow-detail-field, .ds-widower-detail-field'
    );

    const marriedFields = document.querySelectorAll('.ds-married-detail-field');
    const divorcedFields = document.querySelectorAll('.ds-divorced-detail-field');
    const widowFields = document.querySelectorAll('.ds-widow-detail-field');
    const widowerFields = document.querySelectorAll('.ds-widower-detail-field');

    // সব ডিভ লুকিয়ে দিন
    allFields.forEach(field => (field.style.display = 'none'));

    // নির্ধারিত ডিভ দেখান
    if (value === 'married') {
      marriedFields.forEach(field => (field.style.display = 'block'));
    } else if (value === 'divorced') {
      divorcedFields.forEach(field => (field.style.display = 'block'));
    } else if (value === 'widow') {
      widowFields.forEach(field => (field.style.display = 'block'));
    } else if (value === 'widower') {
      widowerFields.forEach(field => (field.style.display = 'block'));
    }
  }

  document.addEventListener("DOMContentLoaded", function () {
  const maritalDropdown = document.getElementById("married_type");
  if (maritalDropdown) {
    handleMaritalStatusChange(maritalDropdown.value);
  }
});

