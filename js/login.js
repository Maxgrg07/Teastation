//  Author: Sonal(895168),Pusendra(898101),Asmita(899010),Max(889825) 
$(document).ready(function () {
  $(".form").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 7,
      },
    },
    messages: {
      email: {
        required: "Please enter your email",
        email: "Your email must be a valid email",
      },
      password: {
        required: "Password is required!",
        minlength: "Your password must be at least 7 characters long.",
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
