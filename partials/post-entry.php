<article class="column small-12 medium-6 large-4 post-entry <?php echo $class; ?>">
  <div class="post-gutter">
    <h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <div class="post-date">
      <i class="fa fa-calendar-o"></i>
      <small><?php the_time(get_option('date_format')); ?></small>
    </div>
    <hr>
    <span class="post-excerpt"><?php the_excerpt(); ?></span>
    <hr>
    <div class="post-meta">

      <?php if(has_tag()){ ?>
        <div class="post-tags">
          <i class="fa fa-tags"></i>
          <?php $tags = get_the_tags();
          foreach($tags as $tag){
            echo '<a href="'.get_tag_link($tag->term_id).'" class="label">'.$tag->name.'</a>';
          } ?>
        </div>
      <?php } ?>


      <?php if(has_category()){ ?>
        <div class="post-category">
          <i class="fa fa-folder-open"></i>
          <?php $cats = wp_get_post_categories($post->ID, array('fields'=>'all'));
          foreach($cats as $cat){
            echo '<a href="'.get_category_link($cat->term_id).'" class="label">'.$cat->name.'</a>';
          } ?>
        </div>
      <?php } ?>


      <div class="post-comments">
        <i class="fa fa-comments"></i>
        <small><?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?></small>
      </div>
    </div>
  </div>
</article>
