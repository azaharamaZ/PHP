<?php

    function connection() {
        $host = "localhost";
        $user = "root";
        $psw = "";
        $db = "world";

        $connection = mysqli_connect($host, $user, $psw, $db);
        if(!$connection){
            die("<br>Error de conexión: " . mysqli_connect_error());
        }
        else {
            echo "<br>Conectada" . $db;
        }

        return $connection;
    }

    function mayorPoblacion() {
        $con = connection();

        $sql = "SELECT * FROM city WHERE Population = (SELECT MAX(Population) FROM city)";
        $res = mysqli_query($con, $sql);
        if($res > 0) {
            return $res;
        }
        else {
            "Vaya, algo no va bien.";
        }
    }

    function closeConnection($conn) {
        mysqli_close($conn);
    }

?>