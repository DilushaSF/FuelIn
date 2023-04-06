<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\DashboardAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
// use yii\bootstrap5\Nav; 
// use yii\bootstrap5\NavBar;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>F</b>In</span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>Fuel</b>In</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
              <!-- Sidebar toggle button-->
              <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
              </a>

              <!-- navbar removed-->
            </nav>
        </header>

        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
              <!-- Sidebar user panel -->
              <div class="user-panel">
                <div class="pull-left image">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                  <p>Admin</p>
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
                <li class="header">SETUP</li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Customer</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=customer%2Fcreate"><i class="fa fa-circle-o"></i> Add Customer</a></li>
                    <li><a href="index.php?r=customer%2Findex"><i class="fa fa-circle-o"></i> View Customer</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Fillling Station</span>
                    <span class="pull-right-container">
                      <span class="label label-primary pull-right">4</span>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=filling-station%2Fcreate"><i class="fa fa-circle-o"></i> Add Fillling Station</a></li>
                    <li><a href="index.php?r=filling-station%2Findex"><i class="fa fa-circle-o"></i> View Filling Station</a></li>
                    
                  </ul>
                </li>
                <li class="treeview">
                  <a href="pages/widgets.html">
                    <i class="fa fa-th"></i> <span>Vehicles</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-green">new</small>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=vehicle%2Fcreate"><i class="fa fa-circle-o"></i>Vehicle Registration</a></li>
                    <li><a href="index.php?r=vehicle%2Findex"><i class="fa fa-circle-o"></i> View Vehicles</a></li>
                    
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>End User Registration</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=end-user%2Fcreate"><i class="fa fa-circle-o"></i> Add End-Users</a></li>
                    <li><a href="index.php?r=end-user%2Findex"><i class="fa fa-circle-o"></i> View End-Users</a></li>
                    <!-- <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li> -->
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Fuel Types</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=fuel-type%2Fcreate"><i class="fa fa-circle-o"></i> Add Fuel Type</a></li>
                    <li><a href="index.php?r=fuel-type%2Findex"><i class="fa fa-circle-o"></i> View Fuel Types</a></li>
                    
                  </ul>
                </li>
                <!-- <li class="treeview">
                  <a href="#">
                    <i class="fa fa-edit"></i> <span>Forms</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                    <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                    <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-table"></i> <span>Tables</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                    <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                  </ul>
                </li>
                <li>
                  <a href="pages/calendar.html">
                    <i class="fa fa-calendar"></i> <span>Calendar</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-red">3</small>
                      <small class="label pull-right bg-blue">17</small>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="pages/mailbox/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <span class="pull-right-container">
                      <small class="label pull-right bg-yellow">12</small>
                      <small class="label pull-right bg-green">16</small>
                      <small class="label pull-right bg-red">5</small>
                    </span>
                  </a>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-folder"></i> <span>Examples</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                    <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                    <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                    <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                    <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                    <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                    <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                    <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                  </ul>
                </li>
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-share"></i> <span>Multilevel</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    <li class="treeview">
                      <a href="#"><i class="fa fa-circle-o"></i> Level One
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                        <li class="treeview">
                          <a href="#"><i class="fa fa-circle-o"></i> Level Two
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                  </ul>
                </li>
                <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li> -->
                <li class="header">TRANSACTIONS</li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o text-green"></i> 
                    <span>Orders</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=order%2Fcreate"><i class="fa fa-circle-o"></i> Add Orders</a></li>
                    <li><a href="index.php?r=order%2Findex"><i class="fa fa-circle-o"></i> View Orders</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o text-blue"></i> 
                    <span>Payments</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=payment%2Fcreate"><i class="fa fa-circle-o"></i> Add Payments</a></li>
                    <li><a href="index.php?r=payment%2Findex"><i class="fa fa-circle-o"></i> View Payments</a></li>
                    
                  </ul>
                </li>

                <li class="treeview"> 
                  <a href="#">
                    <i class="fa fa-circle-o text-red"></i> 
                    <span>Invoices</span>
                  </a>
                  <ul class="treeview-menu">
                    <!-- <li><a href="index.php?r=end-user%2Fcreate"><i class="fa fa-circle-o"></i> Add Invoices</a></li> -->
                    <li><a href="index.php?r=order%2Finvoice-index"><i class="fa fa-circle-o"></i> View Invoices</a></li>
                    
                  </ul>
                </li>

                <li class="header">MAINTENANCE</li>

                
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-circle-o text-green"></i> <span>Users</span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="index.php?r=user%2Fcreate"><i class="fa fa-circle-o"></i> Add Users</a></li>
                    <li><a href="index.php?r=user%2Findex"><i class="fa fa-circle-o"></i> View Users</a></li>
                  </ul>
                </li>

                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Permissions</span></a></li>
              </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Dashboard
                <small>Control panel</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <?= $content ?>
            </section>
        </div>
    </div>



<!-- <main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
