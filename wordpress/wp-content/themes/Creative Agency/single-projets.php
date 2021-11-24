<?php
get_header();
?>
<!--------------------------------------  HERO SECTION  ------------------------------------------->
<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero_project');?> ); height:100vh;">

    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= the_title() ?></h1>

    </div>

</section>

<section>
    <div class="container-fluid" id="single-project">
        <div class="container py-3 d-flex flex-column align-items-center">
            <div class="mt-5 mb-5">
                <h3><?php the_title() ?></h3>
                <?php 
            the_field('description_project');
            ?>
            </div>
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

        </div>

    </div>
</section>


<?php
get_footer();
?>