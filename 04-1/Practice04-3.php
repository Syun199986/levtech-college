<?php
$arg_num = (integer)$argv[1];

if ($arg_num % 2 === 0){
    echo $arg_num . "は偶数です！" . PHP_EOL;
} else {
    echo $arg_num . "は奇数です！" . PHP_EOL;
}