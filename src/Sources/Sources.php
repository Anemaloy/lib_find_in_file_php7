<?php


namespace SearchEngine\Sources;

use Iterator;

interface Sources
{
    public function getIterator() : Iterator;
}