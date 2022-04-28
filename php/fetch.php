<?php 

    $userName = 'root';
    $serverName = 'localhost';
    $password = 'lytill53';

    try{
        $connect = new PDO("mysql:host=localhost;dbname=temperature", "root", "lytill53");
        
    } catch(PDOException $e){
        echo "Error " . $e->getMessage(), (int)$e->getCode();
    }
    

    $sql = "SELECT StationId, StationName FROM stations order by StationName limit 10;";
    
    $statement =$connect->prepare($sql);

    if ($statement ->execute()){
        while($row = $statement->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }
    
    }

    echo json_encode($data);


    function getData($rows){

        

    }

?>