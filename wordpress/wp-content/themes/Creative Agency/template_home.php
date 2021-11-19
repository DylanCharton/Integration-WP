<?php 
/* Template name: Homepage */
get_header();
?>

<section id="section2">
    <div class="container">
        <div class="row">
            <div id="letterBlock2">
                <div id="titleBlock2">
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



<section id="section4">         
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'category_name' => '',
            'posts_per_page' => 4,
        )); 
    ?>


<div class="container">
    <div class="row">
        <div id="letterBlock4">
            <div id="titleBlock4">
                <?= get_field('title_section2');?>
            </div>
            <p><?= get_field('letter_section2')?></p>
        </div>
        <div id="catchsentence">
            <p><?= get_field('catchphrase')?></p>
        </div>
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
                echo '<a class="linkArticle col-md-3" href='.$link.' target="_blank">';
                echo '<div class="article">';
                echo '<img src="'.get_field('img_article').'"/>';
                echo '<div class="titleArticle">'.get_the_title().'</div>';
                echo '<div class="descriptionArticle">'.get_field('description_article').'</div>';
                // echo get_the_ID();
                echo '</div>';
                echo '</a>';
            }
            wp_reset_postdata(); 
        }else{
            __('No News');
        }
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
                    <div id="header-widget-area-left" class="nwa-header-widget widget-area" role="complementary">
                        <?php dynamic_sidebar( 'new-widget-area-left' ); ?>
                    </div>
                <?php endif; ?>
            <!-- fin nouvelle widget area -->
            </div>
            <div class="col-md-6">
                <!-- ajout de ma nouvelle widget area -->
                <?php if ( is_active_sidebar( 'new-widget-area-right' ) ) : ?>
                    <div id="header-widget-area-right" class="nwa-header-widget widget-area" role="complementary">
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