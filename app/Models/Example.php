<?php

namespace App\Models;

class Example
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function handle()
    {
        die('it works');
    }
}
