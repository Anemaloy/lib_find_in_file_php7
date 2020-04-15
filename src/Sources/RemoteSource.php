<?php


namespace SearchEngine\Sources;

use Iterator;

class RemoteSource implements Sources
{
    protected $file;

    public function __construct(string $url)
    {

        $ch = curl_init($url);
        $fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/temp.txt', 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        $this->file = file($url);

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