//  Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) 
$(document).ready(function () {
  $("#registration-form").validate({
    rules: {
      firstName: {
        required: true,
        minlength: 3,
      },
      lastName: {
        required: true,
        minlength: 4,
      },
      email: {
        required: true,
        email: true,
      },
      phone: {
        required: true,
        phoneUS: true,
        //   phoneUs:Matches US phone number(additional-methods.js)
      },
      password: {
        required: true,
        minlength: 7,
      },
      address: {
        required: true,
      },
      confirmPassword: {
        required: true,
        equalTo: "#password",
      },
      gender: {
        required: true,
      },
      province: {
        required: true,
      },
      date_of_birth: {
        required: true,
      },
     },
    messages: {
      firstName: {
        required: "Please enter your first name.",
        minlength: "Your first name must be at least 3 characters long.",
      },
      lastName: {
        required: "Please enter your last name.",
        minlength: "Your last name must be at least 4 characters long.",
      },
      email: {
        required: "Please enter your email.",
        email: "Your email must be a valid email",
      },
      phone: {
        required: "Please enter your phone number.",
        phoneUS: "Please enter Us Or Canada number",
      },
      password: {
        required: "Please enter your password.",
        minlength: "Your password must be at least 7 characters long.",
      },
      address: {
        required: "Please enter your address.",
      },
      confirmPassword: {
        required: "Please re-enter your password.",
        equalTo: "Passwords do not match",
      },
      province: {
        required: "Please select your province.",
      },

    },
    errorElement: "div",
    errorClass: "invalid",
    highlight: function (element) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element) {
      $(element).removeClass("is-invalid");
    },
    errorPlacement: function (error, element) {
      error.appendTo(element.parent());
    },
  });
});
