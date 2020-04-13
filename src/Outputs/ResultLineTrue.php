<?php


namespace SearchEngine\Outputs;


class ResultLineTrue implements Result
{
    private $position;

    public function __construct($position)
    {
        $this->position = $position;
    }

    public function isFound(): bool
    {
        return $this->position !== null;
    }

    public function charPosition(): int
    {
        return $this->position;
    }
}