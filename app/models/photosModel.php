<?php
namespace App\Models\PhotosModel;
use \PDO;
function findAll(PDO $connexion, int $limit = 6): array
{
    $sql = "SELECT ph.*, 
                   aut.firstname AS author_firstname, 
                   aut.lastname AS author_lastname
            FROM photos ph
            JOIN authors aut ON ph.author_id = aut.id
            ORDER BY ph.created_at DESC 
            LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}