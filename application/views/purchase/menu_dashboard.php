<?php  
$CI =& get_instance(); 
$themes=getvar("themes");

?>
<div class="easyui-tabs" id="tt"  >	 
	<div title="DASHBOARD" style="padding:10px">
		<div class='col-md-12'>
			<div class="easyui-panel themes" data-options="iconCls:'icon-save',closable:true,
				collapsible:true,minimizable:true,maximizable:true">
				<div class='col-md-12 thumbnail'>
					<?php include 'menu_flow.php'; ?>
				</div>				
			</div>
		</div> 		
		<div class='row'>
			<div class='col-md-12' style='margin:20px'>
				<?php include_once "menu_button_opr.php" ?>
			</div>
		</div>
		<div class='col-md-12' style='margin:20px'>
			<div class="easyui-panel themes" title="Reports" 
				data-options="iconCls:'icon-save',closable:true,
				collapsible:true,minimizable:true,maximizable:true">
				<?php include_once "menu_reports.php" ?>
			</div>
		</div>
		<div class="col-md-12" style='margin:20px'>
			<div id="p" class="easyui-panel themes" title="Faktur Jatuh Tempo" 
				data-options="iconCls:'icon-help',closable:true,
				collapsible:true,minimizable:true,maximizable:true">
				<table id="dgRetur" class="easyui-datagrid"  
					style="width:100%;min-height:100px"
					data-options="title: '',iconCls: 'icon-tip',singleSelect: true,
							toolbar: '',url: '<?=base_url()?>index.php/purchase_invoice/daftar_saldo_faktur'
					">
					<thead>
						<tr>
							<th data-options="field:'purchase_order_number',width:60">Faktur</th>
							<th data-options="field:'po_date',width:70">Tanggal</th>
							<th data-options="field:'due_date',width:70">Jth Tempo</th>
							<th data-options="field:'supplier_name',width:80">Supplier</th>
							<th data-options="field:'amount',width:80,align:'right',editor:'numberbox',
								formatter: function(value,row,index){
								return number_format(value,2,'.',',');}">Jumlah</th>
						</tr>
					</thead>
				</table>					
			</div>
			
		</div>

		<div class="col-md-12" style='margin:20px'>
			<div id="divExpPo" class="easyui-panel themes" title="PO Expire" 
				data-options="iconCls:'icon-help',closable:true,
				collapsible:true,minimizable:true,maximizable:true">
				<table id="dgPoExpire" class="easyui-datagrid"  
					style="width:100%;min-height:200px"
					data-options="title: '',
							iconCls: 'icon-tip',
							singleSelect: true,
							toolbar: '',
							url: '<?=base_url()?>index.php/purchase_order/po_expire'
					">
					<thead>
						<tr>
							<th data-options="field:'purchase_order_number',width:60">Nomor PO</th>
							<th data-options="field:'po_date',width:70">Tanggal</th>
							<th data-options="field:'due_date',width:70">Tgl Expire</th>
							<th data-options="field:'supplier_name',width:80">Supplier</th>
							<th data-options="field:'amount',width:80,align:'right',editor:'numberbox',
								formatter: function(value,row,index){
								return number_format(value,2,'.',',');}">Jumlah</th>
						</tr>
					</thead>
				</table>					
			</div>
		</div>
		
		<div class="col-md-7" style='margin:20px'>
			<div id="p" class="easyui-panel themes" title="Saldo Hutang Supplier" 
				data-options="iconCls:'icon-help',closable:true,
				collapsible:true,minimizable:false,maximizable:false">
				<div id='divSupplier'  style="width:90%;min-height:150px;padding:5px;"></div>
			</div>                        
			<div id="p" class="easyui-panel themes" title="Pembelian"> 
				<div id='divPurchase'  style="width:90%;min-height:150px;padding:5px;"></div>
				<!--
				<div id='divFaktur'  style="width:600px;height:300px;padding:5px;"></div>
				<div id='divUmurHutangSupp'  style="width:600px;height:300px;padding:5px;"></div>
				<div id='divUmurHutangDetail'  style="width:600px;height:300px;padding:5px;"></div>
				<div id='divGL'  style="width:200px;height:600px;padding:5px;"></div>
				-->			
			</div>
		</div>				
		<div class="col-md-3 " style="margin-left:5px">
			<div id='divGrafikSupplier' style="min-height:200px;width:80%">
				<img src="<?=base_url('images/loading.gif')?>">      
			</div>              
			
		</div>
	</div>
</div>

<script  language="javascript">
$().ready(function(){
	$("#tt").tabs("select","DASHBOARD");
    void get_this(CI_ROOT+'purchase_invoice/daftar_saldo_faktur','','divFaktur');
    //void get_this(CI_ROOT+'supplier/daftar_umur_hutang','','divUmurHutangSupp');
    //void get_this(CI_ROOT+'purchase_invoice/daftar_umur_hutang_detail','','divUmurHutangDetail');
    //void get_this(CI_ROOT+'purchase_invoice/daftar_kartu_gl','','divGL');
});

</script>

<script type="text/javascript">
    var data = [];
    var alreadyFetched = {};
    var dataurl=CI_ROOT+'po/grafik/grafik_saldo_hutang';
    var options = {
            bars: { show: true, barWidth: 0.6,  align: "center"
        },
            xaxis: {  mode: "categories", tickLength: 0
        }
    };	
    $.ajax({ url: dataurl, type: "GET", dataType: "json", 
        success: onDataReceived
    });
    function onDataReceived(series){
        if (!alreadyFetched[series.label]) {
            alreadyFetched[series.label] = true;
            data.push(series);
        }
        $.plot("#divSupplier", data,options);
    }

    var dataurl2=CI_ROOT+'po/grafik/grafik_pembelian';
    var data2 = [];
    var alreadyFetched2 = {};
    var options2 = {
            lines: { show: true, fill: false,  align: "center"
        },
            xaxis: {  mode: "categories", tickLength: 0
        }
    };	
    $.ajax({
        url: dataurl2, type: "GET", dataType: "json",
        success: onDataReceivedLine
    });
    function onDataReceivedLine(series) {
        if (!alreadyFetched2[series.label]) {
            alreadyFetched2[series.label] = true;
            data2.push(series);
        }
        $.plot("#divPurchase", data2,options2);
    }
    
    var data_grafik_supplier=[];
    var alreadyFetched_supplier = {};
    var idx_supplier=0;
    
        $.ajax({
            url: CI_ROOT+'po/grafik/grafik_saldo_hutang',type: "GET",dataType: "json",
            success: onDataReceived_supplier          
        });
        function onDataReceived_supplier(series) {
            if (!alreadyFetched_supplier[series.label]) {
                alreadyFetched_supplier[series.label] = true;
                for(j=0;j<series.data.length;j++){
                    data_grafik_supplier[idx_supplier]={
                        label:series.data[j][0], 
                        data:series.data[j][1]
                    };
                    idx_supplier++;
                }
            }
            $.plot($('#divGrafikSupplier'), data_grafik_supplier, {
                series: {
                    pie: { show: true},
                    show: true
                },
                legend: {
                    show: false
                }
            });
       }  
        
    
</script>

