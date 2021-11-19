<?php 
/* Template name: Homepage */

?>
<!--------------------------------------  HERO SECTION  ------------------------------------------->
<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero');?> ); height:100vh;">

    <nav class="navbar nav d-flex fixed-top"><?php get_header(); ?></nav>

    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= the_field('title_section1');?></h1>
    </div>
    <div class="d-flex flex-column justify-content-center ">
        <p class="text-white"><?= the_field('scroll_text'); ?></p>
        <div class="d-flex justify-content-center">
            <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/img/scrolldown.png"
                    alt="Scrolldown button"></a>
        </div>
    </div>
</section>
<!--------------------------------------  FEATURES SECTION  ------------------------------------------->
<section id="section2">
    <div class="container">
        <div class="row">
            <div id="letterBlock1">
                <div id="titleBlock1">
                    <?= get_field('title_section2');?>
                </div>
                <p><?= get_field('letter_section2')?></p>
            </div>
        </div>
    </div>
    <div id="containerBlock" class="container">
        <div class="row">
            <?php
            
            if(get_field('bloc')){
                while(the_repeater_field('bloc')){
                    echo '<div class="col-md-3 features">';
                        echo '<img src="'.get_sub_field('icon_bloc').'">';
                        echo '<div id="titleBloc">'.get_sub_field('title_bloc').'</div>';
                        echo '<div id="descriptionBloc">'.get_sub_field('description_bloc').'</div>';
                    echo '</div>';
                }
            }
        ?>
        </div>
    </div>
</section>
<!--------------------------------------  PROJECTS SECTION  ------------------------------------------->
<section id="section3">

    <?php $loop = new WP_Query( array( 'post_type' => 'projets', 'posts_per_page' => '2' ) ); ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <?php 
       echo '
       <div class="d-flex" id="projects-wrapper">
            <div class="img-projects col-6">
                <a href="'.get_permalink().'"><img src="'.get_field('img_project')[0]['images_du_projet'].'"/></a>
            </div>
            <div class="text-projects col-6 d-flex flex-column justify-content-center align-items-center">
                <div class="mb-5">
                    <h3>'.get_field('title_project').'</h3>
                </div>
                <div class="w-50">
                    <p>'.get_field('description_project').'</p>
                </div>

            </div>
        </div>
       '

        
       

        

    
       ?>
    <?php 
       
       
       
       
       ?>
    <?php endwhile; wp_reset_query(); ?>

</section>


<?php 

get_footer();

?>