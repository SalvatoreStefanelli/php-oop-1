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

$first_movie = new Movie('Step Up', 73, 2006);