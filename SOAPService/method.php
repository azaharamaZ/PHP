<?php
    include "bbdd.php";

    class Metodos {
        public function example() {
            return "First Example";
        }

        public function getCity() {
            $cityList = mayorPoblacion();
            $row = mysqli_fetch_array(($cityList));
            $city = $row["Name"];
            return $city;
        }
    }



?>