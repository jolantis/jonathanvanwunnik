<?php
return function($site, $pages, $page, $args) {

	// Set defaults
	$page_num     = false;
	$pagination   = (c::get('pagination.' . $page->intendedTemplate()) == false) ? false : true;

	// Fetch key-value filter pair
	// $filter_key   = (cookie::exists('filter_key')) ? cookie::get('filter_key', false) : false;
	// $filter_value = (cookie::exists('filter_value')) ? cookie::get('filter_value', false): false;
	$filter_key   = false;
	$filter_value = false;

	// Fetch basic set of pages
	$page_items   = $page->children()->visible();
	$page_items   = ($pagination) ? $page->children()->visible()->paginate(c::get('pagination.' . $page->intendedTemplate())) : $page->children()->visible();

	# Exclude future posts (filter by date)
	$page_items = $page_items->filterBy('date', '<', time());

	# Set pagination
	$pagination = $page_items->pagination();

	return compact('page_items', 'page_num', 'pagination', 'filter_key', 'filter_value');

};
?>
