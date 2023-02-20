<?php
include_once('./Dto/RunconfigDto.php');
include_once('./Repository/update_station.php');
include_once('connect_pg.php');

$postJSON = file_get_contents("php://input");
$dataArr = json_decode($postJSON, TRUE);

$pgInstance = new PGConnection ();

var_dump($dataArr);

$conf = new Runconfig();
$repo = new UpdateSmhi($pgInstance->dbConnection);

$stationId = $dataArr['station'];
$settingValue = $dataArr['setting'] == "1" ? "t" : "f";
$parameter = $dataArr['prm'];

$conf->set_statusValue($settingValue);
$conf->set_stationId($stationId);
$conf->set_parameter($parameter);

echo $repo->UpdateRunconfig($conf);

?>