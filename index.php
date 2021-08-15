<?php

spl_autoload_register(function ($classname) {
    $filename = sprintf('./src/%s.php', strtr($classname, '\\', '/'));
    if (is_readable($filename)) {
        require $filename;
    }
});

$bar = new Foo\Bar(new Baz\Qux());

header('Content-Type: text/plain');

var_dump($bar);
var_dump($bar->getQux()->getResponse());
