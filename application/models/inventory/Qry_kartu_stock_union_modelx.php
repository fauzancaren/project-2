<?php
class Qry_Kartu_Stock_Union_model extends CI_Model {

    public $_item_number='',$_gudang="",$_class="";
    public $_category='',$_sub_category="";
    public $_supplier_number='';
    public $_date_from='', $_date_to='';
    public $_manufacturer='',$_model='';
    public $_message="";
    public $_trans_type="";
    public $_PurchaseUpdQtyWhen="0";    // 0 - update with faktur, 1 - update with receipt po
    public $_SaleUpdateQtyWhen="0";     // 0 - update with faktur, 1 - update with delivery
    public $_cmd="";                   // list - detail date from to, sum - summary with date_to, 
                                        // sum_awal - summary with date_from
    public $_qry_kartustock_union_onprgm=false;        // with view qry_kartu_stock_union or no
    public $_qry_kartustock_union_cara="0";            //  0 - with php syntaxt, 
                                                        //  1 - with view qry_kartu_stock_union
                                                        //  2 - with sp_qry_kartu_stock_union stored procedure
    public $_output_tmp=false;         //output query to tmp
    public $_FilterQtyType=0;          //0 - qty all tampil
                                       //1 - qty<>0
                                       //2 - qty=0 

	function __construct(){
		parent::__construct();         
        $this->_SaleUpdateQtyWhen=substr(getVar("SaleUpdQtyWhen","0"),0,1);
        $this->_PurchaseUpdQtyWhen=substr(getVar("PurchaseUpdQtyWhen","0"),0,1);
        $this->_qry_kartustock_union_onprgm=getvar("qry_kartustock_union_onprgm","true");
        $this->_qry_kartustock_union_cara=getvar("_qry_kartustock_union_cara","0");

	}
    function index(){

    }
    function getSql($cmd="",$date_from="",$date_to="",$item_number="",
        $category="",$supplier_number="",$manufacturer="",$model="",
        $trans_type="",$gudang=""){

        $s="";

        $this->_cmd=$cmd;
        $this->_date_from=$date_from;
        $this->_date_to=$date_to;
        if($item_number<>"")$this->_item_number=$item_number;
        if($category<>"")$this->_category=$category;
        if($supplier_number<>"")$this->_supplier_number=$supplier_number;
        if($manufacturer<>"")$this->_manufacturer=$manufacturer;
        if($model<>"")$this->_model=$model;
        if($trans_type<>"")$this->_trans_type=$trans_type;
        if($gudang<>"") $this->_gudang=$gudang;

        if($this->_qry_kartustock_union_onprgm){
            if($this->_qry_kartustock_union_cara==1){
                //pakai query view qry_kartustock_union
                $s=$this->qry_kartustock_union_b();
            } else if ($this->_qry_kartustock_union_cara==2){
                //pakai stored procedure
                $s=$this->qry_kartustock_union_c();
            } else {
                //default pakai php
                $s=$this->qry_kartustock_union_a();
            }
        } else {
            $s=$this->qry_kartustock_union_a();
        }

        return $s;

     }
     function qry_kartustock_union_a(){
        $s="";         
        if($this->_output_tmp && $this->_cmd == "sum") {
            $this->db->query("truncate table tmp_kartu_stock_1");
            $this->db->query("truncate table tmp_kartu_stock");
        }
        //-- qry_kartustock_invoice_tanpa_do
        $this->_message .= "Calc: faktur beli kontan, wait...";
        $s = $s.$this->ksu_beli_kontan();
        if($this->_PurchaseUpdQtyWhen == 1) {
            $this->_message .=  "Calc: receive po, wait...";
            $s .= "\r Union All ";
            $s .= $this->ksu_receive_po();
        } else {
            $this->_message .= "Calc: faktur beli kredit, wait...";
            $s .=  "\r Union All ";
            $s .= $this->ksu_beli_kredit();
        }
        $this->_message .= "Calc: retur jual, wait...";
        $s .= "\r Union All ";
        $this->_message .= "Calc: retur jual, wait...";
        $s .=  $this->ksu_retur_jual();
        $this->_message .= "Calc: keluar lainnya, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_keluar_lain();
        $this->_message .= "Calc: keluar lainnya, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_keluar_etc();
        $this->_message .= "Calc: adjustment stock, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_adj();
        $this->_message .= "Calc: transfer barang, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_trx_gd_tgt();
        $this->_message .= "Calc: transfer barang, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_trx_gd_src();
        $this->_message .= "Calc: assembly, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_asm();
        $this->_message .= "Calc: disassembly, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_dasm();
        $this->_message .= "Calc: terima lainnya, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_terima_lain();
        $this->_message .= "Calc: wip, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_wip();
        $this->_message .= "Calc: recv finish good kontan, wait...";
        $s .= "\r Union All ";
        $s .=  $this->ksu_fpg();
        $this->_message .= "Calc: retur beli kontan, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_retur_beli();
        $this->_message .= "Calc: faktur jual kontan, wait...";
        $s .= "\r Union All ";
        $s .= $this->ksu_jual_kontan();
        if($this->_SaleUpdateQtyWhen == 1) {
            $this->_message .= "Calc: faktu surat jalan, wait...";
            $s .= "\r Union All ";
            $s .= $this->ksu_surat_jalan_so();
        } else {
            $this->_message .= "Calc: faktu jual kredit, wait...";
            $s .= "\r Union All ";
            $s .= $this->ksu_jual_kredit();
        }
        if($this->_output_tmp && $this->_cmd=="sum") {

            $this->add_tmp_kartu_stock_1($s);

            $s1 = "insert tmp_kartu_stock(txndate, item_number, gudang, qtyin, qtyout, amountin, 
            amountout,doctype) 
            \r select txndate, item_number,gudang,sum(qtyin) as qin,sum(qtyout) as qout,
            sum(amountin) as ain,sum(amountout) as aout,'SALDO' as doctype
            from tmp_kartu_stock_1
            group by txndate,item_number,gudang,'SALDO'";


            if($this->_FilterQtyType == 1) {
                $s1 .=" having sum(qtyin-qtyout)<>0 ";
            }

            
            $this->db->query($s1);

        }
        if($this->_output_tmp && $this->_cmd=="list") {

            $s2="insert into tmp_kartu_stock(txndate,tipe,doctype,terms,document,item_number,description,
            qtyin,qtyout,unit,price,harga,discount,disc_amount_1,amount,gudang,mata_uang,rate,
            contactname,comments,mu_qty,multi_unit,mu_harga,amountin,amountout) " . $s;
            $this->db->query($s2);

            /*

            if($q=$this->db->query($s)){
                foreach($q->result() as $r){
                    $ain=$r->amount_masuk;if($ain=="")$ain=0;
                    $aout=$r->amount_keluar;if($aout=="")$aout=0;
                    $s1 = "insert tmp_kartu_stock set txndate='$r->tanggal', 
                    item_number='$r->item_number', 
                    gudang='$r->gudang', 
                    qtyin='$r->qty_masuk', 
                    qtyout='$r->qty_keluar', 
                    amountin='$ain', 
                    amountout='$aout', 
                    doctype='$r->jenis',
                    document='$r->no_sumber' ";
                    $this->db->query($s1);
                }
            }
            */
        }

        return $s;
        
     }
     function add_tmp_kartu_stock_1($s){
        $date1=$this->_date_to;
        if($date1=="")$date1=date("Y-m-d H:i:s");
         $s2="insert into tmp_kartu_stock_1(doctype,item_number,gudang,qty,qtyin,qtyout,harga,
         amount,amountin,amountout,hpp_awal) " . $s;
         $this->db->query($s2);
         $s="update tmp_kartu_stock_1 set document='SALDO',comments='SALDO',txndate='$date1',harga=0,hpp_awal=0";
         $this->db->query($s);
         return true;

        if($q=$this->db->query($s)){
            $date1=$this->_date_to;
            if($date1=="")$date1=date("Y-m-d H:i:s");
            foreach($q->result() as $r){
                $gdg=$r->gudang;
                $gdg=str_replace("'","",$gdg);
                $ain=$r->ain;if($ain=="")$ain=0;
                $aout=$r->aout;if($aout=="")$aout=0;
                $amount=$r->z_amount;if($amount=="")$amount=0;
                $ss = "insert into tmp_kartu_stock_1  set document='SALDO',comments='SALDO',
                txndate='$date1',
                doctype='$r->jenis',
                item_number='$r->item_number',
                gudang='$gdg', qty='$r->z_qty',
                qtyin='$r->qin',qtyout='$r->qout',
                hpp_awal='0',
                amount='$amount',
                amountin='$ain',amountout='$aout',
                hpp_akhir='0'";
                $this->db->query($ss);
        
            }
        }

    }

     function qry_kartustock_union_b(){

     }
     function qry_kartustock_union_c(){

     }
    Function ksu_dasm() {
    // $s =  "#-- qry_kartustock_dasm" & vbCrLf
         
    //--- qry_kartustock_receipt
    $s="";
    if($this->_cmd=="sum"){
         $s .= "\r select 'DisAssembly' as jenis,
         pp.item_number,  pp.warehouse_code as gudang,
         sum(coalesce(pp.quantity_received,0))  as z_qty,
         sum(ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0))) AS `qin`, 
         sum(ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0))) AS `qout`,
         sum(coalesce(pp.quantity_received,0))  as qinout,
         sum(coalesce(pp.total_amount,0)) as z_amount,
         sum(IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `ain`,
         sum(IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `aout`,
         sum(coalesce(pp.total_amount,0)) as ainout";
     } else {
         $s = "SELECT `pp`.`date_received` AS `tanggal`,
         `pp`.`receipt_type` AS `tipe`,
         'DisAssembly' AS `jenis`,'' AS `termin`,`pp`.`shipment_id` AS `no_sumber`,
         `pp`.`item_number` AS `item_number`,`s`.`description` AS `description`, 
         ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0)) AS `qty_masuk`, 
         ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0)) AS `qty_keluar`,
         `pp`.`unit` AS `unit`,`pp`.`cost` AS `price`,`pp`.`cost` AS `cost`,
         0 AS `discount`,0 AS `discount_amount`,`pp`.`total_amount` AS `amount`,
         `pp`.`warehouse_code` AS `gudang`,'IDR' AS `mata_uang`,
         1 AS `rate`,`pp`.`supplier_number` AS `supplier`,`pp`.`comments` AS `comments`,
         `pp`.`mu_qty` AS `mu_qty`,`pp`.`multi_unit` AS `multi_unit`,
         `pp`.`mu_price` AS `mu_price`,
         IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_masuk`,
         IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_keluar`";
     }
     $s .= "\r FROM (`inventory_products` `pp`
        \r JOIN `inventory` `s` ON((`pp`.`item_number` = `s`.`item_number`)))
        \r WHERE (`pp`.`receipt_type`='PROD_D')";
     
     if($this->_item_number <> "" ) $s .= "\r and pp.item_number='" . $this->_item_number . "' ";
     if($this->_gudang <> "") $s .= "\r and pp.warehouse_code='" . $this->_gudang . "'";
     if($this->_date_from <> "") $s .= "\r  and pp.date_received>='" . $this->_date_from . "'";
     if($this->_date_from <> "") $s .= "\r  and pp.date_received<='" . $this->_date_to . "'";
     if($this->_trans_type <> "") $s .= "\r  and pp.receipt_type='" . $this->_trans_type . "'";
     
     if($this->_category <> "" ) $s .= "\r  and s.category='" . $this->_category . "'";
     if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
     if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
     if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
     if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
     if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r  group by 'DisAssembly',pp.item_number,pp.warehouse_code";
        }
        if ($this->_output_tmp && $this->_cmd=="sum" ) {
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }

    function ksu_asm() {
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Assembly' as jenis,pp.item_number,pp.warehouse_code as gudang,
            \r sum(coalesce(pp.quantity_received,0))  as z_qty,
            \r sum(ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0))) AS `qin`, 
            \r sum(ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0))) AS `qout`,
            \r sum(coalesce(pp.quantity_received,0))  as qinout,
            \r sum(coalesce(pp.total_amount,0)) as z_amount,
            \r sum(IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `ain`,
            \r sum(IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `aout`,
            \r sum(coalesce(pp.total_amount,0)) as ainout";
        } else {
            $s .= "\r SELECT `pp`.`date_received` AS `tanggal`,
            `pp`.`receipt_type` AS `tipe`,'Assembly' AS `jenis`,'' AS `termin`,
            `pp`.`shipment_id` AS `no_sumber`,`pp`.`item_number` AS `item_number`,
            `s`.`description` AS `description`, 
            ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0)) AS `qty_masuk`, 
            ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0)) AS `qty_keluar`,
            `pp`.`unit` AS `unit`,          `pp`.`cost` AS `price`,
            `pp`.`cost` AS `cost`,           0 AS `discount`,
            0 AS `discount_amount`,         `pp`.`total_amount` AS `amount`,
            `pp`.`warehouse_code` AS `gudang`,     'IDR' AS `mata_uang`,
            1 AS `rate`,  `pp`.`supplier_number` AS `supplier`,
            `pp`.`comments` AS `comments`,    `pp`.`mu_qty` AS `mu_qty`,
            `pp`.`multi_unit` AS `multi_unit`, `pp`.`mu_price` AS `mu_price`,
            IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_masuk`,
            IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_products` `pp`
        \r JOIN `inventory` `s` ON((`pp`.`item_number` = `s`.`item_number`)))
        \r WHERE (`pp`.`receipt_type`='PROD_A')";
        
        if($this->_item_number<>"") $s .= "\r and pp.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pp.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and pp.date_received>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and pp.date_received<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and pp.receipt_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "\r GROUP BY 'Assembly'
            ,pp.item_number, pp.warehouse_code";
        }
     
         if($this->_output_tmp && $this->_cmd=="sum") {
             //$this->add_tmp_kartu_stock_1($s);
         }
 
        return $s;         
    }

    function ksu_terima_lain(){
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Terima Lain' as jenis,pp.item_number,pp.warehouse_code as gudang,";
            $s .= "\r sum(coalesce(pp.quantity_received,0))  as z_qty,
            \r sum(ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0))) AS `qin`, 
            \r sum(ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0))) AS `qout`,
            \r sum(coalesce(pp.quantity_received,0))  as qinout,
            \r sum(coalesce(pp.total_amount,0)) as z_amount,
            \r sum(IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `ain`,
            \r sum(IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `aout`,
            \r sum(coalesce(pp.total_amount,0)) as ainout";
        } else {
            $s .= "\r SELECT `pp`.`date_received` AS `tanggal`,
            `pp`.`receipt_type` AS `tipe`,'Terima Lain' AS `jenis`,
            '' AS `termin`, `pp`.`shipment_id` AS `no_sumber`,
            `pp`.`item_number` AS `item_number`,`s`.`description` AS `description`, 
            ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0)) AS `qty_masuk`,
            ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0)) AS `qty_keluar`,
            `pp`.`unit` AS `unit`,       `pp`.`cost` AS `price`,
            `pp`.`cost` AS `cost`,        0 AS `discount`,
            0 AS `discount_amount`,       `pp`.`total_amount` AS `amount`,
            `pp`.`warehouse_code` AS `gudang`,      'IDR' AS `mata_uang`,
            1 AS `rate`,      `pp`.`supplier_number` AS `supplier`,
            `pp`.`comments` AS `comments`,  `pp`.`mu_qty` AS `mu_qty`,
            `pp`.`multi_unit` AS `multi_unit`,    `pp`.`mu_price` AS `mu_price`,
            IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_masuk`,
            IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_products` `pp`
        \r JOIN `inventory` `s` ON((`pp`.`item_number` = `s`.`item_number`)))
        \r WHERE (`pp`.`receipt_type` in ('ETC','ETC_IN'))";
        
        if($this->_item_number<>"") $s .= "\r and pp.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pp.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and pp.date_received>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and pp.date_received<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and pp.receipt_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "\r  group by 'Terima Lain',pp.item_number,pp.warehouse_code";
        }
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
     
    }
     
    function ksu_receive_po(){
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Receive PO' as jenis, pp.item_number,pp.warehouse_code as gudang,
            \r sum(coalesce(pp.quantity_received,0))  as z_qty,
            \r sum(ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0))) AS `qin`, 
            \r sum(ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0))) AS `qout`,
            \r sum(coalesce(pp.quantity_received,0))  as qinout,
            \r sum(coalesce(pp.total_amount,0)) as z_amount,
            \r sum(IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `ain`,
            \r sum(IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `aout`,
            \r sum(coalesce(pp.total_amount,0)) as ainout";
        } else {
            $s .= "\r SELECT `pp`.`date_received` AS `tanggal`,
            `pp`.`receipt_type` AS `tipe`,         'Receive PO' AS `jenis`,
            '' AS `termin`,         `pp`.`shipment_id` AS `no_sumber`,
            `pp`.`item_number` AS `item_number`,    `s`.`description` AS `description`, 
            ABS(IF((`pp`.`quantity_received` > 0),`pp`.`quantity_received`,0)) AS `qty_masuk`, 
            ABS(IF((`pp`.`quantity_received` < 0),`pp`.`quantity_received`,0)) AS `qty_keluar`,
            `pp`.`unit` AS `unit`,  `pp`.`cost` AS `price`,  `pp`.`cost` AS `cost`,
            0 AS `discount`,   0 AS `discount_amount`, `pp`.`total_amount` AS `amount`,
            `pp`.`warehouse_code` AS `gudang`,  'IDR' AS `mata_uang`,  1 AS `rate`,
            `pp`.`supplier_number` AS `supplier`,  `pp`.`comments` AS `comments`,
            `pp`.`mu_qty` AS `mu_qty`,  `pp`.`multi_unit` AS `multi_unit`, `pp`.`mu_price` AS `mu_price`,
            IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_masuk`,
            IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_products` `pp`
        \r JOIN `inventory` `s` ON((`pp`.`item_number` = `s`.`item_number`)))
        \r WHERE (`pp`.`receipt_type`='PO')";
        
        if($this->_item_number<>"") $s .= "\r and pp.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pp.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and pp.date_received>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and pp.date_received<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and pp.receipt_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r group by 'Receive PO',pp.item_number,pp.warehouse_code";
        }
     
         if($this->_output_tmp && $this->_cmd=="sum") {
            //$this->add_tmp_kartu_stock_1($s);
        }  
         

       
         return $s;
         
     
    }
     
    function ksu_keluar_etc() {
        $s = "";
        if($this->_cmd == "sum") {
            $s .= "\r select pp.receipt_type as jenis, pp.item_number, pp.warehouse_code as gudang,
            \r sum(coalesce(pp.quantity_received,0)*-1)  as z_qty,
            \r sum(0) AS `qin`, 
            \r sum(ABS(`pp`.`quantity_received`)) AS `qout`,
            \r sum(coalesce(pp.quantity_received,0))  as qinout,
            \r sum(coalesce(pp.total_amount,0)*-1) as z_amount,
            \r sum(IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `ain`,
            \r sum(IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost) AS `aout`,
            \r sum(coalesce(pp.total_amount,0)) as ainout";
        } else {
            $s .= "\r SELECT `pp`.`date_received` AS `tanggal`,
            `pp`.`receipt_type` AS `tipe`,`pp`.`receipt_type` AS `jenis`,
            '' AS `termin`,`pp`.`shipment_id` AS `no_sumber`,
            `pp`.`item_number` AS `item_number`,`s`.`description` AS `description`,
            0 AS `qty_masuk`,ABS(`pp`.`quantity_received`) AS `qty_keluar`,
            `pp`.`unit` AS `unit`,`pp`.`cost` AS `price`,
            `pp`.`cost` AS `cost`,0 AS `discount`,0 AS `discount_amount`,
            `pp`.`total_amount` AS `amount`,`pp`.`warehouse_code` AS `gudang`,
            'IDR' AS `mata_uang`,1 AS `rate`,`pp`.`supplier_number` AS `supplier`,
            `pp`.`comments` AS `comments`,`pp`.`mu_qty` AS `mu_qty`,
            `pp`.`multi_unit` AS `multi_unit`,`pp`.`mu_price` AS `mu_price`,
            IF((`pp`.`quantity_received` < 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_masuk`,
            IF((`pp`.`quantity_received` > 0), ABS(`pp`.`quantity_received`),0)*pp.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_products` `pp`
        \r JOIN `inventory` `s` ON((`pp`.`item_number` = `s`.`item_number`)))
        \r WHERE (`pp`.`receipt_type` = 'ETC_OUT')";
        
        if($this->_item_number<>"") $s .= "\r and pp.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pp.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and pp.date_received>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and pp.date_received<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and pp.receipt_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r group by pp.receipt_type,pp.item_number,pp.warehouse_code";
        }
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }
    function ksu_beli_kontan() {
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Faktur Beli Kontan' as jenis, pi.item_number,pi.warehouse_code as gudang,
            \r sum(coalesce(pi.quantity,0))  as z_qty,
            \r sum(`pi`.`quantity`) AS `qin`,
            \r sum(0) AS qout,
            \r sum(coalesce(pi.quantity,0))  as qinout,
            \r sum(coalesce(pi.total_price,0)) as z_amount,
            \r sum(`pi`.`quantity`*pi.price) AS `ain`,
            \r sum(0) AS `aout`,
            \r sum(coalesce(pi.total_price,0)) as ainout";
        } else {
            $s .= "\r SELECT `p`.`po_date` AS `tanggal`,'BELI_KONTAN' AS `tipe`,
            'Faktur Beli Kontan' AS `jenis`,
            `p`.`terms` AS `terms`,`pi`.`purchase_order_number` AS `no_sumber`,
            `pi`.`item_number` AS `item_number`,`pi`.`description` AS `description`,
            `pi`.`quantity` AS `qty_masuk`,           0 AS `qty_keluar`,
            `pi`.`unit` AS `unit`,            `pi`.`price` AS `price`,
            `pi`.`price` AS `cost`,            `pi`.`discount` AS `discount`,
            `pi`.`disc_amount_1` AS `disc_amount_1`,   `pi`.`total_price` AS `amount`,
            `pi`.`warehouse_code` AS `gudang`,    `pi`.`currency_code` AS `mata_uang`,
            `pi`.`currency_rate` AS `rate`,  `p`.`supplier_number` AS `supplier_number`,
            p.comments as comments,  `pi`.`mu_qty` AS `mu_qty`,
            `pi`.`multi_unit` AS `multi_unit`,   `pi`.`mu_harga` AS `mu_harga`,
            `pi`.`quantity`*pi.price AS `amount_masuk`,  0 AS `amount_keluar`";
        }
        $s .= "\r FROM (`purchase_order_lineitems` `pi`
        \r JOIN `purchase_order` `p` ON((`p`.`purchase_order_number` = `pi`.`purchase_order_number`)))
        \r JOIN inventory s on s.item_number=pi.item_number
        \r WHERE ((`p`.`potype` = 'I') AND (`p`.`terms` IN ('','CASH','TUNAI','KONTAN'))) ";
     
        if($this->_item_number<>"") $s .= "\r and pi.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pi.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and p.po_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and p.po_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and p.potype='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
     
        if($this->_cmd == "sum") {
            $s .= "\r  group by 'Faktur Beli Kontan',pi.item_number,pi.warehouse_code";
        }
        if($this->_output_tmp && $this->_cmd=="sum") {
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s; 
    }
     
    function ksu_beli_kredit() {
        $s=""; 
        if($this->_cmd == "sum") {
            $s .= "\r select 'Faktur Beli Kredit' as jenis, pi.item_number,pi.warehouse_code as gudang,
            \r sum(coalesce(pi.quantity,0))  as z_qty,
            \r sum(ABS(`pi`.`quantity`)) AS `qin`,
            \r sum(0) AS `qout`, 
            \r sum(coalesce(pi.quantity,0))  as qinout,
            \r sum(coalesce(pi.total_price,0)) as z_amount,
            \r sum(`pi`.`quantity`*pi.price) AS `ain`,
            \r sum(0) AS `aout`,
            \r sum(coalesce(pi.total_price,0)) as ainout";
        } else {
            $s .= "\r SELECT `p`.`po_date` AS `tanggal`,
            'FAKTUR_BELI' AS `tipe`,         'Faktur Beli Kredit' AS `jenis`,
            `p`.`terms` AS `terms`, `pi`.`purchase_order_number` AS `no_sumber`,
            `pi`.`item_number` AS `item_number`, `pi`.`description` AS `description`,
            ABS(`pi`.`quantity`) AS `qty_masuk`, 0 AS `qty_keluar`, 
            `pi`.`unit` AS `unit`,`pi`.`price` AS `price`,`pi`.`price` AS `cost`,
            `pi`.`discount` AS `discount`,`pi`.`disc_amount_1` AS `disc_amount_1`,
            `pi`.`total_price` AS `amount`,`pi`.`warehouse_code` AS `gudang`,
            `pi`.`currency_code` AS `mata_uang`,`pi`.`currency_rate` AS `rate`,
            `p`.`supplier_number` AS `supplier_number`,p.comments as comments,
            `pi`.`mu_qty` AS `mu_qty`,`pi`.`multi_unit` AS `multi_unit`,
            `pi`.`mu_harga` AS `mu_harga`,`pi`.`quantity`*pi.price AS `amount_masuk`,
            0 AS `amount_keluar`";
        }
        $s .= "\r FROM (`purchase_order_lineitems` `pi`
        \r JOIN `purchase_order` `p` ON((`p`.`purchase_order_number` = `pi`.`purchase_order_number`)))
        \r JOIN inventory s on s.item_number=pi.item_number
        \r WHERE (`p`.`potype` = 'I') AND (`p`.`terms` NOT IN ('','CASH','TUNAI','KONTAN'))";
            
        if($this->_item_number<>"") $s .= "\r and pi.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pi.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and p.po_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and p.po_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and p.potype='" . $this->_trans_type . "'";
     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r  GROUP BY 'Faktur Beli Kredit',pi.item_number,pi.warehouse_code";
        }
     
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }

    function ksu_retur_beli(){
        $s = "";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Retur Beli Kredit' as jenis,pi.item_number,pi.warehouse_code as gudang,
            \r sum(abs(coalesce(pi.quantity,0))*-1)  as z_qty,
            \r sum(0) AS `qin`, 
            \r sum(ABS(`pi`.`quantity`)) AS `qout`,
            \r sum(coalesce(pi.quantity,0))  as qinout,
            \r sum(coalesce(pi.total_price,0)) as z_amount,
            \r sum(0) AS `ain`,
            \r sum(abs(`pi`.`quantity`)*pi.price) AS `aout`,
            \r sum(coalesce(pi.total_price,0)) as ainout";
        } else {
            $s .= "\r SELECT `p`.`po_date` AS `tanggal`,p.potype AS `tipe`,
            'Retur Beli Kredit' AS `jenis`,`p`.`terms` AS `terms`,
            `pi`.`purchase_order_number` AS `no_sumber`,`pi`.`item_number` AS `item_number`,
            `pi`.`description` AS `description`,0 AS `qty_masuk`, 
            ABS(`pi`.`quantity`) AS `qty_keluar`,`pi`.`unit` AS `unit`,
            `pi`.`price` AS `price`,`pi`.`price` AS `cost`,`pi`.`discount` AS `discount`,
            `pi`.`disc_amount_1` AS `disc_amount_1`,`pi`.`total_price` AS `amount`,
            `pi`.`warehouse_code` AS `gudang`,`pi`.`currency_code` AS `mata_uang`,
            `pi`.`currency_rate` AS `rate`,`p`.`supplier_number` AS `supplier_number`,
            p.comments as comments,`pi`.`mu_qty` AS `mu_qty`,`pi`.`multi_unit` AS `multi_unit`,
            `pi`.`mu_harga` AS `mu_harga`,0 AS `amount_masuk`,
            abs(`pi`.`quantity`)*pi.price AS `amount_keluar`";
        }
        $s .= "\r FROM (`purchase_order_lineitems` `pi`
        \r JOIN `purchase_order` `p` ON((`p`.`purchase_order_number` = `pi`.`purchase_order_number`)))
        \r JOIN inventory s on s.item_number=pi.item_number
        \r WHERE (`p`.`potype` = 'R')";
     
        if($this->_item_number<>"") $s .= "\r and pi.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pi.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and p.po_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and p.po_date<='" .$this->_date_to. "'";
        if($this->_trans_type<>"") $s .= "\r  and p.potype='" . $this->_trans_type . "'";            
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
            
        if($this->_cmd == "sum") {
                $s .= "\r  group by 'Retur Beli Kredit',pi.item_number,pi.warehouse_code";
        }
        if($this->_output_tmp && $this->_cmd=="sum") {
            //$this->add_tmp_kartu_stock_1($s);
        }
         
         return $s;
     
    }
     
    function ksu_adj() {
        $s = "";     
        if($this->_cmd == "sum") {
            $s .= "\r select 'Adjustment' as jenis,i.item_number,i.from_location as gudang,
            \r sum(coalesce(i.to_qty,0))  as z_qty,
            \r sum(ABS(IF((`i`.`to_qty` > 0),`i`.`to_qty`,0))) AS `qin`, 
            \r sum(ABS(IF((`i`.`to_qty` < 0),`i`.`to_qty`,0))) AS `qout`,
            \r sum(coalesce(i.to_qty,0))  as qinout,
            \r sum(coalesce(i.cost,s.cost)*coalesce(i.to_qty,0)) as z_amount,
            \r sum(IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*coalesce(i.cost,s.cost)) AS `ain`,
            \r sum(IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*coalesce(i.cost,s.cost)) AS `aout`,
            \r sum(coalesce(i.cost,s.cost)*coalesce(i.to_qty,0)) as ainout";
        } else {
            $s .= "\r SELECT `i`.`date_trans` AS `tanggal`,i.trans_type as tipe,
            'Adjustment' AS `jenis`,'' as termin,`i`.`transfer_id` AS `no_sumber`,
            `i`.`item_number` AS `item_number`,`s`.`description` AS `description`, 
            ABS(IF((`i`.`to_qty` > 0),`i`.`to_qty`,0)) AS `qty_masuk`, 
            ABS(IF((`i`.`to_qty` < 0),`i`.`to_qty`,0)) AS `qty_keluar`,
            i.unit as unit,coalesce(i.cost,s.cost) AS `price`,
            coalesce(`i`.`cost`,s.cost) AS `cost`,0 as discount,
            0 as discount_amount,(coalesce(`i`.`cost`,s.cost) * ABS(`i`.`to_qty`)) AS `amount`,
            `i`.`to_location` AS `gudang`,'IDR' as mata_uang,
            1 as rate,s.supplier_number as supplier,`i`.`comments` AS `comments`,
            i.to_qty as mu_qty,i.unit as multi_unit,i.cost as mu_harga,
            IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*coalesce(i.cost,s.cost) AS `amount_masuk`,
            IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*coalesce(i.cost,s.cost) AS `amount_keluar`";
        }
     $s .= "\r FROM (`inventory_moving` `i`
     \r JOIN `inventory` `s` ON((`i`.`item_number` = `s`.`item_number`)))
     \r WHERE (`i`.`from_location` = `i`.`to_location`)";
     
        if($this->_item_number<>"") $s .= "\r and i.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and i.from_location='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.date_trans>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.date_trans<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.trans_type='" . $this->_trans_type . "'";            
            if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
            if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
            if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
            if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
            if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
            if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
            
            if($this->_cmd == "sum") {
                $s .= "\r  GROUP BY 'Adjustment',i.item_number,i.from_location";
            }
     
            if($this->_output_tmp && $this->_cmd=="sum") {
                //$this->add_tmp_kartu_stock_1($s);
            }
         
         return $s;
     
    }
    function ksu_trx_gd_src() {
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Transfer Out' as jenis,i.item_number,i.from_location as gudang,
            \r sum(coalesce(i.to_qty,0)*-1)  as z_qty, sum(0) AS `qin`, 
            \r sum(ABS(`i`.`to_qty`)) AS `qout`,
            \r sum(coalesce(i.to_qty,0)*-1)  as qinout, 
            \r sum(coalesce(i.cost,0)*coalesce(i.to_qty,0)*-1) as z_amount,
            \r sum(IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*i.cost) AS `ain`,
            \r sum(IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*i.cost) AS `aout`,
            \r sum(coalesce(i.cost,0)*coalesce(i.to_qty,0)*-1) as ainout";
        } else {
            $s .= "\r SELECT `i`.`date_trans` AS `tanggal`,i.trans_type as tipe,
            'Transfer Out' AS `jenis`,'' as termin,`i`.`transfer_id` AS `no_sumber`,
            `i`.`item_number` AS `item_number`,`s`.`description` AS `description`,
            0 AS `qty_masuk`, ABS(`i`.`to_qty`) AS `qty_keluar`,
            i.unit as unit,i.cost AS `price`,i.cost AS `cost`,
            0 as discount,0 as discount_amount,i.cost*i.to_qty AS `amount`,
            `i`.`from_location` AS `gudang`,'IDR' as mata_uang,
            1 as rate,s.supplier_number as supplier,`i`.`comments` AS `comments`,
            i.to_qty as mu_qty,i.unit as multi_unit,i.cost as mu_harga,
            IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*i.cost AS `amount_masuk`,
            IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*i.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_moving` `i`
        \r JOIN `inventory` `s` ON((`i`.`item_number` = `s`.`item_number`)))
        \r WHERE (`i`.`from_location` <> `i`.`to_location`) ";
        
        if($this->_item_number<>"") $s .= "\r and i.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and i.from_location='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.date_trans>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.date_trans<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.trans_type='" . $this->_trans_type . "'";        
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "group by 'Transfer Out',i.item_number,i.from_location";
        }
            
        if($this->_output_tmp && $this->_cmd=="sum") {
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }

    function ksu_trx_gd_tgt() {
        $s = "";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Transfer In' as jenis,i.item_number,i.to_location as gudang,
            \r sum(coalesce(i.to_qty,0))  as z_qty,
            \r sum(ABS(`i`.`to_qty`)) AS `qin`,sum(0) AS `qout`,
            \r sum(coalesce(i.to_qty,0))  as qinout,
            \r sum(coalesce(i.cost,0)*coalesce(i.to_qty,0)) as z_amount,
            \r sum(IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*i.cost) AS `ain`,
            \r sum(IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*i.cost) AS `aout`,
            \r sum(coalesce(i.cost,0)*coalesce(i.to_qty,0)) as ainout";
        } else {
            $s .= "\r SELECT `i`.`date_trans` AS `tanggal`,i.trans_type as tipe,
            'Transfer In' AS `jenis`,'' as termin,`i`.`transfer_id` AS `no_sumber`,
            `i`.`item_number` AS `item_number`,`s`.`description` AS `description`, 
            ABS(`i`.`to_qty`) AS `qty_masuk`,0 AS `qty_keluar`,i.unit as unit,
            i.cost AS `price`,i.cost AS `cost`,0 as discount,0 as discount_amount,
            (`i`.`cost` * ABS(`i`.`to_qty`)) AS `amount`,`i`.`to_location` AS `gudang`,
            'IDR' as mata_uang,1 as rate,s.supplier_number as supplier,
            `i`.`comments` AS `comments`,i.mu_qty as mu_qty,i.multi_unit as multi_unit,
            i.cost as mu_harga,
            IF((`i`.`to_qty` > 0), ABS(`i`.`to_qty`),0)*i.cost AS `amount_masuk`,
            IF((`i`.`to_qty` < 0), ABS(`i`.`to_qty`),0)*i.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`inventory_moving` `i`
        \r JOIN `inventory` `s` ON((`i`.`item_number` = `s`.`item_number`)))
        \r WHERE (`i`.`from_location` <> `i`.`to_location`)";
        
        if($this->_item_number<>"") $s .= "\r and i.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and i.to_location='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.date_trans>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.date_trans<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.trans_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
            
        if($this->_cmd == "sum") {
                $s .= "\r  group by 'Transfer In',i.item_number,i.to_location";
        }
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }

    function ksu_surat_jalan_so() {     
        $s = "";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Surat Jalan' as jenis,il.item_number,il.warehouse_code as gudang,
            \r sum(coalesce(il.quantity,0)*-1)  as z_qty,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)) AS `qin`, 
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)) AS `qout`,
            \r sum(coalesce(il.quantity,0)*-1)  as qinout,
            \r sum(coalesce(il.amount,0)*-1) as z_amount,
            \r sum(0) AS `ain`,sum(il.cost*il.quantity) AS `aout`,
            \r sum(coalesce(il.amount,0)*-1) as ainout";
        } else {
            $s .= "\r SELECT `i`.`invoice_date` AS `tanggal`,`i`.`invoice_type` AS `tipe`,
            'Surat Jalan' AS `jenis`,`i`.`payment_terms` AS `termin`,
            `i`.`invoice_number` AS `no_sumber`,`il`.`item_number` AS `item_number`,
            `il`.`description` AS `description`, 
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0) AS `qty_masuk`, 
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0) AS `qty_keluar`,
            `il`.`unit` AS `unit`,`il`.`price` AS `price`,`il`.`cost` AS `cost`,
            `il`.`discount` AS `discount`,`il`.`discount_amount` AS `discount_amount`,
            `il`.`amount` AS `amount`,`il`.`warehouse_code` AS `gudang`,
            `il`.`currency_code` AS `mata_uang`,`il`.`currency_rate` AS `rate`,
            `i`.`sold_to_customer` AS `customer`,`i`.`comments` AS `comments`,
            `il`.`mu_qty` AS `mu_qty`,`il`.`multi_unit` AS `multi_unit`,
            `il`.`mu_harga` AS `mu_harga`,0 AS `amount_masuk`,
            il.cost*il.quantity AS `amount_keluar`";
        }
        $s .= "\r FROM (`invoice` `i`
        \r JOIN `invoice_lineitems` `il` ON((`i`.`invoice_number` = `il`.`invoice_number`)))
        \r JOIN inventory s on s.item_number=il.item_number
        \r WHERE (`i`.`invoice_type` IN ('D'))";
        
        if($this->_item_number<>"") $s .= "\r and il.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and il.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.invoice_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.invoice_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.invoice_type='" . $this->_trans_type . "'";        
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "\r  group by 'Surat Jalan',il.item_number,il.warehouse_code";            
        }
            
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s;
    }
    function ksu_keluar_lain(){
        $s="";
        if($this->_cmd == "sum") {
            $s .= "\r select 'Keluar Lain' as jenis,il.item_number,il.warehouse_code as gudang,
            \r sum(coalesce(il.quantity,0)*-1)  as z_qty,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)) AS `qin`, 
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)) AS `qout`,
            \r sum(coalesce(il.quantity,0)*-1)  as qinout,
            \r sum(coalesce(il.amount,0)*-1) as z_amount,
            \r sum(0) AS `ain`,
            \r sum(il.cost*il.quantity) AS `aout`,
            \r sum(coalesce(il.amount,0)*-1) as ainout";
        } else {
            $s .= "\r SELECT `i`.`invoice_date` AS `tanggal`,`i`.`invoice_type` AS `tipe`,
            'Keluar Lain' AS `jenis`,`i`.`payment_terms` AS `termin`,
            `i`.`invoice_number` AS `no_sumber`,`il`.`item_number` AS `item_number`,
            `il`.`description` AS `description`, 
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0) AS `qty_masuk`, 
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0) AS `qty_keluar`,
            `il`.`unit` AS `unit`,`il`.`price` AS `price`,`il`.`cost` AS `cost`,
            `il`.`discount` AS `discount`,`il`.`discount_amount` AS `discount_amount`,
            `il`.`amount` AS `amount`,`il`.`warehouse_code` AS `gudang`,
            `il`.`currency_code` AS `mata_uang`,`il`.`currency_rate` AS `rate`,
            `i`.`sold_to_customer` AS `customer`,`i`.`comments` AS `comments`,
            `il`.`mu_qty` AS `mu_qty`,`il`.`multi_unit` AS `multi_unit`,
            `il`.`mu_harga` AS `mu_harga`,0 AS `amount_masuk`,
            il.cost*il.quantity AS `amount_keluar`";
        }
        $s .= "\r FROM (`invoice` `i`
        \r JOIN `invoice_lineitems` `il` ON((`i`.`invoice_number` = `il`.`invoice_number`)))
        \r JOIN inventory s on s.item_number=il.item_number
        \r WHERE (`i`.`invoice_type` IN ('L'))";
     
        if($this->_item_number<>"") $s .= "\r and il.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and il.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.invoice_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.invoice_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.invoice_type='" . $this->_trans_type . "'";        
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r group by 'Keluar Lain',il.item_number,il.warehouse_code";
        }
     
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s; 
    }
    function ksu_retur_jual(){
        $s = "";         
        if($this->_cmd == "sum") {
            $s .= "\r select 'Retur Jual' as jenis,il.item_number,il.warehouse_code as gudang,
            \r sum(coalesce(il.quantity,0))  as z_qty,
            \r sum(ABS(`il`.`quantity`)) AS `qin`,
            \r sum(0) AS `qout`,
            \r sum(coalesce(il.quantity,0))  as qinout,
            \r sum(coalesce(il.amount,0)) as z_amount,
            \r sum(abs(il.quantity)*il.cost) AS `ain`,
            \r sum(0) AS `aout`,
            \r sum(coalesce(il.amount,0)) as ainout";
        } else {
            $s .= "\r SELECT `i`.`invoice_date` AS `tanggal`,`i`.`invoice_type` AS `tipe`,
            'Retur Jual' AS `jenis`,`i`.`payment_terms` AS `termin`,
            `i`.`invoice_number` AS `no_sumber`,`il`.`item_number` AS `item_number`,
            `il`.`description` AS `description`, ABS(`il`.`quantity`) AS `qty_masuk`,
            0 AS `qty_keluar`,`il`.`unit` AS `unit`,`il`.`price` AS `price`,
            `il`.`cost` AS `cost`,`il`.`discount` AS `discount`,
            `il`.`discount_amount` AS `discount_amount`,`il`.`amount` AS `amount`,
            `il`.`warehouse_code` AS `gudang`,`il`.`currency_code` AS `mata_uang`,
            `il`.`currency_rate` AS `rate`,`i`.`sold_to_customer` AS `customer`,
            `i`.`comments` AS `comments`,`il`.`mu_qty` AS `mu_qty`,
            `il`.`multi_unit` AS `multi_unit`,`il`.`mu_harga` AS `mu_harga`,
            abs(il.quantity)*il.cost AS `amount_masuk`,0 AS `amount_keluar`";
        }
        $s .= "\r FROM (`invoice` `i`
        \r JOIN `invoice_lineitems` `il` ON((`i`.`invoice_number` = `il`.`invoice_number`)))
        \r JOIN inventory s on s.item_number=il.item_number
        \r WHERE (`i`.`invoice_type` = 'R')";
        
        if($this->_item_number<>"") $s .= "\r and il.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and il.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.invoice_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.invoice_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.invoice_type='" . $this->_trans_type . "'";        
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "\r group by 'Retur Jual',il.item_number,il.warehouse_code";
        }
         
        if($this->_output_tmp && $this->_cmd=="sum") {
             $ss = "insert into tmp_kartu_stock_1(doctype,item_number,gudang,
             qty,qtyin,qtyout,hpp_awal,amount,amountin,amountout,hpp_akhir)" . $s;
             //$this->db->query($ss);
         }
        return $s;
    }

    function ksu_jual_kredit() {
        $s="";         
        if($this->_cmd == "sum") {
            $s .= "\r select 'Faktur Jual Kredit' as jenis,il.item_number,il.warehouse_code as gudang,
            \r sum(coalesce(il.quantity,0)*-1)  as z_qty,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)) AS `qin`,
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)) AS `qout`,
            \r sum(coalesce(il.quantity,0)*-1)  as qinout,
            \r sum(coalesce(il.amount,0)*-1) as z_amount,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)*il.cost) AS `ain`,
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)*il.cost) AS `aout`,
            \r sum(coalesce(il.amount,0)*-1) as ainout";
        } else {
            $s .= "\r SELECT `i`.`invoice_date` AS `tanggal`,`i`.`invoice_type` AS `tipe`,
            'Faktur Jual Kredit' AS `jenis`,`i`.`payment_terms` AS `termin`,
            `i`.`invoice_number` AS `no_sumber`, `il`.`item_number` AS `item_number`,
            `il`.`description` AS `description`,
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0) AS `qty_masuk`, 
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0) AS `qty_keluar`,
            `il`.`unit` AS `unit`,`il`.`price` AS `price`,`il`.`cost` AS `cost`,
            `il`.`discount` AS `discount`,`il`.`discount_amount` AS `discount_amount`,
            il.cost*il.quantity*-1 AS `amount`,`il`.`warehouse_code` AS `gudang`,
            `il`.`currency_code` AS `mata_uang`,`il`.`currency_rate` AS `rate`,
            `i`.`sold_to_customer` AS `customer`,`i`.`comments` AS `comments`,
            `il`.`mu_qty` AS `mu_qty`,`il`.`multi_unit` AS `multi_unit`,
            `il`.`mu_harga` AS `mu_harga`,
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)*il.cost AS `amount_masuk`,
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)*il.cost AS `amount_keluar`";
        }
        $s .= "\r FROM (`invoice` `i`
        \r JOIN `invoice_lineitems` `il` ON((`i`.`invoice_number` = `il`.`invoice_number`)))
        \r JOIN inventory s on s.item_number=il.item_number
        \r WHERE ((`i`.`invoice_type` = 'I') AND (`i`.`payment_terms` NOT IN ('Cash','','Tunai','Kontan')))";
        
        if($this->_item_number<>"") $s .= "\r and il.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and il.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.invoice_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.invoice_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.invoice_type='" . $this->_trans_type . "'";            
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
        
        if($this->_cmd == "sum") {
            $s .= "\r group by 'Faktur Jual Kredit',il.item_number,il.warehouse_code";         
        }
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s; 
    }

    function ksu_jual_kontan(){
        $s = "";     
        if($this->_cmd == "sum") {
            $s .= "select 'Faktur Jual Kontan' as jenis,il.item_number,il.warehouse_code as gudang,
            \r sum(coalesce(il.quantity,0)*-1)  as z_qty,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)) AS `qin`,
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)) AS `qout`,
            \r sum(coalesce(il.quantity,0)*-1)  as qinout,
            \r sum(coalesce(il.cost,s.cost)*-1) as z_amount,
            \r sum(IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)*coalesce(il.cost,s.cost)) AS `ain`,
            \r sum(IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)*coalesce(il.cost,s.cost)) AS `aout`,
            \r sum(coalesce(il.cost,s.cost)*il.quantity*-1) as ainout";
        } else {
            $s = "SELECT `i`.`invoice_date` AS `tanggal`,`i`.`invoice_type` AS `tipe`,
            'Faktur Jual Kontan' AS `jenis`,`i`.`payment_terms` AS `termin`,
            `i`.`invoice_number` AS `no_sumber`,`il`.`item_number` AS `item_number`,
            `il`.`description` AS `description`,
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0) AS `qty_masuk`,
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0) AS `qty_keluar`,
            `il`.`unit` AS `unit`,`il`.`price` AS `price`,
            if(il.cost=0,s.cost,il.cost) AS `cost`,
            `il`.`discount` AS `discount`,`il`.`discount_amount` AS `discount_amount`,
            coalesce(il.cost,s.cost)*il.quantity*-1 AS `amount`,
            `il`.`warehouse_code` AS `gudang`,`il`.`currency_code` AS `mata_uang`,
            `il`.`currency_rate` AS `rate`,`i`.`sold_to_customer` AS `customer`,
            `i`.`comments` AS `comments`,`il`.`mu_qty` AS `mu_qty`,
            `il`.`multi_unit` AS `multi_unit`,`il`.`mu_harga` AS `mu_harga`,
            IF((`il`.`quantity` < 0), ABS(`il`.`quantity`),0)*coalesce(il.cost,s.cost) AS `amount_masuk`,
            IF((`il`.`quantity` > 0), ABS(`il`.`quantity`),0)*coalesce(il.cost,s.cost) AS `amount_keluar`";
        }
     
        $s .= "\r FROM (`invoice` `i` 
        \r JOIN `invoice_lineitems` `il` ON((`i`.`invoice_number` = `il`.`invoice_number`)))
        \r JOIN inventory s on s.item_number=il.item_number
        \r WHERE ((`i`.`invoice_type` = 'I') AND (`i`.`payment_terms` IN ('Cash','','Tunai','Kontan')))";
     
        if($this->_item_number<>"") $s .= "\r and il.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and il.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and i.invoice_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and i.invoice_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and i.invoice_type='" . $this->_trans_type . "'";     
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
     
        if($this->_cmd == "sum") {
            $s .= "\r group by 'Faktur Jual Kontan',il.item_number,il.warehouse_code";
        }
         
        if($this->_output_tmp && $this->_cmd=="sum"){
            //echo $s;exit;
            ///$this->add_tmp_kartu_stock_1($s);
        }
        return $s; 
    }

    function ksu_wip() {
        $s = "";         
        if($this->_cmd == "sum") {
            $s .= "\r select 'Material Use' as jenis,pi.item_number,pi.warehouse_code as gudang,
            \r sum(coalesce(pi.quantity,0)*-1)  as z_qty,
            \r sum(0) AS `qin`, 
            \r sum(ABS(`pi`.`quantity`)) AS `qout`,
            \r sum(coalesce(pi.quantity,0))  as qinout,
            \r sum(coalesce(pi.total_price,0)) as z_amount,
            \r sum(IF((`pi`.`quantity` < 0), ABS(`pi`.`quantity`),0)*pi.price) AS `ain`,
            \r sum(IF((`pi`.`quantity` > 0), ABS(`pi`.`quantity`),0)*pi.price) AS `aout`,
            \r sum(coalesce(pi.total_price,0)) as ainout";
        } else {
            $s .= "\r SELECT `p`.`po_date` AS `tanggal`,'WIP' AS `tipe`,
            'Material Use' AS `jenis`,`p`.`terms` AS `terms`,`pi`.`purchase_order_number` AS `no_sumber`,
            `pi`.`item_number` AS `item_number`,`pi`.`description` AS `description`,
            0 AS `qty_masuk`, ABS(`pi`.`quantity`) AS `qty_keluar`,`pi`.`unit` AS `unit`,
            `pi`.`price` AS `price`,`pi`.`price` AS `cost`,`pi`.`discount` AS `discount`,
            `pi`.`disc_amount_1` AS `disc_amount_1`,`pi`.`total_price` AS `amount`,
            `pi`.`warehouse_code` AS `gudang`,`pi`.`currency_code` AS `mata_uang`,
            `pi`.`currency_rate` AS `rate`,`p`.`supplier_number` AS `supplier_number`,
            p.comments as comments,`pi`.`mu_qty` AS `mu_qty`,`pi`.`multi_unit` AS `multi_unit`,
            `pi`.`mu_harga` AS `mu_harga`,
            IF((`pi`.`quantity` < 0), ABS(`pi`.`quantity`),0)*pi.price AS `amount_masuk`,
            IF((`pi`.`quantity` > 0), ABS(`pi`.`quantity`),0)*pi.price AS `amount_keluar`";
        }
         
         $s .= "\r FROM (`purchase_order_lineitems` `pi`
         \r JOIN `purchase_order` `p` ON((`p`.`purchase_order_number` = `pi`.`purchase_order_number`)))
         \r JOIN inventory s on s.item_number=pi.item_number
         \r WHERE (`p`.`potype` = 'W')";
     
     if($this->_item_number<>"") $s .= "\r and pi.item_number='" . $this->_item_number . "' ";
     if($this->_gudang<>"") $s .= "\r and pi.warehouse_code='" . $this->_gudang . "'";
     if($this->_date_from<>"") $s .= "\r  and p.po_date>='" .$this->_date_from . "'";
     if($this->_date_to<>"") $s .= "\r  and p.po_date<='" .$this->_date_to . "'";
     if($this->_trans_type<>"") $s .= "\r  and p.potype='" . $this->_trans_type . "'";         
     if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
     if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
     if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
     if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
     if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
     if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
         
        if($this->_cmd == "sum") {
             $s .= "\r  group by 'Material Use',pi.item_number,pi.warehouse_code";
        }
         
        if($this->_output_tmp && $this->_cmd=="sum") {
            //$this->add_tmp_kartu_stock_1($s);
        }
        return $s; 
    }

    function ksu_fpg(){
        $s = "";         
        if($this->_cmd == "sum") {
            $s = "\r select 'Receive Products' as jenis, pi.item_number,pi.warehouse_code as gudang,
            \r sum(coalesce(pi.quantity,0))  as z_qty,
            \r sum(ABS(`pi`.`quantity`)) AS `qin`, sum(0) AS `qout`,
            \r sum(coalesce(pi.quantity,0))  as qinout,
            \r sum(coalesce(pi.total_price,0)) as z_amount,
            \r sum(IF((`pi`.`quantity` > 0), ABS(`pi`.`quantity`),0)*pi.price) AS `ain`,
            \r sum(IF((`pi`.`quantity` < 0), ABS(`pi`.`quantity`),0)*pi.price) AS `aout`,
            \r sum(coalesce(pi.total_price,0)) as ainout";
        } else {
            $s .= "\r SELECT `p`.`po_date` AS `tanggal`,'FPG' AS `tipe`,'Receive Product' AS `jenis`,
            `p`.`terms` AS `terms`,`pi`.`purchase_order_number` AS `no_sumber`,
            `pi`.`item_number` AS `item_number`,`pi`.`description` AS `description`,
            ABS(`pi`.`quantity`) AS `qty_masuk`,0 AS `qty_keluar`,`pi`.`unit` AS `unit`,
            `pi`.`price` AS `price`,`pi`.`price` AS `cost`,`pi`.`discount` AS `discount`,
            `pi`.`disc_amount_1` AS `disc_amount_1`,`pi`.`total_price` AS `amount`,
            `pi`.`warehouse_code` AS `gudang`,`pi`.`currency_code` AS `mata_uang`,
            `pi`.`currency_rate` AS `rate`,`p`.`supplier_number` AS `supplier_number`,
            p.comments as comments,`pi`.`mu_qty` AS `mu_qty`,
            `pi`.`multi_unit` AS `multi_unit`,`pi`.`mu_harga` AS `mu_harga`,
            IF((`pi`.`quantity` > 0), ABS(`pi`.`quantity`),0)*pi.price AS `amount_masuk`,
            IF((`pi`.`quantity` < 0), ABS(`pi`.`quantity`),0)*pi.price AS `amount_keluar`";
        }
         $s .= "\r FROM (`purchase_order_lineitems` `pi`
         \r JOIN `purchase_order` `p` ON((`p`.`purchase_order_number` = `pi`.`purchase_order_number`)))
         \r JOIN inventory s on s.item_number=pi.item_number
         \r WHERE (`p`.`potype` = 'F')";
     
        if($this->_item_number<>"") $s .= "\r and pi.item_number='" . $this->_item_number . "' ";
        if($this->_gudang<>"") $s .= "\r and pi.warehouse_code='" . $this->_gudang . "'";
        if($this->_date_from<>"") $s .= "\r  and p.po_date>='" .$this->_date_from . "'";
        if($this->_date_to<>"") $s .= "\r  and p.po_date<='" .$this->_date_to . "'";
        if($this->_trans_type<>"") $s .= "\r  and p.potype='" . $this->_trans_type . "'";         
        if($this->_category<>"") $s .= "\r  and s.category='" . $this->_category . "'";
        if($this->_sub_category<>"") $s .= "\r  and s.sub_category='" . $this->_sub_category . "'";
        if($this->_supplier_number<>"") $s .= "\r  and s.supplier_number='" . $this->_supplier_number . "'";
        if($this->_class<>"") $s .= "\r  and s.class='" . $this->_class . "'";
        if($this->_model<>"") $s .= "\r  and s.model='" . $this->_model . "'";
        if($this->_manufacturer<>"") $s .= "\r  and s.manufacturer='" . $this->_manufacturer . "'";
         
        if($this->_cmd == "sum") {
             $s .= "\r  group by 'Receive Products',pi.item_number,pi.warehouse_code";
        }
         
        if($this->_output_tmp && $this->_cmd=="sum"){
            //$this->add_tmp_kartu_stock_1($s);
        }
        
        return $s;
    }     
    function GetQtyStockGdgSql($Item,$Gudang="",$dDateFrom="",$dDateTo=""){
        $s = $this->getSql("sum",$dDateFrom, $dDateTo, $Item, $Gudang);
        return $s;
    }

    function GetQtyStockGdg($Item, $Gudang="",$dDateFrom="",$dDateTo=""){
        $nQty=0; $nQtyIn=0; $nQtyOut=0; $s=""; $i=0;
        $nAmount=0;$nAmtIn=0;$nAmtOut=0;
    
        if($this->_qry_kartustock_union_onprgm){
            $this->_output_tmp=true;
            $s = $this->getSql("sum", $dDateFrom, $dDateTo,$Item, $Gudang);
            $s="select sum(qtyin) as qin,sum(qtyout) as qout,sum(amountin) as ain,
            sum(amountout) as aout from tmp_kartu_stock_1";
            if($q=$this->db->query($s)){
                foreach($q->result() as $r){
                    $nQtyIn +=$r->qin;
                    $nQtyOut += $r->qout;
                    $nQty += $r->qin - $r->qout;
                    $nAmtIn += $r->ain;
                    $nAmtOut += $r->aout;
                    $nAmount +=$r->ain - $r->aout;
                }
            }
        } else {

        
            $s = "select sum(qty_masuk)-sum(qty_keluar) as q,
            sum(amount_masuk-amount_keluar) as a, sum(qty_masuk) as b, 
            sum(qty_keluar) as c, sum(amount_masuk) as d, sum(amount_keluar) as e 
            from qry_kartustock_union 
            where item_number='$Item'";
            if($Gudang <> "" )$s .= " and gudang='$Gudang'";
            if($dDateFrom <> "")$s .= " and tanggal<='" .$dDateFrom . "'";
            if($q=$this->db->query($s)){
                if($r=$q->row()){
                    $nQty=$r->q;
                    $nAmount=$r->a;
                    $nQtyIn=$r->b;
                    $nQtyOut=$r->c;
                    $nAmtIn=$r->d;
                    $nAmtOut=$r->e;

                }
            }
            
        }
        $nnQty = $nQty;             $nnQtyIn = $nQtyIn;
        $nnQtyOut = $nQtyOut;       $nnAmount = $nAmount;
        $nnAmountIn = $nAmtIn;      $nnAmountOut = $nAmtOut;
        
        
        return $nQty;
    
    }

}
