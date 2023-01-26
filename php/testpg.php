<?php

include('connect_pg.php');

$obj = new PGConnection ();  

$a = $obj->get_stations();
     

    // $a = $obj-> get_rows (implode(",",array("station_id","station_name")), '' , "stations") ; // there are pass two parameters one is table fields and second is table name  
    // echo "<pre>";  
    //     print_r($a);  
    // echo "</pre>";

?>