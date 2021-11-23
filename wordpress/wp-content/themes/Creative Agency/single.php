<?php
    get_header();
?>

<section id="sectionArticle">         
    <?php 
        // the query
        $the_query = new WP_Query( array(
            'category_name' => '',
            'p'=> get_the_ID(),
        )); 
    ?>
    <div class="container">
        <div id="rowAnnonce" class="row">
            <?php
            if($the_query->have_posts()){
                while($the_query->have_posts()){
                    $the_query->the_post();
                    echo '<div class="article col-md-6">';
                    echo '<img src="'.get_field('img_article').'"/>';
                    echo '<div class="titleArticle">'.get_the_title().'</div>';
                    the_content();
                    get_the_ID();
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