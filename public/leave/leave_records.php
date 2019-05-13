<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '寄件追蹤'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>


<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
th {
  text-align: left;
}
</style>

<!--這個檔案應該是給BT(和管理員)登入時可以看而已!!CMS -->

<!-- Page Content -->
<div class="container">
            <!-- Heading Row -->
            <div class="row my-4">
<div class='col'>

<?php
$con=mysqli_connect("192.168.0.200:3307","root","1234","winlites");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM leave_system");
?>

<table border='1'>
<tr>
<th>假別</th>
<th>請假日期起</th>
<th>請假日期迄</th>
<th>請假時間起</th>
<th>請假時間迄</th>
<th>代理人</th>
<th>留言</th>
<th>&nbsp;</th>

</tr>


<?php while($row = mysqli_fetch_array($result))
{ ?>
<tr>
  <td><?php echo h($row['leavetype']); ?></td>
  <td><?php echo h($row['leave_date_from']); ?></td>
  <td><?php echo h($row['leave_date_to']); ?></td>
  <td><?php echo h($row['leave_time_from']); ?></td>
  <td><?php echo h($row['leave_time_to']); ?></td>
  <td><?php echo h($row['substitute']); ?></td>
  <td><?php echo h($row['message']); ?></td>

  <td><a class="action" href="<?php echo url_for('/shipping/show.php?id=' . h(u($row['id']))); ?>">統計</a></td>
</tr>
<?php } ?>
</table>

<?php
mysqli_close($con);
?>

<br>
<a class="back-link" href="<?php echo url_for('/leave/index.php'); ?>">&laquo; 回上一頁</a> <br>
</div>


</div>
<!-- /.row -->

</div>
<!-- /.container -->


<?php include(SHARED_PATH . '/footer.php'); ?>
