<?php

    $config = parse_ini_file("config.ini");

    //$config = parse_ini_file("database/config.ini");   

        
    extract($config);

    
    /*
        echo '<br>';echo '<br>';

        var_dump($config);

        echo '<br>';echo '<br>';

        echo $type;

        echo '<br>';echo '<br>';

        echo $host;

        echo '<br>';echo '<br>';

        echo $database;

        echo '<br>';echo '<br>';

        echo $user;

        echo '<br>';echo '<br>';
        echo '<br>';echo '<br>';  

        var_dump($_GET['nome']);

        echo '<br>';echo '<br>';  
        echo '<br>';echo '<br>';
        
        
    */


    $conn = new PDO("$type:host=$host;dbname=$database", $user, $password);
    
    $sql = "SELECT nome, data_de_nascimento FROM nome WHERE nome= '" . $_GET['nome'] . "'";

    $query = $conn->query($sql);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    

    foreach ($result as $k => $v) {
        
        echo $k . ": \t" . $v . "<br>";

    }
    
    $conn = null;





?>