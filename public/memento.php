<?php

use App\Memento\Originator;
use App\Memento\Caretaker;

require_once '../vendor/autoload.php';

$originator = new Originator("First state in constructor");
$caretaker = new Caretaker($originator);

$caretaker->backup();
$originator->handleState();

$caretaker->backup();
$originator->handleState();

$caretaker->backup();
$originator->handleState();

echo "\n";
$caretaker->showHistory();

echo "\nClient: Now, let's rollback!\n\n";
$caretaker->undo();

echo "\nClient: Once more!\n\n";
$caretaker->undo();

echo "\nClient: Once more!\n\n";
$caretaker->undo();