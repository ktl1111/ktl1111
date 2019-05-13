

<?php require_once('../../private/initialize.php'); ?>

<?php

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$shipping = find_shipping_by_id($id);

?>

<?php $page_title= '列印INV'; ?>

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
 <div class="my-4">

<div>
   <strong><u>WINLITES IND. CO., LTD.</u></strong>
<br>
   2F., No.261, Sec. 3, Nanjing E. Rd., Songshan Dist., Taipei City 105, Taiwan
<br>
  TEL: 886-2-27177239
<br>
  FAX: 886-2-27152514
<br>
  E-MAIL ADDRESS: winlites@ms36.hinet.net
<br>
 <strong><?php echo "DATE: " . $shipping['send_date'] ?></strong>
<br><br><br><br>
</div>

<div>
  <h4 align="center"><strong><u>INVOICE</u></strong></h4>
  <br>
  <?php echo "Commodity " . $shipping['commodity'] . "<br /> "; ?>
  <hr>
  <?php echo "FROM: TAIWAN TO: ". $shipping['factory_customer_name'] ."<br /> "; ?>
  <hr>
  <?php echo $shipping['factory_address'] . "<br/>"; ?>
  <hr>
  <?php echo "TEL: " . $shipping['factory_tel'] . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "M: " . $shipping['factory_mobile'] . "<br/>"; ?>
  <hr>
  <?php echo "BY " . $shipping['shipper'] . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" .  "ATTN: ". $shipping['attn'] .  "<br/>"; ?>
  <hr>
  <?php echo "備註: " . $shipping['notes'] ; ?>
  <br>
</div>

<table style="width:60%" align="center">
  <tr>
    <th>Marks & Nos.</th>
    <th>Description</th>
    <th>Q'ty</th>
    <th>Unit Price</th>
    <th>AMOUNT</th>
  </tr>
  <tr> <?php $n = 1?>
    <td><?php echo $n++ ?></td>
    <td><?php echo $shipping['description'] ?></td>
    <td><?php echo $shipping['qty'] ?></td>
    <td><?php echo $shipping['uprice'] ?></td>
    <td><?php echo  intval($shipping['qty'])*($shipping['uprice']) ?></td>
  </tr>

  <?php if (isset($shipping['qty2']) && $shipping !='') {?>
  <tr>
    <td><?php echo $n++ ?></td>
    <td><?php echo $shipping['description2'] ?></td>
    <td><?php echo $shipping['qty2'] ?></td>
    <td><?php echo $shipping['uprice2'] ?></td>
    <td><?php echo  intval($shipping['qty2'])*($shipping['uprice2']) ?></td>
  </tr>
  <?php } ?>

  <?php if (isset($shipping['qty3']) && $shipping !='') {?>
  <tr>
    <td><?php echo $n++ ?></td>
    <td><?php echo $shipping['description3'] ?></td>
    <td><?php echo $shipping['qty3'] ?></td>
    <td><?php echo $shipping['uprice3'] ?></td>
    <td><?php echo  intval($shipping['qty3'])*($shipping['uprice3']) ?></td>
  </tr>
  <?php } ?>

  <?php if (isset($shipping['qty4']) && $shipping !='') {?>
  <tr>
    <td><?php echo $n++ ?></td>
    <td><?php echo $shipping['description4'] ?></td>
    <td><?php echo $shipping['qty4'] ?></td>
    <td><?php echo $shipping['uprice4'] ?></td>
    <td><?php echo  intval($shipping['qty4'])*($shipping['uprice4']) ?></td>
  </tr>
  <?php } ?>

</table>

<br>
  <div align="center">TOTAL: &nbsp;<?php echo (intval($shipping['qty'])*($shipping['uprice']))+(intval($shipping['qty2'])*($shipping['uprice2']))+(intval($shipping['qty3'])*($shipping['uprice3']))+(intval($shipping['qty4'])*($shipping['uprice4'])) ?>  </div>
  <div align="center">&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;VVVVVVVVV</div>
  <div>*** SAMPLE OF NO COMMERCIAL VALUE <br>FOR CUSTOMS PURPOSE ONLY</div>
  <br>
  <br>
<div>WINLITES INDUSTRIAL CO., LTD.</div>
<div><img src="<?php echo url_for('/images/david.jpg')?>" alt="David Signature"  width="100" height="30"></div>
<div>DAVID CHEN-MANAGING DIRECTOR/<?php echo $shipping['maker'] ?> </div>
<br>
<br>

<a class="back-link" href="<?php echo url_for('/shipping/edit.php?id=' . h(u($shipping['id']))); ?>">&Ll; 回上一頁修改</a> <br><br>

<?php
mysqli_close($con);
 ?>

<a href="javascript:window.print()" _fcksavedurl="javascript:window.print()">列印這張INVOICE</a>


</div><!-- Heading Row -->

</div><!--container -->



<?php include(SHARED_PATH . '/footer.php'); ?>
