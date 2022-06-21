<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
include "book.php";
include "author.php";

    $authors[] = new Author("J.K.", "Rowling", "napsala knihy o Harry Potterovi");
    $authors[] = new Author("Alex",  "Pavesi", 'napsal knihu "Osm detektivů"');
    $authors[] = new Author("Chris", "Carter", 'napsal knihu "Noční lovec"');
    $authors[] = new Author("Kris", "Waldherr", 'napsal knihu "Ztracená historie snů"');

    $books[] = new Book("1", "Harry Potter a Kámen mudrců", "9781408855652", "342", $authors[0]->firstname." ".$authors[0]->lastname);
    $books[] = new Book("2", "Harry Potter a Fénixův řád", "9780605064225", "800", $authors[0]->firstname." ".$authors[0]->lastname);
    $books[] = new Book("3", "Osm detektivů", "9788073356965", "376", $authors[1]->firstname." ".$authors[1]->lastname);
    $books[] = new Book("4", "Noční lovec", "9788075077257", "328", $authors[2]->firstname." ".$authors[2]->lastname);
    $books[] = new Book("5", "Ztracená historie snů", "9788075930767", "480", $authors[3]->firstname." ".$authors[3]->lastname);
    
    echo "<table><tr><th>Pořadí</th><th>Název knihy</th><th>ISBN</th><th>Počet stránek</th><th>Autor</th>";
    for ($i=0; $i < count($books); $i++) { 
    echo "<tr><td>".$books[$i]->poradi."</td>";
    echo "<td>".$books[$i]->name."</td>";
    echo "<td>".$books[$i]->ISBN."</td>";
    echo "<td>".$books[$i]->pagesCount."</td>";
    echo "<td>".$books[$i]->author."</td>";
    echo "</tr>";
}
    echo "<table>";
    ?>
</body>
</html>