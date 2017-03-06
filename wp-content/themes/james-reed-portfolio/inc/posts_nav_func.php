<?php
function posts_nav()
{
	global $wp_query;

	if (is_singular() || $wp_query->max_num_pages <= 1) {
		return;
	}

	$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
	$max = intval($wp_query->max_num_pages);

	/**    Add current page to the array */
	if ($paged >= 1)
		$links[] = $paged;

	/**    Add the pages around the current page to the array */
	if ($paged >= 3) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if (($paged + 2) <= $max) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<nav class="text-center"><ul class="pagination">';

	/**    Previous Post Link */
	if (get_previous_posts_link()) {
		printf('<li><a href="%s"><span aria-hidden="true"><i class="fa fa-angle-double-left"></i> prev</span></a></li>', get_previous_posts_page_link());
	} else {
		printf('<li class="disabled"><span aria-hidden="true"><i class="fa fa-angle-double-left"></i> prev</span></li>');
	}

	/**    Link to first page, plus ellipses if necessary */
	if (!in_array(1, $links)) {

		printf('<li><a href="%s">1</a></li>', esc_url(get_pagenum_link(1)));

		if (!in_array(2, $links))
			echo '<li class"disabled"><span aria-hidden="true">…</span></li>';
	}

	/**    Link to current page, plus 2 pages in either direction if necessary */
	sort($links);
	foreach ((array)$links as $link) {
		if ($paged == $link) {
			printf('<li class="active"><span>%s</span></li>', $link);
		} else {
			printf('<li><a href="%s">%s</a></li>', esc_url(get_pagenum_link($link)), $link);
		}
	}

	/**    Link to last page, plus ellipses if necessary */
	if (!in_array($max, $links)) {
		if (!in_array($max - 1, $links)) {
			echo '<li class="disabled"><span aria-hidden="true">…</span></li>';
		}
		printf('<li><a href="%s">%s</a></li>', esc_url(get_pagenum_link($max)), $max);
	}

	/**    Next Post Link */
	if (get_next_posts_link()) {
		printf('<li><a href="%s"><span aria-hidden="true"><span aria-hidden="true">next <i class="fa fa-angle-double-right"></i></span></li>', get_next_posts_page_link());
	} else {

		printf('<li class="disabled"><span aria-hidden="true">next <i class="fa fa-angle-double-right"></i></span></li>');
	}

	echo '</ul></nav>';

}

?>