// Se tiene que modificar ya que daria datos erroneos con cada vez que se cargue la pantalla.

window.onload = function () {
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth() + 1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var year = fecha.getFullYear(); //obteniendo año
  var week = moment(fecha).isoWeek();
  if (dia < 10) dia = "0" + dia; //agrega cero si el menor de 10
  if (mes < 10) mes = "0" + mes; //agrega cero si el menor de 10
  document.getElementById("fechaActual").value = year + "-" + mes + "-" + dia;
  document
    .getElementById("semanaActual")
    .setAttribute("value", week.toString().padStart(2, "0"));

  var fecha = new Date(); //Fecha actual
  var hora = fecha.getHours(); //obteniendo hora
  var minutos = fecha.getMinutes(); //obteniendo minutos

  if (hora < 10) hora = "0" + hora; //agrega cero si el menor de 10
  if (minutos < 10) minutos = "0" + minutos; //agrega cero si el menor de 10

  document
    .getElementById("horaLlegada")
    .setAttribute("value", hora + ":" + minutos);
};
