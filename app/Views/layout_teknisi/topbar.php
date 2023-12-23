<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/users/<?= session()->get('picture'); ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= session()->get('username'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/img/users/<?= session()->get('picture'); ?>" class="img-circle" alt="User Image">

                            <p>
                                <?= session()->get('username'); ?> - <?= session()->get('level'); ?>

                            </p>
                        </li>

                        <div class="pull-right">
                            <a href="/login/logout" class="btn btn-warning btn-flat">Log out</a>
                        </div>
                </li>
    </ul>
  </nav>
  <!-- /.navbar -->