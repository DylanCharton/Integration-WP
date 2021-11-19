<?php
get_header();
?>
<!--------------------------------------  HERO SECTION  ------------------------------------------->
<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero');?> ); height:100vh;">
    
        <nav class="navbar nav d-flex fixed-top"><?php get_header(); ?></nav>
    
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= the_title() ?></h1>
        
    </div>
    <div class="d-flex flex-column justify-content-center ">
        <p class="text-white"><?= the_field('scroll_text'); ?></p>
        <div class="d-flex justify-content-center">
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/scrolldown.png"
                    alt="Scrolldown button"></a>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div id="project-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">


                <?php $images = get_field("img_project");

                foreach ($images as $key => $image) {
                    if($key === array_key_first($images)){
                        echo '  <div class="carousel-item active">';
                        echo '<img src="' . $image['images_du_projet'] . '" class="d-block w-100" alt="..."/> ';
                        echo '</div>';
                    } else {
                        echo '  <div class="carousel-item">';
                        echo '<img src="' . $image['images_du_projet'] . '" class="d-block w-100" alt="..."/> ';
                        echo '</div>';
                    }
                    
                    
                }

        ?>
            </div>
        </div>
        <div>
            <?php 
            the_field('description-project');
            ?>
        </div>
    </div>
</section>


<?php
get_footer();
?>