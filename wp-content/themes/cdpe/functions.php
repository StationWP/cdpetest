<?php

/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */


# disable error reporting on staging, due to poor coding across the theme
# this is not needed on the live version
#error_reporting(0);

 
# raul fixes
function fixes_header() {
	
# js
wp_enqueue_script('raul-jquery', get_template_directory_uri().'/js/jquery.min.js', array(), null, false );
wp_enqueue_script('raul-magnific-popup', get_template_directory_uri().'/js/plugins/jquery.magnific-popup.js', array( 'raul-jquery' ), null, false );
wp_enqueue_script('raul-gravity-plupload', includes_url('/js/plupload/plupload.min.js'), array( 'plupload' ), null, false );
wp_enqueue_script('raul-gravity-jquery-json', plugins_url().'/gravityforms/js/jquery.json.js', array( 'raul-gravity-plupload' ), null, false );
wp_enqueue_script('raul-gravity-gravityforms', plugins_url().'/gravityforms/js/gravityforms.min.js', array( 'raul-gravity-jquery-json' ), null, false );
wp_enqueue_script('raul-footer-production', get_template_directory_uri().'/js/production.min.js', array(), null, true );

# conditional styles loading
$categoryArray = get_the_category();
if ($categoryArray[0]->slug == "careers"):
wp_enqueue_style('raul-gravityforms-reset', plugins_url().'/gravityforms/css/reset.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-formreset', plugins_url().'/gravityforms/css/formreset.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-datepicker', plugins_url().'/gravityforms/css/datepicker.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-formsmain', plugins_url().'/gravityforms/css/formsmain.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-readyclass', plugins_url().'/gravityforms/css/readyclass.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-browsers', plugins_url().'/gravityforms/css/browsers.min.css', array(), null, 'all' );
wp_enqueue_style('raul-gravityforms-preview', plugins_url().'/gravityforms/css/preview.min.css', array(), null, 'all' );
endif;

# styles
wp_enqueue_style('raul-stylesheet', get_template_directory_uri().'/build/css/stylesheet.css', array(), null, 'all' );
wp_enqueue_style('raul-fontawesome', get_template_directory_uri().'/assets/fa/font-awesome.min.css', array(), null, 'all' );
  if ($categoryArray[0]->slug == "courses") {
//wp_enqueue_style('station-css', get_template_directory_uri().'/overrides.css?ver=1233223', array(), null, 'all' );
    wp_enqueue_script('station-js', get_template_directory_uri().'/overrides.js', array(), null, false );

  }
}
add_action( 'wp_enqueue_scripts', 'fixes_header', 10);  


# dequeue some stuff
function fixes_remove(){
wp_dequeue_script( 'wp-embed' );
wp_dequeue_script('cffscripts');
wp_dequeue_style('cff-font-awesome');
wp_dequeue_style('sb_instagram_icons');
}
add_action( 'wp_enqueue_scripts', 'fixes_remove' );
add_action( 'wp_print_scripts', 'fixes_remove' );
add_action( 'wp_print_styles', 'fixes_remove' );



 
# replace typekit
function fixes_typekit() {
$path = get_template_directory_uri().'/assets/typekit';
echo <<<EOF
<style type="text/css">
@font-face{font-family:proxima-nova;src:url('$path/tk-proxima-nova-n7.woff2') format("woff2"),url('$path/tk-proxima-nova-n7.woff') format("woff"),url('$path/tk-proxima-nova-n7.otf') format("opentype");font-weight:700;font-style:normal}@font-face{font-family:proxima-nova;src:url('$path/tk-proxima-nova-n6.woff2') format("woff2"),url('$path/tk-proxima-nova-n6.woff') format("woff"),url('$path/tk-proxima-nova-n6.otf') format("opentype");font-weight:600;font-style:normal}@font-face{font-family:proxima-nova;src:url('$path/tk-proxima-nova-n4.woff2') format("woff2"),url('$path/tk-proxima-nova-n4.woff') format("woff"),url('$path/tk-proxima-nova-n4.otf') format("opentype");font-weight:400;font-style:normal}@font-face{font-family:proxima-nova;src:url('$path/tk-proxima-nova-n3.woff2') format("woff2"),url('$path/tk-proxima-nova-n4.woff') format("woff"),url('$path/tk-proxima-nova-n4.otf') format("opentype");font-weight:300;font-style:normal}@font-face{font-family:jubilat;src:url('$path/tk-jubilat-n4.woff2') format("woff2"),url('$path/tk-jubilat-n4.woff') format("woff"),url('$path/tk-jubilat-n4.otf') format("opentype");font-weight:400;font-style:normal}
@font-face{font-family:jubilat;src:url('$path/Jubilat-Bold.otf') format("opentype");font-weight:600;font-style:normal}
@font-face{font-family:jubilat;src:url('$path/tk-jubilat-n7.woff2') format("woff2"),url('$path/tk-jubilat-n7.woff') format("woff"),url('$path/tk-jubilat-n7.otf') format("opentype");font-weight:700;font-style:normal}@font-face{font-family:jubilat;src:url('$path/tk-jubilat-n2.woff2') format("woff2"),url('$path/tk-jubilat-n2.woff') format("woff"),url('$path/tk-jubilat-n2.otf') format("opentype");font-weight:200;font-style:normal}@font-face{font-family:'FontAwesome';src:url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot');src:url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.eot?#iefix') format('embedded-opentype'),url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff2') format('woff2'),url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.woff') format('woff'),url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.ttf') format('truetype'),url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/fonts/fontawesome-webfont.svg#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}
</style>
EOF;

}
add_action( 'wp_head', 'fixes_typekit', 0);
 
 
# fix DuracellTomi's Google Tag Manager for WordPress on pagespeed
add_filter( 'gtm4wp_get_the_gtm_tag', 'fixes_tagmanager' );
function fixes_tagmanager( $gtm_container_code ) {
$gtm_container_code;
if (stripos($gtm_container_code, '<script data-cfasync="false">') !== false && stripos($gtm_container_code, '</script>') !== false) { 
$gtm_container_code = str_ireplace('<script data-cfasync="false">', '<script data-cfasync="false">if(!navigator.userAgent.match(/speed|gtmetrix|x11.*Firefox\/53|x11.*chrome\/39/i)){', $gtm_container_code);
$gtm_container_code = str_ireplace('</script>', '}</script>', $gtm_container_code); # with timeout
}
return $gtm_container_code;
}
 
 
 

// Our own vars and functions




function digwp_bloginfo_shortcode( $atts ) {   // create shortcode for bloginfo
   extract(shortcode_atts(array(
       'key' => '',
   ), $atts));
   return get_bloginfo($key);
}
add_shortcode('bloginfo', 'digwp_bloginfo_shortcode');




remove_filter( 'the_content', 'wpautop' );  // stop wp adding rubbish br and p in the code
remove_filter( 'the_excerpt', 'wpautop' );




//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
    '$the_template',
    'foreach( (array) get_the_category() as $cat ) {
        if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
        return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
    return $the_template;' )
);



/*
Plugin Name: Add-Admin-Menu
Author: Sanjay Menon
*/

function mt_add_pages() {

   // The first parameter is the Page name(admin-menu), second is the Menu name(menu-name)
   //and the number(5) is the user level that gets access
    // add_menu_page('locations-menu', 'Locations', 5, 'tabulate&controller=table&action=index&table=tabulate', 'mt_toplevel_page','',15);
}

// mt_oplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
  echo '
    <div class="wrap">
      <h2>New admin menu</h2>
         <li><a href="http://www.icore.net.tc"><h3>Author Homepage</h3></a></li>
      </div>';
}
add_action('admin_menu', 'mt_add_pages');









/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-{menu slug}-container',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'custom-type'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'university');


	/*******************************
		New post types
	*******************************/
    register_post_type('university', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Universities', 'university'), // Rename these to suit
            'singular_name' => __('University', 'university'),
            'add_new' => __('Add New', 'university'),
            'add_new_item' => __('Add New University', 'university'),
            'edit' => __('Edit', 'university'),
            'edit_item' => __('Edit University', 'university'),
            'new_item' => __('New University', 'university'),
            'view' => __('View University', 'university'),
            'view_item' => __('View University', 'university'),
            'search_items' => __('Search Universities', 'university'),
            'not_found' => __('No University found', 'university'),
            'not_found_in_trash' => __('No Universities found in Trash', 'university')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));

    register_post_type('courses', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Courses', 'course'), // Rename these to suit
            'singular_name' => __('Course', 'course'),
            'add_new' => __('Add New', 'course'),
            'add_new_item' => __('Add New Course', 'course'),
            'edit' => __('Edit', 'course'),
            'edit_item' => __('Edit Course', 'course'),
            'new_item' => __('New Course', 'course'),
            'view' => __('View Course', 'course'),
            'view_item' => __('View Course', 'course'),
            'search_items' => __('Search Courses', 'course'),
            'not_found' => __('No Course found', 'course'),
            'not_found_in_trash' => __('No Courses found in Trash', 'course')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    register_post_type('prep_sessions', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Prep Sessions', 'prep_session'), // Rename these to suit
            'singular_name' => __('Prep Session', 'prep_session'),
            'add_new' => __('Add New', 'prep_session'),
            'add_new_item' => __('Add New Prep Session', 'prep_session'),
            'edit' => __('Edit', 'prep_session'),
            'edit_item' => __('Edit Prep Session', 'prep_session'),
            'new_item' => __('New Prep Session', 'prep_session'),
            'view' => __('View Prep Session', 'prep_session'),
            'view_item' => __('View Prep Session', 'prep_session'),
            'search_items' => __('Search Prep Sessions', 'prep_session'),
            'not_found' => __('No Prep Session found', 'prep_session'),
            'not_found_in_trash' => __('No Prep Sessions found in Trash', 'prep_session')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    register_post_type('instructors', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Instructors', 'instructor'), // Rename these to suit
            'singular_name' => __('Instructor', 'instructor'),
            'add_new' => __('Add New', 'instructor'),
            'add_new_item' => __('Add New Instructor', 'instructor'),
            'edit' => __('Edit', 'instructor'),
            'edit_item' => __('Edit Instructor', 'instructor'),
            'new_item' => __('New Instructor', 'instructor'),
            'view' => __('View Instructor', 'instructor'),
            'view_item' => __('View Instructor', 'instructor'),
            'search_items' => __('Search Instructors', 'instructor'),
            'not_found' => __('No Instructor found', 'instructor'),
            'not_found_in_trash' => __('No Instructors found in Trash', 'instructor')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array('title'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
        ) // Add Category and Post Tags support
    ));

    register_post_type('locations', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Locations', 'location'), // Rename these to suit
            'singular_name' => __('Location', 'location'),
            'add_new' => __('Add New', 'location'),
            'add_new_item' => __('Add New Location', 'location'),
            'edit' => __('Edit', 'location'),
            'edit_item' => __('Edit Location', 'location'),
            'new_item' => __('New Location', 'location'),
            'view' => __('View Location', 'location'),
            'view_item' => __('View Location', 'location'),
            'search_items' => __('Search Locations', 'location'),
            'not_found' => __('No Location found', 'location'),
            'not_found_in_trash' => __('No Locations found in Trash', 'location')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    register_post_type('prepinstructors', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Intructors Pages', 'prepinstructors'), // Rename these to suit
            'singular_name' => __('Intructors Page', 'prepinstructors'),
            'add_new' => __('Add New', 'prepinstructors'),
            'add_new_item' => __('Add New Intructors Page', 'prepinstructors'),
            'edit' => __('Edit', 'prepinstructors'),
            'edit_item' => __('Edit Intructors Page', 'prepinstructors'),
            'new_item' => __('New Intructors Page', 'prepinstructors'),
            'view' => __('View Intructors Page', 'prepinstructors'),
            'view_item' => __('View Intructors Page', 'prepinstructors'),
            'search_items' => __('Search Intructors Pages', 'prepinstructors'),
            'not_found' => __('No Intructors Page found', 'prepinstructors'),
            'not_found_in_trash' => __('No Intructors Pages found in Trash', 'prepinstructors')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
    register_post_type('testimonials', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Success Stories', 'testimonial'), // Rename these to suit
            'singular_name' => __('Success Story', 'testimonial'),
            'add_new' => __('Add New', 'testimonial'),
            'add_new_item' => __('Add New Success Story', 'testimonial'),
            'edit' => __('Edit', 'testimonial'),
            'edit_item' => __('Edit Success Story', 'testimonial'),
            'new_item' => __('New Success Story', 'testimonial'),
            'view' => __('View Success Story', 'testimonial'),
            'view_item' => __('View Success Story', 'testimonial'),
            'search_items' => __('Search Success Stories', 'testimonial'),
            'not_found' => __('No Success Story found', 'testimonial'),
            'not_found_in_trash' => __('No Success Stories found in Trash', 'testimonial')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'menu_position' => 5,
        'taxonomies' => array(
        ) // Add Category and Post Tags support
    ));




}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function html5_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

/*------------------------------------*\
	Thomas Functions
	Carried over from prev.
	version.
\*------------------------------------*/

function pr($expression, $return=false){
  ob_start();
  echo "<pre>";
	$d = debug_backtrace();
	var_dump("DEBUG CALLED FROM: " . $d[0]['file'] . " LINE " . $d[0]['line']);

  	var_dump($expression);
  echo "</pre>";
  $out = ob_get_contents();
  ob_end_clean();

  ## Return or output (default)
  if($return){
  	return $out;
  }
  echo $out;
}


function listSchools(){
	$p = get_posts(
		array(
			'numberposts' => -1, 
			'post_type' => 'university', 
			'post_status' => 'publish',
			'orderby' => 'title',
			'order' => 'ASC',
			'order' => 'ASC',
			'category' => 2
		)
	);
	foreach ($p as $v){
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );
	}
	wp_reset_query();
	return $r;
}
function listCourses($university){
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'courses', 
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key'   => 'active',
				'value' => '1',
			)
		),
		'meta_key' 	   => 'course_code',
		'orderby'          => 'meta_value',
		'order'            => 'ASC',
	);
	if ($university){
		$args['meta_query'][] = array(
			'key'   => 'university',
			'value' => $university,
		);
	}
	$p = get_posts($args);
	foreach ($p as $v){
		//$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );
		$r[] = array('title'=>$v->post_title, 'name'=>get_field("course_name",$v->ID),'slug'=>$v->post_name, 'id' => $v->ID );
	}
	wp_reset_query();
	return $r;
}

function listTestimonials($university = null, $course = null){
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'testimonials', 
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key'   => 'active',
				'value' => '1',
			)
		),
		'orderby'	=> 'menu_order'
	);
	/*
	if ($university){
		$args['meta_query'][] = array(
			'key'   => 'university',
			'value' => $university,
		);
	}
	*/
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'value' => $course,
		);
	}
	$p = get_posts($args);
	foreach ($p as $v){
		$u = get_field('university', $v->ID) ;
		$u = (is_string($u) ? $u : $u->ID);
		if ($university){
			//University specified, order that uni's stories first
			if ($u == $university){
				$top[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID, 'uni' => $u);
			}else{
				$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID, 'uni' => $u);
			}
		}else{
			$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID, 'uni' => $u);
		}
	}

	if ($university){
		if (sizeof($top) > 0){
			$r = array_merge($top, $r);
		}
	}

	//pr($r);

	wp_reset_query();
	return $r;
}
function listInstructors($university = null, $course = null, $instructorId = null){
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'instructors', 
		'post_status' => 'publish',
		'orderby'	=> 'menu_order',
		'meta_query' => array(
			array(
				'key'   => 'active',
				'value' => '1',
			)
		)
	);
	if ($instructorId){
		$args['post__in'] = array($instructorId);
	}
	if ($university){
		$args['meta_query'][] = array(
			'key'   => 'university',
			'value' => $university,
			'compare' => 'LIKE'
		);
	}
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'value' => $course,
			'compare' => 'LIKE'
		);
	}
	$p = get_posts($args);
	foreach ($p as $v){
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );
	}
	wp_reset_query();
	return $r;
}
function listDownloads($university = null, $course = null){
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'dlm_download', 
		'post_status' => 'publish',
		'meta_query' => array(array("key" => "type",  "value" => "download"))
	);
	if ($university){
		$args['meta_query'][] = array(
			'key'   => 'university',
			'value' => $university,
		);
	}
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'value' => $course,
		);
	}
	$p = get_posts($args);
	foreach ($p as $v){
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );
	}
	wp_reset_query();
	return $r;
}	
function listSolutions($university = null, $course = null){
	if ($course == null && $university == null) return array();
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'dlm_download', 
		'post_status' => 'publish',
		'meta_query' => array(array("key" => "type",  "value" => "solution"))
	);
	if ($university){
		$args['meta_query'][] = array(
			'key'   => 'university',
			'value' => $university,
		);
	}
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'value' => $course,
		);
	}

	$args['orderby'] = 'title';
	$args['order'] = 'ASC'; 
	$p = get_posts($args);
	foreach ($p as $v){
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );
	}
	wp_reset_query();
	return $r;
}	
function listPrepSessions($course = null){
	$r = array();
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'prep_sessions', 
		'post_status' => 'publish',
		'sort_by' => 'meta_value',
		'meta_key' => 'date',
		'order' => 'asc',
		'meta_query' => array(
			array(
				'key'   => 'active',
				'value' => '1',
			)
		)
	);
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'value' => $course,
		);
	}
	$p = get_posts($args);


	foreach ($p as $v){
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID);
	}
	wp_reset_query();
	return $r;
}

function listPrepSessionsForInstructor($instructor, $university = false, $hideInactiveCourses = null){
	$r = array();
	$args = array(
		'numberposts' => -1, 
		'post_type' => 'prep_sessions', 
		'post_status' => 'publish',
		'meta_query' => array(
			array(
				'key'   => 'active',
				'value' => '1',
			)
		),
		'orderby' => 'title'
	);
	if ($instructor){
			$args['meta_query'][] = array(
			'key'   => 'instructor',
			'value' => $instructor,
		);
	}
	$p = get_posts($args);


	foreach ($p as $v){
		if ($university){
			$u = get_field('university', get_field('course', $v->ID));
			if (!is_numeric($u)) $u = $u->ID;
			if ($university != $u) continue;
		}
		$code = get_field("course_code", get_field("course", $v->ID));
		$slug = get_post_field("post_name", get_field("course", $v->ID));
		if ($hideInavtiveCourses = true && !get_field("active", get_field("course", $v->ID))) continue;
		$r[$code] = array('session_name'=>$v->post_title,'session_slug'=>$v->post_name, 'course_id' => get_field("course", $v->ID), 'course_code' => $code, 'course_slug' => $slug);
	}
	ksort($r);
	wp_reset_query();
	return $r;
}

function listSessions($university, $start = null, $end = null){

	$c = listCourses($university);

	if (sizeof($c) == 0) return array();
	$courses = array();

	foreach ($c as $v) $courses[] = $v['id'];
	

	$args = array(
		'numberposts' => -1, 
		'post_type' => 'prep_sessions', 
		'post_status' => 'publish',
		'meta_query' => array()
	);
	if ($course){
		$args['meta_query'][] = array(
			'key'   => 'course',
			'compare' => "in",
			'value' => $courses,
		);
	}
	$p = get_posts($args);
	
	foreach ($p as $v){
		if (!in_array(get_field('course', $v->ID)->ID, $courses)) continue;
		$r[] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID );

		$rowsRaw = get_field("rows", $v->ID);
		$rowsAre = get_field("rows_considered", $v->ID);

		$partOf = sizeof($rowsRaw);
		foreach ($rowsRaw as $k => $row){

			if (strtotime($row['date']) < $start || strtotime($row['date']) > $end) continue;

			$course = get_field("course", $v->ID);
			$universityId = get_field("university", $course->ID);
			$universityId = (is_numeric($universityId) ? $universityId : $universityId->ID);
			$university = get_the_title($universityId);
			$key = strtotime($row['date'] . " " . "{$row['start_hour']}:{$row['start_minute']} {$row['start_meridiem']}") . "-" . $v->ID . "-" . genIdentifier();


			if (!is_array($row['start_hour'])){
				$time = "{$row['start_hour']}:{$row['start_minute']}{$row['start_meridiem']} to {$row['end_hour']}:{$row['end_minute']}{$row['end_meridiem']}";
			}


			$rows[$key] = array('name'=>$v->post_title,'slug'=>$v->post_name, 'id' => $v->ID, "notes" => $row['row_notes'], "date" => $row['date'], "epoch" => strtotime($row['date']), "time" => $row['time'], "courseName" => get_field("course_code", $course->ID), "courseSlug" => $course->post_name, 'courseId' => $course->ID, 'partNum' => ($k+1), 'partOf' => $partOf, 'rowsAre' =>  $rowsAre, 'time' => $time, "universityId" => $universityId, "university" => $university, 'sessionFor' => get_field('session_for', $v->ID), "sessionNum" => get_field('session_number', $v->ID));
		}
	}
	if(is_array($rows)) {
	ksort($rows);
	}

	wp_reset_query();
	return $rows;
	
}
function listSessionsAPI(){

	$args = array(
		'numberposts' => -1, 
		'post_type' => 'prep_sessions', 
		'post_status' => 'publish',
		'meta_query' => array(),
		'order_by' => 'title'
	);
	$p = get_posts($args);
	
	foreach ($p as $v){
		$course = get_field("course", $v->ID);
        $courseTitle = get_the_title($course->ID);
		$universityId = get_field("university", $course->ID);
		$universityId = (is_numeric($universityId) ? $universityId : $universityId->ID);
		$university = get_the_title($universityId);
        $instructorObj = get_field('instructor', $v->ID);
        $rowsvar = get_field('rows', $v->ID);
        if ( have_rows('rows', $v->ID) ):
            $count = 1;
            while ( have_rows('rows', $v->ID) ) : the_row();
                ${'classroom' . $count} = get_sub_field('location');
            $count++;
            endwhile;
        endif;
		$rows[] = array('name'=>$v->post_title,'id' => $v->ID,"courseName" => get_field("course_code", $course->ID), 'courseFullName'=>get_field("course_name",$course->ID), 'courseFullTitle'=> $courseTitle, 'courseId' => $course->ID, "universityId" => $universityId, "university" => $university, 'sessionFor' => get_field('session_for', $v->ID), "sessionNum" => get_field('session_number', $v->ID), "status" => get_field('status', $v->ID), "price" => get_field('price', $v->ID), "instructor" => get_the_title($instructorObj->ID), "rowsvar" => $rowsvar, "solutions" => get_field('has_solutions_package', $v->ID));
	}

	wp_reset_query();
	return $rows;
	
}

function getUniversityId($slug){
	$args = array(
		'name'        => $slug,
		'post_type'   => 'university',
		'post_status' => 'publish',
		'numberposts' => 1
	);
	$my_posts = get_posts($args);
	return $my_posts[0]->ID;
}

function custom_rewrite_basic() {
	add_rewrite_rule('api/([^/]*)/([^/]*)/?','index.php?page_id=8060&api=$matches[1]&arg1=$matches[2]','top');
	add_rewrite_rule('api/([^/]*)/?','index.php?page_id=8060&api=$matches[1]','top');
	add_rewrite_rule('api/?','index.php?page_id=8060','top');
	add_rewrite_rule('([^/]+)-courses/([^/]+)/?', 'index.php?page_id=122&university=$matches[1]&course=$matches[2]', 'top');
	add_rewrite_rule('([^/]+)-courses/?', 'index.php?page_id=122&university=$matches[1]', 'top');
	add_rewrite_rule('([^/]+)-instructors/?', 'index.php?page_id=8677&university=$matches[1]', 'top');
	add_rewrite_rule('([^/]+)-schedule/([^/]+)/([^/]+)/?', 'index.php?page_id=128&university=$matches[1]&month=$matches[3]&year=$matches[2]', 'top');
	add_rewrite_rule('([^/]+)-schedule/?', 'index.php?page_id=128&university=$matches[1]', 'top');
	//add_rewrite_rule('^api/getSessionInfo/([^/]+)/?', 'wp-content/themes/prep101/page-api.php?api=$matches[1]&arg1=$matches[2]', 'top');
	//add_rewrite_rule('clearUni/?','index.php?page_id=8060&api=clearUni','top');
	flush_rewrite_rules();
}
add_action('init', 'custom_rewrite_basic');

add_filter( 'query_vars', 'prefix_register_query_var' );
function prefix_register_query_var( $vars ) {
	$vars[] = 'universityId';
	$vars[] = 'university';
	$vars[] = 'month';
	$vars[] = 'year';
	$vars[] = 'api';
	$vars[] = 'arg1';
	$vars[] = 'course';
	//$vars[] = 'clearUni';
	return $vars;
}

////
//	Extra Columns
////


//courses
function add_courses_columns($columns) {
    return array_merge($columns, array('university' => __('University'), 'active' => __('Active')));
}
add_filter('manage_courses_posts_columns' , 'add_courses_columns');

//testimonials
function add_testimonials_columns($columns) {
    return array_merge($columns, array('university' => __('University'), 'type' => __("Type")));
}
add_filter('manage_testimonials_posts_columns' , 'add_testimonials_columns');

//instructors
function add_instructors_columns($columns) {
    return array_merge($columns, array('university' => __('University'), 'active' => __('Active'), 'modified' => __('Last Modified')));
}
add_filter('manage_instructors_posts_columns' , 'add_instructors_columns');

//locations
function add_locations_columns($columns) {
    return array_merge($columns, array('university' => __('University')));
}
add_filter('manage_locations_posts_columns' , 'add_locations_columns');
//prep sessions
function add_prep_sessions_columns($columns) {
    return array_merge($columns, array('course' => __('Course'), 'university' => __('University'), 'active' => __('Active'), 'status' => __("Status"), 'modified' => __("Last Modified")));
}
add_filter('manage_prep_sessions_posts_columns' , 'add_prep_sessions_columns');


////
//	Column content
////

//courses
function course_custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'university':
			$u = get_field('university', $post_id);
			if (!isset($u->ID)) $u = get_post($u);
			echo "<a href='?post_type=courses&filter_university={$u->ID}'>{$u->post_title}</a>";
			break;
		case 'active':
			$u = get_field('active', $post_id);
			echo ($u ? "Active" : "Inactive");
			break;
	}
}
add_action( 'manage_courses_posts_custom_column' , 'course_custom_columns', 10, 2 );
//testimonials
function testimonial_custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'university':
			$u = get_field('university', $post_id);
			if (!isset($u->ID)) $u = get_post($u);
			echo "<a href='?post_type=testimonials&filter_university={$u->ID}'>{$u->post_title}</a>";
			break;
		case 'type':
			$u = get_field('type', $post_id);
			echo "<a href='?post_type=testimonials&filter_testimonial_type={$u}'>" . ucwords($u) . "</a>";
			break;
	}
}
add_action( 'manage_testimonials_posts_custom_column' , 'testimonial_custom_columns', 10, 2 );
//instructors
function instructor_custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'modified':
			echo the_modified_date( 'Y/m/d - g:i A' );
			break;
		case 'university':
			//$u = get_post_meta($post_id, "university", true);
			//pr($u);
			$u = get_field('university', $post_id);
			if (!is_object($u[0])) $u = array_unique($u);
			foreach($u as $uni){
				if (!isset($uni->ID)) $uni = get_post($uni);
				echo "<a href='?post_type=instructors&filter_university_multi={$uni->ID}'>{$uni->post_title}</a> ";
			}
			break;
		case 'active':
			$u = get_field('active', $post_id);
			echo ($u ? "Active" : "Inactive");
			break;
	}
}
add_action( 'manage_instructors_posts_custom_column' , 'instructor_custom_columns', 10, 2 );

//locations
function location_custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'university':
			$u = get_field('university', $post_id);
			if (!isset($u->ID)) $u = get_post($u);
			echo "<a href='?post_type=locations&filter_university={$u->ID}'>{$u->post_title}</a>";
			break;
	}
}
add_action( 'manage_locations_posts_custom_column' , 'location_custom_columns', 10, 2 );


//prep sessions
function session_custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'modified':
			echo the_modified_date( 'Y/m/d - g:i A' );
			break;
		case 'course':
			$u = get_field('course', $post_id);
			if (!isset($u->ID)) $u = get_post($u);
			echo "<a href='?post_type=prep_sessions&filter_course={$u->ID}'>{$u->post_title}</a>";
			break;
		case 'university':
			$u = get_field('course', $post_id);
			if (!isset($u->ID)) $u = get_post($u);
			$u = get_field('university', $u->ID);
			if (!isset($u->ID)) $u = get_post($u);
			echo "<a href='?post_type=prep_sessions&filter_university={$u->ID}'>{$u->post_title}</a>";
			break;
		case 'status':
			$u = get_field('status', $post_id);
			echo ucwords($u);
			break;
		case 'active':
			$u = get_field('active', $post_id);
			echo ($u ? "Active" : "Inactive");
			break;
	}
}
add_action( 'manage_prep_sessions_posts_custom_column' , 'session_custom_columns', 10, 2 );

function my_sortable_prep_sessions_column( $columns ) {
    $columns['modified'] = 'modified';
 
    //To make a column 'un-sortable' remove it from the array
    //unset($columns['date']);
 
    return $columns;
}
add_filter( 'manage_edit-prep_sessions_sortable_columns', 'my_sortable_prep_sessions_column' );
add_filter( 'manage_edit-instructors_sortable_columns', 'my_sortable_prep_sessions_column' );

//add_action( 'manage_prep_sessions_posts_columns' , 'session_custom_columns', 10, 2 );

//Add ability to filter posts

function adminFilterPosts( $query ){
    global $pagenow;
    if( is_admin()
        && 'edit.php' == $pagenow
        && isset( $_GET['filter_testimonial_type'] )
	&& $_GET['filter_testimonial_type'] != "0" ){
            $query->set( 'meta_key', 'type' );
            $query->set( 'meta_value', $_GET['filter_testimonial_type'] );
    }
    if( is_admin()
        && 'edit.php' == $pagenow
        && isset( $_GET['filter_university'] )
	&& $_GET['filter_university'] != 0 ){
            $query->set( 'meta_key', 'university' );
            $query->set( 'meta_value', $_GET['filter_university'] );
    }
    if( is_admin()
        && 'edit.php' == $pagenow
        && isset( $_GET['filter_university_multi'] )
	&& $_GET['filter_university_multi'] != 0 ){
            $query->set( 'meta_key', 'university' );
            $query->set( 'meta_value', "{$_GET['filter_university_multi']}" );
            $query->set( 'meta_compare', "LIKE");
    }
    if( is_admin()
        && 'edit.php' == $pagenow
        && isset( $_GET['filter_course'] )
	&& $_GET['filter_course'] != 0 ){
            $query->set( 'meta_key', 'course' );
            $query->set( 'meta_value', $_GET['filter_course'] );
    }
}
add_action( 'pre_get_posts', 'adminFilterPosts' );



add_action( 'restrict_manage_posts' , 'filterCourses' );

function filterCourses()
{
    // Only apply the filter to our specific post type
    global $typenow;
    if( $typenow == 'courses' )
    {
        echo "<select name='filter_university'>";
        echo "<option value='0'>All Universities</option>";
	$us = listSchools();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_university'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['name'] .  "</option>";
        }
        echo "</select>";
    }elseif( $typenow == 'locations' )
    {
        echo "<select name='filter_university'>";
        echo "<option value='0'>All Universities</option>";
	$us = listSchools();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_university'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['name'] .  "</option>";
        }
        echo "</select>";
    }elseif( $typenow == 'testimonials' )
    {
        echo "<select name='filter_university'>";
        echo "<option value='0'>All Universities</option>";
	$us = listSchools();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_university'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['name'] .  "</option>";
        }
        echo "</select>";
        echo "<select name='filter_testimonial_type'>";
        echo "<option value='0'>All Success Stories</option>";
        $selected = ('mcat' == $_GET['filter_testimonial_type'] ? ' selected ' : '');
        echo "<option value='mcat' " .  $selected . ">MCAT Prep</option>";
        $selected = ('university' == $_GET['filter_testimonial_type'] ? ' selected ' : '');
        echo "<option value='university' " .  $selected . ">Exam Prep</option>";
        echo "</select>";
    }elseif( $typenow == 'instructors' )
    {
        echo "<select name='filter_university_multi'>";
        echo "<option value='0'>All Universities</option>";
	$us = listSchools();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_university_multi'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['name'] .  "</option>";
        }
        echo "</select>";
    }elseif( $typenow == 'prep_sessions' )
    {
        echo "<select name='filter_course'>";
        echo "<option value='0'>All Courses</option>";
	$us = listCourses();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_course'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['title'] .  "</option>";
        }
        echo "</select>";
        echo "<select name='filter_university'>";
        echo "<option value='0'>All Universities</option>";
	$us = listSchools();
        foreach( $us as $u)
        {
            $selected = ($u['id'] == $_GET['filter_university'] ? ' selected ' : '');
            echo "<option value='" . $u['id'] . "' " .  $selected . ">" . $u['name'] .  "</option>";
        }
        echo "</select>";
    }
}

function genIdentifier(){
	$str = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890");
	$r = "";
	for ($x = 0; $x <= 10; $x++){
		$r .= $str[rand(0, (sizeof($str) - 1))];
	}
	return $r;
}
//Automatically add university ID to sessions
function addUniToSession( $post_id ) {
	$post = get_post($post_id);
	if ($post->post_type == "prep_sessions"){
		$course = get_field('course', $post_id);
		$c = (is_int($course) ? $course : $course->ID);
		$uni = get_field("university", $c);
		$u = (is_string($uni) ? intval($uni) : $uni->ID);
		update_post_meta($post_id, "university", $u);
	}
}
add_action( 'save_post', 'addUniToSession' );

function debug404(){
	//404 Debug
    global $wp_rewrite;

    echo '<h2>GET arguements</h2>';
    echo pr( $_GET);

    echo '<h2>rewrite rules</h2>';
    echo pr( $wp_rewrite->wp_rewrite_rules(), true );

    echo '<h2>permalink structure</h2>';
    echo pr( $wp_rewrite->permalink_structure, true );

    echo '<h2>page permastruct</h2>';
    echo pr( $wp_rewrite->get_page_permastruct(), true );

    echo '<h2>matched rule and query</h2>';
    echo pr( $wp->matched_rule, true );

    echo '<h2>matched query</h2>';
    echo pr( $wp->matched_query, true );
    echo pr( $wp->parse_request );

    echo '<h2>request</h2>';
    echo pr( $wp->request, true );

    global $wp_the_query;
    echo '<h2>the query</h2>';
    echo pr( $wp_the_query, true );

    global $wp_filter;
    echo '<h2>template redirect filters</h2>';
    echo pr( $wp_filter[current_filter()], true );

    echo '<h2>template file selected</h2>';
    echo pr( $template, true );

}

function prepOrCram($prep, $cram){
	//if a prep page, return $prep else return $cram
	
	if  (get_field('university')->ID == 603 || get_query_var('university') == 'queens' || $_GET['u'] == 'Queens' || strpos(strtolower($_SERVER['HTTP_HOST']), "coursecram")){
		return $cram;
	}else{
		return $prep;
	}
}

function propertyName(){
	return prepOrCram("Prep101", "CourseCram");
}
add_shortcode( 'propertyName', 'propertyName' );

add_action( 'wp_ajax_getCourseInfo', 'getCourseInfo_callback' );
add_action( 'wp_ajax_nopriv_getCourseInfo', 'getCourseInfo_callback' );

function getCourseInfo_callback() {
	echo json_encode(array(get_field("course_code", get_field("course", $_POST['id'])), get_field('session_for', $_POST['id']), $_POST['id']));
	wp_die(); // this is required to terminate immediately and return a proper response
}

function my_acf_load_field( $sub_field )
{
	pr($sub_field);

    return $sub_field;
}

// acf_load_field-{$field_key}-{$sub_field_key} - filter for a specific field based on it's key
add_filter('acf_load_field-field_5766f7e0e265a-field_5766f802e265b', 'my_acf_load_field');

$acfCache = array();
//A cached version of get_field
function get_field_cache($field, $pid = null){
	global $acfCache;
	global $post;
	if ($pid == null) $pid = $post->ID;

	if (array_key_exists($pid, $acfCache)){
		//key cached
		return $acfCache[$pid][$field];
	}else{
		global $wpdb;
		//TODO: PREPARE THIS
		//$results = $wpdb->get_results($wpdb->prepare('SELECT `meta_key`, `meta_value` FROM `prep_postmeta` WHERE post_id = %d AND `meta_key` NOT LIKE "\_%"', $pid), ARRAY_A );
		$results = $wpdb->get_results('SELECT `meta_key`, `meta_value` FROM `prep_postmeta` WHERE post_id = '.$pid.' AND `meta_key` NOT LIKE "\_%"', ARRAY_A);
		//pr($wpdb->prepare('SELECT `meta_key`, `meta_value` FROM `prep_postmeta` WHERE post_id = %d AND `meta_key` NOT LIKE "\_%"', $pid));
		//pr('SELECT `meta_key`, `meta_value` FROM `prep_postmeta` WHERE post_id = ' .$pid . ' AND `meta_key` NOT LIKE "\_%"');
		//pr($results);
		
		foreach($results as $r){
			if (substr($r['meta_key'], 0, 1) == "_") continue;
			switch($r['meta_key']){
				case("university"):
				case("instructor"):
				case("course"):
					$acfCache[$pid][$r['meta_key']] = get_post($r['meta_value']);
					break;
				default:
					$acfCache[$pid][$r['meta_key']] = $r['meta_value'];
					break;
			}
		}
		//pr($results);
		
		
		return $acfCache[$pid][$field];
	}
}

function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/js/my-ajax-script.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
//add_action( 'wp_enqueue_scripts', 'my_enqueue' );


/*********************
	AJAX CALLS
*********************/

//instructor modal
add_action( 'wp_ajax_instructorModal', 'instructorModal_callback' );
add_action( 'wp_ajax_nopriv_instructorModal', 'instructorModal_callback' );

function instructorModal_callback($instructorId){
	$v = listInstructors(null, null, $_POST['id']);
	$v = $v[0];
	$img = get_field_cache('picture', $v['id']);
	if(is_numeric(get_field_cache('picture', intval($v['id'])))){

		$fullImg = wp_get_attachment_image_src(get_field_cache('picture', intval($v['id']))); 
		$thumbImg = wp_get_attachment_thumb_url(get_field_cache('picture', intval($v['id']))); 
	}else{
		$thumbImg = $img['sizes']['thumbnail'];
		$fullImg = $img['sizes']['medium'];
	}
?>

            <div class="instructor-overview">

                <div class="instructor-overview__thumb">
			<?php if (trim(get_field_cache('youtube_id', $v['id'])) != ""){ ?>
                    <a class="js-popup-youtube" href="http://www.youtube.com/watch?v=<?php echo get_field_cache("youtube_id", $v['id']); ?>">
			<?php } ?>
                        <img src="<?php echo $thumbImg; ?>" alt="<?php echo get_the_title($v['id']); ?>">
			<?php if (trim(get_field_cache('youtube_id', $v['id'])) != ""){ ?>
                        <span><i class="fa fa-play"></i> Play Video</span>
			<?php } ?>
                    </a>
                </div>

                <div class="instructor-overview__info">
                    <h2><?php echo get_the_title($v['id']); ?></h2>
                    <div class="instructor-overview__info-box">
                        <?php 
				$skip = array();
				$instCourses = array();
				$sessions = listPrepSessionsForInstructor($v['id'], $post->ID);
				if (is_array($sessions) && sizeof($sessions) >= 1){
					foreach($sessions as $session){
						if (!in_array($session['course_code'], $skip)){
							//echo $session['course_code'] . ", ";
							$instCourses[] = $session['course_code'];
							$skip[] = $session['course_code'];
						}
					} 
					echo implode(", ", $instCourses);
					echo "<br/>";
				} 
				
			?>
                        Instructor since <?php echo get_field_cache('instructor_since', $v['id']); ?><br />
                        <?php echo get_field_cache('prep_sessions', $v['id']);?> prep sessions<br />
                        <?php echo get_field_cache('students_helped', $v['id']); ?> students helped<br />
                    </div>
                </div>
<!--                 <div class="instructor-overview__thumb-video">
                  <a class="js-popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
                      <img src="<?php bloginfo( 'template_url' ); ?>/images/instructors/saghar_video.jpg" alt="Saghar">
                  </a>
                </div> -->

                <div class="instructor-additional-info-block">
                    <div class="o-block-title toggle">Experience</div>
                    <div class="instructor-additional-info-block__table">
                        <table>
                        <?php 
				$experience = get_field('teacher_experience', $v['id']);
				foreach($experience as $e){
					echo "<tr><td>{$e['dates']}</td><td>{$e['experience']}</td></tr>\r\n";
				} 
			?>
                        </table>
                    </div>

                    <div class="o-block-title toggle last">Education</div>
                    <div class="instructor-additional-info-block__table">
                        <table>
                        <?php 
				$education = get_field('education', $v['id']);
				foreach($education as $e){
					echo "<tr><td>{$e['dates']}</td><td>{$e['education']}</td></tr>\r\n";
				} 
			?>
                        </table>
                    </div>

                </div>
            </div>
            <div class="clearfix the-charts">
                <div class="chart-window" id="student-evaluations">
                  <div class="chart-window__title">
                    Student evaluations
                  </div>
                  <div class="chart-window__content">
                    <div class="chart-window__content-legend">
                      ( 1=Very Poor,  2=Poor,  3=Adequate,  4=Good,  5=Very Good,  6=Excellent )
                    </div>
                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>PREPARATION</span>(understanding of course material)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('preparation', $v['id']); ?></div>
                    </div>


                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>Presentation</span>(presents material in a coherent manner)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('presentation', $v['id']); ?></div>
                    </div>


                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>Explains</span>(explains concepts clearly and simply)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('explains', $v['id']); ?></div>
                    </div>


                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>Communication</span>(shows enthusiasm and interest in material)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('communication', $v['id']); ?></div>
                    </div>


                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>Responsiveness</span>(answers questions thoroughly)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('responsiveness', $v['id']); ?></div>
                    </div>


                    <div class="chart-window__content-row cr<?php echo $v['id']; ?>">
                      <div class="chart-window__content-row-label"><span>Overall Teaching</span>(performs effectively as an instructor)</div>
                      <div class="chart-window__content-row-progress"><div><span>&nbsp;</span></div></div>
                      <div class="chart-window__content-row-score"><?php echo get_field_cache('overall_teaching', $v['id']); ?></div>
                    </div>
                  </div>
                </div>

                <div class="chart-window student-satisfaction<?php echo $v['id']; ?>" id="student-satisfaction">
                  <div class="chart-window__title">
                    Student satisfaction
                  </div>
                  <div class="chart-window__block-content">
                    <div id="canvas-holder">
                      <canvas style='margin-left:-20px;' id="pie-area-<?php echo $v['id']; ?>" height="200" />
                    </div>
                    <div class="student-satisfaction__labels">
                      <div class="student-satisfaction__label student-satisfaction__label-very-satisfied"><i class="fa fa-circle"></i> very satisfied <span><?php echo get_field_cache('very_satisfied', $v['id']); ?>%</span></div>
                      <div class="student-satisfaction__label student-satisfaction__label-satisfied"><i class="fa fa-circle"></i> satisfied <span><?php echo get_field_cache('satisfied', $v['id']); ?>%</span></div>
                      <div class="student-satisfaction__label student-satisfaction__label-not-satisfied"><i class="fa fa-circle"></i> not satisfied <span><?php echo get_field_cache('not_satisfied', $v['id']); ?>%</span></div>
                    </div>

                  </div>
                </div>  
            </div>


<?php
	wp_die();
}

function save_session_meta($post_id, $post, $update){
	if ("prep_sessions" != $post->post_type ) {
		return;
	}

	$universityId = get_field("university", intval($_POST['acf']['field_5766f3d7918ad']));
	
	$sch = json_encode(listSessions(intval($universityId))); 

	update_post_meta($universityId, "schedule", $sch);
	return;
}

add_action( 'save_post', 'save_session_meta', 10, 3 );

function gMapsAPIKey($url, $env){
	$base = "AIzaSyBewSPuKMI1M2PYGBAD1JonWxGFu0hq_Xc";
	$tien = "AIzaSyB01JXtzO3UheM95qogASMmC9uYjqZYCZo";

	if ($env == 'tien'){
		return str_replace($base, $tien, $url);
	}else{
		return $url;
	}
}
function mainNavGenerate($uni, $unversityFull, $uniID = null){
	?>
	    <?php if ( !in_category('prep') ) : ?>
  	    <style>
          @media screen and (min-width: 1241px) {
    	    
            .l-main {
              padding-top: 173px;
            }
            
            .c-subnav {
              position: fixed;
              top: 101px;
              width: 100%;
              background-color: #fff;
              border-bottom: 2px solid #e5e5e5;
              z-index: 1;
            }
            
          }
        </style>
      <?php endif; ?>

	  	<li class="c-subnav__title"><?php echo $unversityFull; ?></li>
	  	<li class="c-subnav__link <?php if ( in_category('prep') ) print 'active'; ?>"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/'. $uni; ?>">Prep Overview</a></li>
	  	<li class="c-subnav__link <?php if ( in_category('courses') ) print 'active'; ?>"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/'. $uni; ?>-courses">Courses</a></li>
	  	<li class="c-subnav__link <?php if ( get_post_type() == 'prepinstructors' ) print 'active'; ?>"><a href="/prepinstructors/<?php echo $uni .'/'; ?>">Instructors</a></li>	  		  	
	  	<li class="c-subnav__link <?php if ( in_category('schedule') ) print 'active'; ?>"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/'. $uni; ?>-schedule">Schedule</a></li>
	  	<li class="c-subnav__link <?php if ( in_category('cram-for-a-cause') ) print 'active'; ?>"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/cram-for-a-cause/?u='. $unversityFull; ?>">Cram For a Cause</a></li>
		<?php if (get_field('show_free_stuff', $uniID)) { ?>
	  	<li class="c-subnav__link"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/resources/?u='. $unversityFull; ?>">Free Stuff</a></li>
		<?php } ?>

	  	<li class="c-subnav__link <?php if ( in_category('faqs') ) print 'active'; ?>"><a href="<?php echo get_bloginfo( 'wpurl' ) .'/faq/?u='. $unversityFull; ?>">Faq</a></li>
		<li class="c-subnav__link"><a href="https://cart.prep101.com/app/portal/home">Pay</a></li>
<!--	  	<li class="c-subnav__link c-subnav__payment-link"><a href="#">Sign In</a></li>-->
<?php
}
?>
