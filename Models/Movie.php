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