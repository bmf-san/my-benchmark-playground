<?php

set_time_limit(120);
function fib($n)
{
    if ($n <= 1) {
        return $n;
    }
    return fib($n - 1) + fib($n - 2);
}

$start_date  = microtime(true);
echo ("Start[Memory Usage]：" . memory_get_usage() / (1024 * 1024) . "MB" . PHP_EOL);
echo ("Start[Memory Peak Usage]：" . memory_get_peak_usage() / 1024 . "KB\n" . PHP_EOL);
print fib(40);
echo ("Finish[Memory Usage]：" . memory_get_usage() / (1024 * 1024) . "MB\n" . PHP_EOL);
echo ("Finish[Memory Peak Usage]：" . memory_get_peak_usage() / 1024 . "KB\n" . PHP_EOL);
$end_date = microtime(true);
echo ("[Elapsed Time]：" . ($end_date - $start_date) . "秒\n");
