<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<head>

	<script type="text/javascript" charset="utf-8" src="<?=base_url()?>/assets/jquery/jquery-1.11.3.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

	<link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/select/1.7.0/css/select.bootstrap5.min.css" rel="stylesheet">
	
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <title>MaxOn ERP Online</title>
</head>
<script type="text/javascript">
CI_ROOT = "<?=base_url()?>index.php/";
CI_BASE = "<?=base_url()?>";
</script>

<BODY class="bg-light"> 
    <div class="container">
        <div class="row text-bg-light p-4"> 
			<div class='col'>
					<h1>Print Barcode</h1>
			</div>
			<div class='col-auto'> 
				<label for="basic-url" class="form-label">Action</label>
				<div class="input-group mb-3"> 
					<button class="btn btn-danger py-0" type="submit" id='logout'>Logout</button>
				</div> 
			</div>  
        </div>
		<!-- 		
        	<div class='row'>
			<div class="col-12">
				<input class="btn btn-primary " type="submit" value="Tambah" name='Tambah' style="height:30px">
			</div>
            <div class='col-md-12'>
                <table class='table'>
                    <thead>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th> 
                    </thead>
                    <tbody>
                        <?php 
						if($this->input->post("logout")){
							redirect(base_url("index.php/inventory/printbarcode_logout"));
						} else if($this->input->post("cari")){
							$s="select item_number,description,retail,quantity_in_stock,category,
								manufacturer,supplier_number,cost,cost_from_mfg 
								from inventory where 1=1 ";
							if($item_number=$this->input->post("item_number")){
								if($item_number!=""){
									$s.=" and item_number='$item_number' ";
								}
							}
							if($description=$this->input->post("description")){
								if($description!=""){
									$s.=" and description like '%$description%' ";
								}
							}
							
							$s.=" limit 100";
							if($q=$this->db->query($s)){
								foreach($q->result() as $r){
									$cost=$r->cost_from_mfg;
									if($cost==0)$cost=$r->cost;
									$promo="";
									$s="select p.qty,p.nilai from promosi_disc p left join promosi_item pi 
									on pi.promosi_code=p.promosi_code where pi.item_number='$r->item_number' ";
									$s.=" and ('".date('Y-m-d H:i:s'). "' between p.date_from and p.date_to)";

									if($qpro=$this->db->query($s)){
										foreach($qpro->result() as $rpro){
											$promo.=",".$rpro->nilai;
										}
									}
									if ($promo=="") {
										// cari promo by supplier
										$s="select p.nilai from promosi_disc p left join promosi_item pi 
										on pi.promosi_code=p.promosi_code where pi.item_number='$r->supplier_number' 
										and '".date('Y-m-d H:i:s'). "' between p.date_from and p.date_to";
										if($qpro=$this->db->query($s)){
											foreach($qpro->result() as $rpro){
												$promo.=",".$rpro->nilai;
											}
										}
									}
									if ($promo=="") {
										// cari promo by supplier
										$s="select p.nilai from promosi_disc p left join promosi_item pi 
										on pi.promosi_code=p.promosi_code where pi.item_number='$r->category' 
										and '".date('Y-m-d H:i:s'). "' between p.date_from and p.date_to";
										if($qpro=$this->db->query($s)){
											foreach($qpro->result() as $rpro){
												$promo.=",".$rpro->nilai;
											}
										}
									}
									$margin=0;
									if($r->retail>0)$margin=(($r->retail-$cost)/$r->retail)*100;
									echo "<tr><td>$r->item_number</td><td>$r->description</td>
									<td align='right'>".number_format($r->retail)."</td>";
									if ((strtolower(user_id())=="admin")) { 									
										echo "<td align='right'>".number_format($cost)."</td>
										<td align='right'>".number_format($margin,2)."</td>";
									}
									$qty_total=$r->quantity_in_stock;
									$qty_total=$this->inventory_model->quantity_in_stock($r->item_number);

									echo "<td align='right'>".number_format($qty_total)."</td>
									<td>$promo</td>
									<td>$r->category</td><td>$r->manufacturer</td>
									</tr>";
									$qty_gudang="";
									if($qgdg=$this->db->where("item_number",$r->item_number)
											->get("inventory_warehouse")){
										foreach($qgdg->result() as $rgdg){
											$qty_gudang.="$rgdg->warehouse_code [$rgdg->quantity], "; 
										}
									}	
									if($qty_gudang!=""){
										echo "<tr><td></td><td colspan=6><i>$qty_gudang</i></td></tr>";
									}
								}
							}
						} else {
							echo "<tr><td colspan=5>Silahkan isi nama dan klik tombol cari</td></tr>";
						}
					
					?>
                    </tbody>
                </table>

            </div>
        </div> -->
		<div class="accordion accordion-flush pt-2" id="printbarcode">
			<div class="accordion-item mb-3">
				<h2 class="accordion-header" id="printbarcode1">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						List Barang
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show">
					<div class="accordion-body">
						<table id="example" class="display table table-hover" style="width:100%">
							<thead>
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th> 
									<th>Category</th> 
									<th>Qty</th> 
									<th>Action</th> 
								</tr>
							</thead>
						</table>
						<div class="d-flex justify-content-center bg-light py-2">
							<button class="btn btn-sm btn-success me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah Barang</button> 
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="printbarcode2">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						Printer Setup
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse">
					<div class="accordion-body">
						<div class="row">
							<div class="col-6">
								<div class="mb-3 row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Ukuran Label</label>
									<div class="col-sm-10">
										<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
									</div>
								</div> 
								<div class="mb-3 row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Jumlah Kolom</label>
									<div class="col-sm-10">
										<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
									</div> 
								</div>
								<div class="mb-3 row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Jarak Antar Kolom</label>
									<div class="col-sm-10">
										<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
									</div> 
								</div>
								<div class="mb-3 row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Jarak Antar Baris</label>
									<div class="col-sm-10">
										<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
									</div> 
								</div>
							</div>
							<div class="col-6">
								<div class="position-relative">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div>		
    </div> 
	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Pilih Barang</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4">
							<label for="basic-url" class="form-label">Cari Nama / kode barang</label>
						</div>
						<div class="col-8"> 
							<input type="text" class="form-control" placeholder="cari nama atau kode barang" id="text-search">  
						</div>
					</div>
					<div class="row">
						<table id="pencarian" class="display table table-hover" style="width:100%">
							<thead class="table-dark">
								<tr>
									<th>Kode Barang</th>
									<th>Nama Barang</th> 
									<th>Category</th> 
								</tr>
							</thead>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
					<button type="button" class="btn btn-primary" id="btnselect">Pilih</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/jquery.numeric@1.0.0/jquery.numeric.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
	<script>

		const myModalEl = document.getElementById('staticBackdrop')
		$("#logout").click(function(){ 
			window.location.href = "<?= base_url("index.php/inventory/printbarcode_logout") ?>";
		})
		$("#tambah").click(function(){

		}) 
		var tbllist = new DataTable('#example', {
			info: false,
			ordering: false,
			paging: false,
			searching: false, 
			"language": {
				"emptyTable": "Silahkan Tambahkan Barang dengan mengklik tombol tambah"
			}
		});
 
		var tblsearch = $('#pencarian').DataTable({
            "responsive": false,
            "searching": false,
            "lengthChange": false, 
            "processing": true,
            "serverSide": true, 
			"ordering": false,
			"info": false,  
            "ajax": {
               "url": "<?= base_url("index.php/inventory/printbarcode_search") ?>",
               "type": "POST",
               "data": function(data) {
                  data.search['value'] = $('#text-search').val(); 
               },
               "complete": function(data) {
					$("#btnselect").prop("disabled",true);
			   }
            },  
		});
		tblsearch.on('click', 'tbody tr', (e) => {
			let classList = e.currentTarget.classList;
		
			if (classList.contains('selected')) {
				classList.remove('selected');
				$("#btnselect").prop("disabled",true);
			}
			else {
				tblsearch.rows('.selected').nodes().each((row) => row.classList.remove('selected'));
				classList.add('selected');
				$("#btnselect").prop("disabled",false);
			}
		});
		
		$('#btnselect').click(function () { 
			if(tbllist.rows().data().length > 0){
				var f = tbllist.rows().data();
				for(var i=0 ; f.length>i;i++){ 
					if(f[i][0] == tblsearch.rows('.selected').data()[0][0]) return false;
				}
			}   
			tbllist.row
				.add([
					tblsearch.rows('.selected').data()[0][0],
					tblsearch.rows('.selected').data()[0][1],
					tblsearch.rows('.selected').data()[0][2],
					'<input class="number" type="text" id="' + tblsearch.rows('.selected').data()[0][0] + '" value="1"/>',
					'<button type="button" class="btn btn-sm btn-danger" >Hapus</button>'
				])
				.draw(false);

			$('.number').numeric({decimal: false, negative: false});
			$("#staticBackdrop").modal("hide");
		});
		tbllist.on('click', 'button', function (e) {
			let data = tbllist.row(e.target.closest('tr')).data(); 
			alert(data[0]);
			var row = $(this).parents('tr');
			
			if ($(row).hasClass('child')) {
				tbllist.row($(row).prev('tr')).remove().draw();
			} else {
				tbllist
					.row($(this).parents('tr'))
					.remove()
					.draw();
			}
		});
		$('#text-search').keyup(function() {
			tblsearch.ajax.reload(null, false).responsive.recalc().columns.adjust();
		});  
		myModalEl.addEventListener('show.bs.modal', event => {
			console.log("show modal");
			$("#text-search").val("");
		});
		myModalEl.addEventListener('hidden.bs.modal', event => {
			console.log("hidden modal");
		});
	</script>
    <!-- </body> -->
</BODY>



<script languange="javascript">

</script>