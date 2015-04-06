<?php get_header(); ?>

<section id="posts">
  <div class="row">
    <?php for($x=0;$x<=10;$x++){
      $class='';
      if($x == 0){
        $class="post-one";
      }
      if($x == 1){
        $class="post-two";
      }
      if($x == 2){
        $class="post-three";
      } ?>

      <div class="column small-12 medium-4 post-entry <?php echo $class; ?>">
        <div class="post-gutter">
          <h4 class="post-title"><a href="#">Post Title</a></h4>
          <hr>
          <span class="post-excerpt">Here is a post excerpt that will be used on the site whenever I start making posts and people will love it, why wouldn't they? It's a brilliant idea to get all this together [...]</span>
          <hr>
          <div class="post-meta">
            <div class="post-tags">
              <a class="label">WordPress</a>
              <a class="label">Javascript</a>
              <a class="label">Tags</a>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>
  </div>
</section>
<?php get_footer(); ?>
