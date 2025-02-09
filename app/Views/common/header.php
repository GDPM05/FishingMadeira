<!DOCTYPE html>
<html lang="en">
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

        <?php 
            $css_count = count($css_file_array);
            if ($css_count > 0): ?> 
                <?php for ($i = 0; $i < $css_count; $i++): ?>
                    <link rel="stylesheet" href="<?php echo base_url($css_file_array[$i]); ?>">
                    <?php if($environment == "development") echo "<script>console.info('Found " . $css_count . " css files for this view.')</script>"; ?>
                <?php endfor; ?>
        <?php endif; ?>

        <?php 
            $js_count = count($js_file_array);
            if ($js_count > 0): ?>
                <?php for ($i2 = 0; $i2 < $js_count; $i2++): ?>
                    <script src="<?php echo base_url($js_file_array[$i2]); ?>"></script>
                    <?php if($environment == "development") echo "<script>console.info('Found " . $js_count . " js files for this view.')</script>"; ?>
                <?php endfor; ?>
        <?php endif; ?>

    </head>
    <body>