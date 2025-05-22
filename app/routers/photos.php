<?php
use App\Controllers\PhotosController;
include '../app/controllers/photosController.php';

switch ($_GET['photos']):
    case 'show':
        //action: show
        PhotosController\showAction($connexion, $_GET['id']);
        break;
    default:
        //action: index
        PhotosController\indexAction($connexion);
        break;
endswitch;