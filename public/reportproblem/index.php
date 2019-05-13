<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '問題留言'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Page Content -->
<div class="container">
  <!-- Heading Row -->
	<div class="row my-4">

  		<div class="col-md-6 col-md-offset-3 post">
  			<h2>問題留言</h2>
  			<p>有任何正航系統、內網使用上問題，或對公司建議，歡迎留言。</p>
  		</div>

  		<!-- comments section -->
  		<div class="col-md-6 col-md-offset-3 comments-section">
  			<!-- comment form -->
  			<form class="clearfix" action="<?php echo url_for('/reportproblem/create.php'); ?>" method="post">
					<h5>姓名:</h5>
  				<input type="text" name="name" id="name" class="form-control" cols="30" rows="3">
  				<h5>請留下問題:</h5>
  				<input type="text" name="comments" id="comment" class="form-control" cols="30" rows="3">
  				<input type="submit" class="btn btn-primary btn-sm pull-right" value="送出">
  			</form>
      </div>

    </div><!--row-->

</div>
  <!-- /.container -->

<?php include(SHARED_PATH . '/footer.php'); ?>
