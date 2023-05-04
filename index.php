<?php

class Movie{
  public $title;
  public $director;
  public $year_production;
  public $country_production;
  public $genre;
  public $length;
  public $story;
  public $main_actors;

  public function __construct($title, $director, $year_production, $country_production, $length){
    $this->title = $title;
    $this->director = $director;
    $this->year_production = $year_production;
    $this->country_production = $country_production;
    $this->length = $length;
  }
}

$constantine = new Movie('Constantine', 'Francis Lawrence', 2005, 'United States', '121 min');
$constantine->main_actors = ['Keanu Reeves', 'Rachel Weisz', 'Peter Stormare'];

$toy_story = new Movie('Toy story', 'John Lasseter', 1995, 'United States', '90 min');


var_dump($constantine);
var_dump($toy_story);
