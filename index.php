<?php

function datum() {
      date_default_timezone_set('UTC');
     // echo date('l');

     $datum=date("l d-m-y"); 
     return  $datum;

}

function get_cpu(){
     $load = sys_getloadavg();
     return $load[0];
}


// MAIN
$wachttijd=6;
$teltot=200;
$powerme=100000000;
$mydatum=datum();
     printf("Wacht op sleeptijd %d .....", $wachttijd);
     sleep($wachttijd);
     print("klaar \n");
     for ( $i=0; $i < $teltot; $i++){
     //        $mydatum=datum();
         for($x=0; $x< $powerme ; $x++) {
         } // next x

        $mycpu=get_cpu();
        printf("%d - CPU LOAD AVAGE = %.2f %% \n", $i, $mycpu);
    } // next i
?>
