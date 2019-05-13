<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '請假'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Page Content -->
<div class="container">
  <!-- Heading Row -->
	<div class="row my-4">

  <div class="container">

  <form method="post" action="<?php echo url_for('/leave/create.php'); ?>">
    <fieldset class="form-group">
      <legend>請假單</legend>
      <div class="form-group form-row">
        <div class="form-group col-auto">
          <label class="form-control-label col-form-label" for="leavetype">假別</label>
          <select id="leavetype" class="form-control" name="leavetype">
            <option>選擇假別..</option>
            <option value="特休">特休</option>
            <option value="事假">事假</option>
            <option value="病假">病假</option>
						<option value="婚假">婚假</option>
						<option value="喪假">喪假</option>
						<option value="產假">產假</option>
          </select>
        </div><!--col-->
      </div><!--form-row-->
      <div class="form-group form-row">
        <div class="form-group col-auto">
        <label class="form-control-label col-form-label" for="leave_date_from">起迄日期</label>
        <input type="date" id="leave_date_from" class="form-control" aria-describedby="leave_date_from" name="leave_date_from">
        <small class="form-text text-muted" id="emailHelp">請於一週前請假</small>
      </div><!--col-->
        <div><!--col迄日期-->
        <label class="form-control-label col-form-label" for="leave_date_to">迄</label>
        <input type="date" id="leave_date_to" class="form-control" aria-describedby="leave_date_to" name="leave_date_to">
       </div><!--col-->
      </div><!--row-->
    <fieldset class="form-group">

      <!-- <legend>Pet Info</legend> -->

      <div class="form-group form-row">
        <div class="form-group col-auto">
          <label class="form-control-label col-form-label" for="leave_time_from">起迄時間</label>
          <input type="time" id="leave_time_from" class="form-control" name="leave_time_from">
        </div><!--form-group-col-->

      <div class="form group col-auto">
          <label class="form-control-label col-form-label " for="leave_time_to">迄</label>
          <input type="time" id="leave_time_to" class="form-control" name="leave_time_to">
        </div><!--form-group-col-->
      </div><!--form-group row-->

      <div class="form-group form-row">
        <div class="form-group col-auto">
        <label class="form-control-label col-form-label" for="substitute">代理人</label>
        <input type="text" id="substitute" class="form-control" name="substitute">
        </div><!--col-->
      </div><!--form-row-->

      <div class="form-group">
        <label class="form-control-label col-form-label" for="message">留言</label>
        <textarea id="reasonforvisit" class="form-control" rows="3" name="message"></textarea>
      </div>

			<span>備註 : 如有相關證明文件正本或影本，請提供予人資單位</span>

    </fieldset>

  <div class="form-group row">
    <div class="form-group col-auto">
    <button class="btn btn-primary" type="submit">送出</button>
    </div><!--col-->
  </div><!--row-->

  </form>

</div><!--container -->

</div>
<!--heading row-->

</div>
<!-- /.container -->

<?php include(SHARED_PATH . '/footer.php'); ?>
