<?php global $mydata;?>
<footer class="article-footer">
    <div class="centered-container">
      <div class="article-footer__address">
        <?php echo $mydata->address ?>
       <div class="article-footer__item">
          <?php echo $mydata->city ?>
          <?php echo $mydata->state ?>
        </div>
        <div class="article-footer__phone">
          <?php echo $mydata->phones?>
        </div>
      </div>
      <div class="article-footer__logo">
        <img src="<?= $mydata->footer_logo ?>" alt="">
      </div>
      <div class="article-footer__social-networks">
       <?php echo $mydata->get_social(true, 'social__list') ?>
      </div>
    </div>
  </footer>
<?php wp_footer()?>
