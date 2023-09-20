<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Upgrade
 {
 	private $V1a43e3wrmrt=false;
	private $Vsgkmtbci2wq="";
	
 function __construct()
 {
	$this->CI =& get_instance();	 
     
 }
 function process($V1a43e3wrmrt_var=false){
 		
 	$this->display_output=$V1a43e3wrmrt_var;
		$Vyj2sztejozh=current_database();
		$this->message= "<p><b>Checking database struktur [$Vyj2sztejozh]</b></p>";
	
	$Vzls01jplmeq="Flag sysvar varsize";
 
    
	if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){
	    		
		$this->CI->sysvar->insert($Vzls01jplmeq,"1",$Vzls01jplmeq);
        
        
		$V0urgekm0f1f="delete from system_variables where varname like 'Flag [%';";
		$this->CI->db->query($V0urgekm0f1f);
		
		$V0urgekm0f1f="ALTER TABLE `system_variables`
			CHANGE COLUMN `varname` `varname` VARCHAR(250) NULL 
			DEFAULT NULL COLLATE 'utf8_general_ci' FIRST;";
			
		$this->CI->db->query($V0urgekm0f1f);
		
		$this->CI->sysvar->update($Vzls01jplmeq,"1");			
        
        
        
        
        
        
	}
    
	
	$this->add_field("sales_order","status"); 
	$this->add_field("invoice","status"); 
	$this->add_field("purchase_order","doc_status"); 
    $this->add_field("user", "supervisor");
	$this->add_field("user","branch_code"); 
	
	$this->add_field("salesman","lock_report","INT NOT NULL DEFAULT '0' ");
	$this->create_unit_of_measure();
	$this->create_inventory_price_customers();
	$this->user_roles();
	$this->add_field("inventory","division"); 
	$this->add_field("inventory_moving","status"); 
	$this->add_field("inventory_moving","verify_by"); 
	$this->add_field("inventory_moving","verify_date","DATETIME"); 
	$this->add_field("inventory_categories","sales_disc_prc","double"); 
	$this->add_field("customers","disc_min_qty","double"); 
	$this->add_field("customers","markup_amount","double"); 
	$this->add_field("customers","discount_amount","double"); 
	$this->add_field("customers","disc_prc_2","double"); 
	$this->add_field("customers","disc_prc_3","double"); 
	
	$this->add_field("inventory_price_customers","cust_no"); 
	$this->add_field("inventory_price_customers","category"); 
	$this->add_field("inventory_price_customers","disc_amount","double"); 
	$this->add_field("inventory_price_customers","disc_prc_2","double"); 
	$this->add_field("inventory_price_customers","disc_prc_3","double"); 


	$this->add_field("fa_asset_group","warranty_date","datetime"); 

	$this->create_com_list();
	
	$this->add_field("promosi_item","from_date","datetime"); 
	$this->add_field("promosi_item","to_date","datetime"); 
	$this->add_field("promosi_item","disc_prc_1","double"); 
	$this->add_field("promosi_item","disc_prc_2","double"); 
	$this->add_field("promosi_item","disc_prc_3","double"); 
	$this->add_field("promosi_item","disc_type","int"); 
	$this->add_field("promosi_item","min_qty","double"); 

	$Vzls01jplmeq="Flag [hr_shift] change time_in,time_out";
	if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){		
		$this->CI->sysvar->insert($Vzls01jplmeq,"1",$Vzls01jplmeq);
		$V0urgekm0f1f="ALTER TABLE `hr_shift`
			CHANGE COLUMN `time_in` `time_in` VARCHAR(50) NULL, 
			CHANGE COLUMN `time_out` `time_out` VARCHAR(50) NULL 
			DEFAULT NULL COLLATE 'utf8_general_ci' FIRST;";
			
		$this->CI->db->query($V0urgekm0f1f);
			 
		$this->CI->sysvar->update($Vzls01jplmeq,"1");	
	}

	$this->add_field("promosi_item","extra_items","nvarchar(250)"); 
	$this->add_field("promosi_item","item_type","nvarchar(50)"); 
	$this->add_field("syslog","no_bukti","nvarchar(50)"); 
	$this->add_field("syslog","id","INT NOT NULL AUTO_INCREMENT, ADD PRIMARY KEY (id)"); 
	$this->add_field("syslog","jenis_cmd","nvarchar(50)"); 
            	   		
	$this->add_field("shipping_locations","no_urut","int"); 
	$this->add_field("user","flag1","int"); 
	$this->add_field("user","flag2","int"); 
	$this->add_field("user","flag3","int"); 
	$this->add_field("purchase_order","status","int"); 
	$this->add_field("invoice","status","int"); 

	$this->add_field("inventory_prices","cost","double"); 
	$this->create_po_qty_alloc();
	$this->add_field("purchase_order","po_expire_date","datetime"); 
	$this->create_payables_bill();

	$Vzls01jplmeq="Flag [sysvar] add lookup.po_status";	
	$Vf0saxnurylc=$this->CI->sysvar->getvar($Vzls01jplmeq);
	if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){		
		
		
		
		
		
		
		
			
		
		
		
		
		
		
		
		
		
		
		
	}
	$this->add_field("inventory_products","doc_type"); 
	$this->add_field("inventory_moving","doc_type"); 
	$this->create_profit_sharing();
	$this->create_toko();
	$this->add_field('purchase_order_lineitems','line_type');
	$this->add_field('purchase_order_lineitems','line_status');
	$this->create_inventory_categories_sub();
	
	
	
	
    $this->add_field("inventory","type_of_invoice"); 
    $V0a4iekmarsp=array("nomor_hp","penanggung_jawab","jabatan",
        "nama_pemilik","npwp","jenis_wp","no_telp2","fax2","hp2",
        "cara_bayar", "bank", "no_rek","sistim_bayar",
        "lain2","periode","partisipasi");   
    for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++){ 
        $this->add_field("suppliers",$V0a4iekmarsp[$Vvmcb2huerp4]);
    }
    $V0a4iekmarsp=array("alamat_pemilik","kota","email2","jenis_merk","atas_nama");
    for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++){ 
        $this->add_field("suppliers",$V0a4iekmarsp[$Vvmcb2huerp4],"varchar(200)");
    }
    $V0a4iekmarsp=array("margin_prc_min","margin_prc_max","termin_day","biaya_admin");   
    for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++){ 
        $this->add_field("suppliers",$V0a4iekmarsp[$Vvmcb2huerp4],"double");
    }
    $this->add_field("suppliers", "city2");
    $this->add_field("suppliers", "kode_pos2");
    $this->add_field("suppliers", "biaya_admin");
    $this->add_field("inventory","colour");
    $this->add_field("inventory","size");
    $this->add_field('purchase_order','req_no');
    $this->add_field('purchase_order','expire_day',"int");
    $this->add_field('purchase_order','contact_person');
    $this->add_field('inventory_products','ref1');
    $this->add_field('inventory_products','ref2');
    $this->add_field('inventory_products','ref3');
    $this->add_field('inventory_products','doc_status');
    $this->add_field('invoice_lineitems','no_urut',"int");
    $this->add_field('purchase_order_lineitems','no_urut',"int");
    $this->add_field('sales_order_lineitems','no_urut',"int");
    $this->add_field('inventory_products','no_urut',"int");
    $this->add_field('inventory_moving','no_urut',"int");
    $this->add_field('check_writer','doc_type');
    $this->add_field('check_writer','ref1');
    $this->add_field('check_writer','ref2');
    $this->add_field('check_writer','ref3');
    $this->add_field('check_writer','doc_status');
    $this->add_field('purchase_order_lineitems','margin','double');
    $this->add_field('purchase_order_lineitems','margin_real','double');
    $this->add_field('purchase_order_lineitems','retail_real','double');
    $this->add_field('inventory_products','doc_status');
    $this->add_field('maxon_inbox','doc_no');
    $this->add_field('maxon_inbox','doc_type');
    $this->add_field('promosi_item','member_group');
    $this->add_field('promosi_item','time_range');
    $this->add_field('promosi_item','extra_qty');
    $this->add_field('voucher_master','id');
    $this->add_field('voucher_master','promosi_code');
    $this->add_field('hr_leaves','doc_status');
    $this->add_field('gl_transactions','valid_by');
    $this->add_field('gl_transactions','valid_date','datetime');
    $this->add_field('gl_transactions','valid_status','int');
    $this->add_field('inventory','margin','double');
    $this->add_field('inventory','margin_real','double');
    $this->add_field('inventory','retail_real','double');
    $this->add_field('inventory','kode_lama');
    $this->add_field('employee','shift_group');
    $this->add_field('employee','is_resigned',"int");
    $this->add_field('employee','resigned_date','datetime');
    
    $this->create_item_need_update();            	
    $this->add_field("shipping_locations","parent_loc");
    $this->add_field("employee","location");
    $this->add_field("purchase_order","rekening");
    
    $this->create_po_expenses();
    
    $this->add_field("inventory_products","posted","int");
    $this->add_field("inventory_moving","posted","int");
    $this->add_field("payables_payments","ref1");
    $this->add_field("employee","sisa_cuti","int");
    $this->add_field("hr_leaves","doc_type");
    $this->add_field("bank_accounts","has_edc");
    $this->add_field("system_variables","coa1");
    $this->add_field("system_variables","coa2");
    $this->add_field("system_variables","coa3");
    $this->add_field("system_variables","coa4");
    $this->add_field("system_variables","coa5");
    
    $this->add_field("customers","tgl_tagih","int");
    $this->add_field('crdb_memo','prc_value','double');
    $this->add_field('inventory_beginning_balance','id','int');
    $this->add_field('invoice_lineitems','disc_amount_ex','double');
    $this->add_field("promosi_disc","nilai2","double");
    $this->add_field("promosi_disc","nilai3","double");
	
    $this->create_stock_proses_arsip();

    
    
    $this->allways_runing();
    
    $this->add_field("purchase_order","ref1");
    $this->add_field("purchase_order","ref2");
    $this->add_field("purchase_order","ref3");
    $this->add_field("invoice","inv_amount","double");
    $this->add_field("payments","account_number");
    $this->add_field("check_writer_items","org_id");
    $this->add_field("inventory_products","cost_account","double");
    
    $this->add_field("user","session_id");
    $this->add_field("user","logged_in","int");         
    
    $this->create_type_of_vendor();

    $this->add_field('inventory_moving','mu_qty','double');
    $this->add_field('inventory_moving','multi_unit');
    $this->add_field('inventory_moving','mu_price','double');
    $this->add_field('inventory_moving','create_date','datetime');
    $this->add_field('inventory_moving','create_by');
    $this->add_field('inventory_moving','update_date','datetime');
    $this->add_field('inventory_moving','update_by');
    $this->add_field('inventory_moving','cost_account');
	$this->add_field("salesman","wilayah");
	
	$this->create_salesman_target();
	
    $this->create_hr_pph21_form();
    $this->create_employee_pph();
        
    $this->add_field("inventory_categories","inventory_account","int");
    $this->add_field("inventory_categories","cogs_account","int");

    $this->create_table_hr_emp_loan_schedule();
    $this->add_index("time_card_detail","id");
    $this->add_index("time_card_detail","nip");
    $this->add_index("time_card_detail","tanggal");
    $this->add_index("time_card_detail","salary_no");
    $this->add_index("overtime_detail","id");
    $this->add_index("overtime_detail","nip");
    $this->add_index("overtime_detail","tanggal");
                	
                    
    $this->add_field("inventory_categories","sales_account","int");
    $this->add_field("inventory_categories","tax_account","int");

    $this->add_field("inventory_prices","id","INT NOT NULL AUTO_INCREMENT, ADD PRIMARY KEY (id)"); 
    $this->add_field("inventory_prices","qty_last","double"); 
    $this->add_field("inventory_prices","calc_date","datetime");
    $this->add_field("inventory_prices","create_date","datetime");
    $this->add_field("inventory_prices","create_by");
    $this->add_field("inventory_prices","update_date","datetime");
    $this->add_field("inventory_prices","update_by");
    $this->add_field("inventory_prices","warehouse_code");
    
    $this->add_field("bill_header", "paid","int");
    $this->add_field("bill_header","termin");
    $this->add_field("bill_detail","saldo","double");
    $this->add_field("bill_detail","create_by");
    $this->add_field("bill_detail","create_date","datetime");
    $this->add_field("bill_detail","update_by");
    $this->add_field("bill_detail","update_date","datetime");
                            
	$this->create_view_qs_stock_unit();						
	$this->create_bill_header_collector();
	                          
	$this->add_field("payments","doc_status","int");
	$this->add_field("payables_payments","doc_status","int");
	$this->add_field("purchase_order","branch_code");
	$this->add_field("purchase_order","dept_code");
	$this->add_field("purchase_order","project_code");
	$this->add_field("system_variables","plus_minus");
	$this->add_field("inventory_categories","sales_target","double");
	$this->add_field("inventory_products","description","varchar(250)");
	$this->add_field("shipping_locations", "default_gudang","int");
	$this->add_field("employeemedical","amount","double");
	
	$this->add_field("inventory","closing_status","int");
	$this->add_field("inventory_beg_bal_gudang","qty_awal_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_akhir_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_po_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_beli_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_retur_beli_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_recv_po_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_recv_etc_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_so_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_do_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_jual_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_retur_jual_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_delivery_etc_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_adjust_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_mutasi_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_work_order_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_finish_good_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_recv_material_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_material_used_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_recv_toko_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_retur_toko_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_roling_masuk_amt","double");			
	$this->add_field("inventory_beg_bal_gudang","qty_roling_keluar_amt","double");		
	$this->add_field("inventory_beg_bal_gudang","qty_adjust_hilang_amt","double");			

	$this->create_item_need_update_arsip();
	$this->add_field("crdb_memo","cust_supp");		                                                        
	$this->add_field("payables_bill_detail","row_type");		                                                        
	$this->add_field("bill_detail","row_type");			        
	                                                

	$this->create_zzz_customer_need_update();
	$this->create_zzz_supplier_need_update();
	$this->create_zzz_rekening_need_update();
			                                                        
	$this->add_field("suppliers","current_balance","double");															
									
	$this->add_field("hr_paycheck_sal_comp","manual","int");															
																		
	$V0urgekm0f1f="insert into zzz_item_need_update(item_no) select i.item_number
		from inventory i join (select item_number,sum(qty_masuk-qty_keluar) as qty_stock
		from qry_kartustock_union group by item_number) as q  on q.item_number=i.item_number
		where abs(q.qty_stock-i.quantity_in_stock)>0.5";
		
	$this->CI->db->query($V0urgekm0f1f);
											
																
	$this->create_zzz_jurnal_error();
	
	$this->create_ticket_sales();
	$this->add_field("ticket_sales","bayar","double");
	$this->add_field("ticket_sales","kembali","double");
	$this->add_field("ticket_sales","posted","int");

    $this->add_field("suppliers", "show_only_item","int");
	$this->add_field("purchase_order","doc_type");
	
	$this->add_field("service_order", "masalah","varchar(500)");
	$this->add_field("service_order","jenis_masalah");
	$this->add_field("service_order","transportasi");
	
	$Vzls01jplmeq="Flag [service_order] comments change";
    
    if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){       
        $V0urgekm0f1f="alter table service_order modify comments varchar(500)";
        $this->CI->db->query($V0urgekm0f1f);
        $this->CI->sysvar->insert($Vzls01jplmeq,"1","auto");
    }
	
	$this->add_field("suppliers","jenis_partisipasi");
		
	$this->add_field("crdb_memo","doc_type");
    $this->add_field("crdb_memo","outlet");
    $this->add_field("inventory_moving","ref1","varchar(250)");
    $this->add_field("inventory_moving","ref2","varchar(250)");
    $this->add_field("inventory_moving","ref3","varchar(250)");
    $this->add_field("inventory_products","trans_type");
    $this->add_field("inventory","item_picture2","varchar(250)");
    $this->add_field("inventory","item_picture3","varchar(250)");
    $this->add_field("inventory","item_picture4","varchar(250)");
    $this->add_field("inventory_categories","icon_picture");
    $this->add_field("mat_release_header","posted","int");
    $this->add_field("customers","lat");

    $Vs1ienkajffb=array("purchase_order","purchase_order_lineitems","payables","payables_items","payables_payments",
        "inventory","inventory_categories","customers","suppliers","chart_of_accounts",
        "sales_order","sales_order_lineitems","payments","invoice","invoice_lineitems",
        "check_writer","bank_accounts","inventory_warehouse","bill_header","gl_transactions",
        "gl_beginning_balance_archive","salesman","work_order","work_exec","voucher_master",
        "user","fa_asset","fa_asset_group","fa_asset_transaction","fa_asset_depreciation",
        "branch","budget","crdb_memo","inventory_moving","inventory_products","financial_periods",
        "promosi_disc","shipping_locations","system_variables","preferences");
    for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($Vs1ienkajffb);$Vvmcb2huerp4++){
        $this->add_field($Vs1ienkajffb[$Vvmcb2huerp4],"cid");
    }    
    $this->add_field("customers","lng");
    $this->add_field("customers","join_date","datetime");
    $this->add_field("customers","expire_date","datetime");
	$this->add_field("inventory","cost_method","int");
	$this->add_field("inventory","barcode");
	$this->add_field("purchase_order","update_by");
	$this->add_field("chart_of_accounts","active","int");
	$this->add_field("chart_of_accounts","source_id");
	$this->add_field("chart_of_accounts","map_account");
	$this->add_field("chart_of_accounts","update_status_epip");
	$this->add_field("chart_of_accounts","gid");
	$this->add_field("inventory","insr_name");
    $this->add_field("payables_bill_header","cid");
    $this->add_field("sales_order_lineitems","employee_id");
    	
    if($this->display_output){
    	$this->message.="<br>FINISH";
    	return $this->message;
    }           
    
 }
	function create_ticket_sales(){
		$V0a4iekmarsp[]="ticket_no nvarchar(50)";
		$V0a4iekmarsp[]="user_id nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
		$V0a4iekmarsp[]="qty_ticket int";
		$V0a4iekmarsp[]="qty_card int";
		$V0a4iekmarsp[]="price double";
		$V0a4iekmarsp[]="disc_prc float";
		$V0a4iekmarsp[]="disc_amt double";
		$V0a4iekmarsp[]="netto double";
		$V0a4iekmarsp[]="how_type nvarchar(50)";
		$V0a4iekmarsp[]="cust_no nvarchar(50)";
		$V0a4iekmarsp[]="cust_name nvarchar(250)";
		$V0a4iekmarsp[]="com_prc float";
		$V0a4iekmarsp[]="com_amt double";
		$V0a4iekmarsp[]="edc nvarchar(250)";
		$V0a4iekmarsp[]="how_paid nvarchar(50)";
		$V0a4iekmarsp[]="ticket_type nvarchar(50)";		
        $V0a4iekmarsp[]="keterangan nvarchar(250)";                
        $this->create_table("ticket_sales",$V0a4iekmarsp);		
	}
	function create_zzz_jurnal_error(){
        $V0a4iekmarsp[]="gl_id nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
        $V0a4iekmarsp[]="error_message nvarchar(250)";                
        $this->create_table("zzz_jurnal_error",$V0a4iekmarsp);		
	}

	function create_zzz_supplier_need_update(){
        $V0a4iekmarsp[]="supp_no nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
        $V0a4iekmarsp[]="gudang nvarchar(50)";                
        $this->create_table("zzz_supplier_need_update",$V0a4iekmarsp);		
	}
 	function create_zzz_rekening_need_update(){
        $V0a4iekmarsp[]="rek_no nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
        $V0a4iekmarsp[]="gudang nvarchar(50)";                
        $this->create_table("zzz_rekening_need_update",$V0a4iekmarsp);		
	}
 	function create_zzz_customer_need_update(){
        $V0a4iekmarsp[]="cust_no nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
        $V0a4iekmarsp[]="gudang nvarchar(50)";                
        $this->create_table("zzz_customer_need_update",$V0a4iekmarsp);		
	}
 	function create_item_need_update_arsip(){
        $V0a4iekmarsp[]="item_no nvarchar(50)";
        $V0a4iekmarsp[]="tanggal datetime";
        $V0a4iekmarsp[]="gudang nvarchar(50)";                
        $this->create_table("zzz_item_need_update_arsip",$V0a4iekmarsp);		
	}
 
function create_view_qs_stock_unit(){                            
                            
    $V0urgekm0f1fql="create view qs_stock_unit as 
    select `ip`.`item_number`,`ip`.`unit`,sum(`ip`.`quantity_received`) AS `qty`,
    `ip`.`receipt_type` AS `tran_type` from (`inventory_products` `ip` 
    left join `inventory` `s` on ( (`s`.`item_number` = `ip`.`item_number`))) 
    where (`ip`.`unit` <> `s`.`unit_of_measure`) 
    group by `ip`.`item_number`,`ip`.`unit`,`ip`.`receipt_type` 
    union all 
    select `il`.`item_number` AS `item_number`,`il`.`unit` AS `unit`,
    sum((-(1) * `il`.`quantity`)) AS `qty`,`i`.`invoice_type` AS `invoice_type` 
    from ((`invoice_lineitems` `il` left join `invoice` `i` 
    on ((`i`.`invoice_number` = `il`.`invoice_number`))) 
    left join `inventory` `s` on ((`s`.`item_number` = `il`.`item_number`))) 
    where (`il`.`unit` <> `s`.`unit_of_measure`) 
    group by `il`.`item_number`,`il`.`unit`,`i`.`invoice_type`";
                            
    $this->create_view("qs_stock_unit",$V0urgekm0f1fql);
 	
 	
}
	function create_bill_header_collector(){
        $V0a4iekmarsp[]="bill_id nvarchar(50)";
        $V0a4iekmarsp[]="bill_date datetime";
        $V0a4iekmarsp[]="amount double";
        $V0a4iekmarsp[]="comments nvarchar(250)";
        $V0a4iekmarsp[]="collector nvarchar(150)";        
	 	$V0a4iekmarsp[]="create_by varchar(50)";
	 	$V0a4iekmarsp[]="create_date datetime";
	 	$V0a4iekmarsp[]="update_by varchar(50)";
	 	$V0a4iekmarsp[]="update_date datetime";
                
        $this->create_table("bill_header_collector",$V0a4iekmarsp);
        
        $V0a4iekmarsp2[]="bill_id nvarchar(50)";
        $V0a4iekmarsp2[]="invoice_number nvarchar(50)";
        $V0a4iekmarsp2[]="invoice_date datetime";
        $V0a4iekmarsp2[]="amount double";
        $V0a4iekmarsp2[]="saldo double";
        $V0a4iekmarsp2[]="comments nvarchar(250)";
        $V0a4iekmarsp2[]="no_urut int";
        $V0a4iekmarsp2[]="n_giro int";
        $V0a4iekmarsp2[]="t_giro double";
        $V0a4iekmarsp2[]="k_giro double";
        $V0a4iekmarsp2[]="no_giro nvarchar(50)";
        $V0a4iekmarsp2[]="jumlah_giro double";
        $V0a4iekmarsp2[]="jumlah_cash double";
	 	$V0a4iekmarsp2[]="create_by varchar(50)";
	 	$V0a4iekmarsp2[]="create_date datetime";
	 	$V0a4iekmarsp2[]="update_by varchar(50)";
	 	$V0a4iekmarsp2[]="update_date datetime";
                                
        
        $this->create_table("bill_detail_collector",$V0a4iekmarsp2);
                
	}
    function create_view($Vqlxpv51crw0,$V0urgekm0f1fql){
        $Vzls01jplmeq="Flag [$Vqlxpv51crw0] add view";
		if($this->display_output){
			$this->message.="<br>$Vzls01jplmeq";
		}
        
        if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){       
            $this->CI->sysvar->insert($Vzls01jplmeq,"1",$Vzls01jplmeq);
            $this->CI->db->query($V0urgekm0f1fql);
        }
    }
 
    function create_table_hr_emp_loan_schedule(){
        $V0a4iekmarsp[]="loan_number nvarchar(50)";
        $V0a4iekmarsp[]="no_urut int";
        $V0a4iekmarsp[]="tanggal_jth_tempo datetime";
        $V0a4iekmarsp[]="awal double";
        $V0a4iekmarsp[]="pokok double";
        $V0a4iekmarsp[]="bunga double";
        $V0a4iekmarsp[]="angsuran double";
        $V0a4iekmarsp[]="akhir double";
        $V0a4iekmarsp[]="payment_no nvarchar(50)";
        $V0a4iekmarsp[]="comments nvarchar(250)";
        $V0a4iekmarsp[]="keterangan nvarchar(250)";
        
        $this->create_table("hr_emp_loan_schedule",$V0a4iekmarsp);
    }


    function create_hr_pph21_form(){
        $V0a4iekmarsp[]='kelompok varchar(50)';
        $V0a4iekmarsp[]='nomor int';
        $V0a4iekmarsp[]='keterangan varchar(500)';
        $V0a4iekmarsp[]='jumlah double';
        $V0a4iekmarsp[]='header int';
        $V0a4iekmarsp[]='rumus varchar(250)';
        $V0a4iekmarsp[]='template varchar(250)';
        $this->create_table("hr_pph_form", $V0a4iekmarsp);        
    }
    function create_employee_pph(){
        $V0a4iekmarsp[]='nip varchar(50)';
        $V0a4iekmarsp[]='nomor int';
        $V0a4iekmarsp[]='jumlah double';
        $V0a4iekmarsp[]='tahun int';
        $V0a4iekmarsp[]='bulan int';
        $this->create_table("employee_pph", $V0a4iekmarsp);        
    }


  	function create_salesman_target(){
        $V5ykopbsc35i[]="period_id varchar(50)";
        $V5ykopbsc35i[]="salesman_id varchar(50)";
        $V5ykopbsc35i[]="category_id varchar(50)";
        $V5ykopbsc35i[]="region_id varchar(50)";
        $V5ykopbsc35i[]="sales_target double";
        $V5ykopbsc35i[]="sales_real double";                
        $this->create_table("salesman_target",$V5ykopbsc35i);            
 		
 	}
 
 
 	function create_type_of_vendor(){
        $V5ykopbsc35i[]="type_id varchar(50)";
        $V5ykopbsc35i[]="type_name varchar(200)";
        $this->create_table("type_of_vendor",$V5ykopbsc35i);            
 		
 	}
    function create_stock_proses_arsip(){
        $V5ykopbsc35i[]="item_no varchar(50)";
        $V5ykopbsc35i[]="year_arc int";
        $V5ykopbsc35i[]="month_arc int";
        $this->create_table("zzz_stock_arsip",$V5ykopbsc35i);            
        
        $Vndsq1rqjdqj[]="item_number varchar(50)";
        $Vndsq1rqjdqj[]="tanggal datetime";
        $Vndsq1rqjdqj[]="gudang varchar(50)";
        $Vndsq1rqjdqj[]='cost double';
        $Vndsq1rqjdqj[]='retail double';
                
        $Vndsq1rqjdqj[]='qty_awal double';
        $Vndsq1rqjdqj[]='qty_akhir double';
                
        $Vndsq1rqjdqj[]='qty_po double';
        $Vndsq1rqjdqj[]='qty_beli double';
        $Vndsq1rqjdqj[]='qty_retur_beli double';
        $Vndsq1rqjdqj[]='qty_recv_po double';
        $Vndsq1rqjdqj[]='qty_recv_etc double';
        
        $Vndsq1rqjdqj[]='qty_so double';
        $Vndsq1rqjdqj[]='qty_do double';
        $Vndsq1rqjdqj[]='qty_jual double';
        $Vndsq1rqjdqj[]='qty_retur_jual double';
        $Vndsq1rqjdqj[]='qty_delivery_etc double';

        $Vndsq1rqjdqj[]='qty_adjust double';
        $Vndsq1rqjdqj[]='qty_mutasi double';
        
        $Vndsq1rqjdqj[]='qty_work_order double';
        $Vndsq1rqjdqj[]='qty_finish_good double';
        $Vndsq1rqjdqj[]='qty_recv_material double';
        $Vndsq1rqjdqj[]='qty_material_used double';
                
        $Vndsq1rqjdqj[]='qty_recv_toko double';
        $Vndsq1rqjdqj[]='qty_retur_toko double';
        $Vndsq1rqjdqj[]='qty_roling_masuk double';
        $Vndsq1rqjdqj[]='qty_roling_keluar double';
        $Vndsq1rqjdqj[]='qty_adjust_hilang double';
        
        
        $this->create_table("inventory_beg_bal_gudang",$Vndsq1rqjdqj);            
        
    }

    
function allways_runing(){
        
    $this->CI->db->query("delete from inventory_warehouse 
        where (warehouse_code is null or warehouse_code='' or quantity=0)");
    
}
    function create_po_expenses(){
        $Vndsq1rqjdqj[]="purchase_order_number varchar(50)";
        $Vndsq1rqjdqj[]="item_no varchar(50)";
        $Vndsq1rqjdqj[]="item_desc varchar(200)";
        $Vndsq1rqjdqj[]="amount double";
        $Vndsq1rqjdqj[]='calc_method int';
        $Vndsq1rqjdqj[]='qty double';
        $Vndsq1rqjdqj[]='price double';
        $this->create_table("purchase_order_expenses",$Vndsq1rqjdqj);    
            
    }


    function create_item_need_update(){
        $Vndsq1rqjdqj[]="item_no varchar(50)";
        $Vndsq1rqjdqj[]="item_desc varchar(100)";
        $this->create_table("zzz_item_need_update",$Vndsq1rqjdqj);    
            
    }
function create_inventory_categories_sub(){
 	$V0a4iekmarsp[]="kode varchar(50)";
 	$V0a4iekmarsp[]="category varchar(150)";
 	$V0a4iekmarsp[]="parent_id varchar(50)";
 	$this->create_table("inventory_categories_sub",$V0a4iekmarsp);
}
 function create_toko(){
 	$V0a4iekmarsp[]="code varchar(50)";
 	$V0a4iekmarsp[]="code_company varchar(50)";
 	$V0a4iekmarsp[]="toko_name varchar(250)";
 	$V0a4iekmarsp[]="profit_prc real";
 	$V0a4iekmarsp[]="date_from datetime";
 	$V0a4iekmarsp[]="date_to datetime";
 	$V0a4iekmarsp[]="remarks varchar(250)";
 	$V0a4iekmarsp[]="address varchar(250)";
 	$V0a4iekmarsp[]="contact varchar(150)";
 	$V0a4iekmarsp[]="phone varchar(50)";
 	$V0a4iekmarsp[]="fax varchar(50)";
 	$V0a4iekmarsp[]="email varchar(250)";
 	$this->create_table("toko_master",$V0a4iekmarsp);
}
   function create_profit_sharing(){
 	$V0a4iekmarsp[]="type_code varchar(50)";
 	$V0a4iekmarsp[]="item_no varchar(50)";
 	$V0a4iekmarsp[]="item_name varchar(250)";
 	$V0a4iekmarsp[]="profit_prc real";
 	$V0a4iekmarsp[]="date_from datetime";
 	$V0a4iekmarsp[]="date_to datetime";
 	$V0a4iekmarsp[]="remarks varchar(250)";
	$this->create_table("profit_sharing",$V0a4iekmarsp);

   }
  function create_payables_bill(){
 	$V0a4iekmarsp[]="nomor varchar(50)";
 	$V0a4iekmarsp[]="supplier_number varchar(50)";
 	$V0a4iekmarsp[]="termin varchar(50)";
 	$V0a4iekmarsp[]="tanggal datetime";
 	$V0a4iekmarsp[]="tgl_jth_tempo datetime";
 	$V0a4iekmarsp[]="catatan varchar(250)";
 	$V0a4iekmarsp[]="curr_code varchar(50)";
 	$V0a4iekmarsp[]="curr_rate double";
 	$V0a4iekmarsp[]="amount double";
 	$V0a4iekmarsp[]="paid int";
 	$V0a4iekmarsp[]="create_by varchar(50)";
 	$V0a4iekmarsp[]="create_date datetime";
 	$V0a4iekmarsp[]="update_by varchar(50)";
 	$V0a4iekmarsp[]="update_date datetime";
	$this->create_table("payables_bill_header",$V0a4iekmarsp);
 	$V0a4iekmarsp2[]="nomor varchar(50)";
 	$V0a4iekmarsp2[]="faktur varchar(50)";
 	$V0a4iekmarsp2[]="tanggal datetime";
 	$V0a4iekmarsp2[]="jumlah double";
 	$V0a4iekmarsp2[]="saldo double";
 	$V0a4iekmarsp2[]="create_by varchar(50)";
 	$V0a4iekmarsp2[]="create_date datetime";
 	$V0a4iekmarsp2[]="update_by varchar(50)";
 	$V0a4iekmarsp2[]="update_date datetime";
	$this->create_table("payables_bill_detail",$V0a4iekmarsp2);
	
  }
  function create_po_qty_alloc(){
 	$V0a4iekmarsp[]="wh_code varchar(50)";
 	$V0a4iekmarsp[]="qty double";
 	$V0a4iekmarsp[]="line_id_po double";
	$this->create_table("po_qty_alloc",$V0a4iekmarsp);
}
 function create_com_list(){
 	$V0a4iekmarsp[]="com_code varchar(50)";
 	$V0a4iekmarsp[]="com_db_name varchar(50)";
 	$V0a4iekmarsp[]="com_url varchar(150)";
 	$V0a4iekmarsp[]="com_short_desc varchar(250)";
 	$V0a4iekmarsp[]="com_long_desc varchar(550)";
 	$V0a4iekmarsp[]="com_logo varchar(150)";
	$this->create_table("com_list",$V0a4iekmarsp);
}
	   
 function user_roles(){
 	$V0a4iekmarsp[]="user_id varchar(50)";
	$V0a4iekmarsp[]="roles_type varchar(50)";
	$V0a4iekmarsp[]="roles_item varchar(50)";
	$V0a4iekmarsp[]="roles_value1 double";
	$V0a4iekmarsp[]="roles_value2 double";
	$V0a4iekmarsp[]="description varchar(250)";
	$this->create_table("user_roles",$V0a4iekmarsp);
 }
 function create_inventory_price_customers()
 {
	$V0a4iekmarsp[]="item_no varchar(50)";
	$V0a4iekmarsp[]="cust_type varchar(50)";
	$V0a4iekmarsp[]="sales_price double";
	$V0a4iekmarsp[]="disc_prc_from double";
	$V0a4iekmarsp[]="min_qty double";
	$V0a4iekmarsp[]="disc_prc_to double";
	$V0a4iekmarsp[]="description varchar(200)";
	$this->create_table("inventory_price_customers",$V0a4iekmarsp);
 }
 function create_unit_of_measure(){
 	$V0a4iekmarsp[]="from_unit varchar(50)";
	$V0a4iekmarsp[]="to_unit varchar(50)";
	$V0a4iekmarsp[]="unit_value double";
	$this->create_table("unit_of_measure",$V0a4iekmarsp);
 }
 function create_table($Vgk1ygcl22kz,$V0a4iekmarsp)
 {
 	
	$Vzls01jplmeq="Flag [$Vgk1ygcl22kz] add table";
	if($this->display_output){
		$this->message.="<br>$Vzls01jplmeq";
	}
		
	if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){		
		$this->CI->sysvar->insert($Vzls01jplmeq,"1",$Vzls01jplmeq);
		$this->CI->load->dbforge();
		for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++)
		{
			$V0a4iekmarsp2[]=$V0a4iekmarsp[$Vvmcb2huerp4];
		}
		$this->CI->dbforge->add_field($V0a4iekmarsp2);
		$this->CI->dbforge->add_field("id");
		$this->CI->dbforge->create_table($Vgk1ygcl22kz,TRUE);
		$this->CI->sysvar->update($Vzls01jplmeq,"1");		
	}
 }
 function add_field($Vgk1ygcl22kz,$Vndsq1rqjdqjield,$V13hcbqeuapd="varchar(50)")
 {
	$Vzls01jplmeq="Flag [$Vgk1ygcl22kz] add field [$Vndsq1rqjdqjield]";
	if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){		
		$this->CI->sysvar->insert($Vzls01jplmeq,"1","auto");
		$V0a4iekmarsp=$this->CI->db->query("DESCRIBE ".$Vgk1ygcl22kz)->result();
		$V5ykopbsc35ixist=false;
		for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4++)
		{
			if($V0a4iekmarsp[$Vvmcb2huerp4]->Field==$Vndsq1rqjdqjield){
				$V5ykopbsc35ixist=true;
			}
		}
		if(!$V5ykopbsc35ixist){
			$V0urgekm0f1f="ALTER TABLE `$Vgk1ygcl22kz` ADD COLUMN `$Vndsq1rqjdqjield` $V13hcbqeuapd ; "; 
			if($this->CI->db->query($V0urgekm0f1f)){
				$this->CI->sysvar->update($Vzls01jplmeq,"1");
				if($this->display_output){
					$this->message.="<br>$Vzls01jplmeq <br> - $V0urgekm0f1f";
				}
			}
		} else {
			 
			$this->CI->sysvar->update($Vzls01jplmeq,"1");			
		}
	} else {
		 
	}
 }
 function add_fields($Vgk1ygcl22kz,$V0a4iekmarsp)
 {
    $Vzls01jplmeq="Flag [$Vgk1ygcl22kz] add field [".$V0a4iekmarsp[0]."]";
    if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){       
        $this->CI->sysvar->insert($Vzls01jplmeq,"1","auto");
        $V0a4iekmarsp_tgt=$this->CI->db->query("DESCRIBE ".$Vgk1ygcl22kz)->result();
        $V5ykopbsc35ixist=false;
        $Vndsq1rqjdqjield_new="";
        for($Vvmcb2huerp4flds=0;$Vvmcb2huerp4<count($V0a4iekmarsp);$Vvmcb2huerp4flds++){            
            $V5ykopbsc35ixist=false;
            for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($V0a4iekmarsp_tgt);$Vvmcb2huerp4++)
            {
                if($V0a4iekmarsp_tgt[$Vvmcb2huerp4]->Field==$V0a4iekmarsp[$Vvmcb2huerp4flds]){
                    $V5ykopbsc35ixist=true;
                    break;
                }
            }
            if(!$V5ykopbsc35ixist){
                $Vndsq1rqjdqjield_new.=$V0a4iekmarsp[$Vvmcb2huerp4flds];
                if($Vndsq1rqjdqjlds<count($V0a4iekmarsp)-1)$Vndsq1rqjdqjield_new.=",";
            }
        }
        if($this->CI->db->query($V0urgekm0f1f)) $this->CI->sysvar->update($Vzls01jplmeq,"1");
    } else {
        $this->CI->sysvar->update($Vzls01jplmeq,"1");            
    }
 }
 function add_index($Vgk1ygcl22kz,$Vndsq1rqjdqjield)
 {
    $Vzls01jplmeq="Flag [$Vgk1ygcl22kz] add index [$Vndsq1rqjdqjield]";
    if($this->display_output){
        $this->message.="<br>$Vzls01jplmeq";
    }
    if(""==$this->CI->sysvar->getvar($Vzls01jplmeq) ){       
        $this->CI->sysvar->insert($Vzls01jplmeq,"1","auto");
        $V0a4iekmarsp=$this->CI->db->query("DESCRIBE ".$Vgk1ygcl22kz)->result();
        $V5ykopbsc35ixist=false;
        if($Vzr5gmgksaot=$this->CI->db->query("SHOW INDEX FROM $Vgk1ygcl22kz WHERE Key_name = 'ix_$Vndsq1rqjdqjield'")){
            if($Vzr5gmgksaot->num_rows())$V5ykopbsc35ixist=true;
        }
        
        if(!$V5ykopbsc35ixist){
            $V0urgekm0f1f="ALTER TABLE `$Vgk1ygcl22kz` ADD INDEX `ix_$Vndsq1rqjdqjield`(`$Vndsq1rqjdqjield`); "; 
            if(@$this->CI->db->query($V0urgekm0f1f)){
                $this->CI->sysvar->update($Vzls01jplmeq,"1");
            }
        } else {
             
            $this->CI->sysvar->update($Vzls01jplmeq,"1");            
        }
    } else {
         
    }
 }  
}
