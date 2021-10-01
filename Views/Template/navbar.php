<!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    
      <a href="<?= BASE_URL ?>/" class="navbar-brand">
        <img src="<?= IMAGES ?>/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><?= SITE_TITLE ?></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="<?= BASE_URL ?>/Profile" class="nav-link">Profile</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <li class="nav-item">
          <a class="nav-link clinfo" href="<?= BASE_URL ?>/Project/Create#Project Creation Form"  data-toggle="modal" data-target="#exampleModal">
              <i class="fas fa-plus"></i>
              Create project
          </a>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>/Session/Logout">
              <i class="fas fa-power-off"></i>
              Logout
          </a>
      </li>
      </ul>
  </nav>