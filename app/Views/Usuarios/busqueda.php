<title>Libros - app2</title>
</head>

<?php echo $navbar ?>

<section>
    <div class="container">
        <div class="mt-5">
            <?php if ($libroEncontrado) : ?>
                <h3 class="text-center text-dark">Información sobre '<?= $libroEncontrado['lib_titulo']; ?>'</h3>
            <?php else : ?>
                <h3 class="text-center text-dark">No se encontraron libros</h3>
                <?php return; ?>
            <?php endif; ?>
        </div>
        <?php if ($libroEncontrado) : ?>
            <div class="row">
                <div class="col-lg-12 text-center my-3">
                    <div class="blog-card">
                        <div class="meta">
                            <div class="photo" style="background-image: url(https://picsum.photos/700/900)"></div>
                        </div>
                        <div class="description">
                            <h1 class="mb-2"><?= $libroEncontrado['lib_titulo']; ?></h1>
                            <div class="mb-2" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                <h2><?php echo $libroEncontrado['tem_tema']; ?></h2>
                                <h2># <?php echo $libroEncontrado['lib_codigo']; ?></h2>
                            </div>
                            <p class="mb-2"><?php echo $libroEncontrado['lib_resumen']; ?></p>
                            <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                                <h2>Precio: $<?php echo $libroEncontrado['lib_precio']; ?></h2>
                                <?php if ($libroEncontrado['lib_estado'] == 1) : ?>
                                    <h2>Disponible</h2>
                                <?php else : ?>
                                    <h2>No disponible</h2>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>