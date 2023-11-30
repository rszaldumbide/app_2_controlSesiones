<title>Libros - app2</title>
</head>

<?php echo $navbar ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-5">
                <h2 class="my-3">Listar Libros de la base de datos</h2>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <form action="<?php echo base_url() . "buscar" ?>" method="GET" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Buscar libro por Código:</span>
                                <input type="text" class="form-control" onkeypress="return validador(event);" placeholder="Search" id="buscarCodigo" name="buscarCodigo">
                                <button type="submit" class="btn" style="background-color: wheat;" id="btnEnviar" name="btnEnviar">🔎</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-warning table-hover my-2">
                        <thead>
                            <th>Número</th>
                            <th>Tema</th>
                            <th>Título</th>
                            <th>Código</th>
                            <th>Precio</th>
                        </thead>
                        <tbody>
                            <?php foreach ($datos['tbl_libros'] as $libro) : ?>
                                <tr>
                                    <td><?php echo $libro['lib_id']; ?></td>
                                    <td><?php echo $libro['tem_tema']; ?></td>
                                    <td><?php echo $libro['lib_titulo']; ?></td>
                                    <td><?php echo $libro['lib_codigo']; ?></td>
                                    <td>$<?php echo $libro['lib_precio']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>