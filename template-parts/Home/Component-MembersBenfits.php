<?php 
/**
 * Members Benfits Section : Home
 */

$Members = $args['Members'];

?>
    <section class="memeber-benfits ">
      <div class="members-bg" style="background-image: url(<?= $Members['background_image']['url']  ?>);"></div>
      <h5><?= $Members['section_title'] ?></h5>
      <ul class="icon-boxes">
        <?php
        foreach($Members['icon_box'] as $IconBox):
        ?>
        <li>
            <img src="<?=  $IconBox['icon']['url'] ?>" alt="<?=  $IconBox['icon']['title'] ?>" class="img-fluid">
            <p><?=  $IconBox['title'] ?></p>
        </li>
        <?php 
        endforeach;
        ?>
        
       
      </ul>
      <div class="d-flex justify-content-center">
        <a href="<?=  $Members['button']['url'] ?>" class="secondary-btn m-auto"><?= $Members['button']['title'] ?></a>

      </div>
      <div class="member-bg-overlay" style="background-color: <?= $Members['background_overlay_color'] ?>"></div>
    </section>