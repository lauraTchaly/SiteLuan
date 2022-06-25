<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="André Luferat - https://github.com/Luferat">
    <meta name="description" content="Aplicativo modelo full-stack usando HTML, CSS, PHP e MySQL.">
    <link rel="shortcut icon" href="/favicon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>MindSetting <?php echo $title ?></title>
</head>

<body>

    <a id="top"></a>

    <div class="wrap">

        <header>

            <a href="/" title="Página inicial"><i class="fa-solid fa-brain"></i></a>

            <h1>MindSetting</h1>

        </header>

        <nav>

            <a href="/" title="Página inicial"><i class="fa-solid fa-circle-info fa-fw"></i><span>Neurociência</span></a>

            <a href="/markt" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>Marketing</span></a>

            <a href="/IC/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>Investigação Criminal</span></a>

            <a href="/mentesa/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>Mente sã e corpo são</span></a>

            <a href="/games/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>Games</span></a>

            <a href="/cinema/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>História do Cinema</span></a>

            <a href="/pop/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>Cultura POP</span></a>

            <a href="/contatos/" title="Faça contato"><i class="fa-solid fa-comment-dots fa-fw"></i><span>Contatos</span></a>

            <a href="/sobre/" title="Sobre..."><i class="fa-solid fa-circle-info fa-fw"></i><span>sobre</span></a>

            <?php
            // Se usuário está logado...
            if ($user) :

                // Exibe foto dele e link para perfil.
            ?>

                <a href="/user/profile/" title="Perfil"><img src="<?php echo $user['user_photo'] ?>" alt="<?php echo $user['user_name'] ?>"><span>Perfil</a>

            <?php

            // Se usuário não está logado...
            else :

                // Exibe link para login
            ?>

                <a href="/user/login/" title="Usuário"><i class="fa-solid fa-right-to-bracket fa-fw"></i><span>Login</span></a>

            <?php
            endif;
            ?>

        </nav>

        <main>