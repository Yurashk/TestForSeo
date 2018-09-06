<?php
	function register_styles()
	{
		wp_register_style('myStyle',get_template_derectory_uri().'style.css');
		
		
		wp_enqueue_style('myStyle');
		
	}
	add_action('wp_enqueue_scripts','register_styles');

?>