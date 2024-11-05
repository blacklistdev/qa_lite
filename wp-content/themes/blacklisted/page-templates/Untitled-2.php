<?php 
/* Template Name: Home */ 

get_header(); 

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
                <div class="carousel-item active">
                    <div class="banner-slide1 d-flex align-items-center justify-content-end flex-column gap-4"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hompage-banner-img.png');">
                        <h1 class="banner-heading">For Every Place, For Every Space.</h1>
                        <button class="btn btn-primary arrow-btn position-relative">
                            Explore All Products
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-slide1 d-flex align-items-center justify-content-end flex-column gap-4"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hompage-banner-img.png');">
                        <h1 class="banner-heading">For Every Place, For Every Space.</h1>
                        <button class="btn btn-primary arrow-btn position-relative">
                            Explore All Products
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-slide1 d-flex align-items-center justify-content-end flex-column gap-4"
                        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hompage-banner-img.png');">
                        <h1 class="banner-heading">For Every Place, For Every Space.</h1>
                        <button class="btn btn-primary arrow-btn position-relative">
                            Explore All Products
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="specification-section">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-6 col-lg-3 single-spec-card d-flex align-items-center gap-3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/quality.png" alt="Quality">
                    </div>
                    <div>
                        <p class="mb-0">Quality & <br>Reliability</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3  single-spec-card d-flex align-items-center gap-3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/env-friendly.png" alt="Environment">
                    </div>
                    <div>
                        <p class="mb-0">Environment <br>Friendly</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3  single-spec-card d-flex align-items-center gap-3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/innovative.png" alt="Innovation">
                    </div>
                    <div>
                        <p class="mb-0">Innovation & <br>Technology</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3  single-spec-card d-flex align-items-center gap-3">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/money-value.png" alt="Money">
                    </div>
                    <div>
                        <p class="mb-0">Value for <br>Money</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application-section common-section-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7">
                    <div class="common-section-namespan position-relative text-center">
                        <span class="d-inline-block position-relative">Essential Series</span>
                    </div>
                    <h2 class="common-section-heading text-center">Product By Applications</h2>
                    <p class="common-section-subheading text-center">When an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img1.png" alt="Office" class="cardImg">
                        </div>
                        <p class="application-name">Office</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img2.png" alt="Residential" class="cardImg">
                        </div>
                        <p class="application-name">Residential</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img3.png" alt="Industry" class="cardImg">
                        </div>
                        <p class="application-name">Industry</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img4.png" alt="Retail" class="cardImg">
                        </div>
                        <p class="application-name">Retail</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img5.png" alt="Hospitality" class="cardImg">
                        </div>
                        <p class="application-name">Hospitality</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/application-img6.png" alt="Healthcare" class="cardImg">
                        </div>
                        <p class="application-name">Healthcare</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <button class="btn btn-primary arrow-btn position-relative">Explore By Applications</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="application-section category-section common-section-spacing pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7">
                    <div class="common-section-namespan position-relative text-center">
                        <span class="d-inline-block position-relative">Essential Series</span>
                    </div>
                    <h2 class="common-section-heading text-center">Product By Category</h2>
                    <p class="common-section-subheading text-center">When an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linear-systems.png" alt="Linear Systems" class="cardImg">
                        </div>
                        <p class="application-name">Linear Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cob-systems.png" alt="COB Systems" class="cardImg">
                        </div>
                        <p class="application-name">COB Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spot-light.png" alt="Spotlight Systems" class="cardImg">
                        </div>
                        <p class="application-name">Spotlight Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/downlight-sys.png" alt="Downlight Systems" class="cardImg">
                        </div>
                        <p class="application-name">Downlight Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/outdoor-sys.png" alt="Outdoor Systems" class="cardImg">
                        </div>
                        <p class="application-name">Outdoor Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/drivers.png" alt="Drivers" class="cardImg">
                        </div>
                        <p class="application-name">Drivers</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="single-application-card text-center">
                        <div class="cardImg overflow-hidden mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile-light.png" alt="Profile Light Systems" class="cardImg">
                        </div>
                        <p class="application-name">Profile Light Systems</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                    <div class="allproduct-cta-card text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/all-product-logo.png" alt="Products" class="mb-3">
                        <p class="disc">Discover your own special light. The glow inside and outside you.
                            The glow that illumines.</p>
                        <button class="btn btn-primary arrow-btn position-relative py-2">
                            All Products
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why Quilite section -->


    <section> 
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7">
                    <div class="common-section-namespan position-relative text-center">
                        <span class="d-inline-block position-relative">Lighting The Way Forward</span>
                    </div>
                    <h2 class="common-section-heading text-center">Why Qulite?</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                    <span class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualitybadgeabtus.png" alt="" class="Why-QuLite-boximg">
                        <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4">Quality & Reliability</p>
                    </span>
                    <p class="m-1 Why-QuLite-desc">We have three step quality check process and product is dispatched
                        only once it passes all the hurdles. With highly efficient officers we produce products only
                        conforming to the international standards.</p>
                </div>
                <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                    <span class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualitybadgeabtus.png" alt="" class="Why-QuLite-boximg">
                        <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4">Environment Friendly</p>
                    </span>
                    <p class="m-1 Why-QuLite-desc">We have three step quality check process and product is dispatched
                        only once it passes all the hurdles. With highly efficient officers we produce products only
                        conforming to the international standards.</p>
                </div>
                <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                    <span class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualitybadgeabtus.png" alt="" class="Why-QuLite-boximg">
                        <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4">Innovation & Technology</p>
                    </span>
                    <p class="m-1 Why-QuLite-desc">We have three step quality check process and product is dispatched
                        only once it passes all the hurdles. With highly efficient officers we produce products only
                        conforming to the international standards.</p>
                </div>
                <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                    <span class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualitybadgeabtus.png" alt="" class="Why-QuLite-boximg">
                        <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4">Value for Money</p>
                    </span>
                    <p class="m-1 Why-QuLite-desc">We have three step quality check process and product is dispatched
                        only once it passes all the hurdles. With highly efficient officers we produce products only
                        conforming to the international standards.</p>
                </div>
                <div class="col-lg col-md-5 m-xl-2 m-lg-1 m-2 Why-QuLite-box">
                    <span class="d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qualitybadgeabtus.png" alt="" class="Why-QuLite-boximg">
                        <p class="Why-QuLite-boxhead m-0 ms-2 ms-xl-4">After Sales Service</p>
                    </span>
                    <p class="m-1 Why-QuLite-desc">We have three step quality check process and product is dispatched
                        only once it passes all the hurdles. With highly efficient officers we produce products only
                        conforming to the international standards.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- <section class="why-qulite-section category-section common-section-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7">
                    <div class="common-section-namespan position-relative text-center">
                        <span class="d-inline-block position-relative">Lighting The Way Forward</span>
                    </div>
                    <h2 class="common-section-heading text-center">Why Qulite?</h2>
                </div>
            </div>
            <div class="row row-cols-lg-5">
                <div class="col">
                    <div class="why-qulite-card h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/quality-reliability.png" alt="quality reliability">
                            </div>
                            <div>
                                <p class="why-qulite-card-heading mb-0">
                                    Quality & Reliability
                                </p>
                            </div>
                        </div>
                        <p class="desc mb-0">We have three step quality check process and product is dispatched only
                            once it passes
                            all the hurdles. With highly efficient officers we produce products only conforming to
                            the international standards.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-qulite-card h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/environment-friendly.png" alt="Environment Friendly">
                            </div>
                            <div>
                                <p class="why-qulite-card-heading mb-0">
                                    Environment Friendly
                                </p>
                            </div>
                        </div>
                        <p class="desc mb-0">Each product boasts an extended lifespan, significantly reducing energy
                            waste and contributing to a more environment friendly surrounding.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-qulite-card h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/innovation-technology.png" alt="Innovation & Technology">
                            </div>
                            <div>
                                <p class="why-qulite-card-heading mb-0">
                                    Innovation & Technology
                                </p>
                            </div>
                        </div>
                        <p class="desc mb-0">Our relentless drive for innovation ensures you get the latest in lighting
                            technology. Enjoy superior performance, efficiency, and durability with our cutting-edge
                            solutions.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-qulite-card h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/valuemoney.png" alt="Value for Money">
                            </div>
                            <div>
                                <p class="why-qulite-card-heading mb-0">
                                    Value for Money
                                </p>
                            </div>
                        </div>
                        <p class="desc mb-0">We emphasize on couture quality and supreme style, oﬀering you a fabulous
                            selection at aﬀordable prices which speaks of brilliance and radiance.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-qulite-card h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/saleservice.png" alt="After Sales Service">
                            </div>
                            <div>
                                <p class="why-qulite-card-heading mb-0">
                                    After Sales Service
                                </p>
                            </div>
                        </div>
                        <p class="desc mb-0">Our commitment to you doesn’t end with your purchase. We provide
                            exceptional after-sales service to ensure your complete satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- major clients section starts  -->
    <section class="why-qulite-section category-section common-section-spacing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-md-7">
                    <div class="common-section-namespan position-relative text-center">
                        <span class="d-inline-block position-relative">Lighting The Way Forward</span>
                    </div>
                    <h2 class="common-section-heading text-center">Major Clients</h2>
                    <p class="common-section-subheading text-center">When an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.</p>
                </div>
                <div class="col-12 d-flex justify-content-evenly flex-wrap">
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Nikbakers.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/radisson.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gopals.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sindhisweets.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jubilee.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/anupam.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/athelonics.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vaneet.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sushma.png" alt="">
                    </div>
                    <div class="Major-Clients-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/novotel.png" alt="">
                    </div>
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
        <div class="container-fluid">
            <div class="col-12 text-light">
                <ul class="nav nav-pills mb-3 latest-projcts-navpill" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-allprojects" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">All Projects</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Office" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Office</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Residential" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Residential</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Industry" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Industry</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Retail" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Retail</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Hospitality" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Hospitality</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-Healthcare" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Healthcare</button>
                    </li>

                </ul>
                <div class="tab-content mt-5" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-allprojects" role="tabpanel"
                        aria-labelledby="pills-home-tab" tabindex="0">

                        <div class="row ">
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jason-briscoe-332507.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lounge.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jason-briscoe-332507.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lounge.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/jason-briscoe-332507.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/office.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                            <div class="col-md px-0 position-relative projectsimg-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lounge.png" alt="">
                                <p class="LatestProjects-textoverlay1">Gohrisons Jewellery Store</p>
                                <p class="LatestProjects-textoverlay2">Chandigarh</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-Office" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">Office</div>

                    <div class="tab-pane fade" id="pills-Residential" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">Residential</div>

                    <div class="tab-pane fade" id="pills-Industry" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">Industry</div>

                    <div class="tab-pane fade" id="pills-Retail" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">Retail</div>

                    <div class="tab-pane fade" id="pills-Hospitality" role="tabpanel"
                        aria-labelledby="pills-contact-tab" tabindex="0">Hospitality</div>

                    <div class="tab-pane fade" id="pills-Healthcare" role="tabpanel" aria-labelledby="pills-contact-tab"
                        tabindex="0">Healthcare</div>
                </div>
            </div>

        </div>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quliteshop.png" alt="" style="width: 100%;height: 400px;">
                </div>
                <div class="col-lg-5  position-relative">
                    <div class="Abpout-ourCompanycls  p-5 ">
                        <div
                            class="Color-Change-namespan_latestprojects whatsspecial-section-namespan  position-relative">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png" class="card-img-top" alt="...">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png" class="card-img-top" alt="...">
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
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blogsimage.png" class="card-img-top" alt="...">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/booksimage.png" alt="" class="bookimgdiscoversec">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Reenaimgg.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Reenaimgg.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alokmishra.png" alt="Alok Mishra">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt="" height="46px" width="46px">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt="" height="46px" width="46px">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/customquotee.png" alt="" height="46px" width="46px">
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