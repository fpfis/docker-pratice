<?php

require __DIR__.'/vendor/autoload.php';


use Symfony\Component\Yaml\Yaml;

$array = [
  'foo' => 'bar',
  'bar' => [
    'foo' => 'bar',
    'bar' => 'baz',
    'test'
  ],
];

echo Yaml::dump($array);
