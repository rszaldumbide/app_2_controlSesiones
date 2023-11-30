<title>SB Admin 2 - Blank</title>
</head>

<body id="page-top">

    <?php echo $menu ?>

    <div class="container-fluid">
        <?php foreach ($datos['tbl_portada'] as $portada) : ?>
            <h5 class="modal-title"><?php echo $portada['por_titulo']; ?></h5>
            <p><?php echo $portada['por_descr']; ?></p>
        <?php endforeach; ?>
    </div>