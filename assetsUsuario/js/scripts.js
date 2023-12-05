/* $(document).ready(function () {
  $("#selectTema").on("change", function () {
    // Obtiene el valor seleccionado del tema
    var temaID = $(this).val();

    // Realiza una solicitud AJAX al servidor
    $.ajax({
      url: "librosPorTema",
      method: "POST",
      data: {
        temaID: temaID,
      },
      dataType: "json",
      success: function (data) {
        // Actualiza la tabla con los nuevos datos
        actualizarTabla(data);
      },
      error: function (error) {
        console.error("Error en la solicitud AJAX: ", error);
      },
    });
  });

  function actualizarTabla(data) {
    // Borra las filas actuales de la tabla
    $("#tbl tbody").empty();

    // Itera sobre los nuevos datos y agrega filas a la tabla
    $.each(data, function (index, libro) {
      var newRow =
        "<tr>" +
        "<td>" +
        libro.lib_id +
        "</td>" +
        "<td>" +
        libro.tem_tema +
        "</td>" +
        "<td>" +
        libro.lib_titulo +
        "</td>" +
        "<td>" +
        libro.lib_codigo +
        "</td>" +
        "<td>$" +
        libro.lib_precio +
        "</td>" +
        "</tr>";
      $("#tbl tbody").append(newRow);
    });
  }
});
 */