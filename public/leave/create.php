<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $Leavetype = $_POST['leavetype'] ?? '';
  $Leave_date_from = $_POST['leave_date_from'] ?? '';
  $Leave_date_to = $_POST['leave_date_to'] ?? '';
  $Leave_time_from = $_POST['leave_time_from'] ?? '';
  $Leave_time_to = $_POST['leave_time_to'] ?? '';
  $Substitute = $_POST['substitute'] ?? '';
  $Message = $_POST['message'] ?? '';

  $result = insert_leave($Leavetype, $Leave_date_from, $Leave_date_to, $Leave_time_from, $Leave_time_to, $Substitute, $Message);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/leave/index.php?id=' . $new_id));

} else {
  redirect_to(url_for('/leave/new.php'));
}

?>

$result = insert_shipping($Commodity, $Factory_customer_name, $Shipper, $Attn, $Send_date, $Description, $Qty, $Uprice, $Notes, $Maker, $Track_no, $Factory_address, $Factory_tel, $Factory_mobile);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/shipping/tracking.php'));

} else {
redirect_to(url_for('/shipping/new.php'));
}
