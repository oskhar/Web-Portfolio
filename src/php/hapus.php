<?php
$conn = mysqli_connect("localhost", "moskharm_user", "g8N7a6O5d4S3e2T1", "moskharm_oskhar");
$sql = "DELETE FROM dataKomentar WHERE komen='" . $_POST["komen"] . "'";
if ($_POST["sandiAkses"] == "jjk7") {
	mysqli_query($conn, $sql);
} else{
    echo "";
}
?>