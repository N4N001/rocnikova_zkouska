<?php
    class Author {
            public string $firstname;
            public string $lastname;
            public string $description;
            public function __construct($firstname, $lastname, $description){
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->description = $description;
                }
        }