<?php 
/**
 * 
 * Banner Section
 * 
 */

?>


<section class="banner-section">
        <div class="banner">
            <div class="banner-img" style="background-image:url(<?= $args['Banner']['banner_image']["url"] ?>)"></div>
            <div class="banner-content">
            <h2><?= $args['Banner']['banner_sub_title'] ?></h2>
            <h1><?= $args['Banner']['banner_title'] ?></h1>
            </div>
        
            
        </div>
        <div class="banner-quote-line-section">
            <p class="para">
            <?= $args['Banner']['banner_description'] ?>
            </p>
        </div>
    </section>
   