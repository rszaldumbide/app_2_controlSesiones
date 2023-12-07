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
                        <form action="<?php echo base_url() . "librosPorTema" ?>" method="GET" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="selectTema">Ver Libros por tema:</label>
                                <select class="form-select" id="selectTema" name="selectTema">
                                    <option selected value="todos">Todos</option>
                                    <?php foreach ($datos2 as $tema) : ?>
                                        <option value="<?= $tema['tem_id']; ?>"><?= $tema['tem_tema']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <button type="submit" class="btn" style="background-color: wheat;">👽</button>
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
                </div>
            </div>
        </div>
    </div>