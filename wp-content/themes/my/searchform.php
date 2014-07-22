<form role="search" class="search-form" method="GET" action="<?php echo home_url( '/' ); ?>"><!--
	--><input type="search" value="<?php the_search_query(); ?>" name="s" id="s" class="search-form__text" placeholder="Поиск" /><!--
	--><input type="submit" value="" class="search-form__submit" /><!--
--></form>