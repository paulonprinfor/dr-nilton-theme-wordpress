<section class="treatments-section">
  <div class="centered-container">
    <div class="treatments-section__title">
      <h1>Tratamentos</h1>
      <img src="<?= get_img_uri() ?>/icn-treatments-cross.png">
    </div>

    <div class="treatments__carousel">
        <?php
        
            $args = array('post_type' => 'tratamentos');

            $query = new WP_Query($args);

            while($query->have_posts()) : $query->the_post();
            
        ?>
          <div>
            <?php get_template_part('template-parts/treatment-card') ?>
          </div>
        <?php endwhile;  wp_reset_postdata(); ?>
    </div>
  </div>
</section>
