<?php
    class Book {
            public string $poradi;
            public string $name;
            public string $ISBN;
            public string $pagesCount;
            public string $author;
            public function __construct($poradi, $name, $ISBN, $pagesCount, $author){
                $this->poradi = $poradi;
                $this->name = $name;
                $this->ISBN = $ISBN;
                $this->pagesCount = $pagesCount;
                $this->author = $author;
                }
        }