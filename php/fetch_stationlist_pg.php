<?php  

include('connect_pg.php');

$pgInstance = new PGConnection ();

$connection = $pgInstance->dbConnection;


echo $pgInstance->GetStationRunList(5);

?>














