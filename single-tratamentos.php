<?php get_header(); ?>
<?php get_template_part('template-parts/about-header') ?>
<?php get_template_part('template-parts/bg-banners') ?>
  <section class="tratamentos">
    <?php while(have_posts()): the_post(); ?>
      <div class="centered-container">
        <div class="tratamentos-title">
          <h1>Tratamentos</h1>
          <img src="<?= get_img_uri() ?>/icn-treatments-cross.png" > 
        </div>
        <div class="tratamentos-content">
          <h2>Fraturas e traumas em geral </h2>
          <?php the_content() ?>
        </div>
        <div class="tratamentos-image">
          <img src="<?php echo get_field('imagem_interna') ?>" alt="">
        </div>
        <div class="networks-social">
          <h3>Compartilhe com amigos:</h3>
        <a href="">
            <i id="facebook" class="fa fa-facebook-square" aria-hidden="true"></i>
          </a>
          <a href="">
            <i id="instagram" class="fa fa-instagram" aria-hidden="true"></i>
          </a>
          <a href="">
            <i id="twitter" class="fa fa-twitter-square" aria-hidden="true"></i>
          </a>
          <a href="">
            <i id="whatsapp" class="fa fa-whatsapp" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    <?php endwhile; ?>
  </section>
  <?php get_template_part('template-parts/bg-banners') ?>
  <?php get_template_part('template-parts/article-treatments') ?>
  <?php get_template_part('template-parts/home-page') ?>
<?php get_footer(); ?>
