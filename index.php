<?php

class Movie 
{
    public $title;
    public $duration;
    public $years_of_release;

    /**
     * @param String $title The movie's title
     * @param Duration $duration The movie's duration
     * @param Number $years_of_release The movie's years of release
     */

     public function __construct($title, $duration, $years_of_release)
     {
        $this->title = $title;
        $this->duration = $duration;
        $this->years_of_release = $years_of_release;
     }
}

class Duration {
    public $hour;
    public $word;
    public $minutes;
    public $word_2;

    public function __construct($hour, $word, $minutes, $word_2) {
        $this->hour = $hour;
        $this->word = $word;
        $this->minutes = $minutes;
        $this->word_2 = $word_2;
    }

    public function getFullDuration() {
        return $this->hour . ' ' . $this->word . ' ' . $this->minutes . ' ' . $this->word_2;
    }
    
}

$duration_1= new Duration(1, 'ora', 13, 'minuti'); 
$duration_2= new Duration(2, 'ore', 05, 'minuti'); 
var_dump($duration_1, $duration_2);

$step_up = new Movie('Step Up', $duration_1, 2006);
$creed = new Movie('Creed', $duration_2, 2013);

var_dump($step_up->duration->getFullDuration());
var_dump($creed->duration->getFullDuration());