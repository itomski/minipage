<?php

require_once 'vendor/autoload.php';

use Entities\Todo; // importiert die Klasse

$loader = new \Twig\Loader\FilesystemLoader('./templates'); // Pfad zu den Templates
$twig = new \Twig\Environment($loader, [
    //'cache' => './compilation_cache',
]);

$todos = [
    new Todo('Kochen', 'Sushi rollen'),
    new Todo('Backen', 'Teig ausrollen'),
    new Todo('Meeting', 'Besprechung mit Carol'),
    new Todo('Gassi', 'Mit dem Hund rausgehen')
];

// Daten werden aus dem Backend an das Template übergeben
echo $twig->render('standard.html', [
                'name' => 'Peter Parker', 
                'jobs' => ['Spiderman', 'Journalist', 'Tellerwäscher'],
                'todos' => $todos
            ]);