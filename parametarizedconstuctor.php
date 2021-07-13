<?php

    class Books{
        private $name;
        private $author;
        private $price;

        function __construct($name,$author,$price)
        {
            $this->name = $name;
            $this->author = $author;
            $this->price = $price;
        }

      public function display()
        {
            echo "Book Name : ".$this->name. "<br>". "Author : ".$this->author."<br>"."Price : ".$this->price."<br><br><br>";

        }
    }

    $book1 = new Books("Balyakalasakhi","Basheer",220);
    $book1->display();
    $book2 = new Books("Mathilukal","Basheer",200);
    $book2->display();
?>