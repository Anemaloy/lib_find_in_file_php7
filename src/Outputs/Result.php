<?php


namespace SearchEngine\Outputs;


interface Result
{
    public function isFound(): bool;

    public function charPosition(): int;
}