$(document).ready(function () {
  $("#tbl").DataTable({
    searching: false,
    paging: true, // Deshabilita la paginación
    lengthChange: false, // Deshabilita el control de las entradas por página
    info: true, // Deshabilita el mensaje de información sobre las filas mostradas
    language: {
      sZeroRecords: "No se encontraron resultados",
      sEmptyTable: "Ningún dato disponible en esta tabla",
      sInfo:
        "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
      sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
      sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
      oPaginate: {
        sFirst: "Primero",
        sLast: "Último",
        sNext: "Siguiente",
        sPrevious: "Anterior",
      },
    },
  });
});

function valor() {
  $("select[name='selectTema']").change(function () {
    let dato = $(this).val();
    console.log(dato);

    let url =
      "http://localhost/app_2/librosPorTema?selectTema=" +
      dato;

    $.ajax({
      type: "GET",
      url: url, // Utiliza la URL con los datos incluidos
      success: function (response) {
        console.log(response);
      },
    });
  });
}

$(document).ready(function () {
  valor();
});
