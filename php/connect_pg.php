<?php
 ini_set ('display_errors', 'on');
 ini_set ('log_errors', 'on');
 ini_set ('display_startup_errors', 'on');
 ini_set ('error_reporting', E_ALL);
 


class PGConnection
{
    private $host        = "host = 127.0.0.1";
    private $port        = "port = 5432";
    private $dbname      = "dbname = smhi";
    private $credentials = "user=anders password=quilla";

    
    
    public
    function __construct()
    {
        
         $db = pg_connect( "$this->host $this->port $this->dbname $this->credentials"  );
        if(!$db) {
            echo "Error : Unable to open database\n";
        } else {
            echo "Opened database successfully\n";
        }

    }

    protected
    function query_executed ($sql)
    {
        
        
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

    public function get_stations()
    {
        // $sql = "SELECT * FROM stations s;";
        // $result = $this->query_executed($sql);
        // $rows = $this -> get_fetch_data($result);
        // return $rows;
    }

    protected
    function get_fetch_data($r)  
    {  
        // $array = array();  
        // while ($rows = pg_fetch_assoc($r))  
        // {  
        //     $array[] = $rows;  
        // }  
        // return $array;  
    }    

}



?>