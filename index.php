<?php

require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/functions.php';

$constantine = new Movie('Constantine', 'Francis Lawrence', 2005, 'United States', '121 min');
$constantine->main_actors = ['Keanu Reeves', 'Rachel Weisz', 'Peter Stormare'];

$toy_story = new Movie('Toy story', 'John Lasseter', 1995, 'United States', '90 min');

$il_padrino = new Movie('Il padrino', 'Francis Ford Coppola', 1972, 'United States', '175 min');


echo 'title: ' . $constantine->title . ', director: ' . $constantine->director . ', year: ' . $constantine->year_production . ', country: ' . $constantine->country_production . ', length: ' . $constantine->length;

echo '</br>';

echo 'title: ' . $toy_story->title . ', director: ' . $toy_story->director . ', year: ' . $toy_story->year_production . ', country: ' . $toy_story->country_production . ', length: ' . $toy_story->length;

echo '</br>';

echo 'title: ' . $il_padrino->title . ', director: ' . $il_padrino->director . ', year: ' . $il_padrino->year_production . ', country: ' . $il_padrino->country_production . ', length: ' . $il_padrino->length;

echo printMainDetails($constantine);