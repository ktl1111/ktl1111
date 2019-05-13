<?php
$q = intval($_GET['q']);

$con = mysqli_connect('192.168.0.200:3307','root','1234','winlites');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM factory WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['factory_tel'] . "</td>";
    echo "<td>" . $row['factory_mobile'] . "</td>";
    echo "<td>" . $row['factory_address'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
