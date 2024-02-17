<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
         <?php wp_head(); ?>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UTDsolv Capstone Project | Naveen Jindal School of Management</title>
        <meta name="description" content>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.typekit.net/roc5fuc.css">
        <link rel="stylesheet" href>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="utd-header">
                <div class="wrapper">
                    <div class="utd-header__logo">
                        <a href="https://www.utdallas.edu/"><img src=" <?php echo get_template_directory_uri(); ?>/assets/images/icons/utd-wordmark-1line-white-web.svg"></a>
                    </div>

                    <div class="utd-header__links">
                        <ul>
                            <li><a href="https://www.utdallas.edu/directory/">Directory</a></li>
                            <li><a href="https://www.utdallas.edu/campus-life/">Campus </a></li>
                            <li><a href="https://elearning.utdallas.edu/ultra">E-learning</a></a></li>
                            <li><a href="https://www.utdallas.edu/galaxy/">Galaxy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="site-information">
                <div class="wrapper">
                    <div class="site-information__text">
                        <h1>UTDSolv <span class="orange-text">Capstone Project</span></h1>
                    </div>
                    <div class="site-information__logo">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets/images/som-logo.png">
                    </div>
                </div>
            </div>
            <!-- Green UTDSolv Header -->
            <nav class="utdsolv-header">
                <div class="utdsolv-header__links">
                    <ul>
                        <li><a href="<?php echo site_url('/') ?>">Home</a></li>
                        <li><a href="<?php echo site_url('/past-projects') ?>">Past Projects</a></li>
                        <li><a href="<?php echo site_url('/for-companies') ?>">For Companies</a></li>
                        <li><a href="<?php echo site_url('/students') ?>">Students</a></li>
                        <li><a href="<?php echo site_url('/news') ?>">News</a></li>
                        <li><a href="<?php echo site_url('/Contact') ?>">Contact</a></li>
                        <li><a href="<?php echo site_url('/faq') ?>">FAQ</a></li>
                    </ul>
                    <div class="utdsolv-header__menu-icon">
                    <div class="utdsolv-header__menu-icon__middle"></div>
                    </div>
                </div>
            </nav>
        </header>