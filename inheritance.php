<?php

require_once 'book.php';

$physicalBook = new Book('A random book', 'jane doe', 2000);
$digitalBook = new Book('A random book', 'jane doe', 3000);

print $physicalBook->getFilesize() . PHP_EOL;
print $digitalBook->getWeight() . PHP_EOL;



?>