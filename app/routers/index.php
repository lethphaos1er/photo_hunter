
<?php
// ROUTE DES PHOTOS
// PATTERN: /?photos
// CTRl: photosCOntroller
// ACTION: indexAction
if (isset($_GET['photos'])):
    include_once '../app/controllers/photosController.php';
    \App\Controllers\PhotosController\indexAction($connexion);


// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: PagesController
// ACTION: homeAction
else : 
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);
endif;