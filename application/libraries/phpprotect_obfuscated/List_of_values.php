<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
		
			
			
		
		

class List_of_values
{
		
	private $V3kmh24uapwj=null;
	
	function __construct(){
	   $this->CI =& get_instance();        
       	 $this->CI->load->helper('mylib');	 
		 $this->setting=null;
	}
	function render($V3kmh24uapwj){
	    
         
         if(!is_array($V3kmh24uapwj)){
         	show_error("Parameter not array on list_of_values.render()");
         }
        
		 
        $this->setting=null;
		
        $this->setting=$V3kmh24uapwj;
		
		
		$Vaspw1viic2p=$this->setting['dlgBindId'];
		$Vhgzdffqylmj="";
		if(!isset($this->setting['dlgTitle'])) $this->setting['dlgTitle']="Daftar Pilihan [$Vaspw1viic2p]";
		if(!isset($this->setting['dlgId'])) $this->setting['dlgId']=$Vaspw1viic2p;
		if(!isset($this->setting['dlgWidth'])) $this->setting['dlgWidth']="850";
		if(!isset($this->setting['dlgHeight'])) $this->setting['dlgHeight']="500";
		if(!isset($this->setting['dlgTool'])) $this->setting['dlgTool']="tb".$Vaspw1viic2p;
        if(!isset($this->setting['modules'])) $this->setting['modules']="";
        if(!isset($this->setting['show_check1'])) $this->setting['show_check1']=false;
        if(!isset($this->setting['show_checkbox'])) $this->setting['show_checkbox']=false;
        if(!isset($this->setting['show_date_range'])) $this->setting['show_date_range']=false;
		
		$Vtwfwupwvimi=null;if(isset($this->setting["dlgColsData"])){
			$Vtwfwupwvimi=$this->setting["dlgColsData"];
			for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($Vtwfwupwvimi);$Vvmcb2huerp4++){
				$this->setting["dlgCols"][]=array("fieldname"=>$Vtwfwupwvimi[$Vvmcb2huerp4],
					"caption"=>ucfirst($Vtwfwupwvimi[$Vvmcb2huerp4]),"width"=>"80px");
								
			}
		} 
        $Vbtttem0bnsv="";if(isset($this->setting['filter']))$Vbtttem0bnsv=$this->setting['filter'];		
		
        
        $Vvmcb2huerp4s_sysvar_lookup=false;
        if(isset($this->setting['sysvar_lookup'])){
            $Vvmcb2huerp4s_sysvar_lookup=true;
            if($this->setting['sysvar_lookup']=='')$Vvmcb2huerp4s_sysvar_lookup="";
        }
		if(isset($this->setting['dlgUrlQuery'])){
	        $Vgwnwu4h2ndy=base_url("index.php/".$this->setting['dlgUrlQuery']."/");
			
		} else {
	        $Vgwnwu4h2ndy=base_url("index.php/lookup/query/".$this->setting['dlgId']."/");			
		}
        
		if($Vvmcb2huerp4s_sysvar_lookup){
		    $V21iss2telw1="$('#".$Vaspw1viic2p."').val(row.varvalue);";
		    if(isset($this->setting['dlgRetFunc']))$V21iss2telw1.=$this->setting['dlgRetFunc'];
			$this->setting['dlgRetFunc']=$V21iss2telw1;
			$this->setting['dlgCols']=array( 
						array("fieldname"=>"varvalue","caption"=>"Kode","width"=>"80px"),
						array("fieldname"=>"keterangan","caption"=>"Keterangan","width"=>"200px")
					);			
			$Vzls01jplmeq=$this->setting['sysvar_lookup'];
			if(!isset($this->setting['dlgUrlQuery'])){
			    $Vgwnwu4h2ndy=base_url()."index.php/lookup/query_sysvar_lookup/$Vzls01jplmeq/";
            }
		} 
        if($Vbtttem0bnsv!="")$Vgwnwu4h2ndy.="?filter=$Vbtttem0bnsv";
        
        $this->setting['dlgUrlQuery']=$Vgwnwu4h2ndy;
        $this->setting['dlgId']=$this->setting['dlgBindId'];    
            
            
        
        
        
        
        
        $Veajwkc4tbdi=getvar("themes");
        if($Veajwkc4tbdi=="admin"){
            return load_view('frmLovSb',$this->setting);

        }    else {
            return load_view('frmLov',$this->setting);

        }                                      
	}
    function get_by_name($Vkiq2vzvvowo,$Vauwrzhaij41=""){        
        $Vj3vawj3lnms="";
        $Vml2r0kutysi="";       $Vhmwm2o2iycs="";
        $Vauwrzhaij41=urldecode($Vauwrzhaij41);
        if($this->CI->input->get('from')){
            $Vml2r0kutysi=$this->CI->input->get("from");    
            $Vhmwm2o2iycs=$this->CI->input->get("to");
            $Vhmwm2o2iycs=date("Y-m-d",strtotime($Vhmwm2o2iycs))." 23:59:59";
        }
        if($Vml2r0kutysi=="undefined")$Vml2r0kutysi="";
        if($Vhmwm2o2iycs=="undefined")$Vhmwm2o2iycs="";
        if($this->CI->input->get("sort")){
            $Vudnccd2nypc=$this->CI->input->get("sort");
        } else {
            $Vudnccd2nypc="";
        }
        if($Vudnccd2nypc=="undefined")$Vudnccd2nypc="";

		if($this->CI->input->get("search")){
            $Vauwrzhaij412=$this->CI->input->get("search");
            if($Vauwrzhaij412=="undefined")$Vauwrzhaij412="";
			if($Vauwrzhaij412!="")$Vauwrzhaij41=$Vauwrzhaij412;
        }
        if($Vauwrzhaij41=="undefined")$Vauwrzhaij41="";

		if($this->CI->input->get("tb_search")){
            $Vauwrzhaij412=$this->CI->input->get("tb_search");
            if($Vauwrzhaij412=="undefined")$Vauwrzhaij412="";
			if($Vauwrzhaij412!="")$Vauwrzhaij41=$Vauwrzhaij412;
		}
        if($Vauwrzhaij41=="undefined")$Vauwrzhaij41="";
		
		if($this->CI->input->get("check1")){
			$Vejiianszcq3=$this->CI->input->get("check1");			
		} else {
			$Vejiianszcq3="";
        }
        if($Vejiianszcq3=="undefined")$Vejiianszcq3="";

		if($this->CI->input->get("check1_value")){
			$Vejiianszcq3_value=$this->CI->input->get("check1_value");
		} else {
			$Vejiianszcq3_value="";
        }
        if($Vejiianszcq3_value=="undefined")$Vejiianszcq3_value="";

        
        if(isset($_POST['search'])){
            $Vauwrzhaij412=$_POST['search'];
            if($Vauwrzhaij412['value']!=""){
                $Vauwrzhaij41=$Vauwrzhaij412['value'];
            }

        }

        switch($Vkiq2vzvvowo){
				
            case "NotaOpen":
                $Vj3vawj3lnms="select invoice_number,invoice_date,i.amount,i.sold_to_customer,
                i.salesman,c.company from invoice i 
                left join customers c on c.customer_number=i.sold_to_customer 
                where invoice_type='I' and (paid=0 or paid is null) 
                and (saldo_invoice>0 or saldo_invoice is null)";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and c.cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (i.invoice_number like '$Vauwrzhaij41%' or c.company like '$Vauwrzhaij41%')";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by invoice_date desc";
                }
                break;
			case "group_modules":
				$Vj3vawj3lnms="select module_id,module_name from modules 
                where (parentid='0' or parentid is null)";
				if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (module_name like '%$Vauwrzhaij41%' or module_id='$Vauwrzhaij41') ";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
    				$Vj3vawj3lnms.=" order by module_id";
	            }					
                $V4rbtluhk4g3=1000;
				break;
			case "sales_order_open":
				$Vj3vawj3lnms="select p.sales_order_number,p.sales_date,p.due_date,p.payment_terms,p.salesman,
				 p.sold_to_customer,c.company
				from sales_order  p
				left join customers c on c.customer_number=p.sold_to_customer
				where delivered=false ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and p.cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (p.sales_order_number='$Vauwrzhaij41' 
                    or c.company like '$Vauwrzhaij41%' or p.sold_to_customer like '$Vauwrzhaij41%' )";
                
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by p.sales_date desc";
                }
				break;
            case "purchase_order":
			    $V45rfcufonrp=getvar("PoType","P");

                $Vif4v3ywcisz=$this->CI->input->get("supplier_number");
                $Vj3vawj3lnms="select i.purchase_order_number,i.po_date,i.supplier_number,s.supplier_name,
                i.warehouse_code from purchase_order i left join suppliers s 
                on i.supplier_number=s.supplier_number 
                where i.potype='$V45rfcufonrp' ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and i.cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (i.purchase_order_number='$Vauwrzhaij41' 
                    or s.supplier_name like '$Vauwrzhaij41%')";
                if($Vif4v3ywcisz!="")$Vj3vawj3lnms.=" and i.supplier_number='$Vif4v3ywcisz'";
                if($Vudnccd2nypc=="1") {
					$Vudnccd2nypc="i.supplier_number";
				} else {
					$Vudnccd2nypc="s.supplier_name";
				}
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by i.po_date desc";
                }
                break;
            case "purchase_invoice":
                $Vj3vawj3lnms="select distinct i.purchase_order_number,i.po_date,i.supplier_number,s.supplier_name,
                i.warehouse_code,i.po_ref as nomor_recv,i.terms,ip.purchase_order_number as nomor_po 
                from purchase_order i left 
                join suppliers s on i.supplier_number=s.supplier_number 
				left join inventory_products ip on ip.shipment_id=i.po_ref
                where i.potype='I' ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and i.cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (i.purchase_order_number='$Vauwrzhaij41' 
                    or s.supplier_name like '%$Vauwrzhaij41%' or i.supplier_number like '%$Vauwrzhaij41%' )";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by i.po_date desc";
                }
                break;


            case "stock_opname";
                $Vj3vawj3lnms="select distinct concat('<input type=checkbox name=ck[] 
                value=',ip.transfer_id,'>') as ck,
                ip.transfer_id,
                concat(year(date_trans),'-',month(date_trans),'-',day(date_trans)) as date_trans,
                ip.from_location,ip.status,ip.trans_by,ip.comments
                from inventory_moving ip
                where trans_type='opname'";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and ip.cid='".cid()."'";
				}
                
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by ip.trasnfer_id";        
                }
                break;
                 
            case "zone":
                $Vj3vawj3lnms="select zone_name,code from zone";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by zone_name";
                }
                break;
            case "kecamatan2":
            case "kecamatan":
                $Vj3vawj3lnms="select kec,prov,country from kecamatan";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by kec";
                }
                $V4rbtluhk4g3=1000;
                break;
            case "customers2":
            case "customers":
                $Vj3vawj3lnms="select company,customer_number,street,suite,city,country,salesman,
                	payment_terms,discount_percent,payment_terms,credit_limit,credit_balance 
                from customers where active=true " ;
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (customer_number like '%$Vauwrzhaij41%' 
                	or company like '%$Vauwrzhaij41%')";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by company";
                }
                $V4rbtluhk4g3=1000;
                break;
            case "lookup_customer_type":
                $Vj3vawj3lnms="select type_name,disc_prc from customer_type " ;
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (type_name like '%$Vauwrzhaij41%')";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by type_name";
                }
                $V4rbtluhk4g3=1000;
                break;

            case ("voucher_cash_out"):
                $Vj3vawj3lnms="select voucher,check_date,supplier_number,payee,payment_amount 
                from check_writer where trans_type in ('cash out','trans out','cheque out')";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by voucher";
                }
                break;
                
            case ("recv_po"):
                $Vj3vawj3lnms="select distinct shipment_id,date_received,supplier_number,purchase_order_number 
                    from inventory_products where receipt_type='PO'";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (purchase_order_number like '%$Vauwrzhaij41%' or shipment_id like '%$Vauwrzhaij41%')";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by date_received desc";
                }
                break;
            case ("do_gudang"):
                $Vj3vawj3lnms="select distinct shipment_id,date_received,warehouse_code,supplier_number  
                    from inventory_products where receipt_type='ETC_OUT' and doc_type='1'";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (shipment_id like '%$Vauwrzhaij41%' or supplier_number like '%$Vauwrzhaij41%')";
                if($Vml2r0kutysi!=""){
                    $Vj3vawj3lnms.=" and date_received between '$Vml2r0kutysi' and '$Vhmwm2o2iycs'";                    
                }
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by date_received desc";
                }
                break;
                                    
            case ("req_no"):
                $Vj3vawj3lnms="select purchase_order_number as req_no,po_date,doc_status,update_by,update_date, 
                    due_date,ordered_by,dept_code,comments 
                    from purchase_order where potype='Q' ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and purchase_order_number like '%$Vauwrzhaij41%'";
                $Vj3vawj3lnms.=" and po_date between '$Vml2r0kutysi' and '$Vhmwm2o2iycs' ";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by po_date desc";
                }
                break;
            case ("type_of_invoice"):
                $Vj3vawj3lnms="select varvalue,keterangan from system_variables where varname='lookup.po_type'";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where varvalue like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by varvalue";
                }
                break;
            case ("colour"):
                $Vj3vawj3lnms="select varvalue,keterangan from system_variables where varname='lookup.colour'";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where varvalue like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by varvalue";
                }
                break;
            case ("size"):
                $Vj3vawj3lnms="select varvalue,keterangan from system_variables where varname='lookup.size'";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where varvalue like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by varvalue";
                }
                break;
                
            case ("user_id"):
                $Vj3vawj3lnms="select user_id,username from user where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and username like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by user_id";
                }
                $V4rbtluhk4g3=1000;
                break;
            case ("salestype"):
                $Vj3vawj3lnms="select groupid,komisiprc,remarks from salesman_group";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where groupid like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by groupid";
                }
                    
                break;
            
            case('city'):
                $Vj3vawj3lnms="select city_id,city_name from city";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where city_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by city_id";
                }
                break;
            case('salesman'):
                $Vj3vawj3lnms="select salesman from salesman where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and salesman like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by salesman";
                }
                break;
            case('terms'):
            case('payment_terms'):
                $Vj3vawj3lnms="select type_of_payment,days from type_of_payment where 1=1";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and type_of_payment like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by type_of_payment";
                }
                break;
            case('country'):
                $Vj3vawj3lnms="select country_id,country_name from country";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where country_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by country_id";
                }
                break;
            case('region'):
                $Vj3vawj3lnms="select region_id,region_name from region";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where region_name like '%$Vauwrzhaij41%'";
                 if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by region_id";
                }
                break;
            case('customer_record_type'):
                $Vj3vawj3lnms="select type_id,type_name from customer_type";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where type_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by type_id";
                }
                break;
            case('departments'):
                $Vj3vawj3lnms="select dept_code,dept_name from departments where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where dept_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by dept_code";
                }
                break;
            case('divisions'):
                $Vj3vawj3lnms="select div_code,div_name from divisions where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where div_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by div_code";
                }
                break;
            case('inventory'):
            case('inventory2'):
                $Vj3vawj3lnms="select i.description,i.item_number,
                i.quantity_in_stock,i.unit_of_measure,ip.customer_pricing_code,ip.qty_last,
                i.retail,i.cost,
                i.cost_from_mfg,i.category,i.supplier_number,s.supplier_name,i.kode_lama
                from inventory i 
                left join suppliers s on s.supplier_number=i.supplier_number 
                left join inventory_prices ip on ip.item_number=i.item_number
                where 1=1 
                ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and i.cid='".cid()."'";
				}
                if($Vauwrzhaij41!=""){
                	$Vj3vawj3lnms.=" and (i.item_number like '$Vauwrzhaij41%' 
                		or i.description like '%$Vauwrzhaij41%' 
                		or i.kode_lama='$Vauwrzhaij41' )";
				}
				if($Vejiianszcq3){
					$Vj3vawj3lnms.=" and i.supplier_number='$Vejiianszcq3_value' ";
				}
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by i.description";
                }
                
                $V4rbtluhk4g3=1000;
                break;
			case("outlet");
			case("gudang");	
			case("gudang2");	
			case("warehouse2");	
            case("shipping_locations"):
            case("warehouse"):
                $Vj3vawj3lnms="select g.location_number, g.attention_name, 
                g.company_name,c.company_name as company, 
                g.address_type 
                from shipping_locations g 
                left join preferences c on c.company_code=g.company_name 
				where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and g.cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" where g.location_number like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by g.location_number";
                }
                $V4rbtluhk4g3=1000;
                break;      
            case("inventory_sub_categories"):
                $Vc1dmctghthw=$this->CI->input->get("parent_id");
                $Vj3vawj3lnms="select kode,category from inventory_categories_sub where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!=""){
                    $Vj3vawj3lnms.=" and kode like '%$Vauwrzhaij41%'";
                } 
                if($Vc1dmctghthw){
                    $Vj3vawj3lnms.=" and parent_id='$Vc1dmctghthw'";
                }
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by kode";
                }
                $V4rbtluhk4g3=1000;
                break;                  
            
            case("inventory_categories"):
                $Vj3vawj3lnms="select kode,category from inventory_categories where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and kode like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by kode";
                }
                $V4rbtluhk4g3=1000;
                break;      
            case("suppliers"):
                $Vj3vawj3lnms="select supplier_number,supplier_name,first_name,phone,city,payment_terms 
				from suppliers where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (supplier_name like '%$Vauwrzhaij41%' 
					or supplier_number like '%$Vauwrzhaij41%')";
                if($Vudnccd2nypc=="1") {
					$Vudnccd2nypc="supplier_number";
				} else {
					$Vudnccd2nypc="supplier_name";
				}
				
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by supplier_name";                    
                }
                $V4rbtluhk4g3=1000;
                break;      
            case "person":
            case("employee"):
                $Vj3vawj3lnms="select nama,nip,dept,divisi,nip_id,emptype from employee  where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (nama like '%$Vauwrzhaij41%' or nip='$Vauwrzhaij41' or nip_id='$Vauwrzhaij41')";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by nama";
                }
                $V4rbtluhk4g3=1000;
                break;      
            case("company"):
            case("preferences"):
                $Vj3vawj3lnms="select company_code,company_name from preferences";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" company_name like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by company_code";
                }
                break;
            case("bank_accounts"):
            case("bank_accounts2"):
                $Vj3vawj3lnms="select * from bank_accounts where 1=1 ";
                if($Vauwrzhaij41!="")$Vj3vawj3lnms.=" and (bank_account_number like '%$Vauwrzhaij41%' or bank_name like '%$Vauwrzhaij41%')";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by bank_account_number";
                }
                $V4rbtluhk4g3=1000;
                break;
            case "bank_accounts_cash":
                $Vj3vawj3lnms="select bank_account_number,bank_name,org_id
                 from bank_accounts where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                $Vmvmw5l011th=session_company_code();
                if($Vmvmw5l011th!="")$Vj3vawj3lnms.=" and (org_id='$Vmvmw5l011th' or type_bank='1')";
                if($Vauwrzhaij41!='')$Vj3vawj3lnms.=" and bank_account_number like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by bank_account_number";
                }
                $V4rbtluhk4g3=1000;
                break;
            case "bank_accounts_bank":
                $Vj3vawj3lnms="select bank_account_number,bank_name,org_id
                 from bank_accounts where 1=1 ";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
                $Vmvmw5l011th=session_company_code();
                if($Vmvmw5l011th!="")$Vj3vawj3lnms.=" and (org_id='$Vmvmw5l011th')";
                if($Vauwrzhaij41!='')$Vj3vawj3lnms.=" and bank_account_number like '%$Vauwrzhaij41%'";
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by bank_account_number";
                }
                $V4rbtluhk4g3=1000;
                
                break;
            case "retur_toko":
                $Vj3vawj3lnms="select distinct shipment_id,
                concat(year(date_received),'-',month(date_received),'-',day(date_received)) as date_received,
                ip.warehouse_code,
                ip.supplier_number, ip.doc_type,ip.doc_status
                from inventory_products ip left join inventory i
                on ip.item_number=i.item_number
                where receipt_type='ETC_OUT' and doc_type='1'";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and ip.cid='".cid()."'";
				}

                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by date_received desc ";
                }
                break;
            case "inventory_account":
			case "chart_of_accounts":
            case "cost_account":
            case "inventory_account":    
                $Vj3vawj3lnms="select account,account_description,group_type,id 
                from chart_of_accounts where 1=1";
                if($Vauwrzhaij41!=""){
                	$Vj3vawj3lnms.=" and (account like '$Vauwrzhaij41%' or account_description like '%$Vauwrzhaij41%')";
				}
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
				
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by account";
                }
                $V4rbtluhk4g3=1000;
                break;                                   
            case "invoice":    
                $Vj3vawj3lnms="select i.invoice_number,i.invoice_date,i.payment_terms,
                i.sold_to_customer, 
                c.company,i.salesman,i.amount
                from invoice i left join customers c on c.customer_number=i.sold_to_customer 
                where 1=1 ";
                if($Vauwrzhaij41!=""){
                	$Vj3vawj3lnms.=" and (i.sold_to_customer like '$Vauwrzhaij41%' 
                    or c.company like '$Vauwrzhaij41%' 
                    or i.invoice_number='$Vauwrzhaij41')";
				}
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and i.cid='".cid()."'";
				}
                if($Vudnccd2nypc!=""){
                    $Vj3vawj3lnms.=" order by $Vudnccd2nypc";
                } else {
                    $Vj3vawj3lnms.=" order by i.invoice_number";
                }            
                break;                                
			case "emptype": 
				$Vj3vawj3lnms="select kode,keterangan from hr_emp_level where 1=1";
				if(multi_company_single_db() && cid()!="ALL"){
					$Vj3vawj3lnms.=" and cid='".cid()."'";
				}
				$Vj3vawj3lnms.=" order by kode";
				
				break;  
            default:
               $Vj3vawj3lnms="select * from $Vkiq2vzvvowo";    
            }

        if($this->CI->input->get("page"))$Vz3fdo42aksi=$this->CI->input->get("page");
        if($this->CI->input->get("rows"))$V4rbtluhk4g3=$this->CI->input->get("rows");
        if($this->CI->input->post("page"))$Vz3fdo42aksi=$this->CI->input->post("page");
        if($this->CI->input->post("rows"))$V4rbtluhk4g3=$this->CI->input->post("rows");


        
        if(isset($_POST['length'])){
            $V4rbtluhk4g3=$_POST['length'];
        }
        if(isset($_POST['start'])){
            $Vz3fdo42aksi=$_POST['start']/$V4rbtluhk4g3;
        }


        if(!isset($Vz3fdo42aksi))$Vz3fdo42aksi=0;
        if(!isset($V4rbtluhk4g3))$V4rbtluhk4g3=10;
        if($Vz3fdo42aksi==0)$Vz3fdo42aksi++;
        $Vz3fdo42aksi--;
        $Vz3fdo42aksi=$V4rbtluhk4g3*$Vz3fdo42aksi;
        $Vj3vawj3lnms.=" limit $Vz3fdo42aksi,$V4rbtluhk4g3";

 
        return $Vj3vawj3lnms;           
    }
	function lookup_suppliers(){
        $Vanrpo4znjvb = $this->render(array(
        	"dlgBindId"=>"suppliers","modules"=>"supplier",
        	"dlgRetFunc"=>"			
				$('#sold_to_customer').val(row.customer_number);
                $('#customer_number').val(row.customer_number);
				$('#company').val(row.company);
				$('#customer_info').html(row.company);
                $('#supplier_number').val(row.customer_number);
                $('#payee').val(row.company);
                $('#payment_terms').val(row.payment_terms);
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"company","caption"=>"Company","width"=>"180px"),
                array("fieldname"=>"customer_number","caption"=>"Kode","width"=>"80px"),
                array("fieldname"=>"payment_terms","caption"=>"Termin","width"=>"80px"),
                array("fieldname"=>"region","caption"=>"Region","width"=>"80px"),
                array("fieldname"=>"city","caption"=>"City","width"=>"80px")        	        		
        	)
        ));
		return $Vanrpo4znjvb;
	}

	function lookup_customers(){
        $Vanrpo4znjvb = $this->render(array(
        	"dlgBindId"=>"customers","modules"=>"customer",
        	"dlgRetFunc"=>"			
				$('#sold_to_customer').val(row.customer_number);
                $('#customer_number').val(row.customer_number);
				$('#company').val(row.company);
				$('#customer_info').html(row.company);
                $('#supplier_number').val(row.customer_number);
                $('#payee').val(row.company);
                $('#payment_terms').val(row.payment_terms);
				$('#cust_no').val(row.customer_number);
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"company","caption"=>"Company","width"=>"180px"),
                array("fieldname"=>"customer_number","caption"=>"Kode","width"=>"80px"),
                array("fieldname"=>"payment_terms","caption"=>"Termin","width"=>"80px"),
                array("fieldname"=>"region","caption"=>"Region","width"=>"80px"),
                array("fieldname"=>"city","caption"=>"City","width"=>"80px")        	        		
        	)
        ));
		return $Vanrpo4znjvb;
	}
    function lookup_customer_type(){
        $Vanrpo4znjvb = $this->render(array(
        	"dlgBindId"=>"customer_type","modules"=>"customer_type",
        	"dlgRetFunc"=>"			
				$('#customer_record_type').val(row.type_name);
                $('#line_type').val(row.type_name);
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"type_name","caption"=>"Kelompok","width"=>"180px") 	        		
        	)
        ));
		return $Vanrpo4znjvb;
	}

	function lookup_inventory(){
        $Vanrpo4znjvb = $this->render(array(
        	"dlgBindId"=>"inventory",        	
       		'show_checkbox'=>false,
       		'show_check1'=>true,'check1_title'=>"Supplier",'check1_field'=>'supplier_number',
        	"dlgRetFunc"=>"			
        		console.log(row);
				$('#item_number').val(row.item_number);
				$('#description').val(row.description);
				$('#retail').html(row.retail);
				$('#price').html(row.cost_from_mfg);
				$('#unit').html(row.unit_of_measure);
				$('#cost').val(row.cost);
				if(row.cost==0){
					$('#cost').val(row.cost_from_mfg);
				}
				find();
        	",
        	"dlgCols"=>array(
                array("fieldname"=>"item_number","caption"=>"Kode","width"=>"80px"),
                array("fieldname"=>"description","caption"=>"Nama Barang","width"=>"180px"),
                array("fieldname"=>"quantity_in_stock","caption"=>"Qty","width"=>"80px"),
                array("fieldname"=>"unit_of_measure","caption"=>"Unit","width"=>"80px"),
                array("fieldname"=>"retail","caption"=>"H Jual","width"=>"80px"),
                array("fieldname"=>"qty_last","caption"=>"Qty2","width"=>"80px"),
                array("fieldname"=>"customer_pricing_code","caption"=>"Unit2","width"=>"80px"),
                array("fieldname"=>"cost_from_mfg","caption"=>"H Beli","width"=>"80px"),        	        		
                array("fieldname"=>"cost","caption"=>"H Pokok","width"=>"80px"),        	        		
                array("fieldname"=>"category","caption"=>"Category","width"=>"80px"),
                array("fieldname"=>"supplier_number","caption"=>"Supplier","width"=>"80px"),
                array("fieldname"=>"supplier_name","caption"=>"Supplier Name","width"=>"80px"),
                array("fieldname"=>"kode_lama","caption"=>"Kode Lama","width"=>"80px")
        	)
        ));
		return $Vanrpo4znjvb;
	}
	function lookup_gudang(){
       		$Vxn1tmar30pi="warehouse";
       		$Vkfk4odv4bg4="#warehouse_code";	
       		$Vehojqxochkn['show_checkbox']=false;
			$Vehojqxochkn['dlgBindId']=$Vxn1tmar30pi;
            $Vehojqxochkn['dlgRetFunc']="$('$Vkfk4odv4bg4').val(row.location_number); ";
            $Vehojqxochkn['dlgCols']=array( 
                        array("fieldname"=>"location_number","caption"=>"Kode","width"=>"80px"),
                        array("fieldname"=>"attention_name","caption"=>"Nama Toko","width"=>"180px"),
                        array("fieldname"=>"company_name","caption"=>"Kode Pers","width"=>"50px"),
                        array("fieldname"=>"company","caption"=>"Perusahaan","width"=>"200px")
                    );          
            $Vehojqxochkn['show_date_range']=false;
			return $this->render($Vehojqxochkn);		
	}
	
	function lookup_gl_projects($V5o4modcgv1a=""){
		$Vgssl15xrbgp="$('#project_name').html(row.keterangan);";
		if($V5o4modcgv1a!=""){
			$Vgssl15xrbgp.="		$('#$V5o4modcgv1a').val(row.kode);";
       }
        $Vanrpo4znjvb = $this->render(array(
        	"dlgBindId"=>"gl_projects",
        	"dlgRetFunc"=>$Vgssl15xrbgp,
        	"modules"=>"project/project",
        	"dlgColsData"=>array("kode","keterangan")
        	)
        );
		return $Vanrpo4znjvb;
	}
    function lookup_employee(){
        $Vgssl15xrbgp="$('#nip').val(row.nip);
        $('#nama').html(row.nama);
        $('#dept').html(row.dept);
        $('#divisi').html(row.divisi);";
        $Vanrpo4znjvb = $this->render(array(
            "dlgBindId"=>"employee",
            "dlgRetFunc"=>$Vgssl15xrbgp,
            "modules"=>"payroll/employee",
            "dlgColsData"=>array("nip","nama","dept","divisi")
            )
        );
        return $Vanrpo4znjvb;
    }

    function lookup_bank_accounts(){
        $V12ww10rmecp['dlgBindId']="bank_accounts";
        $V12ww10rmecp['dlgRetFunc']="$('#rekening').val(row.bank_account_number);";
        $V12ww10rmecp['dlgCols']=array( 
                    array("fieldname"=>"bank_account_number","caption"=>"Rekening","width"=>"180px"),
                    array("fieldname"=>"bank_name","caption"=>"Nama Bank","width"=>"200px")
                );          
    
    	return $V12ww10rmecp;
	}
	function render_bank_accounts(){
		return $this->render($this->lookup_bank_accounts());
	}
	function sysvar($Vvwwet2wj5jg){
		return $this->render(array(
			"sysvar_lookup"=>$Vvwwet2wj5jg,
			"dlgBindId"=>$Vvwwet2wj5jg
		));
	}
		    
    		
}
?>