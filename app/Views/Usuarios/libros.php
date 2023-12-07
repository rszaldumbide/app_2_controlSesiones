<title>Libros - app2</title>
</head>

<?php echo $navbar ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-5">
                <h2 class="my-3">Listar Libros de la base de datos</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <form action="<?php echo base_url() . "librosPorTema" ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="selectTema">Ver Libros por tema:</label>
                                <select class="form-select" id="selectTema" name="selectTema">
                                    <option selected value="todos">Todos</option>
                                    <?php foreach ($datos2 as $tema) : ?>
                                        <option value="<?= $tema['tem_id']; ?>"><?= $tema['tem_tema']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="submit" class="btn" style="background-color: wheat;" id="btnEnviar" name="btnEnviar">👽</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <form action="<?php echo base_url() . "buscar" ?>" method="POST" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Buscar libro por Código:</span>
                                <input type="text" class="form-control" onkeypress="return validador(event);" placeholder="Search" id="buscarCodigo" name="buscarCodigo" required>
                                <button type="submit" class="btn" style="background-color: wheat;" id="btnEnviar" name="btnEnviar">🔎</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive" id="tablaLibros">
                    <table id="tbl" class="table table-warning table-hover my-2">
                        <thead>
                            <th>Número</th>
                            <th>Tema</th>
                            <th>Título</th>
                            <th>Código</th>
                            <th>Precio</th>
                        </thead>
                        <tbody>
                            <?php foreach ($datos as $librotabla) : ?>
                                <tr>
                                    <td><?php echo $librotabla['lib_id']; ?></td>
                                    <td><?php echo $librotabla['tem_tema']; ?></td>
                                    <td><?php echo $librotabla['lib_titulo']; ?></td>
                                    <td><?php echo $librotabla['lib_codigo']; ?></td>
                                    <td>$<?php echo $librotabla['lib_precio']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                            $("#tbl").DataTable({
                                searching: false,
                                paging: true, // Deshabilita la paginación
                                lengthChange: false, // Deshabilita el control de las entradas por página
                                info: true, // Deshabilita el mensaje de información sobre las filas mostradas
                                "language": {
                                    "sZeroRecords": "No se encontraron resultados",
                                    "sEmptyTable": "Ningún dato disponible en esta tabla",
                                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                    "oPaginate": {
                                        "sFirst": "Primero",
                                        "sLast": "Último",
                                        "sNext": "Siguiente",
                                        "sPrevious": "Anterior"
                                    },
                                }
                            });
                        });
                        // Agregar evento change al select
                        $("#selectTema").change(function() {
                            // Enviar la petición Ajax al controlador
                            $.ajax({
                                type: "POST",
                                url: "<?php echo base_url() . 'verXTema'; ?>",
                                data: {
                                    selectTema: $(this).val()
                                },
                                success: function(response) {
                                    // Actualizar la tabla con los nuevos datos recibidos
                                    $("#tablaLibros").html(response);
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>