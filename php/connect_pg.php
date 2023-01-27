<?php
 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);
 


class PGConnection
{
    private $host        = "host = 192.168.86.22";
    private $port        = "port = 5432";
    private $dbname      = "dbname = smhi";
    private $credentials = "user=anders password=quilla";

    public $dbConnection;
    
    public
    function __construct()
    {
    
         $this->dbConnection = pg_connect( "$this->host $this->port $this->dbname $this->credentials"  );
    }

    protected
    function query_executed ($sql)
    {
        
        
    }

    public function GetStationList($limit)
    {
        $sql = "SELECT station_id, station_name, from_date, to_date, active FROM public.stations order by station_name limit $limit;";
        $ret = pg_query($this->dbConnection, $sql);
        while ($row = pg_fetch_array($ret))
        {
            $data[] = $row;
        }

        return json_encode($data);
    }

    public function GetStationRunList($limit)
    {
        $sql = "select s.station_id ,s.station_name, s.from_date , s.to_date, s.active ,r.latest_hour::int, r.latest_day::int , r.latest_months::int , r.archive::int  ";
        $sql .= " from stations s inner join runconfig r on s.station_id =r.station_id order by station_name limit $limit";

        $ret = pg_query($this->dbConnection, $sql);

        while ($row = pg_fetch_array($ret))
        {
            $data[] = $row;
        }
        return json_encode($data);

    }

    public function GetDBConnection()
    {
        return $this->dbConnection;
    }
    public function test_select()
    {
        $dbConnection = $this->dbConnection;
        $sql = "select station_name from public.stations";
        $ret = pg_query($dbConnection, $sql);

        while ($row = pg_fetch_row($ret))
        {
            $stationName = "stationsNamn = " . $row[0] . "\n";
            echo $stationName;
        }

    }
    public
    function get_rows ($fields, $id=NULL, $tablename = NULL)
    {
        // $cn = !emptyempty($id) ? " WHERE $id " : " ";  
        // $fields = !emptyempty($fields) ? $fields : " * ";  
        // $sql = "SELECT $fields FROM $tablename $cn";  
        // $results = $this -> query_executed($sql);  
        // $rows = $this -> get_fetch_data($results);  
        // return $rows;  
    }


}



?>