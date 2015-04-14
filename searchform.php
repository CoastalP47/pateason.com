<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<i class="fa fa-search"></i>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>