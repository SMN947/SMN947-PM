<?= load_template("header", $data); ?>
<?= load_template("sidebar", $data); ?>
<?= load_template("navbar", $data); ?>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">

            <!-- START Projects -->
            <?php 
                foreach ($_SESSION["session_user"]["projects"]["data"] as $key => $value) { 
                    if($value["project_id"] == 22) {          
            ?>
            <div class="row" href="<?= BASE_URL ?>/project/view/<?= $value["project_id"] ?>">
                <div class="card col-12">
                    <div class="card-header">
                        <h3 class="card-title"><?= $value["project_name"] ?> - <?= $value["project_description"] ?></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button type="button" class="btn btn-tool">
                                <i class="fas fa-users"></i>
                            </button>
                            <button type="button" class="btn btn-tool">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-header">
                        AQUI VA EL PROGRESO :D
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($value["columns"] as $key => $value) { ?>
                            <div class="card col">
                                <div class="card-header" style="cursor: move;">
                                    <h3 class="card-title"><?= $value["column_name"] ?></h3>
                                    <div class="card-tools">
                                        <a class="btn btn-tool clinfo" href="<?= BASE_URL ?>/project/create#Add Task Form"  data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-plus"></i>
                                            Add Task
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- Load tasks here -->
                                </div>
                            </div>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>        
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