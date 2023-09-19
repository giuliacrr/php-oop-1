<?php
class Movie {
  public $title;
  public $description;
  public $language;
  public $release_date;

  public function __construct( string $_title, string $_description, string $_language, DateTime $_release_date) {
    $this->title = $_title;
    $this->description = $_description;
    $this->language = $_language;
    $this->release_date = $_release_date;
}

  public function getNameDate() {
    return $this->title . ' - ' . $this->release_date;
  }
}


?>
