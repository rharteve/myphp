<?php


$start = microtime(true);
// keep calling microtime for about 3 seconds
while(microtime(true) - $start < 30) {
 
}
 
$data = getrusage();
echo "\nUser time: ".
    ($data['ru_utime.tv_sec'] +
    $data['ru_utime.tv_usec'] / 1000000);
echo "\nSystem time: ".
    ($data['ru_stime.tv_sec'] +
    $data['ru_stime.tv_usec'] / 1000000);
echo "\n" 

?>
