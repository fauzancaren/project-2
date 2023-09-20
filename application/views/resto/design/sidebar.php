      <aside class="main-sidebar skin-blue">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url('assets/admin-lte/img/user2-160x160.jpg');?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left">
              <p> <?=$username?></p>
              <a href="#">&nbsp;&nbsp;<i class="fa fa-circle text-success"></i>&nbsp;&nbsp; Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="<?=base_url($url_search)?>" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?=base_url($url_dashboard);?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <span>Transactions </span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url('index.php/sekolah/dashboard/murid');?>"><i class="fa fa-circle-o"></i>Daftar Siswa</a></li>
                <li><a href="<?=base_url('index.php/hpp');?>"><i class="fa fa-circle-o"></i>2 - Harga Pokok Penjualan</a></li>
                <li><a href="<?=base_url('index.php/expense');?>"><i class="fa fa-circle-o"></i>3 - Expense (Biaya Operasional)</a></li>
                <li><a href="<?=base_url('index.php/salexp');?>"><i class="fa fa-circle-o"></i>4 - Pendapatan/Biaya Lain</a></li>
				<li><a href="<?=base_url('index.php/prod_mnk');?>"><i class="fa fa-circle-o"></i>5 - Production</a></li>
				<li><a href="<?=base_url('index.php/hpp_prod');?>"><i class="fa fa-circle-o"></i>5.1 - Harga Pokok Production</a></li>
				<li><a href="<?=base_url('index.php/prod_handil');?>"><i class="fa fa-circle-o"></i>5.2 - Assembly (Prod Handil)</a></li>
				<li><a href="<?=base_url('index.php/prod_emulsi');?>"><i class="fa fa-circle-o"></i>5.3 - Emulsion (Prod Emulsion)</a></li>
                <li><a href="<?=base_url('index.php/beli');?>"><i class="fa fa-circle-o"></i>5.4 - Pembelian</a></li>
                <li><a href="<?=base_url('index.php/prod_anfo');?>"><i class="fa fa-circle-o"></i>5.5 - Production Anfo</a></li>
				<li><a href="<?=base_url('index.php/pajak');?>"><i class="fa fa-circle-o"></i>6 - Pajak</a></li>
				<li><a href="<?=base_url('index.php/depres');?>"><i class="fa fa-circle-o"></i>7 - Depresiasi</a></li>
				&HR
				</ul>
            </li>
			
            <li>
              <a href="<?=base_url('index.php/rpt/daftar');?>">
                <i class="fa fa-pagelines"></i> <span>8 - Reports</span>
              </a>
            </li>

            
            <li class="treeview">
              <a href="#">
                <span>Master Data</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="<?=base_url('index.php/coa');?>"><i class="fa fa-circle-o"></i>9 - Chart Of Accounts</a></li>
                <li class=""><a href="<?=base_url('index.php/product');?>"><i class="fa fa-circle-o"></i>10 - Products</a></li>
                <li class=""><a href="<?=base_url('index.php/plant');?>"><i class="fa fa-circle-o"></i>11 - Plants</a></li>
                <li class=""><a href="<?=base_url('index.php/dept');?>"><i class="fa fa-circle-o"></i>12 - Department</a></li>
                <li class=""><a href="<?=base_url('index.php/customers');?>"><i class="fa fa-circle-o"></i>13 - Customers</a></li>
                <li class=""><a href="<?=base_url('index.php/suppliers');?>"><i class="fa fa-circle-o"></i>14 - Suppliers</a></li>
                <li class=""><a href="<?=base_url('index.php/projects');?>"><i class="fa fa-circle-o"></i>15 - Projects</a></li>
<!--
                <li class=""><a href="<?=base_url('index.php/asset');?>"><i class="fa fa-circle-o"></i> Assets</a></li>
-->
				</ul>
            </li>
            <li class="treeview">
              <a href="#">
                <span>System Setting</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="<?=base_url('index.php/master/kurs');?>"><i class="fa fa-circle-o"></i>15 - Kurs</a></li>
                <li class=""><a href="<?=base_url('index.php/master/periods');?>"><i class="fa fa-circle-o"></i>16 - Periods</a></li>
                <li class=""><a href="<?=base_url('index.php/users');?>"><i class="fa fa-circle-o"></i>17 - Pengguna</a></li>
                <li class=""><a href="<?=base_url('index.php/master/system');?>"><i class="fa fa-circle-o"></i>18 - Sistim</a></li>
                <li class=""><a href="<?=base_url('index.php/coa/realisasi');?>"><i class="fa fa-circle-o"></i>19 - Realisasi Value</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <span>Help</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
				<li>
				  <a href="<?=base_url('index.php/users/blank_page');?>">
					<i class="fa fa-pagelines"></i> <span>Blank Page</span>
				  </a>
				</li>
				<li>
				  <a href="<?=base_url('index.php/users/help');?>">
					<i class="fa fa-pagelines"></i> <span>Help</span>
				  </a>
				</li>
			</ul>
			</li>
            <li>
              <a href="<?=base_url('index.php/template/menu');?>">
                <i class="fa fa-pagelines"></i> <span>Template</span>
              </a>
            </li>
			



        </section>
        <!-- /.sidebar -->
      </aside>


	  