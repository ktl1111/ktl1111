<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '寄件'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>



<!-- Page Content -->
<div class="container">
<!-- Heading Row -->
<div class="row my-4">

<div class="container">
  <h2>寄件</h2><br>
  <a href="<?php echo url_for('/shipping/new.php')?>" class="btn btn-primary">製作invoice</a>
  <a href="<?php echo url_for('/shipping/tracking.php')?>" class="btn btn-primary">貨件追蹤</a>
</div>


</div>
<!-- /.row -->

</div>
<!-- /.container -->

<?php include(SHARED_PATH . '/footer.php'); ?>
