<?php

require_once 'physicalbook.php';
require_once 'digitalbook.php';



$book = new Book('Art Of War', 'Tsun Zu', 3500);
$physicalbook = new physicalbook('Art Of War', 'Tsun Zu', 3500,7);
$digitalbook = new Digitalbook('The 48 Laws Of Power','Robert Greene',2000,1024);


print $physicalbook->print().PHP_EOL . "<br>";
print $digitalbook->print().PHP_EOL . "<br>";
print $book->print(). "<br>";

