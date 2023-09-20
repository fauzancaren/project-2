
<?php
if(!isset($title))$title="Home";
if(!isset($_left_menu))$_left_menu="Left Menu";
if(!isset($_right_menu))$_right_menu="Right Menu";
$data["_left_menu"]=$_left_menu;
$data["_right_menu"]=$_right_menu;
 	
 	 	
$themes=$this->sysvar->getvar('themes','standard');
if($themes==""){
    $themes="standard";
}
$versi_lib_js="5";  //ubah v1+1 apabila ada versi barunya libjs biar direload

?>
<!DOCTYPE html>
<html>
	
  <head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?=base_url('assets/fontawesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
    
    <!-- Ionicons -->
    <link href="<?=base_url('assets/ionicons/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="<?=base_url('assets/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url('assets/admin-lte/css/AdminLTE.min.css');?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url('assets/admin-lte/css/skins/_all-skins.min.css');?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/admin-lte/css/my_style.css');?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url('assets/jquery/jquery-1.11.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url('assets/bootstrap-3.3.5/js/bootstrap.min.js');?>" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?=base_url('assets/slimScroll/jquery.slimscroll.min.js');?>" type="text/javascript"></script>    
    <!-- FastClick -->
    <script src='<?=base_url('assets/fastclick/fastclick.min.js');?>'></script>
    <!-- Jvectormap 1.2.2 -->
    <script src="<?=base_url('assets/jvectormap/jquery-jvectormap-1.2.2.min.js');?>" type="text/javascript"></script>    
    <!-- Jvectormap 1.2.2 -->
    <script src="<?=base_url('assets/jvectormap/jquery-jvectormap-world-mill-en.js');?>" type="text/javascript"></script>    
    <!-- AdminLTE App -->
    <script src="<?=base_url('assets/admin-lte/js/app.min.js');?>" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="<?=base_url('assets/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?=base_url('assets/admin-lte/js/printThis.js');?>" type="text/javascript"></script>

	<script src="<?=base_url('assets/admin-lte/js/mylib.js');?>" type="text/javascript"></script>
<!--
    <script src="<?=base_url('assets/admin-lte/js/dashboard2.js')?>" type="text/javascript" ></script>
    
-->    
    <script src="<?=base_url('assets/chartjs/Chart.js')?>" type="text/javascript" ></script>
    <script src="<?=base_url('js/lib.js?v=1')?>" type="text/javascript" ></script>
    <script src="<?=base_url('assets/pos/lib_pos_resto.js?v=1')?>" type="text/javascript" ></script>

    
  </head>
  <body class="skin-red fixed">
    <div class="wrapper">      
      <header class="main-header">
        <!-- Logo -->
        <a href="<?=base_url();?>" class="logo"><?=$title?></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
		  <?php $this->load->view("resto/design/rightmenu",$data);?>
		  
		</nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
	  <?php $this->load->view("resto/design/sidebar",$data);?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <strong>HOME</strong>
        </section>
        
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->