<?php

    function createDBConnection(){

        $file_location = dirname(__DIR__);
        
        // $config_file_location = $file_location . "/config/config.ini";
        $config_file_location = $file_location . "/config/config.php";
        include_once $config_file_location;
        //$ini_array = parse_ini_file($_SERVER['DOCUMENT_ROOT']."/crabroom/config/config.ini");
        // $ini_array = parse_ini_file($config_file_location);

        $servername = DB_HOST;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $dbname = DB_NAME;

        //echo $servername . $username . $password . $dbname . $ini_array;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;

    }

?>
