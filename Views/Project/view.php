<?= load_template("header", $data); ?>
<?= load_template("sidebar", $data); ?>
<?= load_template("navbar", $data); ?>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">

            <!-- START Projects -->
            <?php 
                foreach ($_SESSION["session_user"]["projects"]["data"] as $key => $value) {
                    if($value["project_id"] == $data["projectId"]) {          
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
                        <div class="progress">
                            <?php $rand = rand(0, 100); ?>
                            <div class="progress-bar" role="progressbar" style="width: <?= $rand ?>%" aria-valuenow="<?= $rand ?>" aria-valuemin="0" aria-valuemax="100"><?= $rand ?>%</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach ($value["columns"] as $key => $value) { ?>
                            <div class="card col project-column sortable-wrapper">
                                <div class="card-header" style="cursor: move;">
                                    <h3 class="card-title"><?= $value["column_name"] ?></h3>
                                    <div class="card-tools">
                                        <a class="btn btn-tool clinfo" href="<?= BASE_URL ?>/project/add_task/<?= $value["column_id"] ?>#Add Task Form$"  data-toggle="modal" data-target="#exampleModal">
                                            <i class="fas fa-plus"></i>
                                            Add Task
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body sortable" id="<?= $value["column_id"] ?>">
                                     
                                    <!-- Load tasks here -->
                                    <?php foreach ($value["tasks"] as $keyTask => $valueTask) { ?>
                                    <div class="card col task" id="<?= $valueTask["task_id"] ?>">
                                        <div class="card-header" style="cursor: move;">
                                            <h3 class="card-title">#<?= $valueTask["task_id"] ?> - <?= $valueTask["task_name"] ?> </h3>
                                            <div class="card-tools">
                                                <a class="btn btn-tool clinfo">
                                                    <i class="fas fa-clock"></i>
                                                    <?= $valueTask["task_end_sch"] ?>
                                                </a>
                                                <a class="btn btn-tool clinfo" href="<?= BASE_URL ?>/project/edit_task/<?= $value["column_id"] ?>#Edit Task Form$"  data-toggle="modal" data-target="#exampleModal">
                                                    <i class="fas fa-pen"></i>
                                                    Edit Task
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="progress">
                                                <?php $rand = rand(0, 100); ?>
                                                <div class="progress-bar" role="progressbar" style="width: <?= $rand ?>%" aria-valuenow="<?= $rand ?>" aria-valuemin="0" aria-valuemax="100"><?= $rand ?>%</div>
                                            </div>
                                            <!-- Load tasks here -->
                                            <input class="hidden" type="text" id="task_<?= $valueTask["task_id"] ?>" value='<?= json_encode($valueTask) ?>'>
                                            <?= $valueTask["task_desc"] ?>
                                        </div>
                                    </div>
                                    <?php } ?> 


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