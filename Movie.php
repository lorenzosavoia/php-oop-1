<?php

class Movie
{
    public $title;
    public $price;
    public $duration;
    public $genre;
    public $actor;
    public $language;

    public function __construct($title, $price, $language)
    {
        $this->title = $title;
        $this->price = $price;
        $this->language = $language;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }
    public function getDuration()
    {
        return $this->duration;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function setActor($actor)
    {
        $this->actor = $actor;
    }
    public function getActor()
    {
        if (is_string($this->actor)) {
            return $this->actor;
        }else {
            return var_dump('hai sbagliato');
        }
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }
}
$movies = new Movie('Assassinio sul Nilo', 10, 'IT');
$movies2 = new Movie('La ricerca della felicità', 3, 'ENG');
$movies->setActor('Kenneth Branagh');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>titolo: <?= $movies->getTitle() ?></li>
        <li>prezzo: <?= $movies->getPrice() ?>€</li>
        <li>lingua: <?= $movies->getLanguage() ?></li>
        <li>Nei panni di Hercule Poirot: <?= $movies->getActor() ?></li>
    </ul>
    <ul>
        <li>titolo: <?= $movies2->getTitle() ?></li>
        <li>prezzo: <?= $movies2->getPrice() ?>€</li>
        <li>lingua: <?= $movies2->getLanguage() ?></li>
    </ul>
</body>

</html>