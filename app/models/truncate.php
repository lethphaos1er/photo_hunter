<?php
namespace App\Models\Truncate;

function truncate($resume) {
    if (strlen($resume) > 100) {
        $cut = substr($resume, 0, 100);
        $cut = substr($cut, 0, strrpos($cut, ' '));
        return $cut . '...';
    } else {
        return $resume;
    }
}
?>
