<?php

require_once('../../private/initialize.php');

 ?>

 <?php $page_title = '製作寄件invoice'; ?>
 <?php include(SHARED_PATH . '/header.php'); ?>


<!--選擇客人工廠-->
 <?php
 $con = mysqli_connect("192.168.0.200:3307","root","1234","winlites");
 $query = "SELECT * FROM factory";
 $result2 = mysqli_query($con, $query);
 $options = "";

while($row2 = mysqli_fetch_array($result2))
{
    $options = $options."<option>$row2[1]</option>";
}
 ?>

<!--新增內容單價那排 -->
<style>
       #container{
           width:380px;
           margin:20px auto;
           padding:15px;
           background-color:#eee;
         border-radius: 15px;
       }
       /** 新增按钮 **/
       #addVar{
           margin:0 0 0 52px;
           padding:5px;
           display:inline-block;
           background-color:#3A9668;
           color:#f1f1f1;
           border:1px solid #005;
           border-radius: 4px;
       }
       /** 删除按钮 **/
       .removeVar{
           margin:auto;
           padding:5px;
           display:inline-block;
           background-color:#B02109;
           color:#f1f1f1;
           border:1px solid #005;
         border-radius: 4px;
       }

       #addVar:hover, .removeVar:hover{
           cursor: pointer;
       }

       .alignRight{
           text-align: right;
       }

       input, textarea{
           padding:5px;
           font-size: 16px;
       }
   </style>
      <script>
          //初始参数个数
          var descriptionCount = 1;
          var qtyCount = 1;
          var upriceCount = 1;

          $(function () {
            //新增按钮点击
              $('#addVar').on('click', function(){
                  descriptionCount++;
                  qtyCount++;
                  upriceCount++;
                  $node = '<p><label for="description'+descriptionCount+'">'+'</label>'
                    + '<input class="form-control-label" type="text" name="description'+descriptionCount+'" id="description'+descriptionCount+'">'
                    + '<input class="form-control-label" type="text" name="qty'+qtyCount+'" id="qty'+qtyCount+'">'
                    + '<input class="form-control-label" type="text" name="uprice'+upriceCount+'" id="uprice'+upriceCount+'">'
                    + '<span class="removeVar">删除</span></p>';
              //新表单项添加到“新增”按钮前面
                  $(this).parent().before($node);
              });

            //删除按钮点击
            $('form').on('click', '.removeVar', function(){
              $(this).parent().remove();
              //varCount--;
            });
          });
      </script>


 <!-- Page Content -->
 <div class="container">
   <!-- Heading Row -->
 	<div class="row my-4">

<div class="col">

       <form id="myForm" method="post" action="<?php echo url_for('/shipping/create.php'); ?>">
<table id="myTable">
         <fieldset class="form-group">
           <legend>製作寄件invoice</legend>

           <div class="form-group form-row">
             <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="send_date">寄件日期</label>
             <input type="date" id="date" class="form-control" aria-describedby="date" name="send_date">
           </div><!--col-->
           </div><!--row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
                 <label class="form-control-label col-form-label" for="track_no">提單號碼</label>
                 <input id="track_no" class="form-control" rows="1" name="track_no">
           </div><!--col-->
            </div><!--row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="maker">製表人</label>
               <select id="maker" class="form-control" name="maker">
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
                 <input id="commodity" class="form-control" rows="1" name="commodity">
           </div><!--col-->
            </div><!--row-->

            <div class="form-group form-row">
              <div class="form-group col-auto">
                  <label class="form-control-label col-form-label" for="notes">備註 (例: FOR香港展樣品)</label>
                  <textarea id="notes" class="form-control" rows="1" name="notes"></textarea>
            </div><!--col-->
             </div><!--row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="shipper">選擇貨代</label>
               <select id="shipper" class="form-control" name="shipper">
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
               <select id="factory_customer_name" class="form-control" name="factory_customer_name">
                <?php echo $options;?>
               </select>
             </div><!--col-->
           </div><!--form-row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="factory_address">地址</label>
               <textarea id="factory_address" class="form-control" rows="1" name="factory_address"></textarea>
             </div><!--col-->
           </div><!--form-row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="factory_tel">Tel</label>
               <textarea id="factory_tel" class="form-control" rows="1" name="factory_tel"></textarea>
             </div><!--col-->
           </div><!--form-row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
               <label class="form-control-label col-form-label" for="factory_mobile">Mobile</label>
               <textarea id="factory_mobile" class="form-control" rows="1" name="factory_mobile"></textarea>
             </div><!--col-->
           </div><!--form-row-->

           <div class="form-group form-row">
             <div class="form-group col-auto">
                 <label class="form-control-label col-form-label" for="attn">收件人</label>
                 <textarea id="attn" class="form-control" rows="1" name="attn"></textarea>
           </div><!--col-->
            </div><!--row-->

<tr>
  <td id="myTd">
     <div class="form-group form-row">

       <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="description">內容物</label>
             <textarea id="description" class="form-control" rows="1" name="description"></textarea>
       </div>

       <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="qty">數量</label>
             <textarea id="qty" class="form-control" rows="1" name="qty"></textarea>
       </div>

       <div class="form-group col-auto">
             <label class="form-control-label col-form-label" for="uprice">申報單價(USD$)</label>
             <textarea id="uprice" class="form-control" rows="1" name="uprice"></textarea>
       </div>
   </td>
</tr>

<tr>
<td>
  <div class="form-group form-row">
    <div class="form-group col-auto">
  <input id="addVar" type="button" value="新增一項"/>
</div>
</div>

  <div class="form-group form-row">
    <div class="form-group col-auto">
  <p class="alignRight"><input type="submit" value="確認送出"></p>
</div>
</div>

</td>

</tr>

     </div><!--row-->


         </fieldset>


</table>
   </form>


       <a class="back-link" href="<?php echo url_for('/shipping/index.php'); ?>">&laquo; 回上一頁</a> </br>
      </div> <!--for the div with class="col" -->


     </div><!-- Heading Row -->

     </div><!--container -->


 <?php include(SHARED_PATH . '/footer.php'); ?>
