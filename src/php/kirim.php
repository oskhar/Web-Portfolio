<?php 

$str = file_get_contents('config/con.json/');
$json = json_decode($str, true);
$serverConfig = $json['server'];
$conn = mysqli_connect($serverConfig['url'], $serverConfig['hostname'], $serverConfig['password'], $serverConfig['dbname']);
$ip = $_POST['ip'];


if (isset($_POST['pesan'])) {
	if ($_POST['pesan'] != "") {
		$pesan = $_POST['pesan'];

		$query = "INSERT INTO dataKomentar
					VALUES
					('$ip','$pesan')";

		mysqli_query($conn,$query);
	}
}
?>