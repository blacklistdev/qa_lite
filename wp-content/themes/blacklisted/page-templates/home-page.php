<?php
/* Template Name: Home */

get_header();

$specifications_group_id = 'group_672861bbd74c5'; // Replace with your group ID
$specifications_fields = [];

// Get all fields for the specified group
$fields = acf_get_fields($specifications_group_id);

// Loop through each field and retrieve its value
if ($fields) {
    foreach ($fields as $field) {
        $field_value = get_field($field['key']); // Using field key for reliability

        // Check if the field value is not empty and add it to the array
        if (!empty($field_value)) {
            $specifications_fields[$field['name']] = $field_value;
        }
    }
}

?>

<section class="common-banner home-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php
            $active = true;

            // Check if there are specification fields; otherwise, use fallback content
            if (!empty($specifications_fields)) {
                foreach ($specifications_fields as $name => $value) {
                    // Ensure $value is an array before attempting to iterate
                    if (is_array($value)) {
                        foreach ($value as $val) {
                            if (is_array($val)) {
                                $banner_image = isset($val['b-image']['url']) ? $val['b-image']['url'] : ''; // Replace with a default image URL or handle as needed
                                $banner_heading = isset($val['b-title']) ? $val['b-title'] : ''; // Replace with a default heading or handle as needed
                                $button_text = isset($val['b-button']) ? $val['b-button'] : ''; // Replace with a default button text or handle as needed
                                ?>
                                <?php if (!empty($banner_image)) { ?>
                                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                                        <div class="banner-slide1 d-flex align-items-center justify-content-end flex-column gap-4"
                                            style="background-image: url('<?php echo esc_url($banner_image); ?>');">
                                            <h1 class="banner-heading"><?php echo esc_html($banner_heading); ?></h1>
                                            <a href="<?php echo esc_url($button_link); ?>" class="btn btn-primary arrow-btn position-relative">
                                                <?php echo esc_html($button_text); ?>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $active = false;
                            }
                        }
                    }
                }
            } ?>
        </div>
    </div>
</section>

<section class="specification-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <?php
            if (!empty($specifications_fields)) {
                foreach ($specifications_fields as $name => $value) {
                    if (is_array($value)) {
                        foreach ($value as $val) {
                            if (is_array($val)) {

                                $banner_image = isset($val['s-image']['url']) ? $val['s-image']['url'] : 'default_image_url';
                                $banner_heading = isset($val['s-title']) ? $val['s-title'] : '';

                                ?>
                                <?php if (!empty($banner_image) && !empty($banner_heading)) { ?>
                                    <div class="col-sm-6 col-lg-3 single-spec-card d-flex align-items-center gap-3">
                                        <div>
                                            <img src="<?php echo esc_html($banner_image); ?>" alt="Quality">

                                        </div>
                                        <div>
                                            <p class="mb-0"><?php echo esc_html($banner_heading); ?></p>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</section>
<?php
echo do_shortcode('[product_category_grid parent="by application"]');
echo do_shortcode('[product_category_grid parent="by category"]'); ?>
<!-- why Quilite section -->


<section>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-md-7">
                <div class="common-section-namespan position-relative text-center">
                    <span
                        class="d-inline-block position-relative"><?php echo $qulite_subhead = get_field('qulite_subhead', 'option'); ?></span>
                </div>
                <h2 class="common-section-heading text-center">
                    <?php echo $qulite_title = get_field('qulite_title', 'option'); ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            if (!empty($specifications_fields)) {
                foreach ($specifications_fields as $name => $value) {
                    if (is_array($value)) {
                        foreach ($value as $val) {
                            if (is_array($val)) {

                                $qulite_image = isset($val['q-image']['url']) ? $val['q-image']['url'] : '';
                                $qulite_alt = isset($val['q-image']['alt']) ? $val['q-image']['alt'] : '';
                                $qulite_heading = isset($val['q-title']) ? $val['q-title'] : '';
                                $qulite_text = isset($val['q-text']) ? $val['q-text'] : '';

                                ?>
                                <?php if (!empty($qulite_image) && !empty($qulite_heading) && !empty($qulite_text)) { ?>
                                    <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                                        <span class="d-flex align-items-center">
                                            <img src="<?php echo $qulite_image; ?>" alt="<?php echo $qulite_alt; ?>" class="Why-QuLite-boximg">
                                            <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4"><?php echo $qulite_heading; ?></p>
                                        </span>
                                        <p class="m-1 Why-QuLite-desc"><?php echo $qulite_text; ?></p>
                                    </div>

                                    <?php
                                }
                            }
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</section>

<!-- major clients section starts  -->
<section class="why-qulite-section category-section common-section-spacing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-md-7">
                <div class="common-section-namespan position-relative text-center">
                    <span
                        class="d-inline-block position-relative"><?php echo $client_subhead = get_field('client_subhead', 'option'); ?></span>
                </div>
                <h2 class="common-section-heading text-center">
                    <?php echo $client_title = get_field('client_title', 'option'); ?>
                </h2>
                <p class="common-section-subheading text-center">
                    <?php echo $major_client_text = get_field('major_client_text', 'option'); ?>
                </p>
            </div>
            <div class="col-12 d-flex justify-content-evenly flex-wrap">
                <?php if (have_rows('client_repeater', 'option')): ?>
                    <?php while (have_rows('client_repeater', 'option')):
                        the_row();
                        $image = get_sub_field('client_image');
                        ?>
                        <div class="Major-Clients-img">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Latest Projects section  -->
<section class="my-5 latestt-projects-sectionn pt-5">
    <div class="container">
        <div class="Color-Change-namespan_latestprojects common-section-namespan  position-relative text-center">
            <span class="d-inline-block position-relative">Lighting The Way Forward</span>
            <h2 class="common-section-heading text-center text-light">Latest Projects</h2>
        </div>
    </div>
    <?php echo do_shortcode( '[dynamic_category_tabs]'); ?>
    <div class="col-12 text-center bg-white">
        <button class="btn btn-primary arrow-btn position-relative my-5" style="margin: auto;">
            All Projects
        </button>
    </div>
</section>

<!-- /*  About our company  */ -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quliteshop.png" alt=""
                    style="width: 100%;height: 400px;">
            </div>
            <div class="col-lg-5  position-relative">
                <div class="Abpout-ourCompanycls  p-5 ">
                    <div class="Color-Change-namespan_latestprojects whatsspecial-section-namespan  position-relative">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ciclelogoSubtract.png" alt=""
                            style="position: absolute; right: -30px;top: -30px;">
                        <span class="d-inline-block position-relative mb-3" style="margin-left: 50px;">WHAT'S
                            SPECIAL</span>
                        <h3 class="common-section-heading text-light">About Our Company</h2>
                    </div>
                    <p class="text-white">
                        Qulite since 2010, has been delivering the best in quality & premium customer service to
                        all. We
                        offer most latest in trend & multi generational light. We extend our gratitude to all our
                        associates for making us the No.1 choice and most trusted brand in Retail Qulite Trade.
                    </p>
                    <button class="btn btn-primary arrow-btn position-relative mt-5" style="margin: auto;">
                        About Us
                    </button>
                    <button class="btn btn-primary arrow-btn position-relative mt-5 ms-sm-3 customdesign"
                        style="margin: auto; white-space: nowrap;">
                        Download Brochure
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- blogs sections -->

<section class="" style="margin-top: 200px; margin-bottom: 50px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-md-7">
                <div class="common-section-namespan position-relative text-center">
                    <span class="d-inline-block position-relative">Resources</span>
                </div>
                <h2 class="common-section-heading text-center">Latest Blogs</h2>
                <p class="common-section-subheading text-center">When an unknown printer took a galley of type and
                    scrambled it to make a type specimen book.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-sm-10 m-auto mt-3">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-subtitle mb-2 text-muted">Aug 17, 2024</p>
                        <h5 class="card-title">What Exactly Are Shelf LED Lights & How Do They Differ from
                            Traditional Lighting Options?</h5>
                        <p class="card-text blogcardtext mt-3" style="font-family: Montserrat, sans-serif;">In the
                            world of modern lighting, Shelf LED lights have emerged as a prominent player,
                            revolutionizing how we illuminate and enhance our spaces. But what..</p>
                        <a href="#" class="card-link" style="color: var(--bg-main-darkYellow);">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-10 m-auto mt-3">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-subtitle mb-2 text-muted">Aug 17, 2024</p>
                        <h5 class="card-title">What Exactly Are Shelf LED Lights & How Do They Differ from
                            Traditional Lighting Options?</h5>
                        <p class="card-text blogcardtext mt-3" style="font-family: Montserrat, sans-serif;">In the
                            world of modern lighting, Shelf LED lights have emerged as a prominent player,
                            revolutionizing how we illuminate and enhance our spaces. But what..</p>
                        <a href="#" class="card-link" style="color: var(--bg-main-darkYellow);">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-sm-10 m-auto mt-3">
                <div class="card" style="width: 100%;">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-subtitle mb-2 text-muted">Aug 17, 2024</p>
                        <h5 class="card-title">What Exactly Are Shelf LED Lights & How Do They Differ from
                            Traditional Lighting Options?</h5>
                        <p class="card-text blogcardtext mt-3" style="font-family: Montserrat, sans-serif;">In the
                            world of modern lighting, Shelf LED lights have emerged as a prominent player,
                            revolutionizing how we illuminate and enhance our spaces. But what..</p>
                        <a href="#" class="card-link" style="color: var(--bg-main-darkYellow);">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center bg-white">
                <button class="btn btn-primary arrow-btn position-relative my-5" style="margin: auto;">
                    View All
                </button>
            </div>
        </div>
    </div>
</section>


<!-- Discover Our Complete Collection section -->

<section class="py-5 my-5" style="background-color: var(--bg-main-darkblue);">
    <div class="container">
        <div class="row justify-content-xl-between">
            <div class="col-lg-5 pe-4 rderclssonresponsive">
                <div class=" Color-Change-namespan_latestprojects whatsspecial-section-namespan  position-relative">
                    <span class="d-inline-block position-relative mb-3" style="margin-left: 50px;">WHAT'S
                        SPECIAL</span>
                    <h3 class="common-section-heading text-light">Discover Our Complete Collection</h2>
                        <p class="text-white">
                            Dive into the full range of our products and services with just a click! Download our
                            latest catalogue and explore innovative solutions, detailed specifications
                        </p>
                        <button class="btn btn-primary arrow-btn position-relative my-2" style="margin: auto;">
                            Download Brochure
                        </button>
                </div>
            </div>
            <div class="col-lg-6 position-relative  ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/booksimage.png" alt=""
                    class="bookimgdiscoversec">
            </div>
        </div>
    </div>
</section>


<!--  testimonial section -->

<section>
    <div class="container pt-5" style="margin-top: 70px;">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-7">
                <div class="common-section-namespan position-relative text-center">
                    <span class="d-inline-block position-relative">TESTIMONIALS</span>
                </div>
                <h2 class="common-section-heading text-center">What Our Clients Say</h2>
                <p class="common-section-subheading text-center">Don't take our word for it: let our customers show
                    you how Qulite products are shaping up their spaces.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">

                <div class="home-demo">
                    <div class="owl-carousel testimonialOwl-carousel customarrowcls owl-theme">
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Alok Mishra</div>
                                        <div class="role">Lead Architect at Mishra & Co.</div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Reenaimgg.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Reena Ahuja </div>
                                        <div class="role">Owner of Romeo Restaurant</div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Kartik Bhanot </div>
                                        <div class="role">Owner of Retail Store </div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Reenaimgg.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Reena Ahuja </div>
                                        <div class="role">Owner of Romeo Restaurant</div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Alok Mishra</div>
                                        <div class="role">Lead Architect at Mishra & Co.</div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Kartik Bhanot </div>
                                        <div class="role">Owner of Retail Store </div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Alok Mishra</div>
                                        <div class="role">Lead Architect at Mishra & Co.</div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-card">
                                <div class="profile-info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png"
                                        alt="Alok Mishra">
                                    <div>
                                        <div class="name">Kartik Bhanot </div>
                                        <div class="role">Owner of Retail Store </div>
                                        <div class="stars">★★★★★</div>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative p-3">
                                    <div class="quote">“</div>
                                    Working with <span>Qulite</span> has been a game-changer. Their attention to
                                    detail and
                                    commitment to excellence ensure that every space we design is perfectly
                                    illuminated, adding
                                    both beauty and value to our projects.
                                </div>
                                <div class="image-gallery row">
                                    <div class="col-6">
                                        <img src="https://via.placeholder.com/100" alt="Project Image 1"
                                            style="width: 100%; height: 132px;">
                                    </div>
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 2"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <img src="https://via.placeholder.com/100" alt="Project Image 3"
                                                    style="width: 100%;height: 60px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center bg-white">
                <button class="btn btn-primary arrow-btn position-relative my-5">
                    View All
                </button>
            </div>
        </div>
    </div>
</section>


<!-- contact us section  -->
<section style="background-color: #F2F5FB;">
    <div class="container py-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-7">
                <div class="common-section-namespan position-relative text-center">
                    <span class="d-inline-block position-relative">CONTACT US</span>
                </div>
                <h2 class="common-section-heading text-center">Interested? Let’s Talk.</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-9">
                <div class="row p-2 my-3">
                    <div class="col-12 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt=""
                            height="46px" width="46px">
                        <p class="ms-3 m-0" style="font-weight: 500;">Get Your Custom Quote Today!</p>
                    </div>
                    <div class="col-12 mt-3 ">
                        <p>Ready to take the next step? Whether you need personalized solutions or specific product
                            details, we're here to help.</p>
                    </div>
                    <div class="col-12 ">
                        <button class="btn btn-primary arrow-btn position-relative ">
                            Request A Quote
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-9 border-start-none cebnterbprder-quote">
                <div class="row p-2 my-3">
                    <div class="col-12 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt=""
                            height="46px" width="46px">
                        <p class="ms-3 m-0" style="font-weight: 500;">Join Our Network</p>
                    </div>
                    <div class="col-12 mt-3 ">
                        <p>Partner with us as an authorized dealer and unlock a world of opportunities and to
                            elevate your business.</p>
                    </div>
                    <div class="col-12 ">
                        <button class="btn btn-primary arrow-btn position-relative ">
                            Request A Quote
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-9">
                <div class="row p-2 my-3">
                    <div class="col-12 d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt=""
                            height="46px" width="46px">
                        <p class="ms-3 m-0" style="font-weight: 500;">Find Our Products Near You</p>
                    </div>
                    <div class="col-12 mt-3 ">
                        <p>Ready to take the next step? Whether you need personalized solutions or specific product
                            details, we're here to help.</p>
                    </div>
                    <div class="col-12 ">
                        <button class="btn btn-primary arrow-btn position-relative ">
                            Request A Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>