<?php 
/* Template name: Homepage */
get_header();
?>

<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero');?> ); height:100vh;">
    
        <nav class="navbar nav d-flex fixed-top"></nav>
    
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

<?php 

get_footer();

?>