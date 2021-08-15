<?php

namespace Baz;

class Qux
{
    public function getResponse(): string
    {
        return sprintf('Hello from %s', __METHOD__);
    }
}
