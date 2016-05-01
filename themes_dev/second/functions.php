<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 700, 350);
add_image_size('thumb', 700, 350, true);

function categories_label() {
    $cats = get_the_category();
    foreach($cats as $cat){
        echo '<a href="'.get_category_link($cat->term_id).'" ';
        echo 'class="label label-'.esc_attr($cat->slug).'">';
        echo esc_html($cat->name);
        echo '</a>';
    }
}

function googlead_shortcode() {
 if ( function_exists('wp_is_mobile') && wp_is_mobile() ){
 $adsensecode = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- sp-single-bottom -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-5653909761408361"
     data-ad-slot="1232208134"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
 return $adsensecode;
 }else{
 $adsensecode = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- single-bottom-pc -->
<ins class="adsbygoogle"
     style="display:inline-block;width:585px;height:100px"
     data-ad-client="ca-pub-5653909761408361"
     data-ad-slot="3262501336"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';
 return $adsensecode;
 };
 }
 add_shortcode('googlead', 'googlead_shortcode');

//サイドバーを1つ設置する
register_sidebar(array(
			'name'=>'サイドバー',
			'before_widget'=>'<div class="sidebar-wrapper">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="sidebar-title">',
			'after_title' => '</h4>'
));

register_sidebar(array(
			'name'=>'sp-popular',
			'id'=>'sp-popular',
			'before_widget'=>'<div class="sp-popular">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="sidebar-title">',
			'after_title' => '</h4>'
));

?>
