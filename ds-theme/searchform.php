<form role="search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="search"
            placeholder="Search...."
            value="<?php get_search_query(); ?>"
            name="s"/>

        <button type="submit">
        </button>
</form>