 <?php
 if(!isset($set_hide))$set_hide=false;
 
 ?>
			<p>
			  <?php  
			  if(allow_mod("_00011")){
				echo link_button('Set','setting_jobs();return false;','tip');
			  	echo "Pilih Job : <input type='text' name='txtJob' id='txtJob' style='width:100px'>";
			  	echo link_button('Find','lookup_job()','search');
				echo link_button('Add','add_job()','save');
			  }			   
			  ?>
			  </p>
			<table id="dgJob" class="easyui-datagrid"  
				data-options="
					iconCls: 'icon-edit',
					singleSelect: true,   fitColoumns:true,
					url: '<?=base_url()?>index.php/user/list_job/<?=$id?>',toolbar:'#cmdJobUser',
				">
				<thead>
					<tr>
						<th data-options="field:'group_id',width:80">Kode</th>
						<th data-options="field:'user_group_name',width:200">Nama Job</th>
					</tr>
				</thead>
			</table>  
            
              <p class='alert alert-info'><i>Silahkan cari job yang diinginkan dengan tombol search, 
              kemudian tekan tombol add job untuk menambahkan job untuk user 
              yang bersangkutan.</i></p>
              <p>

			 

<div id='cmdJobUser'>
	<?php 
	if(allow_mod("_00011")){
		echo link_button('Remove','delete_job()','remove');
		echo link_button('View','view_job()','edit');
	}	
	?>
	<?=link_button('Refresh','refresh_job()','reload');?>
	
</div>
<?php if(allow_mod("_00011")) echo load_view('admin/select_job')?>   	

<script language='javascript'>
	function view_job(){
		row = $('#dgJob').datagrid('getSelected');
		if (row){
			var job = row['group_id'];
			xurl=CI_ROOT+'jobs/view/'+job;                             
			add_tab_parent("Job:"+job,xurl);
		} else {
			alert("Pilih baris job");
		}

	}
	function refresh_job(){
		$('#dgJob').datagrid('reload');
	}
	function add_job() {
		var user_id=$("#user_id").val();
		var job=$("#txtJob").val();
		var url='<?=base_url()?>index.php/user/add_job';
		if(user_id==""){alert('Isi user id dulu.');return false;}
		if(job==""){alert('Pilih job terlebih dahulu.');return false;}
		$.ajax({
			type: "GET",
			url: url,
			data:'user_id='+user_id+'&job='+job,
			success: function(msg){
				$('#dgJob').datagrid('reload');
				$('#txtJob').val('');
			},
			error: function(msg){alert(msg);}
		});
	}
	function delete_job(){
		var user_id=$("#user_id").val();
		row = $('#dgJob').datagrid('getSelected');
		if (row){
			xurl=CI_ROOT+'user/del_job/'+user_id+'/'+row['group_id'];                             
			console.log(xurl);
			xparam='';
			$.ajax({
				type: "GET",
				url: xurl,
				param: xparam,
				success: function(msg){
					$('#dgJob').datagrid('reload');
				},
				error: function(msg){$.messager.alert('Info',msg);}
			});         
		}
	}
	function setting_jobs(){
		var url=CI_ROOT+'jobs';
		add_tab_parent("jobs",url);
	}</script>