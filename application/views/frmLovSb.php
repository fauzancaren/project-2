<!-- DIALOG FOR LOOKUP [<?=$dlgId?>]-->
<?php 
    $themes=getvar("themes");
	if(!isset($show_check1))$show_check1=false;
    if(!isset($show_date_range))$show_date_range=false;
    if(!isset($show_checkbox))$show_checkbox=false;
    if(!isset($url_submit))$url_submit="";
    if(!isset($extra_fields))$extra_fields="";
    if(!isset($before_submit)){
    	$before_submit="function before_submit_$dlgId(){return false;}";
	}
    if(!isset($dlgTitle)){
    	$dlgTitle="Information";    
	}
	if(!isset($show_check1)){
		$show_check1=false;
		$check1_title="";
		$check1_field="";
	}
    if($show_checkbox=="")$show_checkbox=false;
    $before_lookup="";
    if(isset($dlgBeforeLookup)){
    	$before_lookup=$dlgBeforeLookup;
	}
    $fields['']='';
    if(!isset($caption)){
        $caption="Dialog";
    }
    $show_check1=false;
    $check1_title="";
?>

    <div id='dlg<?=$dlgId?>' class="modal fade "    
        tabindex="-1" role="dialog" aria-labelledby="dlg<?=$dlgId?>Label" aria-hidden="true"
        toolbar="#<?=$dlgTool?>" data-options="iconCls:'icon-search'">

        <div class="modal-dialog" role="document" style="width:90%">

            <div class="modal-content">

                <div class="modal-header">
                    <h3 class="modal-title" id="dlg<?=$dlgId?>Label"><?=$caption?></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow:scroll">  
                  <table id="dg<?=$dlgId?>" style='width:100%'
                    class='display table'>
                    <thead>
                        <tr>
                        <?php
                        $dataField="";
                        $idxBtn=0; 
                        foreach($dlgCols as $col) { 
                            $fieldname=$col["fieldname"];
                            if(!isset($col["caption"]))$col["caption"]=ucfirst($fieldname);
                            $caption=$col["caption"];
                            $fields[$fieldname]=ucwords($caption);
                            echo "<th>$caption</th>";
                            $dataField.="{data:'$fieldname'},";
                            $idxBtn++;
                        } 
                        echo "<th>Cmd</th>";
                        ?>
                        </tr>
                    </thead>
                  </table>
                </div>
                <div class='modal-footer'>
			        <button type='button' class='btn-sb btn-danger-sb' data-dismiss='modal'> Close </button>
			    </div>

            </div>
        </div>
    </div>

<script> 
var search_id=$('#dlg<?=$dlgId?>_search_id').val();
var sort=$("#<?=$dlgId?>_sort").val();
var check1="";
var check1_value="";

var from="";
var to="";

var q1="",q2="",q3="";

function btnClick_<?=$dlgId?>(){
    return '<button>Select</button>'; 
}
$(document).ready(function() { 
    var dataTable<?=$dlgId?>=null; 
    var cols<?=$dlgId?>=[<?=$dataField?>];
    var _url='<?=$dlgUrlQuery?>/?tb_search='+search_id+"&from="+from+"&to="+to+"&sort="+sort+"&check1="+check1+"&check1_value="+check1_value+"&q1="+q1+"&q2="+q2+"&q3="+q3;

    if(dataTable<?=$dlgId?>==null) { 
        dataTable<?=$dlgId?> = $('#dg<?=$dlgId?>').DataTable({   
          serverSide: true, 'select':true,                         
          ajax: {'type':'POST','url': _url},
          columns: cols<?=$dlgId?>,  
          columnDefs:[{data:null,render: btnClick_<?=$dlgId?>,targets:<?=$idxBtn?>}] 
        });     
        $('#dg<?=$dlgId?> tbody').on( 'click', 'td button', function () { 
            var row = dataTable<?=$dlgId?>.row($(this).closest('tr')).data() ; 
            <?=$dlgRetFunc?>;
            $("#dlg<?=$dlgId?>").modal("toggle");
        } ); 

    } else { 
        dataTable.draw();  
    }

});

</script>

<script type="text/javascript">
	var idd_<?=$dlgId?>='';
	var fnc_after_select_<?=$dlgId?>="";
	var show_checkbox_<?=$dlgId?>='<?=$show_checkbox?>';
	var dataTable_<?=$dlgId?>_loaded=false;
    var dataTable<?=$dlgId?>=null;
			
    $().ready(function (){
        $('#select_all_<?=$dlgId?>').change(function() { 
            var checkboxes = $('#dlg<?=$dlgId?>').find(':checkbox');
            checkboxes.prop('checked', $(this).is(':checked'));
        });
        
        <?php if($show_checkbox){ ?>
            filterItemIsc();
        <?php } ?>
 
        
    });
    
	<?php 
		echo $before_submit;
      	$before_submit=""; //reset blank 
	?>
	
    
    function <?='dlg'.$dlgId.'_sort_by()'?>{
	    <?='dlg'.$dlgId.'_search();'?>
	}
	function <?='dlg'.$dlgId.'_show()'?> {
        //subEvent
	    //Firefox tidak punya window.event jadi di offkan dulu
	    //fnc_after_select=subEvent;
        //var mainEvent = subEvent ? subEvent : window.event;
        //var w=<?=$dlgWidth?>;
        //var x=screen.width*0.5-w*0.5;
        //var y=mainEvent.screenY/2;
        <?php    
			if($before_lookup!=""){
			    echo $before_lookup;
                $before_lookup="";
	        } 
        ?>

		<?='dlg'.$dlgId.'_search();'?>        
		
		idd_<?=$dlgId?>="<?=$dlgBindId?>";

        <?php if($themes!="admin"){ ?>
            $("#dlg<?=$dlgId?>_search_id").focus();		
            $('#dlg<?=$dlgId?>').window({left:10,top:10});  
            $('#dlg<?=$dlgId?>').dialog('open').dialog('setTitle','<?=$dlgTitle?>');

        <?php } ?>
	}
	function submit_selected_<?=$dlgId?>(){
        loading();
        before_submit_<?=$dlgId?>();
            $('#frmLovItem_<?=$dlgId?>').form('submit',{
            onSubmit: function(){
                return $(this).form('validate');
            },
            success: function(result){
                loading_close();
                var result = eval('('+result+')');
                if (result.success){
                    $('#dg<?=$dlgId?>').datagrid('reload');
                    $.messager.show({title: 'Success',msg: 'Success'});
                    $('#dlg<?=$dlgId?>').dialog('close');
                    <?=$dlgRetFunc?>
                } else {
                    $.messager.show({title: 'Error', msg: result.msg});
                }
            }
        });

	}
	function <?='dlg'.$dlgId.'_search()'?>{
		var search_id=$('#dlg<?=$dlgId?>_search_id').val();
        var sort=$("#<?=$dlgId?>_sort").val();
		var check1="";
		var check1_value="";
		
        var from="";
        var to="";
        
        var q1="",q2="",q3="";
        
        <?php    
			if($before_lookup!=""){
			    echo $before_lookup;
                $before_lookup="";
	        } 
        ?>
        
        <?php 
        	if($show_date_range) { ?>
        		
                from=$("#<?=$dlgId?>_date_from").datetimebox('getValue'); 
                to=$("#<?=$dlgId?>_date_to").datetimebox('getValue'); 
    	
        <?php } ?>
        
        <?php 
        	if($show_check1) {
        		echo "check1=$('#".$dlgId."_check1').is(':checked') ? 1 : 0; ";
				echo "check1_value=$('#".$check1_field."').val(); ";
        	}
		?>

        var vUrl='<?=$dlgUrlQuery?>/?tb_search='+search_id+"&from="+from+"&to="+to+"&sort="+sort+"&check1="+check1+"&check1_value="+check1_value+"&q1="+q1+"&q2="+q2+"&q3="+q3;
        
        console.log(vUrl);
        

	}
    function <?='dlg'.$dlgId.'_list(filter="")'?>{
        var url='<?=base_url()?>index.php/lookup';
        if(filter!='')url=url+'?filter='+filter;
        add_tab_parent('Lookup: '+filter,url);
    }    
    function <?='dlg'.$dlgId.'_list_master()'?>{
        <?php
            if($modules=="")$modules=$dlgId;
        ?>
        var url='<?=base_url('index.php/'.$modules)?>';
        add_tab_parent('List: <?=$dlgId?>',url);
    }    
    function <?='dlg'.$dlgId.'_close()'?>{
        $('#dlg<?=$dlgId?>').dialog('close');        
    }
	
    //filter with checkbox
   function filterItemIsc(){
            nama=$('#search_item_isc').val();
            supplier=$("#supplier_number").val();
            only_item_supplier=$("#only_item_supplier_isc").is(':checked')
            param="?only_item_supplier="+only_item_supplier+"&";
            if(supplier!="")param=param+"supplier="+supplier;
            field=$("#tb_field_isc").val();
            if(field!="")param=param+"&field="+field;

            req_no=$("#req_no").val();
            param=param+"&req_no="+req_no;
            
            vUrl='<?=base_url()?>index.php/inventory/filter/'+nama+param;
            $('#dgItemSearchIsc').datagrid({url:vUrl});	           
   }

	function searchItemIsc(){
		$('#dlgSearchItemIsc').dialog('open')
			.dialog('setTitle','Cari data barang');

		}
	function dlgSearchItemIsc_Close(){
			$("#dlgSearchItemIsc").dialog("close");
	}

	
	
</script>
<!-- END DIALOG -->
