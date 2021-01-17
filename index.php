<?php

class Movie {
  public $title;
  public $language;
  public $vote;
  public $genre;

  function __construct($_title, $_language, $_vote, $_genre){
    $this->title = $_title;

    if(!is_numeric($_language)){
      $this->language = $_language;
    }
    if(is_numeric($_vote)){
      $this->vote = $_vote;
    }
    if(!is_numeric($_genre)){
      $this->genre = $_genre;
    }
  }

  public function getTitle(){
    return $this->title;
  }

  public function getLanguage(){
    return $this->language;
  }

  public function getVote(){
    return $this->vote;
  }

  public function getGenre(){
    return $this->genre;
  }

}

$film_1 = new Movie('Sole a catinelle', 'it', 10, 'Comico');
var_dump($film_1);

$film_n = new Movie('Lion', 'en', 10, 'Drammatico');
var_dump($film_n);
 ?>
