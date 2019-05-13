<?php

  require_once('../../private/initialize.php');

  $con = mysqli_connect('192.168.0.200:3307', 'root', '1234');

  if(!$con)
  {
    echo 'Not Connected to Server';
  }

  if(!mysqli_select_db($con,'winlites'))
  {
    echo 'Database Not Selected';
  }

$Name = $_POST['name'];
$Comments = $_POST['comments'];

$sql = "INSERT INTO comment (Name, Comments) VALUES ('$Name', '$Comments')";

if(!mysqli_query($con,$sql))
{
  echo 'Not Inserted';
}
else
{
  redirect_to(url_for('/reportproblem/show.php'));
}
  redirect_to(url_for('/reportproblem/index.php'));
 ?>
