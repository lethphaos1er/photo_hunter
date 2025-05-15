<?php
namespace App\Controllers\AuthorsController;
use \PDO;
function indexAction(PDO $connexion)
{
    // Je charge les data dans $authors et $authors
    include '../app/models/authorsModel.php';
    $authors = \App\Models\authorsModel\findAll($connexion, 4);

    // je charge pages.home dans $content
    global $content, $title;
    $title = "catalogue";
    ob_start();
    include '../app/views/authors/_index.php';
    $content = ob_get_clean();
}
