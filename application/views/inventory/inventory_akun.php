<!-- 
    form: inventory_akun
    author: andri
    date: 2020-08-19
    desc: data akun setting untuk master barang
-->
<p><b>Link Account</b></p>
<table class='table2' width='100%'>
    <tr>
        <td>Akun Persediaan </td>
        <td>:</td>
        <td><?php 
            echo form_input('inventory_account',$inventory_account,"id='inventory_account' style='width:70%'");
            $extra="";if($themes=="admin")$extra ="data-target='#dlgchart_of_accounts' data-toggle='modal' ";
            echo link_button('',"lookup_coa('inventory_account')",'search');						 
            ?>			         	
        </td>
    </tr>
    <tr>
        <td>Akun Penjualan </td>
        <td>:</td>
        <td><?php echo form_input('sales_account',$sales_account,"id='sales_account' style='width:70%'");?>
        <?=link_button('',"lookup_coa('sales_account')",'search')?>
        
        </td>
    </tr>
    <tr>
        <td>Akun Harga Pokok Persediaan </td>
        <td>:</td>
        <td><?php echo form_input('cogs_account',$cogs_account,"id='cogs_account' style='width:70%'");?>
        <?=link_button('',"lookup_coa('cogs_account')",'search')?>
        </td>
    </tr>
    <tr>
        <td>Akun Pajak Penjualan </td>
        <td>:</td>
        <td><?php echo form_input('tax_account',$tax_account,"id='tax_account' style='width:70%'");?>
        <?=link_button('',"lookup_coa('tax_account')",'search')?>			         	
        </td>
    </tr>
    <tr>
        <td>Metoda Penilaian</td>
        <td colspan=3>
            <?=form_radio('cost_method',0,$cost_method=='0'?TRUE:FALSE,"style='width:30px'");?>&nbsp&nbsp Average 
            <?=form_radio('cost_method',1,$cost_method=='1'?TRUE:FALSE,"style='width:30px'");?>&nbsp&nbsp Fifo 
            <?=form_radio('cost_method',2,$cost_method=='2'?TRUE:FALSE,"style='width:30px'");?>&nbsp&nbsp Lifo         
        </td>
        
    </tr>
</table>
<?php echo load_view('gl/select_coa_link'); ?>  	
