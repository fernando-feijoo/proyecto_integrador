// Para mostrar y ocultar el usurio y contraseña con solo mantener o soltar el click.
// $(document).ready(function () {
//   $(".show-password").mousedown(function (e) {
//     $("#password-input").attr("type", "text");
//   });
//   $(document).mouseup(function (e) {
//     $("#password-input").attr("type", "password");
//   });
// });

// $(document).ready(function() {
//   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
//     $(".show-password").on("touchstart", function(e) {
//       $("#password-input").attr("type", "text");
//     });
//     $(document).on("touchend", function(e) {
//       $("#password-input").attr("type", "password");
//     });
//   } else {
//     $(".show-password").mousedown(function(e) {
//       $("#password-input").attr("type", "text");
//     });
//     $(document).mouseup(function(e) {
//       $("#password-input").attr("type", "password");
//     });
//   }
// });



// Validacion de usurio y contraseña. Caso contrario muestra alerta y se oculata sola.
$(document).ready(function () {
  $("#boton-inicio").on("click", function (e) {
    e.preventDefault();
    var username = $("input[type='text']").val();
    var password = $("input[type='password']").val();

    if (username !== "grupo3" || password !== "3") {
      $("#alert-error").removeClass("d-none");
      setTimeout(function () {
        $("#alert-error").addClass("d-none");
      }, 2500);
    } else {
      window.location.href = "./php/dashboard.php";
    }
  });
});

// Ingresar al presionar el Enter del teclado aunque falte mas validaciones es funcional.
document.addEventListener("keyup", function(event) {
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
