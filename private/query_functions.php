<?php

function find_all_shippings(){
  global $db;

  $sql = "SELECT * FROM winlites ";
  $sql .="ORDER BY id ASC";
  $result = mysqli_query($db, $sql);
  return $result;
}


function find_shipping_by_id($id){
  global $db;

  $sql = "SELECT * FROM shipping ";
  $sql .= "WHERE id='" . $id . "'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $shipping = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $shipping; // returns an assoc. array
}



function insert_shipping($Commodity, $Factory_customer_name, $Shipper, $Attn, $Send_date, $Description, $Qty, $Uprice, $Notes, $Maker, $Track_no, $Factory_address, $Factory_tel, $Factory_mobile, $Description2, $Qty2, $Uprice2, $Description3, $Qty3, $Uprice3, $Description4, $Qty4, $Uprice4){
  global $db;

  $sql = "INSERT INTO shipping ";
  $sql .= "(commodity, factory_customer_name, shipper, attn, send_date, description, qty, uprice, notes, maker, track_no, factory_address, factory_tel, factory_mobile, description2, qty2, uprice2, description3, qty3, uprice3, description4, qty4, uprice4) ";
  $sql .= "VALUES (";
  $sql .= "'" . $Commodity . "', ";
  $sql .="'" . $Factory_customer_name . "', ";
  $sql .="'" . $Shipper . "', ";
  $sql .="'" . $Attn . "', ";
  $sql .="'" . $Send_date . "', ";
  $sql .="'" . $Description . "', ";
  $sql .="'" . $Qty . "', ";
  $sql .="'" . $Uprice . "', ";
  $sql .="'" . $Notes . "', ";
  $sql .="'" . $Maker . "', ";
  $sql .="'" . $Track_no . "', ";
  $sql .="'" . $Factory_address. "', ";
  $sql .="'" . $Factory_tel . "', ";
  $sql .="'" . $Factory_mobile . "', ";
  $sql .="'" . $Description2 . "', ";
  $sql .="'" . $Qty2 . "', ";
  $sql .="'" .$Uprice2 . "', ";
  $sql .="'" . $Description3 . "', ";
  $sql .="'" . $Qty3 . "', ";
  $sql .="'" .$Uprice3 . "', ";
  $sql .="'" . $Description4 . "', ";
  $sql .="'" . $Qty4 . "', ";
  $sql .="'" . $Uprice4 . "' ";
  $sql .=")";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result_is true/false
  if($result){
    return true;
} else {
  // INSERT failed
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
  }

if(!empty($_POST['description2'])){
    $Description2 = "'".$_POST['description2']."'";
}else{
    $Description2 = "NULL";
}

if(!empty($_POST['description3'])){
    $Description3 = "'".$_POST['description3']."'";
}else{
    $Description3 = "NULL";
}

if(!empty($_POST['description4'])){
    $Description4 = "'".$_POST['description4']."'";
}else{
    $Description4 = "NULL";
}

if(!empty($_POST['qty2'])){
    $Qty2 = "'".$_POST['qty2']."'";
}else{
    $Qty2 = "NULL";
}

if(!empty($_POST['qty3'])){
    $Qty3 = "'".$_POST['qty3']."'";
}else{
    $Qty3 = "NULL";
}

if(!empty($_POST['qty4'])){
    $Qty4 = "'".$_POST['qty4']."'";
}else{
    $Qty4 = "NULL";
}

if(!empty($_POST['uprice2'])){
    $Uprice2 = "'".$_POST['uprice2']."'";
}else{
    $Uprice2 = "NULL";
}

if(!empty($_POST['uprice3'])){
    $Uprice3 = "'".$_POST['uprice3']."'";
}else{
    $Uprice3 = "NULL";
}

if(!empty($_POST['uprice4'])){
    $Uprice4 = "'".$_POST['uprice4']."'";
}else{
    $Uprice4 = "NULL";
}

}


function insert_comment($name, $comment){
  global $db;

  $sql = "INSERT INTO comment ";
  $sql .= "(name, comment) ";
  $sql .= "VALUES (";
  $sql .= "'" . $name . "', ";
  $sql .="'" . $comment . "', ";
  $sql .=")";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result_is true/false
  if($result){
    return true;
} else {
  // INSERT failed
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
  }
}

function insert_leave($Leavetype, $Leave_date_from, $Leave_date_to, $Leave_time_from, $Leave_time_to, $Substitute, $Message){
  global $db;

  $sql = "INSERT INTO leave_system ";
  $sql .= "(leavetype, leave_date_from, leave_date_to, leave_time_from, leave_time_to, substitute, message) ";
  $sql .= "VALUES (";
  $sql .= "'" . $Leavetype . "', ";
  $sql .="'" . $Leave_date_from . "', ";
  $sql .= "'" . $Leave_date_to . "', ";
  $sql .="'" . $Leave_time_from . "', ";
  $sql .= "'" . $Leave_time_to . "', ";
  $sql .="'" . $Substitute . "', ";
  $sql .= "'" . $Message . "' ";
  $sql .=")";
  $result = mysqli_query($db, $sql);
  // For INSERT statements, $result_is true/false
  if($result){
    return true;
} else {
  // INSERT failed
  echo mysqli_error($db);
  db_disconnect($db);
  exit;
  }
}

?>
