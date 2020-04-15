<?php


namespace SearchEngine;

use SearchEngine\Sources\Sources;
use SearchEngine\SearchTypes\SearchTypes;
use SearchEngine\Outputs\StringOnFileTrue;
use SearchEngine\Outputs\StringOnFileFalse;

class SearchEngine
{
    private $source;
    private $searchType;

    public function __construct(Sources $source, SearchTypes $searchType)
    {
        $this->source = $source;
        $this->searchType = $searchType;
    }

    public function search(string $needle)
    {
        $index = 0;
        $lines = $this->source->getIterator();
        foreach ($lines as $line) {
            $positionInLine = $this->searchType->search($line, $needle);
            if ($positionInLine->isFound()) {
                return new StringOnFileTrue($index, $positionInLine->charPosition());
            }
            $index++;
        }
        return new StringOnFileFalse();
    }
}