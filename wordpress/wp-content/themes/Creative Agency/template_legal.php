<?php
/* Template name: Mentions légales */ 
get_header()
?>
<header class="d-flex align-items-center justify-content-center flex-column" id="notice-header" style="background-image:url(<?= the_field('bg_hero_common');?> ); height:100vh;">
<div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= get_the_title();?></h1>
    </div>
</header>
<section id="notice" class="py-4">

    <div class="container">
        <?php the_content() ?>
    </div>

</section>
<?php 
get_footer()
?>
