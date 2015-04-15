<?php get_header();
  $i=0;
  if(have_posts()){ ?>
    <div class="row archive-title">
      <h2><i class="fa fa-folder-open"></i> <?php single_cat_title( '', true ); ?></h2>
    </div>
    <section id="posts">
      <div class="row posts">
        <?php
        while(have_posts()){
          the_post();
          global $post;

          $class='';
          if($i==0){
            $class='post-one';
          }
          if($i==1){
            $class='post-two';
          }
          if($i==2){
            $class='post-three';
          }
          include( locate_template('partials/post-entry.php') );
          $i++;
        } ?>
      </div>
        <div class="row pagination clearfix">
          <div class="nav-previous small-centered left button small"><?php next_posts_link( '<i class="fa fa-angle-left"></i> Older posts' ); ?></div>
          <div class="nav-next small-centered right button small"><?php previous_posts_link( 'Newer posts <i class="fa fa-angle-right"></i>' ); ?></div>
        </div>
    </section>
  <?php } 
get_footer(); ?>
