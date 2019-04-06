<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= Html::csrfMetaTags() ?>
  <title>Aplikasi Data Mahasiswa</title>
  <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <?php $this->beginBody() ?>

  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= Url::to('@web/')?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Ilmu Komputer FMIPA UHO</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?= Url::to('@web/')?>img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Ilmu Komputer FMIPA UHO - Web Developer
                    <small>Member since Juni 2016</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?= Url::to('@web/')?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Ilmu Komputer FMIPA UHO</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="<?php 
          if(Url::current() == Url::to(['site/index']) )
          {

            echo "active";

          }
          ?>">
          <a href="<?= Yii::$app->homeUrl; ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php 
        if(Url::current() == Url::to(['tb-mahasiswa/index']) )
        {

          echo "active";

        }
        ?>">
        <a href="<?= Url::to(['tb-mahasiswa/index']) ?>">
          <i class="fa fa-mortar-board"></i> <span>Mahasiswa</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= Url::to(['tb-agama/index']) ?>"><i class="fa fa-circle-o"></i>Agama</a></li>
          <li><a href="<?= Url::to(['tb-angkatan/index']) ?>"><i class="fa fa-circle-o"></i>Angkatan</a></li>
          <li><a href="<?= Url::to(['tb-jenis-kelamin/index']) ?>"><i class="fa fa-circle-o"></i>Gender</a></li>
          <li><a href="<?= Url::to(['tb-status-mhs/index']) ?>"><i class="fa fa-circle-o"></i> Status Mahasiswa</a></li>
        </ul>
      </li>
      <li class="<?php 
      if(Url::current() == Url::to(['site/contact']) )
      {

        echo "active";

      }
      ?>">
      <a href="<?= Url::to(['site/contact']) ?>">
        <i class="fa fa-comment"></i> <span>Kontak</span>
      </a>
    </li>
    <li class="<?php 
    if(Url::current() == Url::to(['site/login']) )
    {

      echo "active";

    }
    ?>">
    <a href="<?= Url::to(['site/login']) ?>">
      <i class="fa fa-user"></i> <span>Login</span>
    </a>
  </li>
</ul>
</section>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper">
  <section class="content-header">
    <?= Breadcrumbs::widget([
     'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
   ]) ?>
   <?= Alert::widget() ?>
 </section>
 
 <section class="content">
  <?= $content ?>
</section>
</div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
  </footer> -->

  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
