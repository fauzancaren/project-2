<?php include 'template/nav.php' ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Undian</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit Undian</li>
                </ol>
              </nav>
			  
            </div>
			 <!--Panel Form pencarian -->
<div class="row">
	<div class="container">
		<div class="my-2">
		<form method="GET" action="#" >
			<div class="input-group">
				<input type="text"  class="form-control col-md-4" name='kata_cari' placeholder='NO FJK' value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" autocomplete='off'  />
				<div class="input-group-append">
					&nbsp;&nbsp; <button type="submit" class="btn btn-primary s-customer">Cari</button>
				</div>
			</div>
		</form>	
		</div>
				<table>
		
		<tbody>
			<?php 
				include('conn.php');
				if(isset($_GET['kata_cari'])) {
				$kata_cari = $_GET['kata_cari'];
				$query = "SELECT * FROM invoice WHERE invoice_number like '%".$kata_cari."%' ";
				} else {
					$query = "SELECT * FROM invoice WHERE invoice_number ";
				}
				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				 $row = mysqli_fetch_assoc($result) 
			?>
			<form action="update-fjk-point.php" method="POST">
			<tr>
			<td>No FJK</td>
			<td>&nbsp;:</td>
			<td><input type="text" style="background:black;" name='invoice_number' value="<?php echo $row['invoice_number']; ?>"  
			class="form-control" readonly></td>
			</tr>
			<?php 
			
			if($row['sold_to_customer'] === 'CASH'){
				echo "<tr>
				<td>ID Member</td>
				<td>&nbsp;:</td>
				<td><input type='number' class='form-control' style='background:black;' 
				name='sold_to_customer'>
				</td>
				</tr>
				<tr>
				<td><button type='submit' class='btn btn-success'>UPDATE</button></td>
				</tr>";
				
			}else{
				echo 'No FJK Sudah Terdaftar Dengan Member ID &nbsp;&nbsp;'; echo $row['sold_to_customer'];
			}
			?>
				
			 
             

              </form>
				
		

		</tbody>
	</table>
	</div>
</div>
	<br>

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
		
					
		

	
  </body>
</html>


