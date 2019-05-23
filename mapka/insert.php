<?php
require_once('connect.php');

$var1 = $_POST["stokrotka1"];
$var2 = $_POST["stokrotka2"];
$varDL = $_POST["stokrotkaDL"];
$varSZ = $_POST["stokrotkaSZ"];

if(pg_query("INSERT INTO public.tabela_testowa(
            zmianna_1, zmienna_2, geom)
    VALUES ('$var1', '$var2', ST_GeomFromEWKT('SRID=4326; POINT($varDL $varSZ)'));")){
    echo "Dane wprowadzono poprawnie";
}else{
    echo "Dane nie zostały wprowadzone";
}
    
pg_close($dbconn);
?>