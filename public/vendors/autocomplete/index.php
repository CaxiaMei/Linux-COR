<?php  

 	$connection = mysqli_connect("localhost", "root", "");
	mysqli_select_db($connection, "servic64_igni870");
	$result = mysqli_query($connection, "SELECT * FROM persona");
	$array = array();
	if($result){
		while ($row = mysqli_fetch_array($result)) {
			$equipo = utf8_encode($row['nombre']);
			array_push($array, $equipo); // equipos
		}
	}
?>

<html>
<head>
	<title>Autocomplete</title>
</head>
<body>

	<input id="tag">
	<br>
	<label>Equipo:</label>
	<h2 id="nombre"></h2>
	<script type="text/javascript" src="jquery-1.12.1.min.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="jquery-ui.css">-->
	<script type="text/javascript" src="jquery-ui.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			var items = <?= json_encode($array) ?>;
			var items = ["Brenda","Jose Andres","Roberto","Ricardo","Marco","ROBERTO","mayra","ximena","luis manuel","Carmen Alejandra"];

			$("#tag").autocomplete({
				source: items,
				select: function (event, item) {
					console.log(item.item.value); //dato elegido 
					var params = {
						equipo: item.item.value
						
					};
//					$.get("getEquipo.php", params, function (response) {
						
//						console.log(response);
//						var json = JSON.parse(response);
//						if (json.status == 200){
//							$("#nombre").html(json.nombre);
//						}else{
//
//						}
//					}); // ajax
				}
			});
		});
	</script>

</body>
</html>