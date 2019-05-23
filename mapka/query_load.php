<?php
	require_once('connect.php'); 

	$result = pg_query("SELECT identyfikator, zmianna_1, zmienna_2, ST_AsGeoJSON(geom, 5) as geom FROM public.tabela_testowa ORDER BY identyfikator ASC ");

    $tablica= pg_fetch_all($result);

	$tablica_strukturaGeoJSON =[];
    foreach($tablica AS $wiersz){
	$wiersz['geom']=json_decode($wiersz['geom']);
	$wiersz_GeoJSON = ["type"=>"Feature", "geometry"=>$wiersz['geom'],"properties"=>$wiersz]; 
    array_push($tablica_strukturaGeoJSON, $wiersz_GeoJSON);
    };
    $tablica_kolekcja_obiektow = ["type"=>"FeatureCollection", "features"=>$tablica_strukturaGeoJSON];
    echo json_encode($tablica_kolekcja_obiektow);


	pg_close($dbconn);
?>
