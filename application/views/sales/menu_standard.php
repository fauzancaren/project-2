<div style="margin:5px 0;"></div>
	<ul class="easyui-tree">
		<li>
			<span><b>Sales Modules</b></span>
			<ul>
				<li data-options="state:'closed'">
					<span>Operation</span>
					<ul>
						<li data-options="state:'open'">
							<span>Sales Order</span>
							<ul>
								<li><?=anchor(base_url().'index.php/sales_order/add#new_so','Buat Sales Order','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/sales_order','Daftar Sales Order','class="info_link link2"  ');?></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li data-options="state:'closed'">
							<span>Delivery Order</span>
							<ul>
								<li><?=anchor(base_url().'index.php/delivery_order/add#new_do','Buat DO Baru','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/delivery_order','Daftar Delivery Order (DO)','class="info_link link2"  ');?></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li data-options="state:'open'">
							<span>Sales Invoice (AR)</span>
							<ul>
								<li><?=anchor(base_url().'index.php/invoice/add#new_invoice','Buat Sales Invoice Baru','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/so/invoice/from_so','Buat Faktur dari SO','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/invoice','Daftar Sales Invoice','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/so/kontra_bon','Daftar Kontra Bon','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/so/bill_collect','Tagihan Kolektor','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/sales_crmemo','Kredit Memo','class="info_link link2"');?></li>
								<li><?=anchor(base_url().'index.php/sales_dbmemo','Debit Memo','class="info_link link2"');?></li>						
							</ul>
						</li>
					</ul>
					<ul>
						<li data-options="state:'open'">
							<span>Payments</span>
							<ul>
								<li><?=anchor(base_url().'index.php/payment/add#new_invoice_payment','Buat Pembayaran Invoice Baru','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/payment','Daftar Pembayaran Invoice','class="info_link link2"  ');?></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li data-options="state:'closed'">
							<span>Sales Return Invoice</span>
							<ul>
								<li><?=anchor(base_url().'index.php/sales_retur/add#new_invoice_retur','Buat Sales Retur Baru','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/sales_retur','Daftar Sales Return','class="info_link link2"  ');?></li>
								<li><?=anchor('retur_toko','Retur barang dari toko','class="info_link link2"');?></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li   data-options="state:'closed'">
							<span>Promosi</span>
							<ul>
								<li><?=anchor(base_url().'index.php/so/promosi_disc','Promosi Discount Penjualan','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/so/promosi_extra','Promosi Quantity Extra','class="info_link link2"  ');?></li>
								<!--							<li><?=anchor(base_url().'index.php/so/promosi_one_price','Promosi One Price','class="info_link link2"  ');?></li>
								-->
								<li><?=anchor(base_url().'index.php/so/promosi_point','Promosi Point Reward','class="info_link link2"  ');?></li>
								<li><?=anchor(base_url().'index.php/so/promosi_voucher','Promosi Voucher','class="info_link link2"  ');?></li>
							</ul>
						</li>
					</ul>
					<ul>
						<li data-options="state:'closed'"><span>Service Order</span>
							<ul>
								<li><?=anchor('so/service','Service Order','class="info_link link2"  ');?></li>
							</ul>
						</li>
					</ul>
				</li>
				
				<li data-options="state:'closed'">
					<span>Master</span>
					<ul>
						<li><?=anchor(base_url().'index.php/customer','Pelanggan','class="info_link link2"');?></li>
						<li><?=anchor(base_url().'index.php/salesman','Salesman','class="info_link link2"');?></li>
						<li><?=anchor(base_url().'index.php/type_of_payment','Termin','class="info_link link2"');?></li>
						<li><?=anchor("company/wilayah","Wilayah","class='info_link link2'");?></li>
						<li><?=anchor(base_url().'index.php/customer_type','Customer Type','class="info_link link2"');?></li>
					</ul>
				</li>
			</ul>
		</li>				
	</ul>
</ul>

