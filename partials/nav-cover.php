<a class="pos-fixed menu-icon">
  <i class="menu-bar top pos-absolute"></i>
  <i class="menu-bar middle pos-absolute"></i>
  <i class="menu-bar bottom pos-absolute"></i>
</a>
<div class="pos-fixed nav-cover">
  <div class="menu-wrap pos-fixed">
    <?php 
      if(has_nav_menu('main_nav')){
        $defaults = array(
          'theme_location'  => 'main_nav',
          'menu'            => 'main_nav',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-nav',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => ''
        ); wp_nav_menu( $defaults );
      }
      get_search_form();
    ?>
  </div>
</div>
