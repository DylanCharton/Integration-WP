<!DOCTYPE html>
<html lang="fr">

<head>
  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ACS - <?= the_title() ?></title>
</head>

  <body>
    <!-- NAV BAR -->
    <!-- ajout de ma nouvelle widget area -->
    <?php if ( is_active_sidebar( 'hstngr_widget_header' ) ) : ?>
      <div id="header-widget" class="row transparent-nav nav_menu_css_class" role="complementary">
          <?php dynamic_sidebar( 'hstngr_widget_header' );?>
      </div>
    <?php endif; ?>
    <!-- fin nouvelle widget area -->

    