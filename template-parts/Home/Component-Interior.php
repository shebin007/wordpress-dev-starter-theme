<?php 
/**
 * Exclusive Section : Home
 */



?>
<section class="modern-desing">
    <h2 class="section-title">
      <?= scetionTitleFormatter($args['Interior']['section_title']) ?>
    </h2>
    <div class="interior-section-image">
      <img src="<?= $args['Interior']['section_image']['url'] ?>" alt="interior-image" class="img-fluid">
    </div>
    <div class="container">
      <div class="content-area">
        <h2 class="section-title">
          <?= scetionTitleFormatter($args['Interior']['section_title_2']) ?>
        </h2>
        <div class="content logo-para-container">
          <p class="p1">
            <?= $args['Interior']['section_content'] ?>
          </p>
        </div>
      </div>
    </div>
  </section>