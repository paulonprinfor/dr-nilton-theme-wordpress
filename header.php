<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php wp_title('name'); ?> - <?php bloginfo('description'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>"media="all" type="text/css"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0"href="<?php bloginfo('rss2_url');?>"/>
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php global $mydata; ?>
<header class="main-header">
  <div class="centered-container">
    <div class="main__header-logo">
      <a href="<?= esc_url(home_url())?>">
        <img src="<?=$mydata->header_logo?>" alt="Dr.Nilton">
      </a>
    </div>
    <div class="main-header__inner">
     <div class="main-header__inner-social">
        <?php echo $mydata->get_social(true, 'social__list') ?>
        <div class="form">
          <?php get_search_form();?>
        <span class="fa fa-lg fa-search"></span>
      </div>
     </div>
    </div>
    <nav class="main-menu">
      <?php
        $args = array (
          'theme_location' =>'Menu Principal',
          'menu' => 'Menu Principal',
          'container_class' => 'menu-nav-container',
          'container_id' => '',
          'menu_class' => 'menu'
        );

        wp_nav_menu($args);
      ?>
    </nav>
  </div>
</header>
