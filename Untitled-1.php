<?php

/**
 * Homepage Template
 * Template Name: Homepage
 */
get_header();
$args = array(
  'post_type' => 'slides',
  'orderby' => 'menu_order',
  'order' => 'ASC', 
);

//$title=get_page_by_title();
$posts_query = new WP_Query( $args );
wp_reset_query(); 
$dir=get_template_directory_uri();
$home_link= esc_url( home_url( '/' ) ); 
if( $posts_query->have_posts() ) :
echo '<div class="pages-on-page">';
while( $posts_query->have_posts() ) : $posts_query->the_post();
if (get_the_ID()===8) {	
	echo '<section class="page-on-page" id="' . $post->post_name . '"><div class="slider"><h2 class="vobis">we are vobis</h2><div id="carousel-example-generic" class="carousel slide vision" data-ride="carousel"><!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>    
  </ol><div class="carousel-inner" role="listbox">
    <div class="item active">     
      <div class="carousel-caption">'.$first_text.'</div></div><div class="item"><div class="carousel-caption">'.$second_text.'</div></div></div></div></div><div class="eagle-parallax"><div class="container '. $post->post_name .'-container">';
}
elseif (get_the_ID()===16) {
	echo '<section class="page-on-page" id="' . $post->post_name . '"><div class="contact-wrapper"><div class="container '. $post->post_name .'-container">';
}
else {
echo '<section class="page-on-page" id="' . $post->post_name . '"><div class="container '. $post->post_name .'-container">';
}
echo the_content();
if (get_the_ID()===16) {
	echo '</div></div><div id="map-canvas"></div></section>';
}
else {
echo '</div></section>';
}
endwhile;
echo '</div>';

endif;
wp_reset_postdata(); ?>
<?php 
get_footer();