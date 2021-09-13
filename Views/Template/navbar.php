

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link"><?= $data["page_title"] ?></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

    <li class="nav-item">
        <a class="nav-link">
            <i class="fas fa-plus"></i>
            Create project
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL ?>/logout">
            <i class="fas fa-power-off"></i>
            Logout
        </a>
    </li>

    </ul>
  </nav>
  <!-- /.navbar -->
