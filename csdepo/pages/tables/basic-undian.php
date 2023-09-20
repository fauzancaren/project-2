<?php include 'conn.php'; ?>
<?php
//inisialisasi session
session_start();
//mengecek username pada session
if( !isset($_SESSION['user_id']) ){
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>JOBiiSoft Admin</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <H2>JOBiiSoft</H2>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                 <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">C S</h5>
                  <span>Customer Services</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="../../index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" href="basic-table.php">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Barcode</span>
            </a>
          </li>
		  
		    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Surat Jalan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="basic-sj.php"> Items</a></li>
                <li class="nav-item"> <a class="nav-link" href="basic-data-sj.php"> Data </a></li>
              
              </ul>
            </div>
          </li>
		    <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                 <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Undian</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="basic-undian.php">Add</a></li>
                <li class="nav-item"> <a class="nav-link" href="basic-data-undian.php">Data</a></li>
                <li class="nav-item"> <a class="nav-link" href="basic-data-undian-edit.php">Edit</a></li>
                </ul>
            </div>
          </li>
		  </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
      
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../../assets/images/faces/login.png" alt="">
                     <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['user_id'];?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                        <a href="../../logout.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Undian</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Undian</li>
                </ol>
              </nav>
			  
            </div>
			 <!--Panel Form pencarian -->
<div class="row">
	<div class="container">
		<div class="my-2">
				<div class="input-group">
				 <input type="text" class="form-control s-member col-md-4"  name="cari" placeholder="ID Member" required="" autocomplete="off">
					<div class="input-group-append">
						&nbsp;&nbsp; <button type="button" class="btn btn-primary s-customer">Cari</button>
					</div>
				</div>
		</div>
		
	</div>
</div>
	<br>
	<div class="row">
	<div class="container">
		<div id="result_customer"> 
		</div>
		
	</div>
	</div>
 </div>
</div>
</div>

	
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
		<script>
	const rupiah = (number)=>{
    return new Intl.NumberFormat("id-ID", {
      style: "currency",
      currency: "IDR"
    }).format(number);
  }
	</script>
	<script>
		$(document).on("click",".s-customer",function(event){
			let res_cus = $("#result_customer");
			$.ajax({
				url:"./ajax_undian.php",
				method:"get",
				data:{
					search_by : "customer",
					search_input : $(".s-member").val()
				},
				beforeSend:function(){
					$(res_cus).empty();
				},
				success:function(result){
					let res_html = ``;
					console.log(result);
					if(result){
						res_html = `
						<table>
							<tr>
								<td>ID Member</td>
								<td>:</td>
								<td>${result.customer_number}</td>
								<input type="hidden" name="cust_id" value="${result.customer_number}" />
							</tr>
							<tr>
								<td>Nama Member</td>
								<td>:</td>
								<td>${result.company}</td>
							</tr>
							<tr>
								<td>Phone</td>
								<td>:</td>
								<td>${result.phone}</td>
							</tr>
							<tr>
								<td>Address</td>
								<td>:</td>
								<td>${result.address}</td>
							</tr>
						</table>
						
						<div class="my-2">
							<div class="input-group">
								<input type="text" class="form-control s-fjk col-md-4" placeholder="Masukan nomor FJK" />
								<div class="input-group-append">
									&nbsp;&nbsp;<button class="btn btn-primary s-invoice">Cari</button>
								</div>
							</div>
						</div>
						
						<div id="result_fjk"></div>
						
						`;
					}
					$(res_cus).html(res_html);
				}
			})
		});
		
		$(document).on("click",".s-invoice",function(event){
			let res_fjk = $("#result_fjk");
			$.ajax({
				url:"./ajax_undian.php",
				method:"get",
				data:{
					search_by : "fjk",
					search_input : $(".s-fjk").val(),
					customer_id : $("input[name=cust_id]").val()
				},
				beforeSend:function(){
					$(res_fjk).empty();
				},
				success:function(result){
					let res_html = ``;
					console.log(result);
					if(result.customer_number!=null){
					res_html = `
						<table>
							<tr>
								<td>Amount</td>
								<td>:</td>
								<td>${result.amount}</td>
							</tr>
							<tr>
								<td>Telah mendapatkan undian</td>
								<td>:</td>
								<td>${result.is_undian ? 'Ya' : 'Tidak'}</td>
							</tr>
							<tr>
								<td>Nomor Undian</td>
								<td>:</td>
								<td>${result.no_undian}</td>
							</tr>
						</table>
						<br/>
						${ !result.is_undian && result.available_undian ? `<button class="btn btn-success add-undian">Tambahkan ke-undian</button>` :
						`<i>Telah mendapatkan no undian</i>` }
					`;
					}else{
						window.alert("Kode FJK tidak ditemukan pada customer")
					}
					$(res_fjk).html(res_html);
				}
			});
		});
		$(document).on("click",".add-undian",function(event){
			$.ajax({
				url:"./ajax_undian.php",
				method:"post",
				data:{
					save_at : "undian",
					invoice_id : $(".s-fjk").val(),
					customer_id : $("input[name=cust_id]").val()
				},
				beforeSend:function(){
					
				},
				success:function(result){
					if(result){
						window.alert(result.message);
						if(result.status){
							$("#result_customer").empty();
						}
					}
				}
			})
		});
	</script>

	
  </body>
</html>


<?php
function is_ajax()
{
    $header = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? $_SERVER['HTTP_X_REQUESTED_WITH'] : null;
    return ($header === 'XMLHttpRequest');
}

	

 ?>