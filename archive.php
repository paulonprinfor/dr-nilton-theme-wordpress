<?php get_header() ?>
<?php get_template_part('template-parts/about-header') ?>
<?php get_template_part('template-parts/bg-banners') ?>
<section class="testcontent-grid">
  <div class="button">
      <h1>Tratamentos</h1>
      <img src="<?= get_img_uri() ?>/icn-treatments-cross.png" >   
    </div>
  <div class="centered-container">
    <?php  while(have_posts()) : the_post();  ?>
    
    <?php get_template_part("template-parts/treatment-item") ?>
    <?php endwhile; ?>
  </div>
  
</section>
  <?php get_template_part('template-parts/home-page') ?>
  <?php get_template_part('template-parts/section-schedule') ?>
<?php get_footer() ?>
