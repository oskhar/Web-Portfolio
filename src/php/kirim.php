<?php 
$conn = mysqli_connect("localhost", "moskharm_user", "g8N7a6O5d4S3e2T1", "moskharm_oskhar");
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