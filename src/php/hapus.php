<?php

$str = file_get_contents('config/con.json/');
$json = json_decode($str, true);
$serverConfig = $json['server'];
$conn = mysqli_connect($serverConfig['url'], $serverConfig['hostname'], $serverConfig['password'], $serverConfig['dbname']);

$sql = "DELETE FROM dataKomentar WHERE komen='" . $_POST["komen"] . "'";
if ($_POST["sandiAkses"] == "jjk7") {
	mysqli_query($conn, $sql);
} else{
    echo "";
}
?>