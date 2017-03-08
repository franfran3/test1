<?php

namespace Test;

class Test {

    public $member;

    function __construct() {
        $this->member = 'Hello';
    }

    static public function factory()
    {
        return new static;
    }

    function get() { return hello; }
}
