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
    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url('assets/jquery/jquery-1.11.3.min.js');?>"></script>
  </head>

<script>
  var CI_ROOT = "<?=base_url()?>index.php/";
  var CI_BASE = "<?=base_url()?>";
</script>

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
		    <?php $this->load->view("template/admin-lte/design/rightmenu",$data);?>		  
		  </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <?php $this->load->view("template/admin-lte/design/sidebar"); ?>      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="overflow:scroll">
        <!-- Content Header (Page header) -->
        <section class="content-header" >
          <strong><span id='content-header'></span></strong>
        </section>        
        <!-- Main content -->
        
        <section class="content" id="content">
         

          