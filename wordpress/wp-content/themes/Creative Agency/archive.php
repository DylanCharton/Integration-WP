<?php 
/* Template Name: Archives */
get_header()
?>

<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero_common');?> ); height:100vh;">

    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= get_the_title();?></h1>
    </div>
    <div class="d-flex flex-column justify-content-center ">
        <p class="text-white"><?= the_field('scroll_text'); ?></p>
        <div class="d-flex justify-content-center">
            <a href="#allProjects"><img src="<?= get_template_directory_uri(); ?>/assets/img/scrolldown.png"
                    alt="Scrolldown button"></a>
        </div>
    </div>
</section>
<!-- LOOP FOR THE PROJECTS -->

<section class="container-fluid" id="allProjects">
    <h3 class="text-center text-white py-4">Découvrez nos <?= get_field('archives_section1')?></h3>
    <div class="container d-flex flex-column flex-md-row justify-content-center py-4">
        
        <?php $loop = new WP_Query( array( 'post_type' => 'projets', 'posts_per_page' => '1000' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
            echo '
                <div class="mx-4 mb-5">
                    <div class="img-card">
                        <img src="'.get_field('img_project')[0]['images_du_projet'].'"/>
                        
                        <a class="overlay px-3 py-2" href="'.get_permalink().'">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                                <h3>'.get_field('title_project').'</h3>
                                <p>'.get_field('description_project').'</p>
                            </div>
                        </a>
                        
                    </div>
                    
                    
                </div>
            ';

            endwhile; wp_reset_query(); ?>
     </div>
</section>

<!-- LOOP FOR THE ARTICLES -->
<section class="container-fluid" >
    <h3 class="text-center py-4">Découvrez nos <?= get_field('archives_section2')?></h3>
    <div class="container d-flex flex-column flex-md-row justify-content-center py-4">

        <?php
        // the query
            $the_query = new WP_Query( array(
                'category_name' => '',
                'posts_per_page' => 4,
            )); 
                if($the_query->have_posts()){
                    while($the_query->have_posts()){
                        $the_query->the_post();
                        // echo wp_count_posts();
                        $link = get_the_permalink();
                        echo '<div class="mx-4 mb-5">
                            <div class="img-card">
                            <img src="'.get_field('img_article').'"/>
                            
                            <a class="overlay px-3 py-2" href="'.get_permalink().'">
                                <div class="d-flex flex-column align-items-center justify-content-center">
                                    <h3>'.get_field('title_article').'</h3>
                                    <p>'.get_field('description_article').'</p>
                                </div>
                            </a>
                        
                    </div>
                        
                        </div>';
                    }
                    wp_reset_postdata(); 
                }else{
                    __('No News');
                }
                ?>
    </div>
</section>
<?php
get_footer()
?>