<?php

/*
    Template Name: Home Page
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <section class="services">
            <div><h1> <?php the_field("services_section_title"); ?> </h1></div>
            <div class="service-items">
                <?php
                    if( have_rows('service') ): ?>
                    <ul id="services-list" class="service-list">
                        <?php while ( have_rows('service') ) : the_row(); ?>
                        <li id="<?php the_sub_field('service_id'); ?>" onclick="toggle_service(this);" class=""> <p> <?php the_sub_field('service_name'); ?> </p> </li>
                        <?php
                        endwhile; ?>
                    </ul>
                    <?php while ( have_rows('service') ) : the_row(); ?>
                        <div id="<?php the_sub_field('service_id'); ?>_container" class="service-content content-off">
                            <div class="service-description"><p> <?php the_sub_field('service_description'); ?> </p></div>
                            <div class="service-image"><img src="<?php the_sub_field('service_image'); ?>" ></div>
                        </div>
                    <?php 
                    endwhile;
                    else : endif;
                ?>
            </div>  
        </section>

        <section class="portfolio">
            <div><h1> <?php the_field("portfolio_heading"); ?> </h1></div>
            <?php
                if( have_rows('portfolio_item') ): ?>
                    <div class="portfolio-wrapper">
                        <?php while ( have_rows('portfolio_item') ) : the_row(); ?>
                            <div class="portfolio-item" style="background-image: url('<?php the_sub_field('portfolio_image'); ?>')" >
                                <div class="image-color"></div>
                                <button class="see-more-btn">SEE FULL PROJECT</button>
                                <div class="info-card">
                                    <div class="info-card-content">
                                        <h3 class="info-card-heading"> <?php the_sub_field('portfolio_header'); ?> </h3>
                                        <p class="info-card-description"> <?php the_sub_field('portfolio_description'); ?> </p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else :
                endif;
            ?>
        </section>

        <section id="feedback" class="feedback">
            <div class="feedback-wrapper">
                <div><h1> <?php the_field("feedback_heading"); ?> </h1></div>
                <?php if( have_rows('feedbacks') ): ?>
                        <?php while ( have_rows('feedbacks') ) : the_row(); ?>
                            <div class="comment">
                                <div class="user-image"> <img src="<?php the_sub_field('user_image'); ?>"> </div>
                                <p class="comment-text"> <?php the_sub_field('user_comment'); ?> </p>
                            </div>
                            <hr class="separation-line"></hr>
                            <div>
                                <p class="username"> <?php the_sub_field('username'); ?> </p>
                            </div>
                        <?php endwhile;
                    else :
                    endif;

                ?>
            </div>

            <div class="contact-us-wrapper">
                <div><h1> <?php the_field("contact_form_heading"); ?> </h1></div>
                <div class="contact-form"><?php echo do_shortcode('[contact-form-7 id="282" title="Contact Form"]'); ?></div>
            </div>

        </section>

        <section class="contact">
        <?php if( have_rows('contact_field') ): ?>
            <ul class="contact-field">
                <?php while ( have_rows('contact_field') ) : the_row(); ?>
                <ul class="contact-field-info">
                <h2> <?php the_sub_field("contact_field_heading") ?> </h2>
                    
                        <?php if( have_rows('contact_field_repeater') ): ?>
                        <?php while ( have_rows('contact_field_repeater') ) : the_row(); ?>
                        <li><p><?php the_sub_field("contact_field_info") ?><p></li>
                        <?php endwhile; else : endif; ?>
                </ul>
                <?php endwhile; else : endif; ?>
            </ul>
        </section>
        
    </main>
</div>

<?php 
get_footer();
?>