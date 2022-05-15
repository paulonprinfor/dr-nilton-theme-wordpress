<section class="home-page">
  <div class="centered-container">
    <div class="home-page__content">
      <?php $home_page = get_page(38);?>
      <div class="home-image">
        <img src="<?php echo get_the_post_thumbnail_url($home_page->ID)?>">
      </div>
      <div class="home-page-content__item">
        <div class="home-page__tilte">
          <img src="<?= get_img_uri() ?> /coroa.png" > 
          <h1> <?= get_field('nome_do_medico', $home_page->ID) ?></h1>
        </div>
        <?php echo apply_filters('the_content', $home_page->post_content ) ?>
      </div>
    </div>
  </div>
    <div class="home-page-item__image">
      <img src="<?= get_img_uri() ?> /img7.png" > 
    </div>
    <div class="home-page-item__image1">
      <div class="star"> 
        <img src="<?= get_img_uri() ?> /img15.png" > 
      </div>
    </div>
</section>
