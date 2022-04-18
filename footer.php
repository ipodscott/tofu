</div>

<?php if ( is_active_sidebar( 'main_navigation' ) ) : ?>
	
		<?php dynamic_sidebar( 'main_navigation' ); ?>
	
	<?php else: ?>
	
		<?php require_once ( 'navigation.php' ); ?>
	
<?php endif; ?>


  
<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<footer class="footer-down">
		<div><?php dynamic_sidebar( 'footer' ); ?></div>
	</footer>
<?php endif; ?> 


<div class="open-overlay">
	<div class="open-overlay-box">
        <div class="open-overlay-logo"><img class="cover-title-image" src="<?php bloginfo('template_directory'); ?>/images/spinner.svg"></div>
    </div>
</div>
  

<?php wp_footer(); ?>
           
     
</body>

</html>