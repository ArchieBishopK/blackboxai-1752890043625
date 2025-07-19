<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
<style>
/* Basic styles for header parts */
.top-bar {
    background-color: #F2F2F2;
    font-size: 0.875rem;
    padding: 0.25rem 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-family: 'Inter', sans-serif;
}

.top-bar .contact-info a {
    margin-right: 1rem;
    color: #660273;
    text-decoration: none;
}

.top-bar .social-icons a {
    margin-left: 1rem;
    color: #7C038C;
    text-decoration: none;
}

.main-header {
    background-color: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 9999;
    font-family: 'Inter', sans-serif;
}

.main-header .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0.5rem 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.main-header .site-logo img {
    max-height: 50px;
}

.main-header nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.main-header nav ul li {
    margin-left: 2rem;
}

.main-header nav ul li a {
    color: #660273;
    font-weight: 600;
    text-decoration: none;
    font-size: 1rem;
}

.main-header nav ul li a:hover {
    color: #7C038C;
}
</style>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="top-bar" role="region" aria-label="Contact and social media information">
        <div class="contact-info">
            <a href="https://goo.gl/maps/xyz" target="_blank" rel="noopener">123 Feminist St, Harare, Zimbabwe</a>
            <a href="tel:+263123456789">+263 12 345 6789</a>
            <a href="mailto:info@iywd.org">info@iywd.org</a>
        </div>
        <div class="social-icons">
            <a href="https://facebook.com/iywd" target="_blank" rel="noopener" aria-label="Facebook">Facebook</a>
            <a href="https://twitter.com/iywd" target="_blank" rel="noopener" aria-label="Twitter">Twitter</a>
        </div>
    </div>
    <div class="main-header" role="banner">
        <div class="container">
            <div class="site-logo">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                } else {
                    ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">IYWD</a>
                    <?php
                }
                ?>
            </div>
            <nav role="navigation" aria-label="Primary Menu">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => '',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>
        </div>
    </div>
</header>
