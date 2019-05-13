<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '留言成功'; ?>

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
  		<p>留言成功！ 繼續留言 <a href="<?php echo url_for('/reportproblem/index.php') ?>">點此</a></p>
      </div>

    </div><!--row-->

</div>
  <!-- /.container -->

<?php include(SHARED_PATH . '/footer.php'); ?>
