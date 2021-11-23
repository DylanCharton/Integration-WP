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
            <a href="#section2"><img src="<?= get_template_directory_uri(); ?>/assets/img/scrolldown.png"
                    alt="Scrolldown button"></a>
        </div>
    </div>
</section>
<!-- LOOP FOR THE PROJECTS -->

<section class="container-fluid">
    <h3>Découvrez nos <?= get_field('archives_section1')?></h3>
    <div class="container d-flex flex-column flex-md-row">
        
        <?php $loop = new WP_Query( array( 'post_type' => 'projets', 'posts_per_page' => '1000' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <?php 
            echo '
                <div class="mx-4">
                    <div class="img-card">
                        <img src="'.get_field('img_project')[0]['images_du_projet'].'"/>
                        
                            <a class="overlay "href="'.get_permalink().'">
                            <div class="d-flex flex-column align-items-center justify-content-center">
                            <h3>'.get_field('title_project').'</h3>
                            </div>
                            </a>
                        
                    </div>
                    
                    
                </div>
            ';

            endwhile; wp_reset_query(); ?>
     </div>
</section>

<!-- LOOP FOR THE ARTICLES -->
<section class="container-fluid">
<h3>Découvrez nos <?= get_field('archives_section2')?></h3>
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
                echo '<div class="article col-md-3">';
                    echo '<a  href='.$link.' target="_blank">';
                        echo '<img src="'.get_field('img_article').'"/>';
                    echo '</a>';
                    echo '<a  href='.$link.' target="_blank">';
                        echo '<div class="titleArticle">'.get_the_title().'</div>';
                    echo '</a>';
                    echo '<div class="descriptionArticle">'.get_field('description_article').'</div>';
                // echo get_the_ID();
                echo '</div>';
            }
            wp_reset_postdata(); 
        }else{
            __('No News');
        }
        ?>
</section>
<?php
get_footer()
?>