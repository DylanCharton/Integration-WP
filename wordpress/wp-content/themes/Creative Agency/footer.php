
<?php
if ( has_nav_menu( 'footer-menu' ) ) : ?>
<?php
wp_nav_menu ( array (
'theme_location' => 'footer-menu' ,
'container'      => 'nav',
'menu_class'     => 'right no-bullets no-margin',
) ); ?>
<?php endif;
?>


    
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body></html>