<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Foo extends Controller
{
    private $some;
    public function __construct(SomeInterface $some)
    {
$this->some = $some;
    }

    public function someMethod() {
        dd('foobar', $this->some);
    }
}
