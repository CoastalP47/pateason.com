<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php echo get_option('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class();?>>
    <?php echo get_template_part('partials/nav', 'cover'); ?>
    <?php echo get_template_part('partials/header', 'sticky'); ?>
    <header>
      <div class="row">
        <div class="column small-12 medium-5 hero-img">
          <?php echo get_avatar(get_option('admin_email'), 160, '', 'Pat Eason\'s ugly mug'); ?>
        </div>
        <div class="column small-12 medium-7 hero-tag">
          <h1>Pat Eason</h1>
          <h4>Frontend Developer</h4>
        </div>
      </div>
    </header>
