<aside class="main-sidebar skin-blue" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="padding-left: 10px;padding-top: 10px;color: white;" >
  <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image" style="margin-right:10px">
          <img src="<?=base_url('images/profle.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left">
          <span style="color:white">
          <?php 
            if(!isset($username))$username="Guest";
            echo $username;          
          ?>          
          </span>
          </br><a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
    <?php 
        $ci =&get_instance();
      	//$_left_menu=$ci->session->userdata('_left_menu');
        echo $_left_menu; 
    


    ?>

    
  </section>
  <!-- /.sidebar -->
</aside>