<?php  

include('connect_pg.php');

$pgInstance = new PGConnection ();

$connection = $pgInstance->dbConnection;

//echo $pgInstance->GetStationList(5);
echo $pgInstance->GetStationRunList(5);


?>














