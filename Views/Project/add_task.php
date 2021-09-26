<!-- /.login-logo -->
<div class="card card-outline card-primary">
  <div class="card-body">
    <p class="login-box-msg">Fill the following information</p>
    <form action="<?= BASE_URL ?>/project/add_task_save/" method="get">
      <input name="task-project" class="hidden" value="<?= $_SESSION["session_user"]["current_project"] ?>">
      <input name="task-column" class="hidden" value='<?= $data["column_id"]?>'>
      <div class="input-group mb-3">
        <input name="task-name" type="text" class="form-control" placeholder="Task Name">
      </div>
      <div class="input-group mb-3">
        <input name="task-desc" type="text" class="form-control" placeholder="Task Description">
      </div>
        
      <div class="input-group mb-3">
        <input name="label1" type="text" class="form-control" value="Start" disabled>
        <input name="task-start-sch" type="date" class="form-control" placeholder="Task Description">
      </div>
      <div class="input-group mb-3">
        <input name="label2" type="text" class="form-control" value="End" disabled>
        <input name="task-end-sch" type="date" class="form-control" placeholder="Task Description">
      </div>

      <div class="input-group mb-3">
        <select name="task-priority" type="date" class="form-control" placeholder="Task Priority">
          <option value="" disabled selected>Select Priority</option>
          <option value="high">High</option>
          <option value="Med">Med</option>
          <option value="low">Low</option>
        </select>
      </div>
      
      <div class="row">
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Create</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
