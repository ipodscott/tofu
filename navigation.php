<div class="menu-layer"></div>

<svg class="menu-btn"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>

<div class="menu shadow">
 	<div class="menu-title">Main Menu</div>
 	
 	<div class="main-menu">
	 	<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
	</div>
            
    <svg class="close-menu" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" >
		<path style="fill:#fff;" d="M19,6.4L17.6,5L12,10.6L6.4,5L5,6.4l5.6,5.6L5,17.6L6.4,19l5.6-5.6l5.6,5.6l1.4-1.4L13.4,12L19,6.4z"/>
	</svg>
</div>