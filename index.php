<?php

require __DIR__.'/vendor/autoload.php';


use Symfony\Component\Yaml\Yaml;

$array = array(
    'foo' => 'bar',
    'bar' => array('foo' => 'bar', 'bar' => 'test'),
);

echo Yaml::dump($array);
echo "\n\n<br><br>Job done - Florin :)\n\n";
