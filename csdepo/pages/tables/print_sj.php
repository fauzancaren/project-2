<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<body style="padding: 0 20;">
    <div>
  <?php
    if(isset($_GET['no_sj'])){
        $no_sj    =$_GET['no_sj'];
        }
    else {
        die ("Error. No ID Selected!");    
    }
    include "conn.php";
    $query    =mysqli_query($koneksi, "SELECT * FROM invoice_sj WHERE no_sj='$no_sj'");
    $result    =mysqli_fetch_array($query);
	?>
	
<style> 
.footer{
	width: 100%;
	height: 0px;
	display: flex;
	justify-content: center;
	align-items: center;
	background: #ffffff;
	color:#ffffff;
	font-size: 5em;
	text-transform: uppercase;
	position: fixed;
	bottom: 0px;
	z-index: 1;
}
</style>
      <section class="content">
     
           
              
 
<h4><strong>No Surat Jalan/CS </strong>#<?php echo $result['no_sj']; ?> </h3>
                              
<table width='100%'>
<tr>
			<td><font size='1px'>From  : 
              <address>
                CV MAJU MAPAN JAYA UTAMA<br>
                Jl. Petarukan 67 Dsn Kebonsari, Pemalang<br>
                Phone  : -<br>
                <br>
                </font></address>
			  </td>
			  	<?php
				include "conn.php"; 
				$no = 1;
				$query    =mysqli_query($koneksi, "SELECT isj.*,
				c.company,
				c.street,c.city,c.last_name,c.phone
				FROM invoice_sj isj
				INNER join invoice i on isj.invoice_number = i.invoice_number
				INNER JOIN customers c ON i.sold_to_customer = c.customer_number 
				WHERE isj.no_sj='$no_sj'");
				//var_dump($query);
				//die();
				$result=mysqli_fetch_assoc($query)
				?>
			<td><font size='1px'> To  : 
                <address>
                <?php echo $result['company']; ?><br>
                <?php echo $result['street']; ?>,<?php echo $result['city']; ?>,<br>
                Phone   : <?php echo $result['phone']; ?>
                </font></address>
			  </td>
			  <?php
				include "conn.php"; 
				$query    =mysqli_query($koneksi, "SELECT *
				FROM invoice_sj
				WHERE no_sj='$no_sj'");
				//var_dump($query);
				//die();
				($result=mysqli_fetch_assoc($query))
				?>
			 <td><font size='1px'> Tanggal  :<?php echo $result['invoice_date']; ?>
			 <br>
			 <br>
			 <br>
			 <br>
			 <br>
			 <br>
			 <br>
               </font>
			  </td>
</tr>
</table>
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table" width="100%"rules="all">
                <thead>
                <tr>
                  <th><font size='1px'>No</font></th>
                  <th><font size='1px'>Code Prodect</font></th>
                  <th><font size='1px'>Manufacturer</font></th>
                  <th><font size='1px'>Description</font></th>
                  <th><font size='1px'>QTY</font></th>
                  <th><font size='1px'>Unit</font></th>
                </tr>
                </thead>
                <tbody>
				<?php
				include "conn.php"; 
				$no = 1;
				$query    =mysqli_query($koneksi, "SELECT *
				FROM inventory,invoice_sj
				WHERE no_sj='$no_sj'
				AND inventory.item_number=invoice_sj.item_number");
				//var_dump($query);
				//die();
				while($result=mysqli_fetch_assoc($query))
				{?>
				                    <tr>
                        <td style='padding:2px;'><font size='1px'><?php echo $no++;?></font></td>
                        <td style='padding:2px;'><font size='1px'><?php echo $result['item_number']; ?></font></td>
                          <td style='padding:2px;'><font size='1px'><?php echo $result['manufacturer']; ?></font></td>
                       <td style='padding:2px;'><font size='1px'><?php echo $result['description']; ?></font></td>
                      
                       <td style='padding:2px;'><font size='1px'><?php echo floor($result['quantity']); ?></font></td>
                        <td style='padding:2px;'><font size='1px'><?php echo $result['unit']; ?></font></td>
                       
                    </tr>
                   <?php }?>
                </tbody>
			</table>
				<br>
			<br>
			<br>
		
	
	
			<table width="100%">
			<tr>
			<td style='width:20%;'align='center'><font size='1px'>Customer</font>
			<br>
			<br>
			<br>
			<br>
			
			(-------------------)
		   	</td>
			
			<td style='width:20%;'align='center'><font size='1px'>MOD</font>
			
			<br>
			<br>
			<br>
			<br>
			(-------------------)
			</td>
			<td style='width:20%;'align='center'><font size='1px'>Ass/Spv Cashier</font>
			
			<br>
			<br>
			<br>
			<br>
			(-------------------)
			</td>
			<td style='width:20%;' align='center'><font size='1px'>Driver</font>
			
			<br>
			<br>
			<br>
			<br>
			(-------------------)
			</td>
			<td style='width:20%;' align='center'><font size='1px'>Petugas CS</font>
			
			<br>
			<br>
			<br>
			<br>
			(-------------------)
			</td>
			</tr>
			</table>
			
	   </div>
      </section>
    </div>
	

  </body>
   <script>
  window.print()
  </script>
