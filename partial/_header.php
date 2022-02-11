<!DOCTYPE html>
<html lang="en">
   <head>
      <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <!-- Twitter meta-->
      <meta property="twitter:card" content="summary_large_image">
      <meta property="twitter:site" content="@pratikborsadiya">
      <meta property="twitter:creator" content="@pratikborsadiya">
      <!-- Open Graph Meta-->
      <meta property="og:type" content="website">
      <meta property="og:site_name" content="Vali Admin">
      <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
      <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
      <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
      <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
      <title><?php include 'inc/title.php' ?></title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?php echo prefix_dot() ?>assets/css/bootstrap-datepicker.css">
      <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="<?php echo prefix_dot() ?>assets/css/main.css">
      <!-- Font-icon css-->
      <link rel="stylesheet" type="text/css" href="<?php echo prefix_dot() ?>assets/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo prefix_dot() ?>assets/css/bootstrap-datepicker.css">
      <style>
         .help-block {
            color: red;
            font-weight: bold;
            z-index: 1;
         }
         .app-header__logo {
         padding: 8px 15px!important;
         }
         @media only screen and (max-width: 479) and (min-width: 200px)  {
         .app-header__logo {
         padding: 3px 15px!important;
         width: 2px!important;
         }
         }
         
      </style>
   </head>
   <body class="app sidebar-mini rtl">
      <!-- Navbar-->
      <header class="app-header">
         <a class="app-header__logo bg-white" href="index.php">
         <img src="<?php echo prefix_dot() ?>assets/img/dbl-logo.jpg" style="width: 193px!important;" class="img-fluid" alt="">
         </a>
         <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
         <!-- Navbar Right Menu-->
         <ul class="app-nav">
            <li class="app-search">
               <input class="app-search__input" type="search" placeholder="Search">
               <button class="app-search__button"><i class="fa fa-search"></i></button>
            </li>
            <!-- User Menu-->
            <li class="dropdown">
               <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
               <ul class="dropdown-menu settings-menu dropdown-menu-right">
                  <li><a class="dropdown-item" href="<?php echo prefix_dot() ?>password-change.php"><i class="fa fa-cog fa-lg"></i> Password-Change</a></li>
                  <li><a class="dropdown-item" href="<?php echo prefix_dot() ?>profile.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo prefix_dot() ?>logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
               </ul>
            </li>
         </ul>
      </header>
      <!-- Sidebar menu-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
         <div class="app-sidebar__user">
            <img class="app-sidebar__user-avatar" src="<?php echo prefix_dot() ?>assets/img/user/profile.png" style="width: 40px; height: 40px;" alt="User Image">
            <div>
               <p class="app-sidebar__user-name">
                  <?php echo $_SESSION['fullname'] ?>
               </p>
               <p class="app-sidebar__user-designation"><?php  echo $_SESSION['email'] ?></p>
            </div>
         </div>
         <ul class="app-menu">
            <?php $pageName = basename($_SERVER['PHP_SELF']); ?>
            <li><a class="app-menu__item <?php if($pageName =='index.php'){echo 'active';}?>" href="<?php echo prefix_dot() ?>index.php"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li class="treeview <?php if($pageName == 'brach-activaty.php' || $pageName == 'branch-average-activaty.php' ||  $pageName == 'branch-job-volume.php' || $pageName == 'branch-command-execution-time.php' || $pageName == 'branch-engagin-tso-oss.php' || $pageName == 'branch-system-utilization.php'){ echo 'is-expanded';  }else{  echo '';  } ?>">
               <a class="<?php if($pageName == 'brach-activaty.php' || $pageName == 'branch-average-activaty.php' ||  $pageName == 'branch-job-volume.php' || $pageName == 'branch-command-execution-time.php' || $pageName == 'branch-engagin-tso-oss.php' || $pageName == 'branch-system-utilization.php'){ echo 'active';  }else{  echo '';  } ?>  app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon  fa fa-university"></i><span class="app-menu__label">Branch Performance</span><i class="treeview-indicator fa fa-angle-right"></i>
               </a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item <?php echo curentPageActive("brach-activaty.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>brach-activaty.php"><i class="icon fa fa-circle-o"></i>Branch Activaty</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("branch-average-activaty.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>branch-average-activaty.php"><i class="icon fa fa-circle-o"></i> Average Activity</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("branch-job-volume.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>branch-job-volume.php"><i class="icon fa fa-circle-o"></i> Job Volume </a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("branch-command-execution-time.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>branch-command-execution-time.php"><i class="icon fa fa-circle-o"></i> Command Execution Time</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("branch-engagin-tso-oss.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>branch-engagin-tso-oss.php"><i class="icon fa fa-circle-o"></i> Engaging TSOs in OSS</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("branch-system-utilization.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>branch-system-utilization.php"><i class="icon fa fa-circle-o"></i> System utilization</a></li>
               </ul>
            </li>
            <li class="treeview <?php if($pageName == 'indivisual-tso-wise-performance.php' || $pageName == 'individual-contribution-oss.php' ||  $pageName == 'individual-system-utilization.php' || $pageName == 'individual-performance.php'){ echo 'is-expanded';  }else{  echo '';  } ?>">
               <a class="app-menu__item <?php if($pageName == 'indivisual-tso-wise-performance.php' || $pageName == 'individual-contribution-oss.php' ||  $pageName == 'individual-system-utilization.php' || $pageName == 'individual-performance.php'){ echo 'active';  }else{  echo '';  } ?> " href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-line-chart"></i><span class="app-menu__label">Individual Performance</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item <?php echo curentPageActive("indivisual-tso-wise-performance.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>indivisual-tso-wise-performance.php"><i class="icon fa fa-circle-o"></i>TSO-wise performance for a single branch</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("individual-contribution-oss.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>individual-contribution-oss.php"><i class="icon fa fa-circle-o"></i> Individual contribution to OSS</a></li>
                  <li style="display: none;"><a class="treeview-item <?php echo curentPageActive("brach-activaty.php") == true ? 'active' : '';  ?>" href="#"><i class="icon fa fa-circle-o"></i> Engaging TSOs in OSS </a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("individual-system-utilization.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>individual-system-utilization.php"><i class="icon fa fa-circle-o"></i> System utilization of Individuals</a></li>
                  <li><a class="treeview-item <?php echo curentPageActive("individual-performance.php") == true ? 'active' : '';  ?>" href="<?php echo prefix_dot() ?>individual-performance.php"><i class="icon fa fa-circle-o"></i> Individual performance </a></li>
               </ul>
            </li>

            <?php if($_SESSION['role'] == "super_admin") : ?>

               <li class="treeview">
               <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-trophy"></i><span class="app-menu__label">Target Setup</span><i class="treeview-indicator fa fa-angle-right"></i></a>
               <ul class="treeview-menu">
                  <li><a class="treeview-item" href="<?php echo prefix_dot() ?>target/target_list/index.php"><i class="icon fa fa-circle-o"></i>Target Name</a></li>
                  <li><a class="treeview-item" href="<?php echo prefix_dot() ?>target/targets/index.php"><i class="icon fa fa-circle-o"></i>Target List</a></li>
                  <li><a class="treeview-item" href="<?php echo prefix_dot() ?>target_report.php"><i class="icon fa fa-circle-o"></i>Target Report</a></li>
               </ul>
            </li>
            <?php endif; ?>


         </ul>
      </aside>
      <div id="preloader" class="preloader">
         <div class="pre-wrap">
            <div class="wBall" id="wBall_1">
               <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_2">
               <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_3">
               <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_4">
               <div class="wInnerBall"></div>
            </div>
            <div class="wBall" id="wBall_5">
               <div class="wInnerBall"></div>
            </div>
         </div>
      </div>


