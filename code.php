<?php

$directory = "./";

// Obtenir la liste des fichiers et des répertoires dans le répertoire
$files = scandir($directory);

// Parcourir la liste des fichiers et répertoires
foreach ($files as $file) {
    // Ignorer les éléments spéciaux '.' et '..'
    if ($file != '.' && $file != '..') {
        // Afficher le nom de fichier ou de répertoire
        echo $file . "<br>";
    }
}


    ?>
