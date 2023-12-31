<?php
class Periode_model extends CI_Model {

private $primary_key='period';
private $table_name='financial_periods';
private $start_date="";
private $end_date="";

function __construct(){
	parent::__construct();        
        
	//$this->check_this_year();
}
function check_this_year(){
	$year=date("Y");
	for($bln=1;$bln<=12;$bln++){
		$period=$year."-".strzero($bln,2);
		if(!$this->exist($period)){
			$last_date=date("Y-m-t", strtotime($year."-".strzero($bln,2)."-01"));	//lastday
			$this->save(array(
				"period"=>$period,"year_id"=>$year,"sequence"=>$bln,
				"startdate"=>$year."-".strzero($bln,2)."-01 00:00:00",
				"enddate"=>$last_date." 23:59:59",
				"closed"=>0,"month_name"=>date("M",strtotime($last_date))			
			));
		}
	}
} 
function count_all(){
	return $this->db->count_all($this->table_name);
}
function get_by_id($id){
	$this->db->where($this->primary_key,$id);
	$lfound=false;
	$qperiod=$this->db->get($this->table_name);
	if( $qperiod ){
		if(!$rperiod=$qperiod->row()){
			
			if(strpos($id,"-")){
				$tahun=substr($id,0,4);
				$bulan=substr($id,5,2);
				$s="select * from financial_periods where year(startdate)='$tahun' 
				and month(startdate)='$bulan'";
				$qperiod=$this->db->query($s);
	
			}
	
		}

	}
	return $qperiod;
}

function exist($id){
   return $this->db->count_all($this->table_name." where period='".$id."'")>0;
}
function save($data){
	$data['cid']=cid();
	if($data['cid']=='ALL')unset($data['cid']);
	if(isset($data['startdate']))$data['startdate']= date('Y-m-d H:i:s', strtotime($data['startdate']));
	if(isset($data['enddate']))$data['enddate']= date('Y-m-d H:i:s', strtotime($data['enddate']));
    $id=$data[$this->primary_key];
    if($q=$this->get_by_id($id)){
        if($q->num_rows()){
            unset($data[$this->primary_key]);
            $this->db->where($this->primary_key,$id)->update($this->table_name,$data);
        } else {
            $this->db->insert($this->table_name,$data);
            return $this->db->insert_id();            
        }
    }
}
function update($id,$data){
	$id=urldecode($id);
	$data['cid']=cid();
	if($data['cid']=='ALL')unset($data['cid']);
	if(isset($data['startdate']))$data['startdate']= date('Y-m-d H:i:s', strtotime($data['startdate']));
	if(isset($data['enddate']))$data['enddate']= date('Y-m-d H:i:s', strtotime($data['enddate']));
	$ok=false;
	if($q=$this->get_by_id($id)){
		if($r=$q->row()){
			$this->db->where("id",$r->id);
			$ok=$this->db->update($this->table_name,$data);
		
		}
	}
	return $ok;
}
function delete($id){
	$id=urldecode($id);
	$this->db->where($this->primary_key,$id);
	$this->db->delete($this->table_name);
    $yr=substr($id,0,4);
    $mn=substr($id,6,2);
    $s="delete from gl_beginning_balance_archive where year(`year`)='$yr' and month(`year`)='$mn'";    
    $this->db->query($s);
    
}
function dropdown(){
        $query=$this->db->query("select period from ".$this->table_name);
        $ret=array();
        $ret['']='- Select -';
        foreach ($query->result() as $row) {
                $ret[$row->period]=$row->period;
        }		 
        return $ret;
}
function start_date(){
    return $this->start_date;
}
function end_date(){
    return $this->end_date;
}
function current_periode(){
	$this->db->where("closed=0");
	$this->db->order_by("period");
	$q=$this->db->get($this->table_name);
    $ret_period="";
	if($q){
	    if($row=$q->row()){
	        $this->start_date=$row->startdate;
            $this->end_date=$row->enddate;
	        $ret_period=$row->period;
	    }
	}
    return $ret_period;
}
	function closed($date_trans)
	{
		$retval=false;
		$sql="select closed from financial_periods where '".$date_trans."' 
			between startdate and enddate";
	
		$q=$this->db->query($sql);
		if($q){
			if($q->row())$retval=$q->row()->closed;
		}
		return $retval;
	}
	function loadlist() {
		$rows=null;
		$this->db->order_by("period");
		if($q=$this->db->get($this->table_name)){
			foreach($q->result() as $r) {
				$rows[$r->period]=$r->period;
			}
		}
		return $rows;
	}
	function previous($tahun,$bulan){
		$s="select * from financial_periods
		where year(enddate)<='$tahun' and month(enddate)<'$bulan' 
		order by enddate desc";
		$retval="";
		if($q=$this->db->query($s)){
			if($r=$q->row()){
				$retval=$r->enddate;
				if($retval!=""){
					$s="select count(1) as cnt from gl_beginning_balance_archive 
					where `year`='$retval'";
					$cnt=$this->db->query($s)->row()->cnt;
					if($cnt==0){
						$retval="";
					}
	
				}
			}
		}
		return $retval;
	}
	
}
