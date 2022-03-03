"use strict";

// Class definition
var KTWizard6 = (function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false, // allow step clicking
        });

        // Validation before going to next page
        _wizardObj.on("change", function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == "Valid") {
                        wizard.goTo(wizard.getNewStep());

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: "Sorry.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light",
                            },
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false; // Do not change wizard step, further action will be handled by he validator
        });

        // Change event
        _wizardObj.on("changed", function (wizard) {
            KTUtil.scrollTop();
        });

        // Submit event
        _wizardObj.on("submit", function (wizard) {
            Swal.fire({
                text: "All is good! Please confirm the form submission.",
                icon: "success",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, submit!",
                confirmButtonText: "Yes, submit!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-primary",
                    cancelButton: "btn font-weight-bold btn-default",
                },
            }).then(function (result) {
                if (result.value) {
                    _formEl.submit(); // Submit form
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: "Your form has not been submitted!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary",
                        },
                    });
                }
            });
        });
    };

    const cek = true;
    var _initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    stambuk: {
                        validators: {
                            notEmpty: {
                                message: "Stambuk Harus Di isi",
                            },
                            remote: {
                                message: "Stambuk anda telah terdaftar",
                                method: "GET",
                                url: "/cek",
                            },
                        },
                    },
                    nama_lengkap: {
                        validators: {
                            notEmpty: {
                                message: "Nama Harus Di isi",
                            },
                        },
                    },
                    tempat_lahir: {
                        validators: {
                            notEmpty: {
                                message: "Tempat Lahir Harus Di isi",
                            },
                        },
                    },
                    tanggal_lahir: {
                        validators: {
                            notEmpty: {
                                message: "Tanggal Lahir Harus Di isi",
                            },
                        },
                    },
                    agama: {
                        validators: {
                            notEmpty: {
                                message: "Agama Lahir Harus Di isi",
                            },
                        },
                    },
                    no_telp: {
                        validators: {
                            notEmpty: {
                                message: "No HP Harus Di Isi",
                            },
                        },
                    },
                    jenis_kelamin: {
                        validators: {
                            notEmpty: {
                                message: "Jenis Kelamin Harus Di Pilih",
                            },
                        },
                    },
                   
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email Harus Di isi",
                            },
                        },
                    },
                    asal: {
                        validators: {
                            notEmpty: {
                                message: "Asal Harus Di isi",
                            },
                        },
                    },
                    nama_ayah: {
                        validators: {
                            notEmpty: {
                                message: "Nama Ayah Harus Di isi",
                            },
                        },
                    },
                    nama_ibu: {
                        validators: {
                            notEmpty: {
                                message: "Nama Ibu Harus Di isi",
                            },
                        },
                    },
                    
                  
                    

                    
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: "",
                    }),
                },
            })
        );

        // Step 2
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    angkatan: {
                        validators: {
                            notEmpty: {
                                message: "Angkatan Harus Di isi",
                            },
                        },
                    },
                    alasan: {
                        validators: {
                            notEmpty: {
                                message: "Alasan Harus Di isi",
                            },
                        },
                    },

                    organisasi: {
                        validators: {
                            notEmpty: {
                                message: "Organisasi Harus Di isi",
                            },
                        },
                    },

                    foto: {
                        validators: {
                            notEmpty: {
                                message: "Foto tidak boleh kosong",
                            },
                            file: {
                                extension: 'jpeg,jpg,png',
                                    type: 'image/jpeg,image/png',
                                maxSize: 2097152, // 2048 * 1024
                                message: 'The selected file is not valid',
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: "",
                    }),
                },
            })
        );
    };

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById("kt_wizard");
            _formEl = KTUtil.getById("kt_form");

            _initWizard();
            _initValidation();
        },
    };
})();

jQuery(document).ready(function () {
    KTWizard6.init();
});
