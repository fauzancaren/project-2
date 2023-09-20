<div class="thumbnail">
	<?php
	if(!isset($set_hide))$set_hide=false;
	echo link_button('Save', 'save()','save');		
	echo link_button('Print', 'print_item()','print');	
	if($mode=="view") echo link_button('Refresh','','reload','false',base_url().'index.php/user/view/'.$id);		
	if(!$set_hide) echo link_button('Delete', 'delete_user()','remove');		
    
    
	echo "<div style='float:right'>";
	echo link_button('Help', 'load_help()','help');		
	
	?>

    <?=link_button('Close','remove_tab_parent()','cancel')?>      
	
	
	</div>
	<script type="text/javascript">
		function load_help() {
			window.parent.$("#help").load("<?=base_url()?>index.php/help/load/user");
		}
	</script>
	
</div>
		

<?php echo validation_errors(); ?>
<div class="col-md-12" >	
    <div class="easyui-tabs">
        <div title="User Jobs" style="padding:10px">
        	<form id="frmUser"  method="post">
        	<input type='hidden' name='mode' id='mode'	value='<?=$mode?>'>
           <?php 
           		if($mode=='view'){
        			$disabled='disable';
        		} else {
        			$disabled='';
           		}
           ?> 
           <table class='table'>
        	<tr><td>User ID </td>
        		<td>
        			<?php
        			if($mode=='view'){
        				echo form_input('user_id',$id,"id='user_id' readonly");
        			} else { 
        				echo form_input('user_id',$id,"id='user_id'");
        			}		
        		?></td>
        		<td>Supervisor</td><td><?php echo form_dropdown('supervisor',$supervisor_list,$supervisor,"id=supervisor");?></td>
        	</tr>	 
            <tr><td>Username &nbsp&nbsp</td><td><?php echo form_input('username',$username,"id=username");?></td>
        		<td>CID </td><td><?php echo form_input('cid',$cid,"id=cid");?></td>
        	</tr>
        	<tr><td>Password </td><td><?php echo form_password('password',$password,"id=password");?></td>
        		<td>Cabang</td><td><?php echo form_dropdown('branch_code',$branch_list,$branch_code,"id='branch_code' title='Pilih kode outlet atau cabang perusahaan untuk user ini.' ");?></td>       	
        	</tr> 
        <tr>
            <td>NIP Pegawai </td>
            <td><input id='nip' name='nip' value='<?=$nip?>' style='width:80px' title='Pilih nomor induk pegawai yang terkait ke user id ini.'/>
                <?=link_button('','dlgnip_show()','search')?>        
                <input id='nama_karyawan' disabled value='<?=$nama_karyawan?>' />
            </td>
            <td>Logged In</td>
            <td>
                <input value='<?=$logged_in?>' name='logged_in' id='logged_in' title='0 - Tidak sedang login, 1 - Sedang login aktif.'/>
            </td>
        </tr>
            <tr><td colspan=2>
                <?=form_checkbox("flag1",1,$flag1,"style='width:25px' id='flag1'")?>&nbsp Tampilkan data hanya untuk user ini saja</td>
                <td>Session Id</td>
                <td>
                    <input value='<?=$session_id?>' name='session_id' id='session_id' title='Session yang dibuat otomatis ketika login.'/>
                    
                </td>
            </tr> 
            <tr><td colspan=2>
                <?=form_checkbox("flag2",1,$flag2,"style='width:25px' id='flag2'")?>&nbsp Tampilkan data terbatas hari.</td>
            </tr> 
        	
        	
           </table>	
        	</form>
        </div>	
	
        <div title="User Jobs" style="padding:10px">
            <?php 
			
				echo load_view("admin/user_job_widget.php");
					
			?>
        </div>
        <div title="Picture" style="padding:10px">
            <?=load_view("admin/user_foto_widget.php")?>
        </div>
        <div title="Division" style="padding:10px">
            <?=load_view("admin/user_roles_widget.php")?>
        </div>
        <div title="Warehouse" style="padding:10px">
            <?=load_view("admin/user_roles_gudang_widget.php")?>
        </div>
    </div>
	
</div>
<?php 
echo $lookup_employee;
?>
<script language='javascript'>
	var url;	
 
  	function save(){
  		if($('#user_id').val()==''){alertMX('Isi user id !');return false;}
  		if($('#username').val()==''){alertMX('Isi user name !');return false;}
  		if($('#password').val()==''){alertMX('Isi password !');return false;}
		if($('#cid').val()==""){alertMX("Isi kode CID !");return false;}
		url='<?=base_url()?>index.php/user/save';
		$.post(url,
		{
			user_id: $("#user_id").val(),
			username: $("#username").val(),
			password: $("#password").val(),
			cid:$("#branch_code").val(),
			supervisor:$("#supervisor").val(),
			cid:$("#cid").val(),
			nip:$("#nip").val(),
			flag1:$("#flag1").is(':checked'),
			mode:$("#mode").val(),
			flag2:$("#flag2").is(':checked'),

		},
		function(data, status){
			var result = eval('('+data+')');
					if (result.success){
						log_msg("Data sudah tersimpan.")
						remove_tab_parent();
					} else {
						log_err(result.msg);
					}

		});
				
  	}


	function delete_user() {
		$.messager.confirm('Confirm','Are you sure you want to remove this ?',function(r){
			if (r){
				var user_id=$("#user_id").val();
				var url=CI_ROOT+"user/delete/"+user_id;	
				remove_tab_parent();
			}
		})
	}

</script>

