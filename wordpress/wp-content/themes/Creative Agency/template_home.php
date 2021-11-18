<?php 
/* Template name: Homepage */
get_header();
?>

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
        <div id="letterBlock2">
            <div id="titleBlock2">
                <?= get_field('title_section2');?>
            </div>
                <p><?= get_field('letter_section2')?></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        if($the_query->have_posts()){
            while($the_query->have_posts()){
                $the_query->the_post();
                echo '<div class="article col-md-3">';
                echo '<img src="'.get_field('img_article').'"/>';
                echo '<div class="titleArticle">'.get_the_title().'</div>';
                the_excerpt();
                echo '</div>';
            }
            wp_reset_postdata(); 
        }else{
            __('No News');
        }
        ?>
    </div>
</div>

    
</section>


<?php 
get_footer();
?>