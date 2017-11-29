<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <div class="form-inline search-form">
        	<input type="search" class="search-field form-control"
            placeholder="<?php echo esc_attr_x( 'Search here…', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search here', 'label' ) ?>"required/>
	            
	        <button type="submit" class="search-submit btn btn-primary btn-md" value="<?php echo esc_attr_x( '', 'submit button' ) ?>"><span class=" glyphicon glyphicon-search"></span></button>
        </div>
</form>