<?php

class Movie
{
    public $title;
    public $price;
    public $duration;
    public $genre;
    public $actor;
    public $language;

    public function __construct($title,$price,$language)
    {
        $this->title = $title;
        $this->price = $price;
        $this->$language = $language;
    }

    public function setTitle($title){
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }  
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setDuration($duration){
        $this->duration = $duration;
    }
    public function getDuration(){
        return $this->duration;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function setActor($actor){
        $this->actore = $actor;
    }
    public function getActor(){
        return $this->actor;
    }
    public function setLanguage($language){
        $this->language = $language;
    }
    public function getLanguage(){
        return $this->language;
    }
}
