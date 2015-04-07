<?php get_header(); ?>



<section id="posts">
  <div class="row">
    <?php
      $i=0;
      if(have_posts()){
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
        }
      } ?>
  </div>
</section>
<?php get_footer(); ?>
