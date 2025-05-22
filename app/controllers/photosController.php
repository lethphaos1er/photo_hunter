<?php
namespace App\Controllers\PhotosController;
use \PDO;
<<<<<<< Updated upstream
function indexAction(PDO $connexion)
{
    // Je charge les data dans $photos et $authors
    include '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion, 6);

    // je charge pages.home dans $content
    global $content, $title;
    $title = "catalogue";
    ob_start();
    include '../app/views/photos/_index.php';
    $content = ob_get_clean();
}
=======
use \app\Models\PhotosModel;

function showAction (PDO $connexion, string $id) {
    // Je charge les data dans $photos et $authors
    include_once '../app/models/photosModel.php';
    $photo = \App\Models\PhotosModel\findOneById($connexion, $id);

    // je charge pages.home dans $content
    global $content;
    ob_start();
    include '../app/views/photos/show.php';
    $content = ob_get_clean();
}
>>>>>>> Stashed changes
