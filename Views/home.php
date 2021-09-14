<?= load_template("header", $data); ?>
<?= load_template("sidebar", $data); ?>
<?= load_template("navbar", $data); ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- /.col -->
          <div class="col-md-12">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?= $_SESSION["session_user"]["profile"]["data"]["user_name"] ?></h3>
                <h5 class="widget-user-desc"><?= $_SESSION["session_user"]["profile"]["data"]["user_email"] ?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= IMAGES ?>/user2-160x160.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-6 border-right">
                    <div class="description-block">
                      <h5 class="description-header"><?= $_SESSION["session_user"]["projects"]["len"] ?></h5>
                      <span class="description-text">PROJECTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">TASKS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="holderFrame">sdfghj
      </div>
    </div>
  </div>
</div>



      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
<?= load_template("footer", $data); ?>