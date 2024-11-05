<?php 
$phone_number1 = get_field('sales_inquiry_phone', 'option');
$phone_number = preg_replace('/^\+91\s*/', '', $phone_number1);

$contact_number1 = get_field('contact_number', 'option');
$contact_number = preg_replace('/^\+91\s*/', '', $contact_number1);

$footer_logo = get_field('footer_logo', 'option');
?>
<footer>

        <div class="container-fluid p-5 text-white">
            <div class="row px-xl-5">
                <div class="col-lg-3 col-md-6">
                    <div class="col-lg-10 ">
                       <a href="<?php echo site_url(); ?>"><img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['alt']; ?>"></a>
                        <p class="my-4"><?php echo esc_html( get_field('footer_address', 'option') ); ?>
                        </p>
                        <p><?php echo 'Contact Us:'; ?><br>
                            <a href="tel:<?php echo $contact_number; ?>"><?php echo $contact_number1; ?></a></p>
                        <div>
                            <p class="m-0"><?php echo 'Sales Inquiry?'; ?>
                            </p>
                            <p class="m-0">
                                <a href="mailto:<?php echo esc_html( get_field('sales_inquiry_email', 'option') ); ?>"><?php echo esc_html( get_field('sales_inquiry_email', 'option') ); ?></a> | <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number1; ?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="row justify-content-end">
                        <div class="col-md-6 col-xl-5">
                            <h5 class="my-4"><?php echo 'Commercial Support'; ?></h5>
                            <ul class="p-0" type="none">
								<?php 
									$CommercialSupportId = 3; 
										$CommercialSupports = wp_get_nav_menu_items($CommercialSupportId);

										if ($CommercialSupports) {
											foreach ($CommercialSupports as $item) {
												echo '<li class="my-2"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
											}
										} else { echo 'No menu items found.';}
									?>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="my-4"><?php echo 'Quick Links'; ?></h5>
                            <ul class="p-0" type="none">
                                <?php 
									$QuickLinkId = 4; 
										$QuickLinks = wp_get_nav_menu_items($QuickLinkId);

										if ($QuickLinks) {
											foreach ($QuickLinks as $item) {
												echo '<li class="my-2"><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
											}
										} else { echo 'No menu items found.';}
									?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-7 mt-4 mt-lg-0">
                   <?php echo do_shortcode('[fluentform id="2"]'); ?>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo esc_html( get_field('copy_right', 'option') ); ?></p>
                    </div>
                    <div class="col-md-6 d-md-flex justify-content-end align-items-center">
                        <p class="m-0 me-2"><?php echo esc_html( get_field('website_architect_by', 'option') ); ?></p>
						<?php if( have_rows('social_link', 'option') ): ?>
						<?php while( have_rows('social_link', 'option') ): the_row(); 
							$icon = get_sub_field('icon', 'option');
							?>
						<a target="_blank" href="<?php echo esc_html( get_sub_field('link', 'option') ); ?>"><img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"></a>						
						<?php endwhile; ?>
					<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</body>

</html>
<?php wp_footer(); ?>