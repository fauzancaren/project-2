<div class="thumbnail box-gradient">
	<?php
	$themes=getvar("themes");
	echo link_button('Save', 'save_this()','save');		
	echo link_button('Print', 'print_bukti()','print');		
	if($mode=="view")echo link_button("Delete", "delete_nomor();","remove");

	?>
	<div style="float:right">
		<span class=" hide-sb">		
		<a href="#" class="easyui-splitbutton" data-options="plain:false,menu:'#mmOptions',iconCls:'icon-tip'">Options</a>
		<div id="mmOptions" style="width:200px;" >
			<div onclick="load_help()">Help</div>
			<div>Update</div>
			<div>MaxOn Forum</div>
			<div>About</div>
		</div>
		</span>
		<?php echo link_button('Help', 'load_help()','help');?>		
		<?php echo link_button('Close', 'remove_tab_parent()','cancel');?>		
	
	</div>
	
</div>

 <div class="easyui-tabs" style="width:auto;height:auto;min-height:300px">
	<div title="General" style="padding:10px">

	<form id="frmLoan"  method="post">
	   <input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
	   <table class='table'>
			<tr>
				<td>Nomor Anggota</td><td><?php echo form_input('no_anggota',$no_anggota,"id=no_anggota","style='width:70%'"); 
					if($themes=="admin"){
						$extra ="data-target='#dialog_kop_anggota' data-toggle='modal' ";
					} else {
						$extra="";
					}
					echo link_button("","select_anggota()","search",'false','','','','',$extra);
				
				?>

				</td>

				<td rowspan='4' colspan='4'>
					<div class="thumbnail" style="width:350px;height:100px">
						<p id='nama'>Nama Anggota</p>
						<p id='lblJenisPinjamanInfo'>Info  Jenis Pinjaman</p>
					</div>
				</td>
				
			</tr>
			<tr>
				<td>Jenis Pinjaman</td><td><?php echo form_input('jenis_pinjaman',$jenis_pinjaman,"id=jenis_pinjaman", "style='width:80%'");
					if($themes=="admin"){
						$extra ="data-target='#dialog_kop_jenis_pinjaman' data-toggle='modal' ";
					} else {
						$extra="";
					}
					echo link_button("", "select_jenis()","search","false","","","","",$extra);
					?></td>
			</tr>
			<tr>
				<td>Nomor Pinjaman</td>
				<td>
					<?php
					if($mode=='view'){
						echo "<span class='thumbnail'><strong>$no_pinjaman</strong></span>";
						echo "<input type='hidden' id='no_pinjaman' name='no_pinjaman' value='$no_pinjaman' style='width:70%'>";
					} else { 
						echo form_input('no_pinjaman',$no_pinjaman,"id=no_pinjaman","style='width:70%'");
					}		
					?>
				</td>
			</tr>	 
		   <tr>
				<td>Tanggal Pinjam</td><td><?=form_input('tanggal',$tanggal,"class='easyui-datetimebox date-sb' 
				data-options='formatter:format_date,parser:parse_date' style='width:180px'");?></td>
		   </tr>
		   <tr>
				<td>Tanggal Jatuh Tempo</td><td><?=form_input('tanggal_tempo',$tanggal_tempo,"class='easyui-datetimebox date-sb' 
				data-options='formatter:format_date,parser:parse_date' style='width:180px'");?></td>
				<td>Nomor Rekening Simpanan</td><td>
				<?php echo form_input('no_simpanan',$no_simpanan,"id=no_simpanan");
					if($themes=="admin"){
						$extra ="data-target='#dialog_kop_simpanan' data-toggle='modal' ";
					} else {
						$extra="";
					}
				 
					echo link_button("","select_rekening()","search","false","","","","",$extra)?></td>
			</tr>
			<tr><td>Jumlah Pinjaman</td><td><?=form_input('jumlah',$jumlah,"id=jumlah");?></td>
				<td>Bunga %</td><td><?=form_input('bunga_prc',$bunga_prc,"id=bunga");?></td></tr>
			<tr><td>Provisi %</td><td><?=form_input('provisi_prc',$provisi_prc,"id=provisi");?></td>
				<td>Resiko %</td><td><?=form_input('resiko_prc',$resiko_prc,"id=resiko_prc");?></td></tr>
			<tr><td>Angsuran Pokok</td><td><?=form_input('angsur_pokok',$angsur_pokok,"id=angsur_pokok");?></td>
				<td>Angsuran Bunga</td><td><?=form_input('angsur_bunga',$angsur_bunga,"id=angsur_bunga");?></td></tr>
			<tr><td>Jumlah Angsuran</td><td><?=form_input('angsuran',$angsuran,"id=angsuran");?></td>
				<td>Jangka Waktu (Bulan)</td><td><?=form_input('jangka_waktu',$jangka_waktu,"id=jangka_waktu");?></td></tr>
			<tr><td>Keterangan</td><td colspan=4><?=form_input('comments',$comments,"style='width:400px'");?></td></tr>

		</table>
	   </form>
	</div>
	<div title='Cicilan'>
		<?php include_once "cicilan.php" ?>
	</div>
	<div id="divPinjaman" title='Lainnya'></div>  


</div>	
	
<script type="text/javascript">
	var themes="<?=$themes?>";
	var CI_ROOT = "<?=base_url()?>index.php/";
	var CI_BASE = "<?=base_url()?>";
	var url_save='<?=base_url()?>index.php/koperasi/pinjaman/save';

	$().ready(function(){
		$( "#frmLoan" ).submit(function( event ) {
			event.preventDefault();
			$.ajax({
				url: url_save, type:'POST', dataType:'html', 
				data:$(this).serialize(),
				beforeSend: function(){	},
				success: function(result){
					var result = eval('('+result+')');
					console.log(result);
					if (result.success){
						$('#no_pinjaman').val(result.no_pinjaman);
						$('#mode').val('view');
						log_msg('Data sudah tersimpan.');
					} else {
						log_err(result.msg);
					}

				}
			})
		});
		
	});
	function save_this(){
		loading();
		if(themes=="admin"){
			$("#frmLoan").submit();
		} else {
			save_this_std();
		}
	}
    function save_this_std(){
        if($('#no_anggota').val()===''){alert('Isi dulu nomor anggota !');return false;};
        if($('#no_simpanan').val()===''){alert('Isi dulu nomor simpanan !');return false;};
		$('#frmLoan').form('submit',{
				url: url_save,
				themes: themes,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#no_pinjaman').val(result.no_pinjaman);
						$('#mode').val('view');
						log_msg('Data sudah tersimpan.');
						remove_tab_parent();
					} else {
						log_err(result.msg);
					}
				}
		});
    }
	function load_help() {
			window.parent.$("#help").load("<?=base_url()?>index.php/help/load/pinjaman");
	}
	function select_anggota_result(data){
		console.log(data);
		$("#no_anggota").val(data.no_anggota);
		$("#nama").html(data.nama + ", </br>Phone: " + data.phone + "</br>" + data.street);
		$('#dialog_kop_anggota').modal('toggle');
	}
		function select_anggota(){
		lookup1({id:"kop_anggota", 
			url:  "<?=base_url()?>index.php/lookup/query/kop_anggota",
			themes: themes,
			result_func: "select_anggota_result",
			output_script: "divPinjaman",
			fields: [[
		        {field:'no_anggota',title:'Kode Anggota',width:80},
		        {field:'nama',title:'Nama',width:300},
		        {field:'phone',title:'Phone',width:80},
		        {field:'group_type',title:'Kelompok',width:80}
    		]],
    		result: function result(){
    			$("#no_anggota").val(r.data.no_anggota);
    			$("#nama").html(r.data.nama+"</br>"+r.data.street);
    		}
		});		
	}
	
	function select_jenis(){
		lookup1({id:"kop_jenis_pinjaman", 
			url:CI_ROOT+"lookup/query/kop_jenis_pinjaman",
			themes: themes,
			result_func: "select_jenis_result",
			output_script: "divPinjaman",
			fields: [[
		        {field:'nama',title:'Nama Pinjaman',width:300}
    		]],
    		result: function result(){
    			$("#jenis_pinjaman").val(r.data.nama);
				$("#lblJenisPinjamanInfo").html("Nama: " + r.data.nama + "</br>Perhit Bunga: "+r.data.jenis_bunga);
				$("#jangka_waktu").val(r.data.custom_hari);
				$("#bunga").val(r.data.bunga_prc);
				$("#provisi_prc").val(r.data.provisi_prc);
    		}
		});		
	}
	function select_jenis_result(data){
		$("#jenis_pinjaman").val(data.nama);
		$("#dialog_kop_jenis_pinjaman").modal('toggle');
	}
	function select_rekening(){
		lookup1({id:"kop_simpanan", 
			url:CI_ROOT+"lookup/sys_sql_data/lookup.kop.rekening",
			themes: themes,
			result_func: "select_rekening_result",
			output_script: "divPinjaman",
			fields: [[
		        {field:'nomor',title:'Nomor Rek',width:80},
		        {field:'nama',title:'Nama',width:300},
		        {field:'kode_anggota',title:'Nomor Angg',width:80}
    		]],
    		result: function result(){
    			$("#no_simpanan").val(r.data.nomor);
    		}
		});		
	}
	function select_rekening_result(data){
		console.log(data);
		$("#no_simpanan").val(data.nomor);
		$("#dialog_kop_simpanan").modal('toggle');
	}
	function delete_nomor(){
		var nomor=$("#no_pinjaman").val();
		
		$.messager.confirm('Confirm','Are you sure you want to remove this?',function(r){
			if (r){
				var url=CI_ROOT+'koperasi/pinjaman/delete/'+nomor;
				$.post(url,null,function(result){
					if (result.success){
						log_msg("Nomor berhasil dihapus.");
						remove_tab_parent();
					} else {
						log_msg("Error hapus nomor !");
					}
				},'json');
			}
		});
	}

		
</script>  
