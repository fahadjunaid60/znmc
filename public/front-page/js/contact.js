$(document).ready(function () {

    (function ($) {
        "use strict";


        jQuery.validator.addMethod('answercheck', function (value, element) {
            return this.optional(element) || /^\bcat\b$/.test(value)
        }, "type the correct answer -_-");

        // validate contactForm form
        $(function () {
            $('#contactForm').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    subject: {
                        required: true,
                        minlength: 4
                    },
                    number: {
                        required: true,
                        minlength: 11
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 20
                    }
                },
                messages: {
                    name: {
                        required: "You must enter your name this field our required",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    subject: {
                        required: "Subject field is required make sure this field isn't empty",
                        minlength: "your subject must consist of at least 4 characters"
                    },
                    number: {
                        required: "You must enter your contact number",
                        minlength: "your contact number must consist of at least 11 characters"
                    },
                    email: {
                        required: "Your email must provided"
                    },
                    message: {
                        required: "Please provide a message for us",
                        minlength: "Short message is not allowed"
                    }
                },
                submitHandler: function (form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "contact_process.php",
                        success: function () {
                            $('#contactForm :input').attr('disabled', 'disabled');
                            $('#contactForm').fadeTo("slow", 1, function () {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('#success').fadeIn()
                                $('.modal').modal('hide');
                                $('#success').modal('show');
                            })
                            $('.contact-section.section_padding').remove();
                            $('.after-success').html(`<div style="width: 100%; text-align: center">
                                <img src="img/success-mail.jpg" style="width: 400px" />
                                <h1 class="text-success">Thank you for getting in touch!</h1>
                                <p class="text-dark">
                                    We appreciate you contacting us/ ZnmcTech Trading.<br />
                                    One of our colleagues will get back in touch with you soon!
                                </p>
                                <p class="text-dark">Have a great day!</p>
                                </div>`);
                        },
                        error: function () {
                            $('#contactForm').fadeTo("slow", 1, function () {
                                $('#error').fadeIn()
                                $('.modal').modal('hide');
                                $('#error').modal('show');
                            })
                        }
                    })
                }
            })
        })

    })(jQuery)
})