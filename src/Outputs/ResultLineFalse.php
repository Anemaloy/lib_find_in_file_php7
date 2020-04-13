<?php


namespace SearchEngine\Outputs;


class ResultLineFalse implements Result
{
    public function isFound(): bool
    {
        return false;
    }

    public function charPosition(): int
    {
        return 0;
    }
}