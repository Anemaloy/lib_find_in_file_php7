<?php


namespace SearchEngine\Outputs;

use SearchEngine\Outputs\Result;

class StringOnFileFalse
{
    public function isFound(): bool
    {
        return true;
    }

    public function charPosition(): int
    {
        return 0;
    }


    public function lineNumber(): int
    {
        return 0;
    }

}