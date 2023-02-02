<?php

$postJSON = file_get_contents("php://input");
$dataArr = json_decode($postJSON, TRUE);

var_dump($dataArr);

$conf = new Runconfig();
$conf->set_statusValue(1);

echo $conf->get_statusValue();
echo "hej";
class Runconfig
{
    public $parameter;
    public $statusValue;
    public $stationId;

    public function set_parameter($prm){
        $this->parameter = $prm;
    }

    public function get_parameter(){
        return $this->parameter;
    }

    public function set_statusValue($statvalue){
        $this->statusValue = $statvalue;
    }

    public function get_statusValue(){
        return $this->statusValue;
    }

    public function set_stationId($id){
        $this->stationId = $stationId;
    }

    public function get_stationId(){
        return $this->stationId;
    }

}

?>