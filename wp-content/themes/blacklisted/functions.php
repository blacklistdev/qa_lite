<?php 

function seopress_theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'seopress_theme_slug_setup' );

function theme_name_enqueue_styles() {
	
	wp_register_style( 'bootstrap-min','https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-min' );
    
    wp_register_style( 'googleapis','https://fonts.googleapis.com', array(), '1.0', 'all' );
    wp_enqueue_style( 'googleapis' );
    
    wp_register_style( 'gstatic','https://fonts.gstatic.com', array(), '1.0', 'all' );
    wp_enqueue_style( 'gstatic' );
    
    wp_register_style( 'fontfamily','"https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swa', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontfamily' );
    
    wp_register_style( 'font-awesome','"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'fontfamily' );
    
    wp_register_style( 'swiper-bundle','"https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'swiper-bundle' );
	
    wp_register_style( 'owl-carousel','"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl-carousel' );
	
    wp_register_style( 'owl-carousel1','"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl-carousel1' );

    wp_enqueue_script('jquery');
    wp_enqueue_script('tab-ajax', get_template_directory_uri() . '/assets/js/tab-ajax.js', array('jquery'), null, true);
    wp_localize_script('tab-ajax', 'tab_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
   
}
add_action( 'wp_enqueue_scripts', 'theme_name_enqueue_styles' );


function add_custom_css_directly() {
    $template_directory_uri = get_template_directory_uri();

    // Get the file modification time to use as a version
    $custom_style_version = filemtime(get_template_directory() . '/assets/css/style.css');

    echo '<link rel="stylesheet" type="text/css" href="' . $template_directory_uri . '/assets/css/style.css?v=' . $custom_style_version . '">';
}
add_action( 'wp_head', 'add_custom_css_directly' );

function enqueue_slick_carousel_script() {
    wp_localize_script( 'custom-ajax-script', 'ajax_params', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ));

    $version = rand(5, 15); // Change this version number when you update your scripts

    echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>';
    echo '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>';
	echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>';
    echo '<script type="text/javascript" src="' . get_template_directory_uri() . '/assets/js/custom-js.js?ver=' . $version . '"></script>';
	
	
}
add_action('wp_footer', 'enqueue_slick_carousel_script');

// Register Nav bar
function add_nav_menus() {
    register_nav_menus( array(
        'header-menu'=>'Header Menu',
        'footer-menu'=> 'Footer Menu',
    ));
}
add_action('init', 'add_nav_menus');

// Add class menu LI

 add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
  $classes[] = 'nav-item';
  return $classes;
}

add_filter('nav_menu_link_attributes', 'add_class_link', 10, 2);
function add_class_link($classes, $item) {

    // Add class
    $classes['class'] = 'nav-link';

    // Add class 'active' if the page is currently active
    if (in_array('current_page_item', $item->classes)) {
        $classes['class'] = 'nav-link active';
    }

    return $classes;
}

// Shortcode to display WooCommerce child categories of a specified parent category
function custom_dynamic_parent_product_category_grid($atts)
{
    // Set the default value for the parent attribute
    $atts = shortcode_atts(
        array(
            'parent' => '', // Default parent category name
        ),
        $atts,
        'dynamic_parent_product_category_grid'
    );

    // Get the parent category by name from the shortcode attribute
    $parent_category_name = $atts['parent'];
    $parent_category = get_term_by('name', $parent_category_name, 'product_cat');

    // If the parent category is not found, return a message
    if (!$parent_category) {
        return '<p>Parent category not found.</p>';
    }

    // Arguments for the child category query
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => false,
        'parent' => $parent_category->term_id // Use the parent category ID
    );

    // Query WooCommerce child categories
    $product_categories = get_terms($args);
    if (!empty($product_categories) && !is_wp_error($product_categories)) {
        if ($atts['parent'] === 'by application') {
            // Start the HTML output
            $output = '<section class="application-section common-section-spacing">';
            $output .= '<div class="container">';
            $output .= '<div class="row justify-content-center">';
            $output .= '<div class="col-xl-5 col-md-7">';
            $output .= '<div class="common-section-namespan position-relative text-center">';
            $output .= '<span class="d-inline-block position-relative">Essential Series</span>';
            $output .= '</div>';
            $output .= '<h2 class="common-section-heading text-center">Product By Applications</h2>';
            $output .= '<p class="common-section-subheading text-center">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class="row justify-content-center">';

            // Loop through each child category
            foreach ($product_categories as $category) {
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id);

                // If no image is set, use a placeholder
                if (!$image_url) {
                    $image_url = 'https://via.placeholder.com/300'; // Replace with your placeholder URL
                }

                // Category item HTML
                $output .= '<div class="col-lg-4 col-md-6 mb-4">';
                $output .= '<div class="single-application-card text-center">';
                $output .= '<div class="cardImg overflow-hidden mb-3">';
                $output .= '<a href="' . get_term_link($category) . '">';
                $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" class="cardImg">';
                $output .= '</a>';
                $output .= '</div>';
                $output .= '<a href="' . get_term_link($category) . '">';
                $output .= '<p class="application-name">' . esc_html($category->name) . '</p>';
                $output .= '</a>';
                $output .= '</div>';
                $output .= '</div>';
            }

            // End the HTML output
            $output .= '<div class="col-12">';
            $output .= '<div class="text-center">';
            $output .= '<button class="btn btn-primary arrow-btn position-relative">Explore By Applications</button>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</section>';
        }else if ($atts['parent'] === 'by category') {

            $output = '<section class="application-section category-section common-section-spacing pb-4">';
            $output .= '<div class="container">';
            $output .= '<div class="row justify-content-center">';
            $output .= '<div class="col-xl-5 col-md-7">';
            $output .= '<div class="common-section-namespan position-relative text-center">';
            $output .= '<span class="d-inline-block position-relative">Essential Series</span>';
            $output .= '</div>';
            $output .= '<h2 class="common-section-heading text-center">Product By Category</h2>';
            $output .= '<p class="common-section-subheading text-center">When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '<div class="row justify-content-center">';

            // Loop through each child category
            foreach ($product_categories as $category) {
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = wp_get_attachment_url($thumbnail_id);

                // If no image is set, use a placeholder
                if (!$image_url) {
                    $image_url = 'https://via.placeholder.com/300'; // Replace with your placeholder URL
                }

                // Category item HTML
                $output .= '<div class="col-xl-3 col-lg-4 col-md-6 mb-4">';
                $output .= '<div class="single-application-card text-center">';
                $output .= '<div class="cardImg overflow-hidden mb-3">';
                $output .= '<a href="' . get_term_link($category) . '">';
                $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($category->name) . '" class="cardImg">';
                $output .= '</a>';
                $output .= '</div>';
                $output .= '<a href="' . get_term_link($category) . '">';
                $output .= '<p class="application-name">' . esc_html($category->name) . '</p>';
                $output .= '</a>';
                $output .= '</div>';
                $output .= '</div>';
                
            }

            // End the HTML output
        
            $output .= '<div class="col-xl-3 col-lg-4 col-md-6 mb-4">';
            $output .= '<div class="allproduct-cta-card text-center">';
            $output .= '<img src="<?php echo get_template_directory_uri(); ?>/assets/img/all-product-logo.png"
alt="Products" class="mb-3">';
$output .= '<p class="disc">Discover your own special light. The glow inside and outside you. The glow that illumines.
</p>';
$output .= '<button class="btn btn-primary arrow-btn position-relative py-2">All Products</button>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';
$output .= '</section>';;
}
} else {
$output = '<p>No child categories found for ' . esc_html($parent_category_name) . '.</p>';
}

return $output;
}

// Register the shortcode
add_shortcode('product_category_grid', 'custom_dynamic_parent_product_category_grid');

// Shortcode to display dynamic category tabs
function dynamic_category_tabs($atts) {

$atts = shortcode_atts(
array(
'parentCat' => 'by application', // Default parent category name
),
$atts,
'dynamic_parent_product_category_grid'
);

// Get the parent category by name from the shortcode attribute
$parent_category_name = $atts['parentCat'];

$parent_category = get_term_by('name', $parent_category_name, 'product_cat');

// If the parent category is not found, return a message
if (!$parent_category) {
return '<p>Parent category not found.</p>';
}

// Arguments for the child category query
$args = array(
'taxonomy' => 'product_cat',
'orderby' => 'name',
'order' => 'ASC',
'hide_empty' => false,
'parent' => $parent_category->term_id // Use the parent category ID
);

// Query WooCommerce child categories
$product_categories = get_terms($args);


// HTML structure for tabs and panels
ob_start(); ?>
    <div class="container-fluid">
        <div class="col-12 text-light">
            <!-- Tab navigation -->
            <ul class="nav nav-pills mb-3 latest-projcts-navpill tabs" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation" data-category="all">
                    <button class="nav-link  active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-allprojects" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">All Projects</button>
                </li>
                <?php foreach ($product_categories as $category): ?>
                <li class="nav-item" role="presentation" data-category="<?php echo esc_attr($category->slug); ?>">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Office"
                        type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><?php echo esc_html($category->name); ?></button>
                </li>
                <?php endforeach; ?>
            </ul>

            <!-- Tab content panel -->
            <div class="tab-content">
                <div id="tab-panel" class="tab-panel active">
                    <?php echo do_shortcode('[products limit="10" columns="4"]'); ?>
                </div>
            </div>
        </div>
    </div>


<?php return ob_get_clean();
}
add_shortcode('dynamic_category_tabs', 'dynamic_category_tabs');

// AJAX handler to fetch products for a selected category
function load_category_products() {
    $category_slug = $_POST['category'];
    print_r($category_slug );
    
    if ($category_slug == 'all') {
        // Display all products if 'All Products' tab is clicked
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 10,
        );
    } else {
        // Display products from selected category
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 10,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $category_slug,
                ),
            ),
        );
    }

    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) : $query->the_post();
            wc_get_template_part('content', 'product'); // Loads WooCommerce product template
        endwhile;
        wp_reset_postdata();
    } else {
        echo '<p>No products found in this category.</p>';
    }

    wp_die();
}
add_action('wp_ajax_load_category_products', 'load_category_products');
add_action('wp_ajax_nopriv_load_category_products', 'load_category_products');