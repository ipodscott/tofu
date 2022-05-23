<?php
	
	remove_theme_support("core-block-patterns");
	
	register_block_pattern_category("page_starter", [
		"label" => __("Page Starter"),
  	]);
  	
  	include_once "movies_starter_thumbs.php";

