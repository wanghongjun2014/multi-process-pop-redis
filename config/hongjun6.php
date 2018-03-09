<?php

$g_count = 0;


function init($work)
{

    echo "init\n";
    echo PHP_EOL;
}
function run($worker, $data) {
    global $g_count;
    $g_count++;
    sleep(5);
    echo "run函数里面的内容\r\n";
}