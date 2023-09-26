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
    <script src="https://kit.fontawesome.com/36f07a24cf.js" crossorigin="anonymous"></script>
	<title>MaxOn ERP Online</title>
	<style> 
		.dpui-numberPicker {
    		min-width: 150px !important;
			display: inline-block;
			border-radius: 5px;
			box-shadow: 0 1px 1px rgba(0,0,0,0.1);
		}
		.dpui-numberPicker button {
			margin: 0;
			border: 1px solid #dddddd;
			font-size: 18px;
			display: inline-block;
			width: 30px;
			height: 30px;
			line-height: 20px;
			vertical-align: top;
			outline: none;
			cursor: pointer;
			background: #f0f0f0;
			background: -moz-linear-gradient(top,  #f0f0f0 0%, #cccccc 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f0f0f0), color-stop(100%,#cccccc));
			background: -webkit-linear-gradient(top,  #f0f0f0 0%,#cccccc 100%);
			background: -o-linear-gradient(top,  #f0f0f0 0%,#cccccc 100%);
			background: -ms-linear-gradient(top,  #f0f0f0 0%,#cccccc 100%);
			background: linear-gradient(to bottom,  #f0f0f0 0%,#cccccc 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0f0f0', endColorstr='#cccccc',GradientType=0 );
		}
		.dpui-numberPicker button:hover {
			background: #cccccc;
			background: -moz-linear-gradient(top,  #cccccc 0%, #f0f0f0 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#cccccc), color-stop(100%,#f0f0f0));
			background: -webkit-linear-gradient(top,  #cccccc 0%,#f0f0f0 100%);
			background: -o-linear-gradient(top,  #cccccc 0%,#f0f0f0 100%);
			background: -ms-linear-gradient(top,  #cccccc 0%,#f0f0f0 100%);
			background: linear-gradient(to bottom,  #cccccc 0%,#f0f0f0 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cccccc', endColorstr='#f0f0f0',GradientType=0 );
		}
		.dpui-numberPicker-input {
			display: inline-block;
			width: 75px;
			height: 30px;
			line-height: 30px;
			padding: 0 8px;
			margin: 0;
			text-align: center;
			outline: none;
			vertical-align: top;
			border: 0;
			border-top: 1px solid #dddddd;
			border-bottom: 1px solid #dddddd;
			background: #f9f9f9;
		}
		.dpui-numberPicker-input:focus {
			background: #ffffff;
		}
		.dpui-numberPicker-decrease {
			border-radius: 5px 0 0 5px;
		}
		.dpui-numberPicker-increase {
			border-radius: 0 5px 5px 0;
		}
		.dpui-numberPicker.dpui-numberPicker-min .dpui-numberPicker-decrease, .dpui-numberPicker.dpui-numberPicker-max .dpui-numberPicker-increase {
			background: #cccccc;
			color: #999999;
		}
		.ukuran-lebar {
			color: red;
			right: 14px;
			top: 20%;
			position: absolute;
			height: 60%;
			text-align: center;
			padding-top: 10%;
			padding-right: 5px;
			border-right: 1px solid red;
		}
		.ukuran-lebar::before {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			top: 0;
			right: -10px;
			background: red;
		}
		.ukuran-lebar::after {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			bottom: 0;
			right: -10px;
			background: red;
		}
		.ukuran-panjang {
			color: red;
			position: absolute;
			left: 15px;
			top: 20px;
			width: 70%;
			text-align: center;
			border-top: 1px solid red;
		} 
		.ukuran-panjang::before {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			left: 0;
			background: red;
		}
		.ukuran-panjang::after {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			right: 0;
			background: red;
		}


		.ukuran-baris {
			position: absolute;
			left: 10px;
			bottom: -28px;
			padding-left: 5px;
			color: red;
			text-align: center;
			border-left: 1px solid red;
		} 
		.ukuran-baris::before {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			top: 0;
			left: -10px;
			background: red;
		}
		.ukuran-baris::after {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			bottom: 0;
			left: -10px;
			background: red;
		}

		.ukuran-kolom {
			position: absolute; 
			right: -29px;
			top: 20px;
			width: 26px;
			color: red;
			text-align: center;
			border-top: 1px solid red;
		} 
		.ukuran-kolom::before {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			left: 0;
			background: red;
		}
		.ukuran-kolom::after {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			right: 0;
			background: red;
		}

		.ukuran-samping {
			position: absolute; 
			left: -29px;
			top: 20px;
			width: 26px;
			color: red;
			text-align: center;
			border-top: 1px solid red;
		} 
		.ukuran-samping::before {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			left: 0;
			background: red;
		}
		.ukuran-samping::after {
			content: "";
			position: absolute;
			width: 1px;
			height: 20px;
			top: -10px;
			right: 0;
			background: red;
		}

		.ukuran-atas {
			position: absolute;
			left: 10px;
			top: -28px;
			padding-left: 5px;
			color: red;
			text-align: center;
			border-left: 1px solid red;
		} 
		.ukuran-atas::before {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			top: 0;
			left: -10px;
			background: red;
		}
		.ukuran-atas::after {
			content: "";
			position: absolute;
			width: 20px;
			height: 1px;
			bottom: 0;
			left: -10px;
			background: red;
		}
		.card-label {
			height: 7rem;
    		width: 14rem;
			margin-right :30px;
		}
		.label-15-33{
			height:15mm;
			width:33mm;
			font-size:12px;
		}
		.label-20-40{
			height:20mm;
			width:40mm;
			font-size:14px;
		}
		.label-30-50{
			height:30mm;
			width:50mm;
			font-size:16px;
		}
		.label-print { 
			display: flex;
			flex-direction: column;
			background: white;
			border-radius: 5px;
			padding: 2px;
    		text-align: center;
		}
		.label-print span{ 

		}
		.label-print img{ 
			width: 100%;
			height: 70%;
			padding-top: 5%;
		}
	</style>
</head>
<script type="text/javascript">
	CI_ROOT = "<?=base_url()?>index.php/";
	CI_BASE = "<?=base_url()?>";

	if(dpUI===undefined)var dpUI={data:{},helper:{},options:{},versions:{}};
	dpUI.helper.data2obj=function(e){if(e===undefined)return false;var t={};for(var n=0;n<e.attributes.length;n++){if((e.attributes[n].nodeName+"").indexOf("data-")>-1){var r=(e.attributes[n].nodeName+"").substring(5);var i=e.attributes[n].value;if(i.toLowerCase()=="true")i=true;else if(i.toLowerCase()=="false")i=false;else if(parseFloat(i)+""==i)i=parseFloat(i);t[r]=i}}return t};
	dpUI.helper.formatter=function(n, format){
		if(!format||format.length==0)return n+"";
		var w = Math.floor(n);
		var d = n-w;
		var b = format.indexOf(".");
		var a = ((format.length-b)-1);
		w=w+"";
		while(w.length<b)w="0"+w;
		d=Math.round( d*Math.pow(10,a) )+"";
		while(d.length<a)d+="0";
		return w+"."+d;
	};
	dpUI.helper.betterParseFloat = function(s){
		if(isNaN(parseFloat(s))){
			if(s.length<2)return parseFloat(s);
			return dpUI.helper.betterParseFloat(s.substring(1));
		} else return parseFloat(s);
	};
	dpUI.versions.numberPicker = "2.0.0";
	dpUI.numberPicker = function(selector, options){
		var defaults = {
			start: 0,
			min: false,
			max: false,
			step: 1,
			format: false,
			formatter: function(x){return x;},
			increaseText: "+",
			decreaseText: "-",
			
			onReady: function(){},
			onMin: function(){},
			onMax: function(){},
			beforeIncrease: function(){},
			beforeDecrease: function(){},
			beforeChange: function(){},
			afterIncrease: function(){},
			afterDecrease: function(){},
			afterChange: function(){}
		};
		$(selector).each(function(){
			var el = this;
			var np = $(el);
			el.options = $.extend(defaults, options);
			el.options = $.extend(el.options, dpUI.helper.data2obj(el));
			el.number = dpUI.helper.betterParseFloat(el.options.start);
			np.addClass("dpui-numberPicker").html("<button class='dpui-numberPicker-decrease'>"+el.options.decreaseText+"</button><input type='text' class='dpui-numberPicker-input' /><button class='dpui-numberPicker-increase'>"+el.options.increaseText+"</button>");
			var input = np.find(".dpui-numberPicker-input");
			input.val(el.options.formatter(dpUI.helper.formatter(el.number, el.options.format)));
			if(el.options.min!==false&&el.options.start==el.options.min)np.addClass("dpui-numberPicker-min");
			if(el.options.max!==false&&el.options.start==el.options.max)np.addClass("dpui-numberPicker-max");
			
			function set(num){
				num = dpUI.helper.betterParseFloat(num);
				if(isNaN(num)) num = el.number;
				np.removeClass("dpui-numberPicker-min").removeClass("dpui-numberPicker-max");
				el.options.beforeChange.call(el,el,el.number);
				if(el.options.min!==false&&num<=el.options.min){
					np.addClass("dpui-numberPicker-min");
					el.number = el.options.min;
				} else if(el.options.max!==false&&num>=el.options.max){
					np.addClass("dpui-numberPicker-max");
					el.number = el.options.max;
				} else {
					el.number = num;
				}
				input.val(el.options.formatter(dpUI.helper.formatter(el.number, el.options.format)));
				el.options.afterChange.call(el,el,el.number);
			};
			el.set = function(number){
				set(number);
			};
			el.increase = function(){
				el.options.beforeIncrease.call(el,el,el.number);
				set(el.number+el.options.step);
				el.options.afterIncrease.call(el,el,el.number);
			};
			el.decrease = function(){
				el.options.beforeDecrease.call(el,el,el.number);
				set(el.number-el.options.step);
				el.options.afterDecrease.call(el,el,el.number);
			};
			np.find(".dpui-numberPicker-decrease").on("click", el.decrease);
			np.find(".dpui-numberPicker-increase").on("click", el.increase);
			input.on("change", function(){
				el.set(input.val());
			});
		});
	};
	(function($){
		$.fn.dpNumberPicker = function(options){
			if(typeof(options)=="string"){
				if(options.toLowerCase()=="increase")this.each(function(){this.increase();});
				else if(options.toLowerCase()=="decrease")this.each(function(){this.decrease();});
				else if(options.toLowerCase()=="set"&&arguments.length>1){
					var n = arguments[1];
					this.each(function(){this.set(n)});
				}
			} else dpUI.numberPicker(this.selector, options);
		};
	}(jQuery));
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
					<button class="btn btn-danger py-0" type="submit" id='logout'><i class="fas fa-sign-out-alt pe-2"></i>Logout</button>
				</div> 
			</div>  
        </div> 
		<div class="accordion accordion-flush pt-2" id="printbarcode">
			<div class="accordion-item mb-3">
				<h2 class="accordion-header" id="printbarcode1">
					<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<i class="fas fa-list pe-2"></i>List Barang
					</button>
				</h2>
				<div id="collapseOne" class="accordion-collapse collapse show">
					<div class="accordion-body">
						<div class="table-responsive">
							<table id="example" class="display table table-hover nowrap" style="width:100%">
								<thead>
									<tr>
										<th >Kode Barang</th>
										<th >Nama Barang</th> 
										<th >Category</th> 
										<th >Qty</th> 
										<th>Action</th> 
									</tr>
								</thead>
							</table>
						</div>
						<div class="d-flex justify-content-center bg-light py-2">
							<button class="btn btn-sm btn-success me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus pe-2"></i>Tambah Barang</button> 
						</div>
					</div>
				</div>
			</div>
			<div class="accordion-item mb-4">
				<h2 class="accordion-header" id="printbarcode2">
					<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<i class="fas fa-cogs pe-2"></i>Printer Setup
					</button>
				</h2>
				<div id="collapseTwo" class="accordion-collapse collapse">
					<div class="accordion-body">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="mb-3 row">
									<label for="print-ukuran" class="col-sm-6 col-form-label">Ukuran Label</label>
									<div class="col-sm-6">
										<select class="form-select form-select-sm"  id="print-ukuran">
											<option value="0" selected>15 x 33</option>
											<option value="1">20 x 40</option>
											<option value="2">30 x 50</option>
										</select> 
									</div>
								</div> 
								<div class="mb-3 row"> 
									<label for="print-kolom" class="col-sm-6 col-form-label">Jumlah Kolom</label>
									<div class="col-sm-6">
										<select class="form-select form-select-sm" id="print-kolom">
											<option value="1" selected>1</option>
											<option value="2">2</option>
											<option value="3">3</option>
										</select> 
									</div>
								</div> 
								<div class="mb-3 row">
									<label for="print-margin-atas" class="col-sm-6 col-form-label">margin atas</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="number" min="1" max="100" class="form-control form-control-sm" id="print-margin-atas" value="10">
											<span class="input-group-text" id="print-margin-atas">mm</span>
										</div> 
									</div> 
								</div>
								<div class="mb-3 row">
									<label for="print-margin-samping" class="col-sm-6 col-form-label">margin samping</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="number" min="1" max="100" class="form-control form-control-sm" id="print-margin-samping" value="10">
											<span class="input-group-text" id="print-margin-samping">mm</span>
										</div> 
									</div> 
								</div>
								<div class="mb-3 row">
									<label for="print-jarak-kolom" class="col-sm-6 col-form-label">Jarak Antar Kolom</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="number" min="1" max="100" class="form-control form-control-sm" id="print-jarak-kolom" value="10">
											<span class="input-group-text" id="print-jarak-kolom">mm</span>
										</div> 
									</div> 
								</div>
								<div class="mb-3 row">
									<label for="print-jarak-baris" class="col-sm-6 col-form-label">Jarak Antar Baris</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="number" min="1" max="100" class="form-control form-control-sm"  id="print-jarak-baris" value="10">
											<span class="input-group-text" id="print-jarak-baris">mm</span>
										</div> 
									</div> 
								</div>
								<hr>
								<div class="d-flex float-end">
									<button class="btn btn-sm btn-primary me-2" id="btn-preview"><i class="fas fa-eye pe-2"></i>preview</button> 
									<button class="btn btn-sm btn-primary" id="btn-print"><i class="fas fa-print pe-2"></i>Print</button>  
								</div>
							</div>
							<div class="col-12 col-md-8 border rounded bg-opacity-25 bg-secondary pt-4 py-4 ps-4">
								<div class="d-flex align-items-center" style="margin-bottom: 30px;">
									<div class="card-label bg-white rounded border border-secondary kol-1">
										<div class="position-relative w-100 h-100">
											<div class="ukuran-lebar">15</div>
											<div class="ukuran-panjang">33</div>
											<div class="ukuran-kolom">10</div>
											<div class="ukuran-baris">10</div>
											<div class="ukuran-atas">10</div>
											<div class="ukuran-samping">10</div>
										</div>
									</div>
									<div class="card-label bg-white rounded border border-secondary kol-2" style="display: none;"></div>
									<div class="card-label bg-white rounded border border-secondary kol-3" style="display: none;"></div>
								</div>
								<div class="d-flex align-items-center" style="margin-bottom: 30px;">
									<div class="card-label bg-white rounded border border-secondary kol-1">
										 
									</div>
									<div class="card-label bg-white rounded border border-secondary kol-2" style="display: none;"></div>
									<div class="card-label bg-white rounded border border-secondary kol-3" style="display: none;"></div>
								</div>
							</div> 
						</div> 
						<div class="row mt-4 print-preview"> 
							<h4>Print Preview</h4> 
							<div class="pb-2" style="display: block;background: gainsboro;" id="preview">  
								
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
			"responsive": true,
			"info": false,
			"ordering": false,
			"paging": false,
			"searching": false, 
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
					'<div id="'+ tblsearch.rows('.selected').data()[0][0] +'"></div>',
					'<button type="button" class="btn btn-sm btn-danger delete"><i class="fas fa-times pe-2"></i>Hapus</button>'
				])
				.draw(false);
			dpUI.numberPicker("#" + tblsearch.rows('.selected').data()[0][0], {
				min: 1,
				max: 50,
				step: 1, 
				step: 1, 
				start: 1,
			}); 
			$("#staticBackdrop").modal("hide");
		});
		tbllist.on('click', '.delete', function (e) { 
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
		$("#print-ukuran").change(function(){ 
			if($(this).val() == 0){
				$(".ukuran-lebar").html("15")
				$(".ukuran-panjang").html("33")
			}
			if($(this).val() == 1){
				$(".ukuran-lebar").html("20")
				$(".ukuran-panjang").html("40")
			}
			if($(this).val() == 2){
				$(".ukuran-lebar").html("30")
				$(".ukuran-panjang").html("50")
			}
		});
		$("#print-kolom").change(function(){
			if($(this).val() == 1){ 
				$(".kol-2").hide();
				$(".kol-3").hide();
			}
			if($(this).val() == 2){
				$(".kol-2").show();
				$(".kol-3").hide();
			}
			if($(this).val() == 3){
				$(".kol-2").show();
				$(".kol-3").show();
			}
		});
		$("#print-jarak-kolom").change(function(){ 
			$(".ukuran-kolom").html($("#print-jarak-kolom").val())
		});
		$("#print-jarak-baris").change(function(){ 
			$(".ukuran-baris").html($("#print-jarak-baris").val())
		}); 
		$("#print-margin-atas").change(function(){ 
			$(".ukuran-atas").html($("#print-margin-atas").val())
		}); 
		$("#print-margin-samping").change(function(){ 
			$(".ukuran-samping").html($("#print-margin-samping").val())
		}); 
		const getBase64FromUrl = async (url) => {
			const data = await fetch(url);
			const blob = await data.blob();
			return new Promise((resolve) => {
				const reader = new FileReader();
				reader.readAsDataURL(blob); 
				reader.onloadend = () => {
				const base64data = reader.result;   
				resolve(base64data);
				}
			});
		}
		async function create_page_view(){
			let json_label = [];
			$("#preview").html("");
			var f = tbllist.rows().data();
			for(var i=0 ; f.length>i;i++){ 
				let jumlah_print = $("#" + f[i][0] + " input").val();
				for(var j=0 ;jumlah_print>j;j++){ 
					json_label.push(f[i][0]); 
				} 
			}   
			async function url_barcode ($number){ 
				let url = "<?= base_url() ?>barcode.php?codetype=code128a&size=30&text=" + $number + "&print=false";
				let base64 = await getBase64FromUrl(url);
				return base64; 
			}
			console.log(json_label);

			// Ukuran Label;
			let class_label = "";
			let barcode = "";
			if($("#print-ukuran").val() == 0) {
				class_label = "height:15mm;width:33mm;font-size:12px;"; 
				barcode = "width: 30mm;margin-left: 1.5mm;height: 8mm;margin-top: 1mm;";
			}
			if($("#print-ukuran").val() == 1) {
				class_label = "height:20mm;width:40mm;font-size:14px;";
				barcode = "width: 37mm;margin-left: 1.5mm;height: 13mm;margin-top: 1mm;";
			}
			if($("#print-ukuran").val() == 2) {
				class_label = "height:30mm;width:50mm;font-size:16px;";
				barcode = "width: 47mm;margin-left: 1.5mm;height: 18mm;margin-top: 1mm;";
			}


			let jml_baris = Math.ceil(json_label.length / $("#print-kolom").val());
			let json_index = 0;
			let html_create = `<table style="margin-top: ${$("#print-margin-atas").val()}mm;margin-left: ${$("#print-margin-samping").val()}mm;display: inline-block"><tbody>`;
			for(var i=0; jml_baris>i;i++){ // looping baris
				let idx = $("#print-kolom").val() * i;
				html_create += '<tr>'; 
				for(var j=0; $("#print-kolom").val()>j;j++){ //looping kolom dari baris
					let idx_next = idx + j;
					if(json_label.length > idx_next){
						html_create += `
						<td style="padding-left:${(j==0?"0":$("#print-jarak-kolom").val())}mm;padding-bottom:${((jml_baris-1)==i?"0":$("#print-jarak-baris").val())}mm">
							<table style='background: white; ${class_label}border-radius: 5px; '>
								<tbody>
									<tr><td><img src="${await url_barcode(json_label[idx + j])}" alt="" style="${barcode}"></td></tr>
									<tr><td><div style="text-align: center; ">${json_label[idx + j]}</div></td></tr>
								</tbody>
							</table> 
						</td>`;
					}  
				}
				html_create += '</tr>';
			} 
			$("#preview").html(html_create); 
		}

		$(".print-preview").hide();
		$("#btn-preview").click(async function(){ 
			if(tbllist.rows().data().length == 0) {
				alert("masukan item barang terlebih dahulu");
				return false;
			} 
			await create_page_view();
			$(".print-preview").show();
		});
		$("#btn-print").click(async function(){  
			
			if(tbllist.rows().data().length == 0) {
				alert("masukan item barang terlebih dahulu");
				return false;
			} 
			await create_page_view();
			$(".print-preview").hide();
			var prtContent = document.getElementById("preview");
			var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
			WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.close();
			WinPrint.focus();
			WinPrint.print();
			WinPrint.close();
		})
	</script>
    <!-- </body> -->
</BODY>



<script languange="javascript">

</script>