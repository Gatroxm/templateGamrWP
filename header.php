<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?php  bloginfo('template_url')?>/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php  bloginfo('template_url')?>/style.css">
</head>

<body>
    <!-- NavBar -->
    <header>
        <div class="container-fluid fixed-top bg-body-tertiary">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Estudio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'Principal',
                        'container'=>'div',
                        'container_class' =>'collapse navbar-collapse',
                        'container_id'=>'navbarSupportedContent',
                        'items_wrap'=>'<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>',
                        'menu_class'=> 'nav-item'
                    ));?>
                </div>
            </nav>
        </div>
        <!-- Subscribete -->
        <div class="container-fluid subscribete">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        <?php echo do_shortcode('[contact-form-7 id="f9fce9b" title="Formulario de subscripción"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>