<? 
// Header
get_header();

// Slider
echo do_shortcode('[smartslider3 slider="3"]');

// Post About-WSR
$post = get_posts(array(
    'post_type' => 'post',
    'include'   => array(27),
));

do_action('get_post_about_wsr', $post);


// Post About-colege
$post = get_posts(array(
    'post_type' => 'post',
    'include'   => array(43),
));

do_action('get_post_about_colege', $post);

?>



<? 
// footer
get_footer(); 
?>