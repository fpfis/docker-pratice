<?php

require __DIR__.'/vendor/autoload.php';


use Symfony\Component\Yaml\Yaml;

$array = array(
    'foo' => 'bar',
    'bar' => array('foo' => 'bar', 'bar' => 'baz'),
);

echo Yaml::dump($array);
$a=0;
$tree='*';
while (1) {
    for ($a; $a>0; $a--){
    	$tree = $tree.'*';
    }
    print($tree."\n");
    $a++;
}
