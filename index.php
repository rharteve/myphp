<?php

function datum() {
      date_default_timezone_set('UTC');
     // echo date('l');

     $datum=date("l d-m-y"); 
     return  $datum;
}

function minutes(){
     date_default_timezone_set('UTC');
     $minutes=date("i");
     return $minutes;

}

function get_cpu(){
     $load = sys_getloadavg();
     return $load[0];
}


// MAIN
$wachttijd=6;
$aantalminuten=15;
$powerme=1000000000;

$myminutes=minutes();
printf("Minutes = %d \n", $myminutes);
$maxminutes=$myminutes + $aantalminuten;
if ( $maxminutes > 59 ){
   $maxminutes = $maxminutes - 60;
}

$mydatum=datum();
     printf("Wacht op sleeptijd %d .....", $wachttijd);
     sleep($wachttijd);
     print("klaar \n");
while ( minutes() < $maxminutes ) {

         for($x=0; $x< $powerme ; $x++) {
         } // next x

        $mycpu=get_cpu();
        printf("%d - CPU LOAD AVAGE = %.2f %% \n", minutes(), $mycpu);
}

$myminutes=minutes();
printf("Minutes = %d \n", $myminutes);
?>
