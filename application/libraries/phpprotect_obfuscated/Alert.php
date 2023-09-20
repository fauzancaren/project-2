<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alert
{
	private $Vsgkmtbci2wq="";
 function __construct()
 {
     $this->CI =& get_instance();             
	 
  }
  function message_text(){
  	return $this->message;
  }
 function process(){
     $this->po_expired();
     $this->faktur_beli_jatuh_tempo();
 }
 function faktur_beli_jatuh_tempo(){
 	 $this->message.="\r start: faktur_beli_jatuh_tempo()";
	 
     $Vgolww4c3miz=date("Y-m-d");
     $V0urgekm0f1f="select purchase_order_number,po_date,due_date,supplier_number 
     from purchase_order 
     where potype='I' and due_date<'$Vgolww4c3miz' order by due_date desc limit 100";
     $Vzr5gmgksaot=$this->CI->db->query($V0urgekm0f1f);
     foreach($Vzr5gmgksaot->result() as $Vgr5l53dojok){
         $Vbhqmwm1nxc3=my_date_diff($Vgr5l53dojok->due_date,date("Y-m-d"));
         $V4sqjfkaakfm=0;
         $V0urgekm0f1fupplier_name="";
         if($Vzr5gmgksaotsupp=$this->CI->db->select("supplier_name,termin_day")->where("supplier_number",$Vgr5l53dojok->supplier_number)
            ->get("suppliers")){
                if($Vj4dspf4skj3=$Vzr5gmgksaotsupp->row()){
                    $V4sqjfkaakfm=$Vj4dspf4skj3->termin_day;
                    $V0urgekm0f1fupplier_name=$Vj4dspf4skj3->supplier_name;
                }
            }
         $Vrergnozoo1f=$Vbhqmwm1nxc3-$V4sqjfkaakfm;
         if($Vrergnozoo1f<0){
             $Vtmkb4izwdh3="Faktur Jatuh Tempo dalam [$Vrergnozoo1f] hari lagi.: $Vgr5l53dojok->purchase_order_number";
             inbox_send("system", "admin", $Vtmkb4izwdh3, 
             "Faktur: $Vgr5l53dojok->purchase_order_number
             <br>Supplier : $V0urgekm0f1fupplier_name
             <br>Tanggal Faktur: $Vgr5l53dojok->po_date, 
             <br>Tanggal Jatuh Tempo : $Vgr5l53dojok->due_date 
             <br>Seting Alert: $V4sqjfkaakfm sebelum expire 
             <br>Harus dibayar [$Vrergnozoo1f] hari lagi.
             <br>",
             $Vgr5l53dojok->purchase_order_number,'faktur_beli');
             
         }
         
     }
     $this->message.="--stop";
 }
 function po_expired(){
    $V45rfcufonrp=getvar("PoType","O");

 	$this->message.="start: po_expired()";
     $Vgolww4c3miz=date("Y-m-d");
     $V0urgekm0f1f="select purchase_order_number,po_date,po_expire_date,doc_status 
     from purchase_order 
     where potype='$V45rfcufonrp' and po_expire_date<'$Vgolww4c3miz' order by po_expire_date limit 100";
     $Vzr5gmgksaot=$this->CI->db->query($V0urgekm0f1f);
     foreach($Vzr5gmgksaot->result() as $Vgr5l53dojok){
         $Vbhqmwm1nxc3=my_date_diff($Vgr5l53dojok->po_expire_date,date("Y-m-d"));
         $V0urgekm0f1ftatus=$Vgr5l53dojok->doc_status; 
         $Vtmkb4izwdh3="PO Expired: $Vgr5l53dojok->purchase_order_number";
         if($V0urgekm0f1ftatus=="CANCELED")$Vtmkb4izwdh3.=", Status: $V0urgekm0f1ftatus";
         inbox_send("system", "admin", $Vtmkb4izwdh3, 
         "PO Number: $Vgr5l53dojok->purchase_order_number
         <br>Po Date: $Vgr5l53dojok->po_date, <br>Expire: $Vgr5l53dojok->po_expire_date 
         <br>Day: $Vbhqmwm1nxc3
         <br>",
         $Vgr5l53dojok->purchase_order_number,'PO');
         
     }
     $this->message.="--stop";
 }
 
}
     