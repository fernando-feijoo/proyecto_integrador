$(document).ready(function () {
  $(".show-password").on("click", function (e) {
    var current = $(this).attr("data-toggle");
    var input = $("#password-input");
    if (current == "hide") {
      input.attr("type", "text");
      $(this).attr("data-toggle", "show");
    } else {
      input.attr("type", "password");
      $(this).attr("data-toggle", "hide");
    }
  });
});
