<?php
require_once 'vendor/autoload.php';


$source = new \SearchEngine\Sources\LocalFile('test.txt');

$searchType = new \SearchEngine\SearchTypes\SearchStringPosition();

$detector = new \SearchEngine\SearchEngine($source, $searchType);

$result = $detector->search('ghfg');