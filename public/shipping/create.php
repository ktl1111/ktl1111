<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $Commodity = $_POST['commodity'] ?? '';
  $Factory_customer_name = $_POST['factory_customer_name'] ?? '';
  $Shipper = $_POST['shipper'] ?? '';
  $Attn = $_POST['attn'] ?? '';
  $Send_date = $_POST['send_date'] ?? '';
  $Description = $_POST['description'] ?? '';
  $Qty = $_POST['qty'] ?? '';
  $Uprice = $_POST['uprice'] ?? '';
  $Notes = $_POST['notes'] ?? '';
  $Maker = $_POST['maker'] ?? '';
  $Track_no = $_POST['track_no'] ?? '';
  $Factory_address = $_POST['factory_address'] ?? '';
  $Factory_tel = $_POST['factory_tel'] ?? '';
  $Factory_mobile = $_POST['factory_mobile'] ?? '';
  $Description2 = $_POST['description2'] ?? '';
  $Qty2 = $_POST['qty2'] ?? '';
  $Uprice2 = $_POST['uprice2'] ?? '';
  $Description3 = $_POST['description3'] ?? '';
  $Qty3 = $_POST['qty3'] ?? '';
  $Uprice3 = $_POST['uprice3'] ?? '';
  $Description4 = $_POST['description4'] ?? '';
  $Qty4 = $_POST['qty4'] ?? '';
  $Uprice4 = $_POST['uprice4'] ?? '';

  $result = insert_shipping($Commodity, $Factory_customer_name, $Shipper, $Attn, $Send_date, $Description, $Qty, $Uprice, $Notes, $Maker, $Track_no, $Factory_address, $Factory_tel, $Factory_mobile, $Description2, $Qty2, $Uprice2, $Description3, $Qty3, $Uprice3, $Description4, $Qty4, $Uprice4);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/shipping/tracking.php'));

} else {
  redirect_to(url_for('/shipping/new.php'));
}

?>
