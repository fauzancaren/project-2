<?php include 'template/nav.php' ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Surat Jalan </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">SJ</li>
                </ol>
              </nav>
			  
            </div>
			 <!--Panel Form pencarian -->
  <div class="row">
    <div class="col-md-5">
      <div class="panel panel-default">
       
        <div class="panel-body">
          <form class="form-inline" >
            <div class="form-group">
              <select class="form-control" id="Kolom" name="Kolom" required="">
                <?php
                  $kolom=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
                ?>
                <option value="invoice_number" <?php if ($kolom=="invoice_number") echo "selected";?>>invoice_number</option>
				 <option value="sold_to_customer" <?php if ($kolom=="sold_to_customer") echo "selected";?>>customer_number</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="KataKunci" name="KataKunci" placeholder="Kata kunci.." required="" autocomplete="off" value="<?php if (isset($_GET['KataKunci']))  echo $_GET['KataKunci']; ?>">
            </div>&nbsp;
            <button type="submit" class="btn btn-primary">Cari</button>&nbsp;&nbsp;&nbsp;
            <a href="basic-data-undian.php" class="btn btn-danger">Reset</a>
          </form>
        </div>
      </div>
    </div>
  </div><br>
            <div class="row">

        <div class="container">
 
  <!--Panel Form pencarian -->
  
  <!-- Tabel data Inventory -->
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>No.</th>
	     <th>ID Member</th>
	     <th>Invoice Number</th>
	     <th>Action</th>
     </tr>
    </thead>  
    <tbody>
      <?php
      include "conn.php";
     
      $page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
      
      $kolomCari=(isset($_GET['Kolom']))? $_GET['Kolom'] : "";
     
      $kolomKataKunci=(isset($_GET['KataKunci']))? $_GET['KataKunci'] : "";

      // Jumlah data per halaman
      $limit = 25;

      $limitStart = ($page - 1) * $limit;
      
      //kondisi jika parameter pencarian kosong
      if($kolomCari=="" && $kolomKataKunci==""){
        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM undian GROUP BY invoice_number DESC LIMIT ".$limitStart.",".$limit);
      }else{
        //kondisi jika parameter kolom pencarian diisi
        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM undian GROUP BY $kolomCari LIKE '%$kolomKataKunci%' LIMIT ".$limitStart.",".$limit);
      }
      
      $no = $limitStart + 1;
      
      while($row = mysqli_fetch_array($SqlQuery)){ 
      ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row['sold_to_customer']; ?></td>
          <td><?php echo $row['invoice_number']; ?></td>
             
        <!--  <td><?php //echo $row['description']; ?></td>
          <td><?php //echo $row['item_number']; ?></td>
          <td><?php //echo floor($row['quantity']); ?></td>
          <td><?php //echo $row['unit']; ?></td>-->
		                 <td>
            
                                            <!-- membuat tombol dengan ukuran small berwarna biru  -->
                                            <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
                                            caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
                                           
											
											 <a href="print_undian.php?invoice_number=<?php echo $row['invoice_number']; ?>"  class="btn btn-sm btn-info"target='_blank'>printUndian
											</a>
											
										    
							           </td>
		
        
										</tr>
									  <?php           
									  }
									  ?>
									</tbody>      
								  </table>
								  
<div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><font color="white">Edit Items</h5>
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		 
			<div class="modal-body">
				<form class="form-horizontal item-detail" method="post">
					<!--<div class="form-group">
						<label for="exampleFormControlInput1">Item Number</label>
						 <input type="text" class="form-control"
							value="<?php // echo $row['item_number']; ?>" id="product_id" name="product_id">
					
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Description
							</label>
						<textarea class="form-control"
							rows="5" id="product" name="product"><?php //echo $row['description']; ?></textarea>
					</div>
						-->
				   
					 <div class="modal-footer">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
				</form>
			</div>
		   
		</div>
	</div>
</div>

  <div align="right">
    <ul class="pagination">
      <?php
        // Jika page = 1, maka LinkPrev disable
        if($page == 1){ 
      ?>        
        <!-- link Previous Page disable --> 
        <li class="disabled"><a href="#">Previous</a></li>
      <?php
        }
        else{ 
          $LinkPrev = ($page > 1)? $page - 1 : 1;  

          if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="basic-data-undian.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
       <?php     
          }else{
        ?> 
          <li><a href="basic-data-undian.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $LinkPrev;?>">Previous</a></li>
         <?php
           } 
        }
      ?>

      <?php
        //kondisi jika parameter pencarian kosong
        if($kolomCari=="" && $kolomKataKunci==""){
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM undian");
        }else{
          //kondisi jika parameter kolom pencarian diisi
          $SqlQuery = mysqli_query($koneksi, "SELECT * FROM undian WHERE $kolomCari LIKE '%$kolomKataKunci%'");
        }     
      
        //Hitung semua jumlah data yang berada pada tabel Sisawa
        $JumlahData = mysqli_num_rows($SqlQuery);
        
        // Hitung jumlah halaman yang tersedia
        $jumlahPage = ceil($JumlahData / $limit); 
        
        // Jumlah link number 
        $jumlahNumber = 1; 

        // Untuk awal link number
        $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
        
        // Untuk akhir link number
        $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
        
        for($i = $startNumber; $i <= $endNumber; $i++){
          $linkActive = ($page == $i)? ' class="active"' : '';

          if($kolomCari=="" && $kolomKataKunci==""){
      ?>
          <li<?php echo $linkActive; ?>><a href="basic-data-undian.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

      <?php
        }else{
          ?>
          <li<?php echo $linkActive; ?>><a href="basic-data-undian.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
          <?php
        }
      }
      ?>
      
      <!-- link Next Page -->
      <?php       
       if($page == $jumlahPage){ 
      ?>
        <li class="disabled"><a href="#">Next</a></li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
       if($kolomCari=="" && $kolomKataKunci==""){
          ?>
            <li><a href="basic-data-undian.php?page=<?php echo $linkNext; ?>">Next</a></li>
       <?php     
          }else{
        ?> 
           <li><a href="basic-data-undian.php?Kolom=<?php echo $kolomCari;?>&KataKunci=<?php echo $kolomKataKunci;?>&page=<?php echo $linkNext; ?>">Next</a></li>
      <?php
        }
      }
      ?>
    </ul>
  </div>
</div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
             <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © JOBi Indonesia 2022</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
		
	
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
	
	
	
	
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
	

  </body>
</html>
