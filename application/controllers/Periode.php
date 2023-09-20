<?php if(!defined('BASEPATH')) exit('No direct script access allowd');

class Periode extends CI_Controller {
    private $limit=10;
    private $table_name='financial_periods';
    private $sql="";
    private $file_view='gl/periode';
	private $_error="";
	private $debit=0, $credit=0;

	function __construct()
	{
		parent::__construct();        
		if(!$this->access->is_login())redirect(base_url());
 		$this->load->helper(array('url','form','mylib_helper'));
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('periode_model');
		$this->load->model('syslog_model');
        $this->load->library('crud');
        $this->load->model('company_model');
		$this->sql="select year_id,sequence,period,startdate,enddate,closed,month_name 
        from financial_periods ";

	}
	function set_defaults($record=NULL){
        $data=data_table($this->table_name,$record); 
        $data['mode']='';
        $data['message']='';
        return $data;
	}
	function index()
	{	
		if (!allow_mod2('_30030'))  exit;
        $this->browse();
	}
	function get_posts(){
		$data=data_table_post($this->table_name);
		return $data;
	}
    function save()
    {
         $data=$this->set_defaults();
         $this->_set_rules();
         if ($this->form_validation->run()=== TRUE){
            $data=$this->get_posts();
            $data['closed']=$data['closed']=='No'?'0':'1';
            $id=$this->periode_model->save($data);
            $this->syslog_model->add($id,"periode","edit");
            $success=true;
        } else {
            $success=false;
        }
        echo json_encode(array("success"=>$success,"msg"=>"Success"));
    }
    
	function add()
	{
		if (!allow_mod2('_30031'))  exit;
		 $data=$this->set_defaults();
		 $this->_set_rules();
		$data['mode']='add';
        $this->template->display_form_input($this->file_view,$data,'');
	}
	function update()
	{
	 	 $data=$this->set_defaults();
 		 $this->_set_rules();
 		 $id=$this->input->post('period');
		 if ($this->form_validation->run()=== TRUE){
			$data=$this->get_posts();
            $data['closed']=$data['closed']=='No'?'0':'1';
            unset($data['id']);
			$this->periode_model->update($id,$data);
            $message='Update Success';
			$this->syslog_model->add($id,"periode","edit");

            $this->browse();
		} else {
			$message='Error Update';
     		$this->view($id,$message);		
		}	  	
	}
	
	function view($id,$message=null){           
		if (!allow_mod2('_30030'))  exit;
		$id=urldecode($id);
		 $data['period']=$id;
		 $model=$this->periode_model->get_by_id($id)->row();
		 $data=$this->set_defaults($model);
		 $data['mode']='view';
         $data['message']=$message;
         $this->template->display_form_input($this->file_view,$data,'');
	}
	 // validation rules
	function _set_rules(){	
		 $this->form_validation->set_rules('year_id','Tahun', 'required|trim');
		 $this->form_validation->set_rules('period','Periode Id', 'required|trim');
	}
	
	 // date_validation callback
	function valid_date($str)
	{
	 if(!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/',$str))
	 {
		 $this->form_validation->set_message('valid_date',
		 'date format is not valid. yyyy-mm-dd');
		 return false;
	 } else {
	 	return true;
	 }
	}
    function browse($offset=0,$limit=50,$order_column='sales_order_number',$order_type='asc'){
		$data['controller']='periode';
		$data['fields_caption']=array('Tahun','Urut','Periode','Month','Start','End','Closed');
		$data['fields']=array('year_id','sequence','period','month_name','startdate','enddate','closed');
					
		if(!$data=set_show_columns($data['controller'],$data)) return false;
			
		$data['field_key']='period';
		$data['caption']='DAFTAR PERIODE AKUNTANSI';
        
        $this->load->library('search_criteria');
        $faa[]=criteria("Tahun","sid_tahun");
		$data['search']=date("Y");
        $data['criteria']=$faa;
        
        
		$button2[]=array('title'=>'Closing','controller'=>'periode_closing','icon'=>'save',
			'function'=>
			'<script>
				function periode_closing(){
					var row = $("#dg_periode").datagrid("getSelected");
					if (row){
					    loading();
						xurl=CI_ROOT+CI_CONTROL+"/closing/"+row[FIELD_KEY];
						window.open(xurl,"_self");		
					}
				}
			</script>
			');
		$button2[]=array('title'=>'Unclosing','controller'=>'periode_unclosing','icon'=>'save',
			'function'=>
			'<script>
				function periode_unclosing(){
					var row = $("#dg_periode").datagrid("getSelected");
					if (row){
                        loading();
						xurl=CI_ROOT+CI_CONTROL+"/unclosing/"+row[FIELD_KEY];
						window.open(xurl,"_self");		
					}
				}
			</script>
			');
		$data['other_button']=$button2;
        
        $this->template->display_browse($data);            
    }
    function browse_data($offset=0,$limit=12,$nama=''){
		$sql=$this->sql;
        $sql .= " where 1=1";
		$search=$this->input->get('sid_tahun');		
        if($search==""){
			$search=$this->input->get('tb_search');
		}
		if($search=="")$search=date("Y");

        if($search!=''){
            $sql .= " and year_id='$search'";
        }
        $sql .= " order by year_id,sequence";
        
        if($this->input->get("page"))$offset=$this->input->get("page");
        if($this->input->get("rows"))$limit=$this->input->get("rows");
        
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";
        echo datasource($sql);
    }	      
	function delete($id){
		if (!allow_mod2('_30030'))  exit;
		$id=urldecode($id);
	 	$this->periode_model->delete($id);
		$this->syslog_model->add($id,"periode","delete");
		echo "<p><b>Periode berhasil dihapus, silahkan close tab ini.</b><p>";
	 	//$this->browse();
	}

    function select($search=""){
        
        $search=urldecode($search);
        $sql=$this->sql;

        if($search!=""){
            $sql.=" where (period like '$search%')";
        }
        $sql.=" order by period";

        $offset=0; $limit=10;
        if($this->input->post("page"))$offset=$this->input->post("page");
        if($this->input->post("rows"))$limit=$this->input->post("rows");
        if($offset>0)$offset--;
        $offset=$limit*$offset;
        $sql.=" limit $offset,$limit";        
        
        echo datasource($sql);
    }
    
    

	function unclosing($period){
		$success=false;
		$message="";
	    $yr=substr($period,0,4);
        $mn=substr($period,5,2);
        
        $dperiod['closed']=0;
		$period="$yr-$mn";
        $this->periode_model->update($period,$dperiod);
        $s="delete from gl_beginning_balance_archive  where year(`year`)='$yr' and month(`year`)='$mn'"; 
        $this->db->query($s);
		//cari periode sebelumnya
		$prev_period=$this->periode_model->previous($yr,$mn);
		if($prev_period!=""){
			$this->update_saldo_coa($prev_period);
		} else {
			$this->db->query("update chart_of_accounts set beginning_balance=0");
		}
		$success=true;
		$message="Sukses, silahkan di refresh data.";
		$data['success']=$success;
		$data['message']=$message;
		echo json_encode($data);
	}
	function saldo_akhir_last_month($account_id,$tgl_before){
		if($tgl_before=="")return 0;
		$awal=0;
			$s="select * from gl_beginning_balance_archive where  account_id='$account_id' and `year`='$tgl_before' ";
			if($prd_before_q=$this->db->query($s)){
				if($prd_before_r=$prd_before_q->row()){
					$awal=$prd_before_r->ending_balance;
				}
			}
		return $awal;
	}
	function GetDbCr($account_id,$startdate,$enddate){
		$enddate=date("Y-m-d",strtotime($enddate))." 23:59:50";
		$s="select sum(credit) as z_cr,sum(debit) as z_db
		from gl_transactions g 
		where date>='$startdate' and date<='$enddate' and g.account_id='$account_id' ";		
		if($qTran=$this->db->query($s)->row()){
			$this->debit=$qTran->z_db;
			$this->credit=$qTran->z_cr;
		}
		return $this->debit-$this->credit;
	}
	function ExistSaldo($account_id,$enddate){
		$lExist=false;
		$s="select count(1) as cnt from gl_beginning_balance_archive 
		where account_id='account_id'	and `year`='$enddate'";
		if($qArc0=$this->db->query($s)){
			if($qArc=$qArc0->row()){
				$lExist=$qArc->cnt>0;
			}
		}
		return $lExist;
	}
	function add_arsip($account_id,$company_code,$enddate,$awal,$db,$cr,$akhir){
		$lSuccess=true;
		$lExist=$this->ExistSaldo($account_id,$enddate);                                                
		$data["account_id"]=$account_id;
		$data["company_code"]=$company_code;
		$data["year"]=$enddate;
		$data["beginning_balance"]=$awal;
		$data["debit_base"]=$db;
		$data["credit_base"]=$cr;
		$data["ending_balance"]=$akhir;
				 
		if($lExist){
			if(!$this->db->update("gl_beginning_balance_archive",$data,
				"account_id='$account_id' and year='$enddate'")){
				$this->_error.="<br>ERR: tidak bisa simpan saldo akhir account_id=$account_id";
			}
		} else {
			if(!$this->db->insert("gl_beginning_balance_archive",$data)){
				$this->_error.="<br>ERR: tidak bisa update saldo akhir account_id=$account_id";
			}
		}                        
		return $lSuccess;
	}
	function closing($period){
	    $success=false;
		$message="";
		if (!allow_mod2('_30050'))  exit;
        
		$periode=urldecode($period);
        
		if(!$p=$this->periode_model->get_by_id($period)){
			$this->_error.="<br>Periode not found ! [".$periode."]";
			return false;
		} 
		if(!$prd=$p->row()){
			$this->_error.="<br>Periode not found ! [".$periode."]";
			return false;
		}
        $seq=$prd->sequence;
        $yr=date("Y",strtotime($prd->startdate));
        $enddate=date("Y-m-d",strtotime($prd->enddate));
        
        if($seq>1){
            $seq--;
        } else {
            $seq=1;
            $yr--;
        }
        
		$prd_before="$yr-".strzero($seq,2);
		$tgl_before="";
		if($q=$this->periode_model->get_by_id($prd_before)){
			if($r=$q->row()){
				$tgl_before=$r->enddate;
				$tgl_before=date("Y-m-d",strtotime($tgl_before));
			}
		}
        if($tgl_before==""){
			//echo "Unknown before periode! ";exit;
		}
		$company_code=cid();
        $coa_rl_berjalan=0;
        $coa_rl_ditahan=0;
        if($set=$this->company_model->get_by_id($company_code)->row()){
            $coa_rl_berjalan=$set->earning_account;
            $coa_rl_ditahan=$set->year_earning_account;
        }
		$amt_rl_ditahan=0;
		if($coa_rl_ditahan>0 && $tgl_before!=""){
			$s="select * from gl_beginning_balance_archive g
				where g.account_id='$coa_rl_ditahan'
				and g.year='$tgl_before'";
			if($q=$this->db->query($s)){
				if($r=$q->row()){
					$amt_rl_ditahan=$r->beginning_balance;
				}
			}
		}
		$amt_rl_jalan_before=0;
        $amt_rl_jalan=0;
		if($coa_rl_berjalan>0 && $tgl_before!=""){
			$s="select * from gl_beginning_balance_archive g
				where g.account_id='$coa_rl_berjalan'
				and g.year='$tgl_before'";
			if($q=$this->db->query($s)){
				if($r=$q->row()){
					$amt_rl_jalan_before=$r->ending_balance;
				}
			}
		}

		$s="select * from chart_of_accounts order by account"; 
		$content="";
		$nPendapatan=0;						$nHpp=0;		$nBiaya=0;
		$nPendapatanLain=0;					$nBiayaLain=0;

		if($q=$this->db->query($s)){

			foreach($q->result() as $rowAcc){			    			 
                $awal=$rowAcc->beginning_balance;    $db=0;  $cr=0;  $akhir=0;
				$atype=$rowAcc->account_type;
				$lDb=$rowAcc->db_or_cr==0;
				if($rowAcc->account=="11002"){
					$coa=$rowAcc->account;
				}

				if($awal==0)$awal=$this->saldo_akhir_last_month($rowAcc->id,$tgl_before);
				$db_cr = $this->GetDbCr($rowAcc->id,$prd->startdate,$prd->enddate);
				$db=$this->debit;				$cr=$this->credit;

				switch ($atype) {
					case 1:
						# code...
						if(!$lDb)$db_cr = $db_cr * -1;
						break;
					case 2:
					case 3:
						if($lDb)$db_cr = $db_cr * -1;
						break;
					case 4:
						if($lDb)$db_cr = $db_cr * -1;
						$nPendapatan=$nPendapatan+$db_cr;
						break;
					case 5:
						if(!$lDb)$db_cr = $db_cr * -1;
						$nHpp=$nHpp+$db_cr;
						break;
					case 6:
						if(!$lDb)$db_cr = $db_cr * -1;
						$nBiaya=$nBiaya+$db_cr;
						break;
					case 7:
						if($lDb)$db_cr = $db_cr * -1;
						$nPendapatanLain=$nPendapatanLain+$db_cr;
						break;
					case 8:
						if(!$lDb)$db_cr = $db_cr * -1;
						$nBiayaLain=$nBiayaLain+$db_cr;
						break;
			
					default:
						# code...
						break;
				} 
				//------ update coa bila dia akun neraca tambah end bal
				if($atype <= 3 ){
					$akhir = $awal + $db_cr;
				} else {
					//if (getvar("HideAccountEarningAccount")){
						// m_EndBal -- membingungkan kalo sblmnya tidak pakai
						//   seting hideaccount ini 2012-07-18 di depo
						///if modSetting.IsRL_Accum Then   '// bwt stasioner
						//	m_EndBal = nBegBal + nMutasi '2012-07-18  stasioner benar, depo salah
						//Else    '// bwat depo
						//	m_EndBal = nMutasi
						//	nBegBal = 0
						//End If
					   
					//Else
						$akhir = $db_cr;
						$awal = 0;
					//End If
				}
				if(abs($awal) + Abs($db) + Abs($cr) + Abs($akhir)!=0) {		
					$this->add_arsip($rowAcc->id,$rowAcc->company_code,$enddate,$awal,$db,$cr,$akhir);
				}
				$content.="<br>Account: ".$rowAcc->account." - ".$rowAcc->account_description.", 
				awal=".$awal.", debit=".$db.", credit=".$cr.", akhir=".$akhir;
				
			}
		}
		$nCurRl=0;
		//masukan saldo rugi laba berjalan
        if($coa_rl_berjalan>0){
			$s="select beginning_balance from chart_of_accounts where id='$coa_rl_berjalan'";
			if($q=$this->db->query($s)){
				if($r=$q->row()){
					$nIDRL_Amount=$r->beginning_balance;
					$nCurRl = ($nPendapatan) + ($nPendapatanLain) + ($nHpp) + ($nBiaya) + ($nBiayaLain);
					$nEndBegBalRL=$nIDRL_Amount + $nCurRl;
					$this->add_arsip($coa_rl_berjalan,$company_code,$enddate,$nIDRL_Amount,0,0,$nEndBegBalRL);
				}
			}	
		}
		//masukan saldo rugi laba ditahan
		if($coa_rl_ditahan>0){
			$s="select beginning_balance from chart_of_accounts where id='$coa_rl_ditahan'";
			if($q=$this->db->query($s)){
				if($r=$q->row()){
					$nIDRLY_Amount=$r->beginning_balance;
					$nEndBegBalRLY=$nIDRLY_Amount + $nCurRl;
					//--- tambah di arsip saldo bulan kemarin
					if ($nCurRl < 0 ) {
						$this->add_arsip($coa_rl_ditahan,$company_code,$enddate,$nIDRLY_Amount,0,0,$nEndBegBalRLY);
					} else {
						$this->add_arsip($coa_rl_ditahan,$company_code,$enddate,$nIDRLY_Amount,0,0,$nEndBegBalRLY);
					}					
				}
			}				
		}
        
		$message=$this->_error;
        $dperiod['closed']=1;
        $this->periode_model->update($period,$dperiod);

        $this->update_saldo_coa($enddate);

		$success=true;
		$message="Sukses, silahkan di refresh data.";
		$data['success']=$success;
		$data['message']=$message;
		echo json_encode($data);
	}
	function update_saldo_coa($dperiod){
		$s="update chart_of_accounts 
		inner join gl_beginning_balance_archive  g on g.account_id=chart_of_accounts.id 
		set chart_of_accounts.beginning_balance=g.ending_balance 
		where g.`year`='$dperiod'";
		$this->db->query($s);
	}

	function saldo_awal($periode){
		$periode=urldecode($periode);
		
		if(!$p=$this->periode_model->get_by_id($periode)){
			$this->_error.="<br>Periode not found ! [".$periode."]";
			return false;
		} 
		if(!$prd=$p->row()){
			$this->_error.="<br>Periode not found ! [".$periode."]";
			return false;
		}
		$enddate=Date("Y-m-d",strtotime($prd->enddate));
		$sql="select account,account_description,g.beginning_balance,
	    g.debit_base,g.credit_base,g.ending_balance,g.account_id,g.company_code 
        from gl_beginning_balance_archive g 
		left join chart_of_accounts c on c.id=g.account_id
		where year='$enddate'  
				and (ending_balance<>0)
		group by account,account_description";
        echo datasource($sql);		
	}	
}
