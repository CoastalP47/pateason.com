<?php get_header(); ?>

<section id="single-post">
  <div class="row">
    <div class="column small-12 medium-10 medium-offset-1 large-10 large-offset-1 panel-white">
      <div class="gutter">
        <?php
        if(have_posts()){
        	while(have_posts()){
        		the_post();
        ?>

          <h1><?php the_title(); ?></h1>
          <div class="post-date">
            <i class="fa fa-calendar-o"></i>
            <small><?php the_time(get_option('date_format')); ?></small>
          </div>

          <div class="post-content">
            <?php if(has_excerpt()){ ?>
              <span class="post-excerpt intro">
                <?php the_excerpt(); ?>
              </span>
            <?php } ?>
            <?php the_content(); ?>
          </div>

        <?php
          }
        } ?>
        <div class="row pagination clearfix">
          <div class="nav-previous small-centered left button small"><?php previous_post_link( '%link', '<i class="fa fa-angle-left"></i> %title' ); ?></div>
          <div class="nav-next small-centered right button small"><?php next_post_link( '%link', '%title <i class="fa fa-angle-right"></i>' ); ?></div>
        </div>
        <div class="post-comments">
          <?php comments_template(); ?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
