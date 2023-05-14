<?php if ( get_theme_mod('home_automation_blog_box_enable') ) : ?>

<?php $home_automation_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('home_automation_blog_slide_category'),
  'posts_per_page' => get_theme_mod('home_automation_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $home_automation_arr_posts = new WP_Query( $home_automation_args );
    if ( $home_automation_arr_posts->have_posts() ) :
      while ( $home_automation_arr_posts->have_posts() ) :
        $home_automation_arr_posts->the_post();
        ?>
        <div class="blog_inner_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_box pt-3 pt-md-0">
            <?php if ( get_theme_mod('home_automation_slider_extra_heading') ) : ?>
              <h5><?php echo esc_html(get_theme_mod('home_automation_slider_extra_heading'));?></h5>
            <?php endif; ?>
            <?php if ( get_theme_mod('home_automation_title_unable_disable',true) ) : ?>
              <h3 class="my-3"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <p class="mb-0"><?php echo wp_trim_words( get_the_content(), 20 ); ?></p>
            <?php if ( get_theme_mod('home_automation_button_unable_disable',true) ) : ?>
              <p class="slider-button mt-4">
                <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Know More','home-automation'); ?></a>
              </p>
            <?php endif; ?>
          </div>
          <div class="phone-box">
            <div class="row">
              <div class="col-lg-5 col-md-5">
                <?php if ( get_theme_mod('home_automation_header_phone_text') || get_theme_mod('home_automation_header_phone_number') ) : ?>
                  <div class="first-box">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
                        <i class="fas fa-phone"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
                        <h6><?php echo esc_html( get_theme_mod('home_automation_header_phone_text' ) ); ?></h6>
                        <p class="mb-0"><?php echo esc_html( get_theme_mod('home_automation_header_phone_number' ) ); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div>
              <div class="col-lg-7 col-md-7">
                <?php if ( get_theme_mod('home_automation_header_email_text') || get_theme_mod('home_automation_header_email_number') ) : ?>
                  <div class="first-box">
                    <div class="row">
                      <div class="col-lg-3 col-md-3 col-sm-3 align-self-center">
                        <i class="fas fa-envelope"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 align-self-center">
                        <h6><?php echo esc_html( get_theme_mod('home_automation_header_email_text' ) ); ?></h6>
                        <p class="mb-0"><?php echo esc_html( get_theme_mod('home_automation_header_email_number' ) ); ?></p>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>
              </div> 
            </div>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>