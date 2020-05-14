<?php

require_once "../config/global.php";


$conexion = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);


/*
if(mysqli_connect_errno()){


        echo "No conecta a la base de datos", DB_NAME;

}
else{
    echo "Si conecta la base de datos ",DB_NAME;
}
*/
?>