<?php 
/**
 * Exclusive Section : Home
 */



?>
<section class="member-club-section">
      <div class="container">
        <h2 class="section-title">
          <?= scetionTitleFormatter($args['Exclusive']['section_title']) ?>
        </h2>
        <div class="exclusive-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="80.077" height="48.585" viewBox="0 0 80.077 48.585">
            <g id="Group_6281" data-name="Group 6281" transform="translate(-278 -1562)">
              <path id="Path_8933" data-name="Path 8933" d="M61.032,0,52.485,8.547l10.5,10.5-1.95,1.948-10.5-10.5-8.548,8.548,10.5,10.5-1.949,1.95-10.5-10.5-10.5,10.5-1.95-1.95,10.5-10.5L19.044,0,10.5,8.547l10.5,10.5-1.95,1.948L8.548,10.5,0,19.045l29.542,29.54,10.5-10.5,10.5,10.5,29.541-29.54Z" transform="translate(278 1562)" fill="#cdc3b9"/>
              <rect id="Rectangle_2642" data-name="Rectangle 2642" width="12.088" height="12.088" transform="matrix(0.707, -0.707, 0.707, 0.707, 309.491, 1570.548)" fill="#cdc3b9"/>
            </g>
          </svg>
        </div>
       
     
     
        <div class="modern-section">
          <div class="image-container">
            <img class="img-fluid" src="<?= $args['Exclusive']['section_image']['url'] ?>" alt="<?= $args['Exclusive']['section_image']['title'] ?>">
          </div>
          <div class="content-area ">
            <h4 ><?= $args['Exclusive']['content_title'] ?></h4>
            <div class="logo-para-container">
              <p class="p1">
              <?= $args['Exclusive']['content_area'] ?>
              </p>
              <?php 
              if($args['Exclusive']['button']['title'] != ""):
              ?>
                <a href="<?=  $args['Exclusive']['button']['url'] ?>" class="secondary-btn">
                    <?=  $args['Exclusive']['button']['title'] ?>
                </a>
              <?php 
              endif;
              ?>
            </div>
            
          </div>
        </div>
      </div>
</section>