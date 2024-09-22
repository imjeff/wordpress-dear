<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<?php $site_title_elem 	= is_front_page() || ( is_home() && get_option( 'show_on_front' ) == 'posts' ) ? 'h1' : 'h2'; ?>
<a class="title" href="<?php echo esc_url(home_url('/')); ?>"><<?php echo $site_title_elem; ?>><?php bloginfo('name'); ?></<?php echo $site_title_elem; ?>></a>
<nav>
<p>
<?php 
if ( has_nav_menu( 'primary-menu' ) ) :
$menuParameters = array('container'	=> false,'echo'	=> false,'menu_class' => 'menu','items_wrap' => '%3$s','depth'	=> 0,);
echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); 
endif;?>
</p>
</nav>
</header>
<main>