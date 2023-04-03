<?php 
/**
 * Premium Lounges Section : Home
 */

$Delicious = $args['Delicious'];

?>
<section class="delious-dish">
    <div class="container">
      <div class="modern-section">
        <div class="image-container">
          <img class="img-fluid" src="<?= $Delicious['section_image']['url']  ?>" alt="<?= $Delicious['section_image']['title']  ?>">
        </div>
        <div class="content-area">
          <h4 ><?= $Delicious['section_title'] ?></h4>
          <div class="logo-para-container">
            <h5><?= $Delicious['content_title'] ?></h5>
            <p class="p1">
              <?= $Delicious['content'] ?>
            </p> 
            <a href="<?= $Delicious['button']['url'] ?>" class="secondary-btn">
              <?= $Delicious['button']['title'] ?>
            </a>
          </div>
          
        </div>
      </div>
    </div>
    
  </section>