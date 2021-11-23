<?php 

get_header();
?>

<!--------------------------------------  HERO SECTION  ------------------------------------------->
<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero_common');?> ); height:100vh;">

    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= get_the_title();?></h1>
    </div>
    
</section>

<section>
    <div class="container-fluid" id="single-project">
        <div class="container py-5">
            <?= get_the_content() ?>
        </div>
    </div>
</section>

<?php
get_footer();

?>