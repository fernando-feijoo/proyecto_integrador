// Ingresar al presionar el Enter del teclado aunque falte mas validaciones es funcional.
document.addEventListener("keyup", function (event) {
  if (event.code === "Enter" || event.keyCode === 13) {
    document.getElementById("boton-inicio").click();
  }
});

// Funcion antigua, si funciona pero se alterna entre presionar y volver a presionar.
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

setTimeout(function () {
  document.getElementById("alert-error").style.display = "none";
}, 3000);

setTimeout(function () {
  document.getElementById("alert-complete").style.display = "none";
}, 3000);
