<?php


namespace SearchEngine\SearchTypes;

use SearchEngine\Outputs\Result;
use SearchEngine\Outputs\ResultLineTrue;
use SearchEngine\Outputs\ResultLineFalse;

class SearchStringPosition implements SearchTypes
{
    public function search(string $source, string $str): Result
    {
        $position = strpos($source, $str);
        if ($position !== false) {
            return new ResultLineTrue($position);
        } else {
            return new ResultLineFalse();
        }
    }
}