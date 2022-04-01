<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php the_title();?>	</title>
    <style>
       body{background-color:#000}.all{opacity:0;-webkit-opacity:0}.open-overlay{display:block;position:fixed;top:0;left:0;width:100%;height:100vh;z-index:99999;background-color:#121212}.open-overlay-box{display:table;height:100vh;width:100%;text-align:center}.open-overlay-logo{display:table-cell;vertical-align:middle;opacity:.2;-webkit-opacity:.2}.open-overlay-logo img{max-width:120px!important;width:90%}.btt-footer{display: none;}
       </style>
           <?php wp_head(); ?>
</head>

<body>
<div class="all" name="#top">
	<?php if ( is_active_sidebar( 'header' ) ) : ?>
		<?php dynamic_sidebar( 'header' ); ?>
	<?php endif; ?>