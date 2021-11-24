<?php
    get_header();
?>
<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero_article');?> ); height:100vh;">
    
        <nav class="navbar nav d-flex fixed-top"></nav>
    
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= get_the_title();?></h1>
    </div>
    
</section>

<section id="sectionArticle">         
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'category_name' => '',
            'p'=> get_the_ID(),
        )); 
    ?>
    <div class="container d-flex ">
        
            <?php
            if($the_query->have_posts()){
                while($the_query->have_posts()){
                    $the_query->the_post();
                    echo '<div class="align-items-center col-12 d-flex flex-column flex-md-row">
                            <div class="col-12 col-md-6">
                                <img class="img-article" src="'.get_field('img_article').'"/>
                            </div>
                            <div class="col-12 col-md-6 px-5 py-3">
                                <p>'.get_the_content().'</p>
                            </div>';
                    
                    get_the_ID();
                    echo '</div>';
                }
                wp_reset_postdata(); 
            }else{
                __('Pas d\'articles');
            }
            ?>
        
    </div>  
</section>

<?php
    get_footer();
?>