<?php

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
        $this->stationId = $id;
    }

    public function get_stationId(){
        return $this->stationId;
    }

}


?>