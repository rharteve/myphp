<?php

function datum() {
      date_default_timezone_set('UTC');
     // echo date('l');

     $datum=date("l d-m-y"); 
     return  $datum;

}


// MAIN
$mydatum=datum();
     print("Hello World - Greetings from RoHa op $mydatum \n");

     sleep(10);
?>
