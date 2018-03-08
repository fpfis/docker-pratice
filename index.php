<?php

require __DIR__.'/vendor/autoload.php';


use Symfony\Component\Yaml\Yaml;

$array = array(
    'foo' => 'bar',
    'bar' => array('foo' => 'bar', 'bar' => 'baz'),
);

echo Yaml::dump($array);
$tree='*';
$start_time = time();
while (1) {
    $tree = $tree.'*';
    print($tree."\n");
    $a++;
    if ($a > 10){
    	$a = 1;
	$tree = '*';
    }
    if ((time() - $start_time) > 1) {
      return false; // timeout, function took longer than 300 seconds
    }
}
