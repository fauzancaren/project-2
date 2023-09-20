<table id='dgSaldo' name='dgSaldo' class="easyui-datagrid"  width=1000
	data-options="
		iconCls: 'icon-edit', fitColumns: true,
		singleSelect: true,  
		url: '<?=base_url()?>index.php/periode/saldo_awal/<?=$period?>',
		toolbar:'#tbSaldo' ">
	<thead>
		<tr>
			<th data-options="field:'account',width:80">Account</th>
			<th data-options="field:'account_description',width:180">Account Description</th>
			<th data-options="<?=col_number("beginning_balance",2)?>">Awal</th>
            <th data-options="<?=col_number("debit_base",2)?>">Debit</th>
            <th data-options="<?=col_number("credit_base",2)?>">Credit</th>
            <th data-options="<?=col_number("ending_balance",2)?>">Akhir</th>                
			<th data-options="field:'account_id',width:80">CoaId</th>
			<th data-options="field:'company_code',width:180,align:'left'">Keterangan</th>
		</tr>
	</thead>
</table>
<?php
$awal=0;$debit=0;$credit=0;$akhir=0; 
		
if($p=$this->periode_model->get_by_id($period)){
	if($prd=$p->row()){
		$enddate=date("Y-m-d",strtotime($prd->enddate));
		$sql="select sum(g.beginning_balance) as awal,
		sum(g.debit_base) as debit,sum(g.credit_base) as credit,
		sum(g.ending_balance) as akhir 
		from gl_beginning_balance_archive g 
		left join chart_of_accounts c on c.id=g.account_id
				and (ending_balance<>0)
		where year='$enddate' ";
		if($q=$this->db->query($sql)){
			if($r=$q->row()){
				$awal=$r->awal;
				$debit=$r->debit;
				$credit=$r->credit;
				$akhir=$r->akhir;
			}
		}
	}
}
$akhir=$awal+$debit-$credit;
?>
<p></p>
<p><b>Summary Trial Balance: <?=$period?></b></p>
<p>Saldo Awal  : <?=number_format($awal)?></p>
<p>Debit : <?=number_format($debit)?></p>
<p>Credit : <?=number_format($credit)?></p>
<p>Saldo Akhir : <?=number_format($akhir)?></p>
