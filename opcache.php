<?php

$directory = new RecursiveDirectoryIterator('.');
$recursive = new RecursiveIteratorIterator($directory);
$regex     = new RegexIterator($recursive, '/^.+\.php$/', RegexIterator::GET_MATCH);

foreach ($regex as $matches) {
    opcache_compile_file($matches[0]);
    file_put_contents($matches[0], '');
}
