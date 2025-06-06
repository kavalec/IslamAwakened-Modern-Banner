<?php
/**
 * Custom Header Template for IslamAwakened
 * Place this in your child theme directory
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <!-- Google Fonts for Banner -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family:Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'textdomain' ); ?></a>

    <header id="masthead" class="site-header">
        
        <!-- Modern IslamAwakened Banner -->
        <div class="islamawakened-banner">
            <div class="banner-content">
                <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                <?php else : ?>
                    <p class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </p>
                <?php endif; ?>
                
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                ?>
                    <p class="tagline"><?php echo $description; ?></p>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- Navigation Menu (if your theme has one) -->
        <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php esc_html_e( 'Primary Menu', 'textdomain' ); ?>
            </button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
        
    </header><!-- #masthead -->
