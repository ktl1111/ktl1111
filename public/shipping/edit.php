<?php

require_once('../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/shipping/index.php'));
}
$id = $_GET['id'];


if(is_post_request()){

  // Handle form values sent by new.php
  $shipping = [];
  $shipping['commodity'] = $_POST['commodity'] ?? '';
  $shipping['factory_customer_name'] = $_POST['factory_customer_name'] ?? '';
  $shipping['shipper'] = $_POST['shipper'] ?? '';
  $shipping['attn'] = $_POST['attn'] ?? '';
  $shipping['send_date'] = $_POST['send_date'] ?? '';
  $shipping['description'] = $_POST['description'] ?? '';
  $shipping['qty'] = $_POST['qty'] ?? '';
  $shipping['uprice'] = $_POST['uprice'] ?? '';
  $shipping['notes'] = $_POST['notes'] ?? '';
  $shipping['maker'] = $_POST['maker'] ?? '';
  $shipping['track_no'] = $_POST['track_no'] ?? '';
  $shipping['factory_address'] = $_POST['factory_address'] ?? '';
  $shipping['factory_tel'] = $_POST['factory_tel'] ?? '';
  $shipping['factory_mobile'] = $_POST['factory_mobile'] ?? '';

    $sql = "UPDATE shipping SET";
    $sql .= "commodity'" . $shipping['commodity'] . "', ";
    $sql .= "factory_customer_name'" . $shipping['factory_customer_name'] . "', ";
    $sql .= "attn'" . $shipping['attn'] . "', ";
    $sql .= "send_date'" . $shipping['send_date'] . "', ";
    $sql .= "description'" . $shipping['description'] . "', ";
    $sql .= "qty'" . $shipping['qty'] . "', ";
    $sql .= "uprice'" . $shipping['uprice'] . "', ";
    $sql .= "notes'" . $shipping['notes'] . "', ";
    $sql .= "maker'" . $shipping['maker'] . "', ";
    $sql .= "track_no'" . $shipping['track_no'] . "', ";
    $sql .= "factory_address'" . $shipping['factory_address'] . "', ";
    $sql .= "factory_tel'" . $shipping['factory_tel'] . "', ";
    $sql .= "factory_mobile'" . $shipping['factory_mobile'] . "' ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql . ="LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false
    if($result){
      redirect_to(url_for('/shipping/show.php?id=' . $id));
    } else {
      //UPDATE failes
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }

  } else {

    $shipping = find_shipping_by_id($id);

  }

 ?>

  <?php $page_title = '修改invoice'; ?>
  <?php include(SHARED_PATH . '/header.php'); ?>

  <!-- Page Content -->
  <div class="container">
  <!-- Heading Row -->
  <div class="row my-4">

 <div id="content">

   <a class="back-link" href="<?php echo url_for('/shipping/index.php'); ?>">&laquo; 回寄件首頁</a>

   <div class="shipping edit">

     <form action="<?php echo url_for('/shipping/edit.php?id=' . h(u($id))); ?>" method="post">

       <fieldset class="form-group">
         <legend>修改寄件invoice</legend>

         <div class="form-group form-row">
           <div class="form-group col-auto">
           <label class="form-control-label col-form-label" for="send_date">寄件日期</label>
           <input type="date" id="date" class="form-control" aria-describedby="date" name="send_date" value="<?php echo h($shipping['send_date']); ?>">
         </div><!--col-->
         </div><!--row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="track_no">提單號碼</label>
               <input type="text" id="track_no" class="form-control" rows="1" name="track_no" value="<?php echo h($shipping['track_no']); ?>">
         </div><!--col-->
          </div><!--row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="maker">製表人</label>
             <select id="maker" class="form-control" name="maker" value="<?php echo h($shipping['maker']); ?>">
               <option value="Anna">Anna</option>
               <option value="Mandy">Mandy</option>
               <option value="Felicia">Felicia</option>
               <option value="Gina">Gina</option>
             </select>
           </div><!--col-->
         </div><!--form-row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="content">內容物概述 (Commodity)</label>
               <input type="text" id="commodity" class="form-control" rows="1" name="commodity" value="<?php echo h($shipping['commodity']); ?>">
         </div><!--col-->
          </div><!--row-->

          <div class="form-group form-row">
            <div class="form-group col-auto">
                <label class="form-control-label col-form-label" for="notes">備註 (例: FOR香港展樣品)</label>
                <textarea type="text" id="notes" class="form-control" rows="1" name="notes" value="<?php echo h($shipping['notes']); ?>"></textarea>
          </div><!--col-->
           </div><!--row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="shipper">選擇貨代</label>
             <select id="shipper" class="form-control" name="shipper" value="<?php echo h($shipping['shipper']); ?>">
               <option value="順豐">順豐</option>
               <option value="TNT">TNT</option>
               <option value="DHL">DHL</option>
               <option value="FEDEX">FEDEX</option>
               <option value="UPS">UPS</option>
               <option value="EMS">EMS</option>
             </select>
           </div><!--col-->
         </div><!--form-row-->

       </fieldset>

       <fieldset class="form-group">

         <!-- <legend>Pet Info</legend> -->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="factory_customer_name">選擇工廠/客人</label>
             <select id="factory_customer_name" class="form-control" name="factory_customer_name" value="<?php echo h($shipping['factory_customer_name']); ?>">
              <?php echo $options;?>
             </select>
           </div><!--col-->
         </div><!--form-row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="factory_address">地址</label>
             <textarea type="text" id="factory_address" class="form-control" rows="1" name="factory_address" value="<?php echo h($shipping['factory_address']); ?>"></textarea>
           </div><!--col-->
         </div><!--form-row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="factory_tel">Tel</label>
             <textarea type="text" id="factory_tel" class="form-control" rows="1" name="factory_tel" value="<?php echo h($shipping['factory_tel']); ?>"></textarea>
           </div><!--col-->
         </div><!--form-row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="factory_mobile">Mobile</label>
             <textarea type="text" id="factory_mobile" class="form-control" rows="1" name="factory_mobile" value="<?php echo h($shipping['factory_mobile']); ?>"></textarea>
           </div><!--col-->
         </div><!--form-row-->

         <div class="form-group form-row">
           <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="attn">收件人</label>
               <textarea type="text" id="attn" class="form-control" rows="1" name="attn" value="<?php echo h($shipping['attn']); ?>"></textarea>
         </div><!--col-->
          </div><!--row-->

   <div class="form-group form-row">

     <div class="form-group col-auto">
           <label class="form-control-label col-form-label" for="description">內容物</label>
           <textarea type="text" id="description" class="form-control" rows="1" name="description" value="<?php echo h($shipping['description']); ?>"></textarea>
     </div>

     <div>
           <label class="form-control-label col-form-label" for="qty">數量</label>
           <textarea id="quantity" class="form-control" rows="1" name="qty" value="<?php echo h($shipping['qty']); ?>"></textarea>
     </div>

     <div>
           <label class="form-control-label col-form-label" for="uprice">申報單價(USD$)</label>
           <textarea id="unitPrice" class="form-control" rows="1" name="uprice" value="<?php echo h($shipping['unitPrice']); ?>"></textarea>
     </div>


   </div><!--row-->

<INPUT type="button" value="&plus;新增" id=button1 name=button1 LANGUAGE=javascript onclick="return button1_onclick()">

       </fieldset>

     <div class="form-group row">
       <div class="form-group col-auto">
       <input type="submit" class="btn btn-primary" value="確認送出">
   <!--https://stackoverflow.com/questions/23775272/bootstrap-modal-before-form-submit跳出列印鍵和核對資料-->

       </div><!--col-->
     </div><!--row-->

     </form>

</div><!-- Heading Row -->

</div><!--container -->

 <?php include(SHARED_PATH . '/footer.php'); ?>
