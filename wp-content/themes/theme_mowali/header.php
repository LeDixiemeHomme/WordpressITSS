<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>mowali</title>
    <!– CSS de Bootstrap –>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!– Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème –>
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
    <!– HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 –>
    <!–[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]–>
<?php wp_head(); ?>
</head>
<body>
   
 <a id="point"></a> <?php//destination lien, test pour naviguer dans la page grâce à un lien ?>
   
    <div class="bande_noire_header">
   <div class="container-fluid">
<div class="row">
       <div class="col offset-2"><p>autre logo, logo twitter</p></div>
    </div>
</div>
</div>

    <div class="header">
        <div class="container">
                    <nav id="navigation-principale" role="navigation"> 
                <div class="row align-items-center">
                      <div class="col-md-2 offset-2">
                       <img src="wp-content/themes/theme_mowali/images/logo.png" width="100px" alt="logo mowali">
                       </div>
                       <div class="col-md-8">
                        <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
                        </div>
                    </nav>
            </div>
        </div>
<div class="container-fluid">