<?php


namespace SearchEngine\Outputs;

use SearchEngine\Outputs\Result;

class StringOnFileTrue
{
    private $number;
    private $position;

    public function __construct(int $number, int $position)
    {
        $this->number = $number;
        $this->position = $position;
    }

    public function charPosition(): int
    {
        return $this->position;
    }

    public function lineNumber(): int
    {
        return $this->number;
    }

    public function isFound(): bool
    {
        return false;
    }
}