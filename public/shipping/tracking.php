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

$result = mysqli_query($con,"SELECT * FROM shipping");
?>

<table border='1'>
<tr>
<th>寄件日期</th>
<th>寄件人</th>
<th>客戶(ship to)</th>
<th>內容</th>
<th>快遞公司</th>
<th>提單號碼</th>
<th>&nbsp;</th>

</tr>


<?php while($row = mysqli_fetch_array($result))
{ ?>
<tr>
  <td><?php echo h($row['send_date']); ?></td>
  <td><?php echo h($row['maker']); ?></td>
  <td><?php echo h($row['factory_customer_name']); ?></td>
  <td><?php echo h($row['commodity']); ?></td>
  <td><?php echo h($row['shipper']); ?></td>
  <td><?php echo h($row['track_no']); ?></td>

  <td><a class="action" href="<?php echo url_for('/shipping/show.php?id=' . h(u($row['id']))); ?>">列印</a></td>
</tr>
<?php } ?>
</table>

<?php
mysqli_close($con);
?>

<br>
<a class="back-link" href="<?php echo url_for('/shipping/index.php'); ?>">&laquo; 回上一頁</a> <br>
</div>

<div class='col-2'>
  <p><strong>追蹤連結</strong></p>
  <ul style="list-style-type:square;" >
    <li><a href="http://www.sf-express.com/tw/tc/dynamic_function/waybill/" target="_blank">順豐</a></li>
    <li><a href="http://www.dhl.com.tw/zt/express/tracking.html" target="_blank">DHL</a></span>
    <li><a href="https://www.tnt.com/express/zh_tw/site/shipping-tools/tracking.html target="_blank"">TNT</a></li>
    <li><a href="https://www.fedex.com/zh-tw/tracking.html" target="_blank">FEDEX</a></li>
    <li><a href="https://www.ups.com/track?loc=en_US&requester=ST/" target="_blank">UPS</a></li>
    <li><a href="http://postserv.post.gov.tw/pstmail/main_mail.html" target="_blank">EMS</a></li>
  </ul>
</div> <!--col-->


</div>
<!-- /.row -->

</div>
<!-- /.container -->


<?php include(SHARED_PATH . '/footer.php'); ?>
