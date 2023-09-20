<?php 
    $fields=null;
   foreach($dlgCols as $col) { 
        $fieldname=$col["fieldname"];
        $fields[]=$fieldname;
   }
?>
 <div id="<?=$dlgTool?>" class='box-gradient'>
    <?php 
        if($show_checkbox){
            echo " <b>Select All: </b> <input type='checkbox' style='width:20px' id='select_all_$dlgId'> ";
        }
        if($show_date_range){
            echo "<b>Date: </b>";
            echo form_input($dlgId.'_date_from',date("Y-m-1"),'id='.$dlgId.'_date_from  
                class="easyui-datetimebox" data-options="formatter:format_date,parser:parse_date"
                ');
            echo form_input($dlgId.'_date_to',date("Y-m-d 23:59:59"),'id='.$dlgId.'_date_to  
                class="easyui-datetimebox" data-options="formatter:format_date,parser:parse_date"
                ');
        }
        if($show_check1){
            echo "<b>$check1_title: </b> <input type='checkbox'  id='".$dlgId."_check1' name='".$dlgId."_check1'  
                title='Filter by related selected $check1_title' style='width:30px'>";
            
        } 
    ?>
    <b>Sort:</b> <?=form_dropdown($dlgId."_sort",$fields,"","id='".$dlgId."_sort' onchange='dlg".$dlgId."_sort_by();return false;'")?>
    <?php 
        if($show_checkbox || $show_date_range || $show_check1) echo "</br>";   
    ?>
    <b>Find:</b> <input  id="dlg<?=$dlgId?>_search_id" style='width:180' 
    name="dlg<?=$dlgId?>_search_id"  onchange='<?='dlg'.$dlgId.'_search();return false;'?>'>
    <a href="#" class="easyui-linkbutton btn-sb btn-primary-sb" iconCls="icon-search"  
        onclick="<?="dlg".$dlgId."_search();return false;"?>">Filter</a>        
    <a href="#" class="easyui-linkbutton  btn-sb btn-success-sb" iconCls="icon-ok"   
        onclick="<?='dlg'.$dlgId.'_select();return false;'?>">Select</a>
        
    <a href="#" class="easyui-linkbutton btn-sb btn-danger-sb" iconCls="icon-cancel"   
        onclick="<?='dlg'.$dlgId.'_close();return false;'?>">Close</a>	    
</div>