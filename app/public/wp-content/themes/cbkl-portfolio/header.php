<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="site-header">

        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                CB & KL Portfolio
            </a>
        </div>

        <nav class="main-navigation">


            <nav class="main-navigation">

                <ul>
                    <li>
                        <a href="<?php echo esc_url(home_url('')); ?>">
                            Home
                        </a>
                    </li>


                    <li class="dropdown">

                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Our Profile <span class="dropdown-arrow">▾</span>
                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a href="<?php echo esc_url(home_url('/cesar-profile/')); ?>">

                                    <img src="<?php echo esc_url(includes_url('images/Professional Passport Portrait.png')); ?>"
                                        alt="Cesar Besinga">

                                    <span>Cesar Besinga</span>

                                </a>
                            </li>

                            <li>
                                <a href="<?php echo esc_url(home_url('/kim-profile/')); ?>">

                                    <img src="<?php echo esc_url(get_theme_file_uri('images/kimberly.jpg')); ?>"
                                        alt="Kimberly Lagat">

                                    <span>Kimberly Lagat</span>

                                </a>
                            </li>

                        </ul>

                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/about/')); ?>">
                            About Us
                        </a>
                    </li>
                </ul>

            </nav>



    </header>