<!DOCTYPE html>
<html lang="fr">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= the_title() ?></title>
=======
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= the_title() ?></title>
>>>>>>> 5be8c39f8523e30c4fc4611c12707ef5ebe6cd9c
</head>

<body>

<<<<<<< HEAD
<?php
if ( has_nav_menu( 'header-menu' ) ) : ?>
<?php
wp_nav_menu ( array (
'theme_location' => 'header-menu' ,
'container'      => 'nav',
'menu_class'     => 'right no-bullets no-margin',
) ); ?>
<?php endif;
?>
=======
  <!-- NAV BAR -->

  <nav class="nav-tom navbar navbar-expand-lg navbar-light fixed-top"> <img class="site-img" src="<?= get_site_icon_url()?>" >
    <div class="container-fluid d-flex contain-tom">  

    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:white">

        <?php wp_nav_menu([

      'theme_location' => 'header',
      'container' => false,
      'menu_class' => 'navbar-nav me-auto'

    ]) 
    ?>

        <!--        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
-->
        <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      </div>
    </div>
  </nav>

  <!-- Fin de nav bar  -->


  <!--           AUTRE MENU
<php
    if ( has_nav_menu( 'header-menu' ) ) : ?>
    
<php wp_nav_menu ( array (
    'theme_location' => 'header-menu' ,
    'container'      => 'nav',
    'menu_class'     => 'navbar-nav me-auto',
) ); 
?>

<php endif;?> -->

>>>>>>> 5be8c39f8523e30c4fc4611c12707ef5ebe6cd9c
</body>

</html>