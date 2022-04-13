<?php get_header();?>
  <section class="banners">
    <div class="banners-slider">
      <?php get_banners();?>
    </div>
  </section>
  <?php get_template_part('template-parts/article-treatments') ?>
  <?php get_template_part('template-parts/home-page') ?>
  <?php get_template_part('template-parts/section-schedule') ?>
<?php get_footer(); ?>
