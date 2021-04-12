<?php 
	$seudonimo = $_GET['equipo'];
 	$connection = new mysqli("localhost", "root", "","servic64_igni870");

	$sql = "SELECT * FROM persona WHERE nombre LIKE '%$seudonimo%' ";
	$result = $connection->query($sql);
	//echo "<br>".$result->num_rows;
	if ($result->num_rows > 0) {
		$equipo = $result->fetch_object();
		
//		while ($equipoh = $result->fetch_object()) {
//        echo "jjjjj". $equipoh->nombre;
//    	}
		
		$equipo->status = 200;
		echo json_encode($equipo);
	}else{
		$error = array('status' => 400);
		echo json_encode((object)$error);
	}