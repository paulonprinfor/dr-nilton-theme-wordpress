<?php get_header() ?>
  <?php get_template_part('template-parts/about-header') ?>
  <?php while(have_posts()): the_post(); ?>
    <section class="about-header">
      <div class="centered-container">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" alt="" class="wp-post-image">
          <div class="about__tetle-item">
            <div class="title">
              <span> <?= get_field('perfil', $home_page->ID) ?></span>
              <h1> <?= get_field('apresentacao', $home_page->ID) ?></h1>
            </div>
            <?php the_content()?>
          </div>
      </div>
    <?php endwhile; ?>
  </section>

  <section class="about-article">
    <div class="centered-container">
      <div class="about__content">
        <?= the_field('valores') ?>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/bg-banners') ?>
  <?php get_template_part('template-parts/article-treatments') ?>
  <?php get_template_part('template-parts/section-schedule') ?>
  <?php get_template_part('template-parts/curiosities-section') ?>
<?php get_footer() ?>

