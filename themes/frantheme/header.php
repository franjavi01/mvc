<!DOCTYPE html>
<html lang="<?php lang();?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php apartadoyTitulo(); ?></title>
    <link rel="stylesheet" href="<?php ruta_a_theme()?>/style.css">
    <?php finHead();?>
</head>
<body>

<header>
    <h1 class="title"><?php el_titulo(); ?></h1>
    <hr>
    <nav>
    <?php menuBuilder(); ?>
</nav>
<hr>
</header>
<main>

