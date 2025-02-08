<head>
    <!-- Meta Tags Essenciais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Comunidade de pesca com fórum, wiki, publicações e muito mais. Partilha experiências, aprende novas técnicas e descobre tudo sobre pesca! 🎣">
    <meta name="author" content="Vítor">
    <meta name="author" content="João Abreu">
    <meta name="robots" content="index, follow">

    <!-- Título da Página -->
    <title>FishingMadeira</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Font Awesome (Opcional) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap JavaScript (Popper.js incluído) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <?php foreach($css_file_array as $path): ?>
        <link rel="stylesheet" href="<?php echo base_url($path); ?>">
    <?php endforeach; ?>

    <!-- JS File Loading -->
    <?php foreach($js_file_array as $path): ?>
        <script src="<?php echo base_url($path); ?>"></script>
    <?php endforeach; ?>

</head>
<body>