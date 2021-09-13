<?php session_destroy(); ?>
<?= load_template("header", $data); ?>
<?= load_template("sidebar", $data); ?>
<?= load_template("navbar", $data); ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

    <!-- Main content -->
    <section class="content error-page">
      <div class="error-page">
        <h2 class="headline text-info"> Bye</h2>

        <div class="error-content">
          <h3><i class="fas fa-hand-sparkles text-info"></i> See you!</h3>

          <p>
            As you requested, we have closed your session.
            <br>
            To continue, you may go to <a href="<?= BASE_URL ?>">login page</a>.
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?= load_template("footer", $data); ?>