<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php echo get_option('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <?php echo get_template_part('partials/nav', 'cover'); ?>


    <header>

    </header>
    <section id="hero">
      <div class="row">
          <?php echo get_avatar(get_option('admin_email'), 256, '', 'Pat Eason\'s ugly mug'); ?>
      </div>
    </section>
