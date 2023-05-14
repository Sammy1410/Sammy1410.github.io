<?php if ( get_theme_mod('home_automation_about_us_section_enable', true) == true ) : ?>

  <section id="about" class="pt-5">
    <div class="container">
      <div class="row">
        <?php $home_automation_about_pages = array();
          $mod = intval( get_theme_mod( 'home_automation_about_us' ));
          if ( 'page-none-selected' != $mod ) {
            $home_automation_about_pages[] = $mod;
          }
          if( !empty($home_automation_about_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $home_automation_about_pages,
              'orderby' => 'post__in'
            );
            $home_automation_query = new WP_Query( $args );
            if ( $home_automation_query->have_posts() ) :
              $i = 1;
        ?>
        <?php  while ( $home_automation_query->have_posts() ) : $home_automation_query->the_post(); ?>
          <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
            <?php if ( get_theme_mod('home_automation_about_us_section_title') ) : ?>
              <h4 class="mt-3 mt-md-0"><?php echo esc_html(get_theme_mod('home_automation_about_us_section_title')) ?></h4>
            <?php endif; ?>
            <h3 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_trim_words( get_the_content(), get_theme_mod('home_automation_about_excerpt_number',50) ); ?></p>
            <?php $list_no = get_theme_mod('home_automation_list_increament');
              for ($i=1; $i <= $list_no; $i++) { ?>
              <?php if ( get_theme_mod('home_automation_about_us_section_title') ) : ?>
                <div class="about-list">
                  <p><i class="<?php echo esc_attr(get_theme_mod('home_automation_about_us_icon'.$i)) ?> mr-3"></i><?php echo esc_html(get_theme_mod('home_automation_about_us_section_list'.$i)) ?></p>
                </div>
              <?php endif; ?>
            <?php } ?>
            <p class="slider-button mt-4">
              <a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Explore More','home-automation'); ?></a>
            </p>
          </div>
        <?php $i++; endwhile; ?>
        <?php wp_reset_postdata(); else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>

<?php endif; ?>
