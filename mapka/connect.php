<?php
    
    require_once('database.php');

    $polaczenie_tekst="host=$db_host port=$db_port dbname=$db_name user=$db_user password=$db_pass";
    
    $dbconn=pg_connect ($polaczenie_tekst); 
    
    $status=pg_connection_status($dbconn);
    
    //if ($status===PGSQL_CONNECTION_OK) {
//        echo "OK";
//    } else {
//        echo "Connection status bad";
//    }
?>