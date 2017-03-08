<?php

namespace Test;

class Test
{

    public $member;

    public function __construct()
    {
        $this->member = 'Hello';
    }

    public static function factory()
    {
        return new static;
    }

    public function get()
    {
        return hello;
    }
}
