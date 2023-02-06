<?php 

$str = file_get_contents('config/con.json/');
$json = json_decode($str, true);
$serverConfig = $json['server'];
$conn = mysqli_connect($serverConfig['url'], $serverConfig['hostname'], $serverConfig['password'], $serverConfig['dbname']);

$result2 = mysqli_query($conn2, "SELECT * FROM dataKomentar");
?>
<?php $vlue = 1; ?>
<?php while ( $dataKomentar = mysqli_fetch_assoc($result2) ): ?>
    <font style=""><p style="font-weight: bold;">IP pengirim (<?php echo $dataKomentar['ip'] ?>):</p><p id="listKomen<?php echo $vlue ?>"><?php echo $dataKomentar['komen'] ?></p><button style="border: none;color: red; position: absolute; right: 10px; top: 10px;font-size: 20px;" onclick="hapus(<?php echo $vlue ?>)">x</button></font>
    <?php $vlue = $vlue + 1; ?>
<?php endwhile; ?>