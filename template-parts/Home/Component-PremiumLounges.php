<?php 
/**
 * Premium Lounges Section : Home
 */

$Premium_Lougne = $args['PremiumLounge'];
?>
<section class="premuim-loungue">
  <div class="container">
    <div class="modern-section">
      
      <div class="content-area">
        <h4 ><?= $Premium_Lougne['section_title'] ?></h4>
        <div class="logo-para-container">
          <h5><?= $Premium_Lougne['content_title'] ?></h5>
          <p class="p1">
            <?= $Premium_Lougne['content'] ?>
          </p> 
          <a href="<?= $Premium_Lougne['button']['url'] ?>" class="secondary-btn">
            <?= $Premium_Lougne['button']['title'] ?>
          </a>
        </div>
        
      </div>
      <div class="image-container">
        <img class="img-fluid" src="<?= $Premium_Lougne['section_image']['url'] ?>" alt="<?= $Premium_Lougne['section_image']['title'] ?>">
      </div>
    </div>
  </div>
</section>