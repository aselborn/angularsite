<?php 
/*
    Updaterar en station.!
*/



class UpdateSmhi
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function UpdateRunconfig($runconfigObject)
    {

        $sql = 'Update runconfig SET ';

        switch($runconfigObject->parameter){
            case "archive":
                $sql .= "archive = '" . $runconfigObject->get_statusValue() . "' WHERE station_id = '" . $runconfigObject->get_stationId() . "';";
                //$sql .= "archive = :status WHERE station_id = :stationId";
                break;
            case "latest_months":
                $sql .= "latest_months = " . $runconfigObject->get_statusValue() . " WHERE station_id = '" . $runconfigObject->get_stationId() . "';";
                break;

            case "latest_day":
                $sql .= "latest_day = " . $runconfigObject->get_statusValue() . " WHERE station_id = '" . $runconfigObject->get_stationId() . "';";
                break;
            case "latest_hour":
                $sql .= "latest_hour = " . $runconfigObject->get_statusValue() . " WHERE station_id = '" . $runconfigObject->get_stationId() . "';";
                break;

        }

        try{
            
            $result = pg_query($this->pdo, $sql);
            if ($result){
                return "updated";
            }

        } catch(Exception $e){
            return "error : " . $e->getMessage();
        }
        
        return "false";
    }

}

?>