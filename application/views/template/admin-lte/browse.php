<?php 
$thead="";
for($i=0;$i<count($fields_caption);$i++){
    $thead.="<th>$fields_caption[$i]</td>";
}
$thead.="<th>Cmd</th>";

?>
<div style="margin-bottom:10px" class="col-md-6">
    <div class="row">
    <div class="col-md-12" >
       <?=link_button("Tambah","","","false",base_url($controller.'/add'))?>
       <?=link_button("Setting","setting()","","false","","","","btn-sb btn-success-sb","data-toggle='modal' data-target='#dlgSet'")?>
    </div>
    </div>
</div>
    <table id="tblBrowse" class="display tbl" >
        <thead>
            <tr><?=$thead?></tr>
        </thead>
        <tfoot>
            <tr><?=$thead?></tr>
        </tfoot>
    </table>

<div id="dlgSet" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Setting</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form id='frmSet_<?=$controller?>' class='form' method='get'>
            <?php
            $checked="";
            if($this->session->userdata("row_double_click")){
                $checked="checked";
            }
            echo "Silahkan contreng pengaturan berikut ini:
            </br><input value='on' type='checkbox' name='ck_reset'  style='width:30px'>Reset pengaturan kolom
            </br><input value='on' $checked type='checkbox' id='ck_double_click' name='ck_double_click'  style='width:30px'>Double klik baris untuk melihat detail";
                    
            echo "</br></br>Pilihlah kolom yang ingin ditampikan, kolom nomor bukti atau primary key jangan dicontreng untuk hidden.";
            if(isset($fields)){
                for($i=0;$i<count($fields);$i++){
                    echo "</br><input type='checkbox' name='ck_cols[]' checked style='width:30px'
                    value='$fields[$i]'> $fields_caption[$i]";
                }
            }		
            
            ?>
        </form>


      </div>
      <div class="modal-footer">
        <?=link_button('Cancel','set_cancel_'.$controller."();return false;",'cancel');?>			
        <?=link_button('Submit','set_change_'.$controller."();return false;",'save');?>			
      </div>
    </div>
  </div>
</div>


<?php 
//var_dump($controller);
//var_dump($fields_caption);
//var_dump($fields);
//var_dump($field_key);
//var_dump($criteria);
//var_dump($other_menu);
//var_dump($body_class);
//var_dump($print_visible);
//var_dump($dont_load_js);

?>

<script lang="JavaScript">
    var CI_ROOT="<?=base_url()?>";
    var field_index=<?=count($fields)?>;
    var controller="<?=$controller?>";
    var cols=[
        <?php

            for($i=0;$i<count($fields);$i++){
                echo "{data:'$fields[$i]'},";
                if($field_key==$fields[$i]){
                    $field_index=$i;
                }
            }       
        ?>
    ];
    var dataTable = null;
    $(document).ready(function() {
        loading();
        dataTable = $('#tblBrowse').DataTable({
            serverSide: true,select:true,
            ajax: CI_ROOT+"<?=$controller?>/browse_data",
            columns: cols,
            columnDefs:[{data:null,render: btnRowView,targets: field_index}] 
        }) 
        $('#tblBrowse tbody').on( 'click', 'td button', function () { 
			var data = dataTable.row($(this).closest('tr')).data();
			rowView(data['<?=$field_key?>']);			
		})
        $('#tblBrowse tbody').on('dblclick', 'tr', function () {
            var data = dataTable.row( this ).data();
			rowView(data['<?=$field_key?>']);			
        } );


    });
    function btnRowView(){
        return '<button class="btn-sb btn-primary-sb">Select</button>'; 
    };
    function rowView(id){
        window.open(CI_ROOT+controller+"/view/"+id,"_self");
    }
    function setting(){
        $('#dlgSet').on('shown.bs.modal', function () {
            //$('#myInput').trigger('focus')
        })

    }

</script>
<style>
.tbl tr {
    cursor:pointer;
}
</style>
