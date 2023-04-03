<?php 

get_header();

$Home = $AcfController->Home(5);



?>
  <div class="home">

    <?php
        foreach($Home as $Section){

            switch($Section['acf_fc_layout']){
                case 'banner':
                    get_template_part( 'template-parts/home/Component', 'Banner',  array(
                        'Banner' => $Section['banner'],
                    ));
                    break;
                case 'exclusive_section':
                    get_template_part( 'template-parts/home/Component', 'Exclusive',  array(
                        'Exclusive' => $Section['exclusive'],
                    ));
                    break;
                case 'interior_section':
                    get_template_part( 'template-parts/home/Component', 'Interior',  array(
                        'Interior' => $Section['interior'],
                    ));
                    break;
                case 'members_benfits_section':
                    get_template_part( 'template-parts/home/Component', 'MembersBenfits',  array(
                        'Members' => $Section['members_benfits'],
                    ));
                    break;
                case 'premium_lounge_section':
                    get_template_part( 'template-parts/home/Component', 'PremiumLounges',  array(
                        'PremiumLounge' => $Section['premium_lounge'],
                    ));
                    break;
                case 'delicious_section':
                    get_template_part( 'template-parts/home/Component', 'DeliciousDish',  array(
                        'Delicious' => $Section['delicious'],
                    ));
                    break;
                case 'regional_section':
                    get_template_part( 'template-parts/home/Component', 'RegionalFood',  array(
                        'Regional' => $Section['regional'],
                    ));
                    break;
            }
        }

                 
    
    ?>

   
  

    
    

    

    
  </div>

<?php 
get_footer();
?>