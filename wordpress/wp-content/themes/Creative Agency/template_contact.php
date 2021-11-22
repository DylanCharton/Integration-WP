<?php
/* Template name: Contact*/

get_header()
?>

<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero_common');?> ); height:100vh;">
    
        <nav class="navbar nav d-flex fixed-top"></nav>
    
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= get_the_title();?></h1>
    </div>
    
</section>

<section class="d-flex flex-column align-items-center pt-5" id="contact-form-section">
    <?php the_content(); ?>
</section>


<?php get_footer()?>