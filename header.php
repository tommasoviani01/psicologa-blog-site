<!doctype html>
<html <?php language_attributes(); ?>><head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php bloginfo('name'); ?> - Home</title>
  <meta name="description" content="Sito demo di psicologa con blog di psicologia"/>
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml"/>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
<body <?php body_class(); ?>>
  <header>
  <div class="container nav">
    <a class="brand" href="<?php echo home_url(); ?>" aria-label="Home">
      <span class="mark" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 2c5 0 9 4 9 9s-4 9-9 9-9-4-9-9 4-9 9-9zm-1 5v10h2V7h-2z"/></svg>
      </span>
      <span class="title">
        <strong><?php bloginfo('name'); ?></strong>
        <span><?php bloginfo('description'); ?></span>
      </span>
    </a>
    <nav class="navlinks" aria-label="Menu">
      <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'fallback_cb'    => false,
            'items_wrap'     => '%3$s', // niente <ul>, usiamo direttamente i <a> (lo stile li prende lo stesso)
        ) );
      ?>
    </nav>
  </div>
  </header>
  