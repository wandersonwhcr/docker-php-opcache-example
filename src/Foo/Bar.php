<?php

namespace Foo;

use Baz\Qux;

class Bar
{
    public function __construct(private Qux $qux)
    {
    }

    public function getQux(): Qux
    {
        return $this->qux;
    }
}
