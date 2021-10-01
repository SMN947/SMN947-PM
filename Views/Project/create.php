<!-- /.login-logo -->
<div class="card card-outline card-primary">
  <div class="card-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="<?= BASE_URL ?>/Project/create_save/" method="get">
      <div class="input-group mb-3">
        <input name="project-name" type="text" class="form-control" placeholder="Project Name">
      </div>
      <div class="input-group mb-3">
        <input name="project-desc" type="text" class="form-control" placeholder="Project Description">
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
