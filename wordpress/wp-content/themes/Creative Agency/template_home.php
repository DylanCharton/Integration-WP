<?php 
/* Template name: Homepage */

?>

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

<?php 

get_footer();

?>