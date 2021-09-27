<?= load_template("header", $data); ?>
<?= load_template("navbar", $data); ?>
<div class="content-wrapper">
  <div class="content">
    <div class="container-fluid">


      <!-- START Profile count -->
      <div class="row">
        <div class="col-md-12">
          <div class="card card-widget widget-user">
            <div class="widget-user-header bg-info">
              <h3 class="widget-user-username"><?= $_SESSION["session_user"]["profile"]["data"]["user_name"] ?></h3>
              <h5 class="widget-user-desc"><?= $_SESSION["session_user"]["profile"]["data"]["user_email"] ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="<?= RANDOM_PIC ?>" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header"><?= $_SESSION["session_user"]["projects"]["len"] ?></h5>
                    <span class="description-text">PROJECTS</span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">TASKS</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Profile count -->        



      <!-- START Projects -->
      <?php foreach ($_SESSION["session_user"]["projects"]["data"] as $key => $value) { ?>
      <a class="row" href="<?= BASE_URL ?>/project/view/<?= $value["project_id"] ?>">
        <div class="card col-12 collapsed-card">
          <div class="card-header">
            <h3 class="card-title"><?= $value["project_name"] ?> - <?= $value["project_description"] ?></h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool">
                10% completion
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
            <?php foreach ($value["columns"] as $key => $value) { ?>
              <div class="card col">
                <div class="card-header" style="cursor: move;">
                  <h3 class="card-title"><?= $value["column_name"] ?></h3>
                </div>
                <div class="card-body">
                  <!-- Load tasks here -->
                </div>
              </div>
              <?php } ?>    
            </div>
          </div>
        </div>
      </a>
      <?php } ?>        
      <!-- END Projects -->        


      <!-- START Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="holderFrame"></div>
          </div>
        </div>
      </div>
      <!-- END Modal -->
      

    </div>
  </div>
</div>
<?= load_template("footer", $data); ?>