<?php
class Movie {
    public $title;
    public $actor;
    public $relase_date;
    public $directory;
    public function __construct($title, $directory, $actor, $relase_date){
        $this->title = $title;
        $this->directory = $directory;
        $this->actor = $actor;
        $this->relase_date = $relase_date;
    }
    public function getHello(){
        return $this->title ;
    }
    public function introduce(Movie $movie){
        echo "Ciao {$movie->getHello()}, sono {$this->title}";
    }
}