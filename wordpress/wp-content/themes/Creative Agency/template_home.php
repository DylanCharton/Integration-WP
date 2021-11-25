<?php

/* Template name: Homepage */

get_header();

?>

<!--------------------------------------  HERO SECTION  ------------------------------------------->


<section class="container-fluid d-flex align-items-center justify-content-center flex-column" id="hero-section"
    style="background-image:url(<?= the_field('bg_hero');?> ); height:100vh;">

    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="text-white" id="title-section1"><?= the_field('title_section1');?></h1>
    </div>
    <div class="d-flex flex-column justify-content-center ">
        <p class="text-white"><?= the_field('scroll_text'); ?></p>
        <div class="d-flex justify-content-center">
            <a href="#section2"><img id="scrolldown-btn"
                    src="<?= get_template_directory_uri(); ?>/assets/img/scrolldown.png" alt="Scrolldown button"></a>
        </div>
    </div>
</section>

<!--------------------------------------  FEATURES SECTION  ------------------------------------------->
<section id="section2">
    <div class="container">
        <div class="wrapper">
            <div class="letterBlock2">
                <?= get_field('letter_section2') ?>
            </div>
            <div class="titleBlock2">
                <?= get_field('title_section2') ?>
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

<?php $loop = new WP_Query( array( 'post_type' => 'projets', 'posts_per_page' => '2' ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php 
       echo '
        <div class="section3">
            <div class="d-flex flex-column flex-md-row" class="projects-wrapper">
                <div class="img-projects col-12 col-sm-12 col-md-6">
                    <a href="'.get_permalink().'"><img src="'.get_field('img_project')[0]['images_du_projet'].'"/></a>
                </div>
                <div class="text-projects pt-4 pt-md-0 col-sm-12 col-md-6 d-flex flex-column justify-content-center ps-0 ps-md-5 align-items-center">
                    <div class="mb-5">
                        <h3>'.get_the_title().'</h3>
                    </div>
                    <div class="w-75 description-project">
                        <p>'.get_the_excerpt().'</p>
                    </div>

                </div>
            </div>
        </div>
       ';

     endwhile; wp_reset_query(); ?>



<section id="section4" class="pb-4">
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'category_name' => '',
            'posts_per_page' => 4,
        )); 
    ?>

    <div class="container">
        <div class="wrapper">
            <div class="letterBlock4">
                <?= get_field('letter_section3') ?>
            </div>
            <div class="titleBlock4">
                <?= get_field('title_section3') ?>
            </div>
            
        </div>
        <div id="catchsentence">
            <p><?= get_field('catchphrase')?></p>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <?php
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
        }   }
        ?>
            </div>
        </div>
</section>

<section id="section5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- ajout de ma nouvelle widget area -->
                <?php if ( is_active_sidebar( 'new-widget-area-left' ) ) : ?>
                <div id="header-widget-area-left"
                    class="nwa-header-widget widget-area row d-flex flex-column flex-md-row align-items-center"
                    role="complementary">
                    <?php dynamic_sidebar( 'new-widget-area-left' ); ?>
                </div>
                <?php endif; ?>
                <!-- fin nouvelle widget area -->
            </div>
            <div class="col-md-6">
                <!-- ajout de ma nouvelle widget area -->
                <?php if ( is_active_sidebar( 'new-widget-area-right' ) ) : ?>
                <div id="header-widget-area-right"
                    class="nwa-header-widget widget-area row d-flex flex-column flex-md-row align-items-center"
                    role="complementary">
                    <?php dynamic_sidebar( 'new-widget-area-right' ); ?>
                </div>
                <?php endif; ?>
                <!-- fin nouvelle widget area -->
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>