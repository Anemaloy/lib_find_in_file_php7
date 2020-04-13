<?php


namespace SearchEngine\SearchTypes;

use SearchEngine\Outputs\Result;

interface SearchTypes
{
    public function search(string $where, string $what): Result;
}