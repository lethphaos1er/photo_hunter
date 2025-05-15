<?php
namespace App\Controllers\PhotosController;
use \PDO;
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
