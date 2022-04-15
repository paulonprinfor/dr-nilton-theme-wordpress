<section class="section-curiosities">
  <div class="centered-container">
    <div class="curiosities-content">
      <?php
        $args = array('post_type' => 'curiosidade');
        $query = new WP_Query($args);

        while($query->have_posts()) : $query->the_post();
      ?>
      <a href="" class="curiosities-item">
        <?php the_post_thumbnail()?>
        <span class="item">
          <i><?= the_title() ?></i>
        </span>
      </a>
      <?php endwhile;  wp_reset_postdata(); ?>
    </div>
    <div class="button">
      <a href="">Ver todas</a>
    </div>
    <div class="curiosities-bg">
      <img src="<?= get_img_uri() ?> /bg-curiosity.png" > 
    </div>
  </div>
</section>
