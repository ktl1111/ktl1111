<?php require_once('../private/initialize.php'); ?>

<?php $page_title= '首頁'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>

  <!-- Page Content -->
  <div class="container">
              <!-- Heading Row -->
              <div class="row my-4">
                <div class="col-lg-8">
                  <img class="img-fluid rounded" src="<?php echo url_for('images/威同座位分機號.png'); ?>" width="900" height="400" alt="威同座位分機號">
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                  <h1>威同企業</h1>
                  <p></p>
                  <br>
                  <br>
                  <a class="btn btn-primary btn-lg" href="<?php echo url_for('/reportproblem/index.php') ?>">意見箱</a>
                </div>
                <!-- /.col-md-4 -->
              </div>
              <!-- /.row -->

              <!-- Call to Action Well -->
              <div class="card text-white bg-secondary my-4 text-center">
                <div class="card-body">
                  <p class="text-white m-0"></p>
                </div>
              </div>

              <!-- Content Row -->
              <div class="row">
                <div class="col-md-4 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h2 class="card-title">會議記錄</h2>
                      <p class="card-text">

                        <li><a href="<?php echo url_for('files/業務開會事項 2018-06-21.pdf'); ?> " target="_blank">業務開會事項 2018-06-21</a></li>
                        <li><a href="<?php echo url_for('files/業務開會事項 2018-06-21.pdf'); ?> " target="_blank">業務開會事項 2018-09-21</a></li>

                      </p>
                    </div>
                    <div class="card-footer">
                      <a href="#" class="btn btn-primary">更多</a>
                    </div>
                  </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h2 class="card-title">公佈欄</h2>
                      <p class="card-text">
                        </p>
                    </div>
                    <div class="card-footer">
                      <a href="#" class="btn btn-primary">更多</a>
                    </div>
                  </div>
                </div>
                <!-- /.col-md-4 -->
                <div class="col-md-4 mb-4">
                  <div class="card h-100">
                    <div class="card-body">
                      <h2 class="card-title">下載專區</h2>
                      <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                      <a href="<?php echo url_for('download.php')?>" class="btn btn-primary">更多</a>
                    </div>
                  </div>
                </div>
                <!-- /.col-md-4 -->

              </div>
              <!-- /.row -->

            </div>
            <!-- /.container -->


<?php include(SHARED_PATH . '/footer.php'); ?>
