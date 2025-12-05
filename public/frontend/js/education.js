document.addEventListener("DOMContentLoaded", function () {
     hideOnlyEducationFields();

    const eduTypeSelect = document.getElementById("education");

    if (eduTypeSelect && eduTypeSelect.value) {
        handleFirstDropdownChange(eduTypeSelect);

        const generalValue = document.getElementById("highest_education_general")?.value;
        const qawmiValue = document.getElementById("highest_education_qawmi")?.value;

        if (eduTypeSelect.value === "general" && generalValue) {
            showGeneralField(generalValue);
        } else if (eduTypeSelect.value === "qawmi" && qawmiValue) {
            showQawmiField(qawmiValue);
        }
    }

});

// Hide all education fields
function handleFirstDropdownChange(select) {
    const generalField = document.getElementById("highest_education_field-01");
    const qawmiField = document.getElementById("highest_education_field-02");

    hideOnlyEducationFields();
    generalField.style.display = "none";
    qawmiField.style.display = "none";

    const generalDropdown = document.getElementById('highest_education_general');
    const qawmiDropdown = document.getElementById('highest_education_qawmi');

    if (select.value === "general") {
        if (qawmiDropdown) {
            qawmiDropdown.value = "";
            qawmiDropdown.dispatchEvent(new Event("change"));
        }
        generalField.style.display = "block";

         //
        if (generalDropdown && generalDropdown.value) {
            showGeneralField(generalDropdown.value);
        }

        generalDropdown.onchange = function () {
            hideAndClearEducationFields();
            const val = this.value;
            showGeneralField(val);
        };

    } else if (select.value === "qawmi") {
        if (generalDropdown) {
            generalDropdown.value = "";
            generalDropdown.dispatchEvent(new Event("change"));
        }
        qawmiField.style.display = "block";

        //
        if (qawmiDropdown && qawmiDropdown.value) {
            showQawmiField(qawmiDropdown.value);
        }

        qawmiDropdown.onchange = function () {
            hideAndClearEducationFields();
            const val = this.value;
            showQawmiField(val);
        };
    }

    function showGeneralField(val) {
    if (val === "below_ssc") {
        document.querySelector(".under-ssc-field").style.display = "block";
    } else if (val === "ssc") {
        document.querySelector(".ssc-field").style.display = "block";
    } else if (val === "hsc") {
        document.querySelector(".hsc-field").style.display = "block";
    } else if (val === "diploma_ongoing") {
        document.querySelector(".diploma_ongoing-field").style.display = "block";
    } else if (val === "diploma") {
        document.querySelector(".diploma-field").style.display = "block";
    } else if (val === "honours_ongoing") {
        document.querySelector(".honours_ongoing-field").style.display = "block";
    } else if (val === "honours") {
        document.querySelector(".honours-field").style.display = "block";
    } else if (val === "masters") {
        document.querySelector(".masters-field").style.display = "block";
    }
}

function showQawmiField(val) {
    if (val === "ibtidaiyah") {
        document.querySelector(".ibtidaiyah_field").style.display = "block";
    } else if (val === "mutawasita") {
        document.querySelector(".mutawasita_field").style.display = "block";
    } else if (val === "sanabia_uluiya") {
        document.querySelector(".sanabia_uluiya_field").style.display = "block";
    } else if (val === "fazilat") {
        document.querySelector(".fazilat_field").style.display = "block";
    } else if (val === "taqmeel") {
        document.querySelector(".taqmeel_field").style.display = "block";
    } else if (val === "takhassus") {
        document.querySelector(".takhassus_field").style.display = "block";
    }
}
}

// Hide all education fields
function hideOnlyEducationFields() {
    const allFields = document.querySelectorAll(
        ".under-ssc-field, .ssc-field, .hsc-field, .diploma_ongoing-field, .diploma-field, .honours_ongoing-field, .honours-field, .masters-field, .ibtidaiyah_field, .mutawasita_field, .sanabia_uluiya_field, .fazilat_field, .taqmeel_field, .takhassus_field"
    );

    allFields.forEach(function (field) {
        field.style.display = "none";
    });
}

//
function hideAndClearEducationFields() {
    const allFields = document.querySelectorAll(
        ".under-ssc-field, .ssc-field, .hsc-field, .diploma_ongoing-field, .diploma-field, .honours_ongoing-field, .honours-field, .masters-field, .ibtidaiyah_field, .mutawasita_field, .sanabia_uluiya_field, .fazilat_field, .taqmeel_field, .takhassus_field"
    );

    allFields.forEach(function (field) {
        field.style.display = "none";

        const inputs = field.querySelectorAll("input, select, textarea");
        inputs.forEach(function (input) {
            if (input.tagName === "SELECT" || input.tagName === "TEXTAREA") {
                input.value = "";
            } else if (input.type === "checkbox" || input.type === "radio") {
                input.checked = false;
            } else {
                input.value = "";
            }

            if ($(input).hasClass("select2-hidden-accessible")) {
                $(input).val("").trigger("change");
            }
        });
    });
}



// Hide and show fields based on the selected value of the dropdown
$(document).ready(function () {
    function toggleFields(dropdownId) {
        var selectedValue = $('#' + dropdownId).val();

        if (selectedValue === "hsc_education") {
            $(".after-ssc-field-01").show();
            $(".after-ssc-field-02").hide();

            $(".after-ssc-field-02").find('input, textarea').val('');
            $(".after-ssc-field-02").find('select').each(function () {
                this.selectedIndex = 0;
                this.dispatchEvent(new Event("change"));
            });
        } else if (selectedValue === "diploma_education") {
            $(".after-ssc-field-01").hide();
            $(".after-ssc-field-02").show();

            $(".after-ssc-field-01").find('input, textarea').val('');
            $(".after-ssc-field-01").find('select').each(function () {
                this.selectedIndex = 0;
                this.dispatchEvent(new Event("change"));
            });
        } else {
            $(".after-ssc-field-01, .after-ssc-field-02").hide();

             $(".after-ssc-field-01, .after-ssc-field-02").find('input, textarea').val('');
            $(".after-ssc-field-01, .after-ssc-field-02").find('select').each(function () {
                this.selectedIndex = 0;
                this.dispatchEvent(new Event("change")); 
            });
        }
    }

    ['after_ssc_education_01', 'after_ssc_education_02', 'after_ssc_education_03'].forEach(function (id) {
        const dropdown = $('#' + id);

        // existing value
        if (dropdown.length && dropdown.val()) {
            toggleFields(id);
        }


        dropdown.change(function () {
            toggleFields(id);
        });
    });
});




//////////////////////
// function handleFirstDropdownChange(select) {
//     const generalField = document.getElementById("highest_education_field-01");
//     const qawmiField = document.getElementById("highest_education_field-02");

//     hideOnlyEducationFields();
//     generalField.style.display = "none";
//     qawmiField.style.display = "none";

//     if (select.value === "general") {
//         generalField.style.display = "block";
//     } else if (select.value === "qawmi") {
//         qawmiField.style.display = "block";
//     }

//     const generalDropdown = document.getElementById('highest_education_general');
//     const qawmiDropdown = document.getElementById('highest_education_qawmi');

//     if (generalDropdown) {
//         generalDropdown.onchange = function () {
//             hideAndClearEducationFields();
//             const val = this.value;

//             if (val === "below_ssc") document.querySelector(".under-ssc-field").style.display = "block";
//             else if (val === "ssc") document.querySelector(".ssc-field").style.display = "block";
//             else if (val === "hsc") document.querySelector(".hsc-field").style.display = "block";
//             else if (val === "diploma_ongoing") document.querySelector(".diploma_ongoing-field").style.display = "block";
//             else if (val === "diploma") document.querySelector(".diploma-field").style.display = "block";
//             else if (val === "honours_ongoing") document.querySelector(".honours_ongoing-field").style.display = "block";
//             else if (val === "honours") document.querySelector(".honours-field").style.display = "block";
//             else if (val === "masters") document.querySelector(".masters-field").style.display = "block";
//         };
//     }

//     if (qawmiDropdown) {
//         qawmiDropdown.onchange = function () {
//             hideAndClearEducationFields();
//             const val = this.value;

//             if (val === "ibtidaiyah") document.querySelector(".ibtidaiyah_field").style.display = "block";
//             else if (val === "mutawasita") document.querySelector(".mutawasita_field").style.display = "block";
//             else if (val === "sanabia_uluiya") document.querySelector(".sanabia_uluiya_field").style.display = "block";
//             else if (val === "fazilat") document.querySelector(".fazilat_field").style.display = "block";
//             else if (val === "taqmeel") document.querySelector(".taqmeel_field").style.display = "block";
//             else if (val === "takhassus") document.querySelector(".takhassus_field").style.display = "block";
//         };
//     }
// }
///////////////////////////



// document.addEventListener("DOMContentLoaded", function () {
//     // শুরুতে সব ফিল্ড হাইড
//     document.querySelector(".under-ssc-field").style.display = "none";
//     document.querySelector(".ssc-field").style.display = "none";
//     document.querySelector(".hsc-field").style.display = "none";
//     document.querySelector(".diploma_ongoing-field").style.display = "none";
//     document.querySelector(".diploma-field").style.display = "none";
//     document.querySelector(".honours_ongoing-field").style.display = "none";
//     document.querySelector(".honours-field").style.display = "none";
//     document.querySelector(".masters-field").style.display = "none";
//     document.querySelector(".ibtidaiyah_field").style.display = "none";
//     document.querySelector(".mutawasita_field").style.display = "none";
//     document.querySelector(".sanabia_uluiya_field").style.display = "none";
//     document.querySelector(".fazilat_field").style.display = "none";
//     document.querySelector(".taqmeel_field").style.display = "none";
//     document.querySelector(".takhassus_field").style.display = "none";
// });

// function handleFirstDropdownChange(select) {
//     const generalField = document.getElementById("highest_education_field-01");
//     const qawmiField = document.getElementById("highest_education_field-02");
//     const underSSCField = document.querySelector(".under-ssc-field");
//     const sscField = document.querySelector(".ssc-field");
//     const hscField = document.querySelector(".hsc-field");
//     const diplomaRUNNINGField = document.querySelector(".diploma_ongoing-field");
//     const diplomaField = document.querySelector(".diploma-field");
//     const honoursONGOINGField = document.querySelector(".honours_ongoing-field");
//     const honoursField = document.querySelector(".honours-field");
//     const masterField = document.querySelector(".masters-field");
//     const ibtidaiyahField = document.querySelector(".ibtidaiyah_field");
//     const mutawasitaField = document.querySelector(".mutawasita_field");
//     const sanabiauluiyaField = document.querySelector(".sanabia_uluiya_field");
//     const fazilatField = document.querySelector(".fazilat_field");
//     const taqmeelField = document.querySelector(".taqmeel_field");
//     const takhassusField = document.querySelector(".takhassus_field");

//     // শুরুতে সব ফিল্ড হাইড
//     generalField.style.display = "none";
//     qawmiField.style.display = "none";
//     underSSCField.style.display = "none";
//     sscField.style.display = "none";
//     hscField.style.display = "none";
//     diplomaRUNNINGField.style.display = "none";
//     diplomaField.style.display = "none";
//     honoursONGOINGField.style.display = "none";
//     honoursField.style.display = "none";
//     masterField.style.display = "none";
//     ibtidaiyahField.style.display = "none";
//     mutawasitaField.style.display = "none";
//     sanabiauluiyaField.style.display = "none";
//     fazilatField.style.display = "none";
//     taqmeelField.style.display = "none";
//     takhassusField.style.display = "none";

//     // প্রথম ড্রপডাউনের চেকিং
//     if (select.value === "general") {
//     generalField.style.display = "block";
//     } else if (select.value === "qawmi") {
//     qawmiField.style.display = "block";
//     }

//     // সর্বোচ্চ শিক্ষাগত যোগ্যতার জন্য ইভেন্ট লিসেনার

//     const generalDropdown = document.getElementById('highest_education_general');
//     const qawmiDropdown = document.getElementById('highest_education_qawmi');

// if (generalDropdown) {
//     generalDropdown.onchange = function () {
//         hideAllEducationFields();

//         if (this.value === "below_ssc") {
//             underSSCField.style.display = "block";
//         } else if (this.value === "ssc") {
//             sscField.style.display = "block";
//         } else if (this.value === "hsc") {
//             hscField.style.display = "block";
//         } else if (this.value === "diploma_ongoing") {
//             diplomaRUNNINGField.style.display = "block";
//         } else if (this.value === "diploma") {
//             diplomaField.style.display = "block";
//         } else if (this.value === "honours_ongoing") {
//             honoursONGOINGField.style.display = "block";
//         } else if (this.value === "honours") {
//             honoursField.style.display = "block";
//         } else if (this.value === "masters") {
//             masterField.style.display = "block";
//         }
//     };
// }

// if (qawmiDropdown) {
//     qawmiDropdown.onchange = function () {
//         hideAllEducationFields();

//         if (this.value === "ibtidaiyah") {
//             ibtidaiyahField.style.display = "block";
//         } else if (this.value === "mutawasita") {
//             mutawasitaField.style.display = "block";
//         } else if (this.value === "sanabia_uluiya") {
//             sanabiauluiyaField.style.display = "block";
//         } else if (this.value === "fazilat") {
//             fazilatField.style.display = "block";
//         } else if (this.value === "taqmeel") {
//             taqmeelField.style.display = "block";
//         } else if (this.value === "takhassus") {
//             takhassusField.style.display = "block";
//         }
//     };
// }
// function hideAllEducationFields() {
//     underSSCField.style.display = "none";
//     sscField.style.display = "none";
//     hscField.style.display = "none";
//     diplomaRUNNINGField.style.display = "none";
//     diplomaField.style.display = "none";
//     honoursONGOINGField.style.display = "none";
//     honoursField.style.display = "none";
//     masterField.style.display = "none";
//     ibtidaiyahField.style.display = "none";
//     mutawasitaField.style.display = "none";
//     sanabiauluiyaField.style.display = "none";
//     fazilatField.style.display = "none";
//     taqmeelField.style.display = "none";
//     takhassusField.style.display = "none";
// }
// //////////
// }

//     // এসএসসি পর পড়াশোনার জন্য ইভেন্ট লিসেনার
//     $(document).ready(function () {
//     function toggleFields() {
//         var selectedValue = $('#after_ssc_education_01').val();

//         if (selectedValue === "hsc_education") {
//         $(".after-ssc-field-01").show();
//         $(".after-ssc-field-02").hide();
//         } else if (selectedValue === "diploma_education") {
//         $(".after-ssc-field-01").hide();
//         $(".after-ssc-field-02").show();
//         } else {
//         $(".after-ssc-field-01, .after-ssc-field-02").hide();
//         }
//     }

//     // ড্রপডাউন পরিবর্তন হলে চেক করা হবে
//     $('#after_ssc_education_01').change(toggleFields);

//     // লোডের সময় চেক করা হবে
//     toggleFields();
//     });

//     $(document).ready(function () {
//     function toggleFields() {
//         var selectedValue = $('#after_ssc_education_02').val();

//         if (selectedValue === "hsc_education") {
//         $(".after-ssc-field-01").show();
//         $(".after-ssc-field-02").hide();
//         } else if (selectedValue === "diploma_education") {
//         $(".after-ssc-field-01").hide();
//         $(".after-ssc-field-02").show();
//         } else {
//         $(".after-ssc-field-01, .after-ssc-field-02").hide();
//         }
//     }

//     // ড্রপডাউন পরিবর্তন হলে চেক করা হবে
//     $('#after_ssc_education_02').change(toggleFields);

//     // লোডের সময় চেক করা হবে
//     toggleFields();
//     });
//     $(document).ready(function () {
//     function toggleFields() {
//         var selectedValue = $('#after_ssc_education_03').val();

//         if (selectedValue === "hsc_education") {
//         $(".after-ssc-field-01").show();
//         $(".after-ssc-field-02").hide();
//         } else if (selectedValue === "diploma_education") {
//         $(".after-ssc-field-01").hide();
//         $(".after-ssc-field-02").show();
//         } else {
//         $(".after-ssc-field-01, .after-ssc-field-02").hide();
//         }
//     }

//     // ড্রপডাউন পরিবর্তন হলে চেক করা হবে
//     $('#after_ssc_education_03').change(toggleFields);

//     // লোডের সময় চেক করা হবে
//     toggleFields();
//     });

// //





// function hideAllEducationFields() {
//     const allFields = document.querySelectorAll(
//         ".under-ssc-field, .ssc-field, .hsc-field, .diploma_ongoing-field, .diploma-field, .honours_ongoing-field, .honours-field, .masters-field, .ibtidaiyah_field, .mutawasita_field, .sanabia_uluiya_field, .fazilat_field, .taqmeel_field, .takhassus_field"
//     );

//     allFields.forEach(function (field) {
//         // Hide field
//         field.style.display = "none";

//         // Clear all
//         const inputs = field.querySelectorAll("input, select, textarea");
//         inputs.forEach(function (input) {
//             if (input.tagName === "SELECT" || input.tagName === "TEXTAREA") {
//                 input.value = "";
//             } else if (input.type === "checkbox" || input.type === "radio") {
//                 input.checked = false;
//             } else {
//                 input.value = "";
//             }
//              // Reset select2
//             if ($(input).hasClass("select2-hidden-accessible")) {
//                 $(input).val("").trigger("change");
//             }
//         });
//     });
// }
