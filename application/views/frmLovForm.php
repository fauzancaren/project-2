<?php if($show_checkbox)echo form_open($url_submit,"id='frmLovItem_$dlgId'"); 
echo $extra_fields;
$themes=getvar("themes");
if($themes=="admin"){
    $table_sbadmin="style='width:100%'";
} else {
    $table_sbadmin="class='easyui-datagrid'  style='min-height:90%' ";
}
?>
<table id="dg<?=$dlgId?>"  <?=$table_sbadmin?>
    data-options="toolbar: '', singleSelect: true, fitColumns: true,
    pagination:true, url: ''">
    <thead>
        <tr>
        <?php 
        if($show_checkbox){
            echo "<th data-options=\"field:'ck',width:'70'\">Pilih</th>";
        }
        foreach($dlgCols as $col) { 
            $fieldname=$col["fieldname"];
            if(!isset($col["width"]))$col['width']="80px";
            $width=$col["width"];
            if(!isset($col["caption"]))$col["caption"]=ucfirst($fieldname);
            $caption=$col["caption"];
            $fields[$fieldname]=ucwords($caption);
        ?> 
            <th data-options="field:'<?=$fieldname?>',
            width:'<?=$width?>'"><?=$caption?></th>
        <?php } ?>
        </tr>
    </thead>
</table>
<?php if($show_checkbox)echo form_close(); ?>
