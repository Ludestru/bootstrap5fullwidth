<!doctype html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('', true, ''); ?></title>

    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap5fullwidth.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha256-G72xkTLOzlEDwKKRngkyDtxmh6s4efw7sdKPDw+l1F8=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->


    <?php wp_head(); ?>
</head>

<body class="d-flex flex-column">



    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">

            <div class="container-fluid navbox">
                <div id="leftSidebar" class="sidebar">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
                    <?php
                    // Ajout du menu
                    wp_nav_menu(array(
                        'theme_location' => 'menu-principal',
                        'items_wrap' => '%3$s'
                    )); ?>
                </div>

                <div id="menu" class="menu">
                    <button class="openbtn navbar-toggler" onclick="openNav()"><span class="navbar-toggler-icon"></span>
                        Menu</button>
                </div>
                <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Contact</button>
            </div>
        </nav>
    </header>
    <?php 
    //Ajout du modal de contact
    include get_template_directory() . '/components/contactForm.php'; ?>