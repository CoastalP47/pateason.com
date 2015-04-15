<form role="search" method="get" class="search-form pos-relative" action="<?php echo home_url( '/' ); ?>">
	<i class="fa fa-search pos-absolute"></i>
	<input type="search" class="search-field" placeholder="search" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
</form>
<div id="searchResults">

</div>