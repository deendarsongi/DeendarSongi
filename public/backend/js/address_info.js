$(function () {
    var originalData = $('#address-information').serialize();

    $('#address-information').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var currentData = form.serialize();
        var dataChanged = (originalData !== currentData);
        var data = currentData;

        $('.error-message').text('');
        form.find('.is-invalid').removeClass('is-invalid');


        let stepName = 'address';

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
                    if (dataChanged) {
                        Swal.fire({
                            title: 'আপনি কি নিশ্চিত?',
                            text: "ঠিকানার তথ্য আপডেট করতে যাচ্ছেন!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#7066e0',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'হ্যাঁ',
                            cancelButtonText: 'না'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                submitAjax(form, data, currentData);
                            } else {
                                restoreFormData(form, originalData);
                                return
                            }
                        });
                    } else {
                        goToStep(2);
                    }
                } else {
                    submitAjax(form, data, currentData);
                }
            }
        });
    });

    //SubmitAjax
    function submitAjax(form, data, currentData) {
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
                if (response.action === 'update' || response.action === 'insert') {
                    //Error message
                    $('#address-alert span')
                        .html(response.message);
                        $('#address-alert').fadeIn();
                        setTimeout(function () {
                        $('#address-alert').fadeOut();
                    }
                    , 5000);

                    goToStep(2);

                    originalData = currentData;
                }
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
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
});




