<?php


namespace SearchEngine\Sources;

use Iterator;

class LocalFile implements Sources
{
    protected $file;

    public function __construct(string $filename)
    {
        $this->file = fopen($filename, 'r');
        if (!$this->file) {
            throw new \InvalidArgumentException();
        }
    }


    public function getIterator(): Iterator
    {
        while ($line = fgets($this->file)) {
            yield $line;
        }
        fclose($this->file);
    }
}