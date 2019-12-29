<?php

function pageBanner() {
    //php logic for page banners on custom pages
    ?>
    <div class="page-banner">
    	<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    	<div class="page-banner__content container container--narrow">
		<h1 class="page-banner__title"><?php the_title()?></h1>
		<div class="page-banner__intro">
			<p>sdsdsd me later</p>
		</div>
		</div>  
  	</div>
<?php 
}

function ygarden_files() {
    wp_enqueue_style('bulma', get_theme_file_uri('/css/bulma.min.css'));
    wp_enqueue_style('logo-font', '//fonts.googleapis.com/css?family=Muli&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('ygarden_main_styles', get_stylesheet_uri());
    wp_enqueue_script('ygarden-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'ygarden_files');

function ygarden_features() {
    add_theme_support('title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
}
add_action('after_setup_theme', 'ygarden_features');

