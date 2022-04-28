<?php

    class DbConfig {
        protected $serverName;
        protected $userName ;
        protected $passWord;
        protected $dbName;
        protected $connect;
        
        
        function DbConfig(){
            $this->dbName="temperature";
            $this->passWord="lytill53";
            $this->userName="root";
            $this->serverName="localhost";

            
        }

    
    }

?>