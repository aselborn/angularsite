<?php 

    include 'dbConfig.php';

    class DbFetch extends DbConfig{
        
        public $connectionstring;

        function DbFetch(){
            $this->connectionstring = null;
        }
    }

    

?>