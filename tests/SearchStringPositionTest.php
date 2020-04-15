<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class SearcherEngineTest extends TestCase
{

    public function testSearchTrue()
    {
        $searchType = new \SearchEngine\SearchTypes\SearchStringPosition();
        $string_from_file = 'In mathematics, the Fibonacci numbers, commonly denoted';
        $result = $searchType->search($string_from_file, 'mathematics');
        $this->assertEquals(true, $result->isFound());
        $this->assertEquals(3, $result->charPosition());
    }


    public function testSearchFalse()
    {
        $searchType = new \SearchEngine\SearchTypes\SearchStringPosition();
        $line = 'In mathematics, the Fibonacci numbers, commonly denoted';
        $result = $searchType->search($line, 'ResultFalse');
        $this->assertEquals(false, $result->isFound());
        $this->assertEquals(0, $result->charPosition());
    }
}