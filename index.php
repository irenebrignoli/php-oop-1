<?php

require __DIR__ . '/Models/Movie.php';


$constantine = new Movie('Constantine', 'Francis Lawrence', 2005, 'United States', '121 min');
$constantine->main_actors = ['Keanu Reeves', 'Rachel Weisz', 'Peter Stormare'];

$toy_story = new Movie('Toy story', 'John Lasseter', 1995, 'United States', '90 min');

$il_padrino = new Movie('Il padrino', 'Francis Ford Coppola', 1972, 'United States', '175 min');

echo $constantine-> printMainDetails();

echo '</br>';

echo $toy_story-> printMainDetails();

echo '</br>';

echo $il_padrino-> printMainDetails();

