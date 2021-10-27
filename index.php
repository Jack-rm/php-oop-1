<?php 

    class Movie {

        public $id;
        public $title;
        public $plot;
        public $genre;
        public $run_time;
        public $release_date;
        public $director;
        public $actors = array();

        /**
         * Create a class 'Movie'
         * 
         * @param int $id unique identification code
         * @param string $title movie title
         * @param string $plot movie plot
         * @param string $genre movie genre
         * @param int $run_time movie screen time length (min)
         * @param string $release_date movie release date
         * @param string $director director of the movie
         * @param array $actors movie cast
         */
        function __construct($id, $title, $plot, $genre, $run_time, $release_date, $director, $actors){

            $this->id = $id;
            $this->title = $title;
            $this->plot = $plot;
            $this->genre = $genre;
            $this->run_time = $run_time;
            $this->release_date = $release_date;
            $this->director = $director;
            $this->actors = $actors;
        }

        /**
         * Get title property
         *
         * @return string the title of the movie
         */
        public function getTitle(){
            return $this->title;
        }

        /**
         * Get genre property
         *
         * @return string the genre of the movie
         */
        public function getGenre(){
            return $this->genre;
        }

        /**
         * Get run_time property
         *
         * @return int movie screen time (minutes)
         */
        public function getRunTime(){
            return $this->run_time;
        }

        /**
         * Get director property
         *
         * @return string movie director's name
         */
        public function getDirector(){
            return $this->director;
        }
    };

    $TheMatrix = new Movie(25, "The Matrix", "Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. As a rebel against the machines, Neo must confront the agents: super-powerful computer programs devoted to stopping Neo and the entire human rebellion", "Sci-fi", 136, "04/23/1999", "The Wachowskis", ["Keanu Reeves", "Laurence Fishburne", "Carrie-Anne Moss", "Hugo Weaving", "Joe Pantoliano"]);
    
    $Dune = new Movie(30, "Dune","A mythic and emotionally charged hero\'s journey, Dune tells the story of Paul Atreides, a brilliant and gifted young man born into a great destiny beyond his understanding, who must travel to the most dangerous planet in the universe to ensure the future of his family and his people. As malevolent forces explode into conflict over the planet's exclusive supply of the most precious resource in existence-a commodity capable of unlocking humanity's greatest potential-only those who can conquer their fear will survive", "science fiction", 156, "09/03/2021", "Denis Villenueve", ["Timothèe Chalamet", "Rebecca Ferguson", "Oscar Isaac", "Josh Brolin", "Stellan Skarsgàrd", "Dave Bautista", "Stephen McKinley"]);
;
?>
