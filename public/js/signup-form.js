jQuery(function ($) {
    $("#signup-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
            },

            last_name: {
                required: true,
                minlength: 3,
            },

            email: {
                required: true,
                email: true
            },
            // password: {
            //     required: true,
            //     minlength: 5
            // },
            //
            // password_confirmation: {
            //     required: true,
            //     minlength: 5,
            //     equalTo: "#password"
            // }
        },

        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name is short (3 characters long)"
            },

            last_name: {
                required: "Please enter your last name",
                minlength: "Your last name is short (3 characters long)"
            },

            email: {
                required: "We need your email address to contact you",
                email: "Your email address must be in the format of name@domain.com"
            },

            // password: {
            //     required: "Please enter your password",
            //     minlength: "Your password is short (5 characters long)"
            //
            // },
            //
            // password_confirmation: {
            //     required: "Please enter your password",
            //     minlength: "Your password is short (5 characters long)",
            //     equalTo: "qqqqqqqq"
            //
            // }
        }
    })
});
