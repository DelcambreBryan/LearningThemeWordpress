<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Le Contenu de ma Page -->
        <div class="page">
            
            <p><strong><?php bloginfo('title')?></strong> | <?php bloginfo('description')?></p>

            <!-- TOP HEADER -->
            <div class="topheader">
                <p>Espace Clients : 
                    <a href="<?php echo wp_login_url($redirect);?>">Connexion</a> | 
                    <a href="<?php echo wp_registration_url($redirect);?>">Inscription</a>
                </p>
            </div>

            <!-- HEADER -->
            <header>
                <div class="logo">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                if (has_custom_logo() ) {
                                    the_custom_logo();
                                } else {
                                    echo '<img src="'.get_template_directory_uri().'/assets/img/logo.jpg" alt="">';
                                }                              
                            }
                        ?>                           
                </div>
                <!-- nav>ul>li*3>a[href=#] -->
                <nav>
                    <ul>
                        <li><a><?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></a></li>
                    </ul>
                </nav>                
            </header>
        </div> <!-- /.page -->
        <!-- PROJECTEUR -->
        <div id="projecteur">
            <?php 
                if(has_post_thumbnail() AND get_post_type() == 'page') :
                    echo get_the_post_thumbnail();
                else :
                    if(has_header_image()) : ?>
                        <img src="<?php header_image(); ?>"
                            width="<?php echo get_custom_header()->width ?>"
                            alt="Bandeau du haut">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>
                        /assets/img/bandeau-saint-marc.jpg" alt="Campus Saint-Marc">
                    <?php endif;
                endif; ?>
        </div>