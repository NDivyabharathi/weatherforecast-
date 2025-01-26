<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='air';


    try
    {
        $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
        //echo "Connection successful";
    }
    catch(mysqli_sql_exception){

        echo "Server Not Connect!";
    }


?>