<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Function php to bring all the dependencies -->
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="logo">
                </div>
                <div class="col-8">
                    <nav>
                        <?php wp_nav_menu(
                            //first paramenter: localization of the menu
                            array('theme_location' => 'top_menu',
                            'menu_class'           => 'Main_Menu',
                            'container_class'      => 'Container_Menu', 
                            )
                        ) ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>