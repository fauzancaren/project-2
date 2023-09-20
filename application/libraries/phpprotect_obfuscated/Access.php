<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Access
 {
 public $V3j3arvkehxc;
 public $V3j3arvkehxc_id='';
 public $V3j3arvkehxcname='';
 public $Vrpw3gbhleuo='';
 public $Vil5zvi5pehv='';
 public $Veze4144khbc='';
 public $Vtkxctwcacjh='';
 public $Vl2n3dspvrht='';
 private $Vmzuiw222crl="";
 private $Vo0kqbskl51x=false; 
 
 function __construct()
 {
	 $this->CI =& get_instance();        
 }

 

 function login($V3j3arvkehxcname, $Vrpw3gbhleuo)
 {

 	 $Vlzrae2wnvja = $this->CI->config->item('auth');
	
	 
	 
	 $this->CI->load->model('user_model');
	
	 $this->users_model =& $this->CI->users_model;
	 $Vc5gvi0wzj31 = $this->users_model->get_login_info($V3j3arvkehxcname);
	 if ($Vc5gvi0wzj31) 
	 {	

		 if ($Vrpw3gbhleuo === $Vc5gvi0wzj31->password)
		 {
			 
			 $this->CI->session->set_userdata('user_id',$Vc5gvi0wzj31->user_id);
			 return TRUE;
		 }
	 }
	 return FALSE;
 }


 
    function is_login ()
    {
		if(!isset($_SESSION['logged_in']))  return false;
		$Vlhi02kz1ecz=$_SESSION["logged_in"];
		
		$this->user_id="";
		$this->user_name="";
		$this->cid="";
		$this->flag1="";
		$this->flag2="";
		$this->flag3="";			 
		
		 if(is_array($Vlhi02kz1ecz)){			 
			 if(isset($Vlhi02kz1ecz['user_id'])){
				 $this->user_id=$Vlhi02kz1ecz['user_id'];
				 $this->username=$Vlhi02kz1ecz['username'];
				 $this->cid=$Vlhi02kz1ecz['cid'];   
				 if(isset($Vlhi02kz1ecz['flag1']))$this->flag1=$Vlhi02kz1ecz['flag1'];         
				 if(isset($Vlhi02kz1ecz['flag2']))$this->flag2=$Vlhi02kz1ecz['flag2'];         
				 if(isset($Vlhi02kz1ecz['flag3']))$this->flag3=$Vlhi02kz1ecz['flag3'];         
			 } 
		 }
	     return ($this->user_id!='' ? TRUE :FALSE);
    }
 
    function logout ()
   {
           $this->CI->session->unset_userdata('logged_in');
		   $this->log_text("LOGOUT","");
   }
   function log_text($Vt0tdbjticii){
	   
   }
    function print_info(){
    	echo "<img src='".base_url()."images/administrator.png'	align='left'>"; 
        echo ' Welcome [<strong>'.$this->username.'</strong>]';
        echo "</br>";
        
        echo '<a href="'.base_url().'index.php/login/logout"
		class="easyui-linkbutton" 
		data-options="iconCls:\'icon-no\',
		plain:false" style=\'text-color:red;\' ">Logout</a>';
        
        echo '&nbsp&nbsp <a href="#" onclick="edit_user();return false;"
        class="easyui-linkbutton" 
        data-options="iconCls:\'icon-edit\',
        plain:false" style=\'text-color:red;\' ">Edit</a>';
        

    }
	function user_id(){
	    $this->is_login();
        return $this->user_id;
	}
	function user_name(){
	    $this->is_login();
        return $this->username; 
    }
	function cid(){
	    $this->is_login();
        return $this->cid; 
    }
	function user_pass(){
	    $this->is_login();
        return $this->password; 
	}
	function is_admin(){
		$Vuhevjpmvt5q= $this->user_with_job('ADM');
		return count($Vuhevjpmvt5q)>0;
	}
	function user_with_job($Vauqzpwf4chf=null)
	{
	    $this->is_login();
		
	
		if(!$Vauqzpwf4chf) return $this->user_id;

		$Vj3vawj3lnms="";
		if( !is_array($Vauqzpwf4chf) ) {
			$Vj3vawj3lnms="select user_id from user_job where user_id='$this->user_id'  and group_id='$Vauqzpwf4chf'";
		} else {
			$Vzqe2zicymnw="";
			for($Vvmcb2huerp4=0;$Vvmcb2huerp4<count($Vauqzpwf4chf);$Vvmcb2huerp4++)
			{
				$Vzqe2zicymnw .= "'".$Vauqzpwf4chf[$Vvmcb2huerp4]."',";
			}
			if(substr($Vzqe2zicymnw,-1)==",")$Vzqe2zicymnw=substr($Vzqe2zicymnw,0,strlen($Vzqe2zicymnw)-1);
			if($Vzqe2zicymnw=="") {
				$Vj3vawj3lnms="select user_id from user_job where group_id='$Vauqzpwf4chf' ";				
			} else {
				$Vj3vawj3lnms="select user_id from user_job where group_id in ($Vzqe2zicymnw) ";				
			}
		}
		
        $Vfrkm5fjjkot=$this->CI->db->query($Vj3vawj3lnms);

		return $Vfrkm5fjjkot->result_array();
	}
	function current_gudang(){
	    $Vcrkisw3ebr1="";
		if($this->_initialized){
			return $this->_current_gudang;
		} else {
			$this->_initialized=true;
			$Vj3vawj3lnms="select * from user_roles where user_id='".$this->user_id."'
				and roles_type=2";
			if($Vzr5gmgksaot=$this->CI->db->query($Vj3vawj3lnms)){
				if($Vs4gne2wo4hh=$Vzr5gmgksaot->row()){
					$Vcrkisw3ebr1= $Vs4gne2wo4hh->roles_item;
				}
			}
		}
		return $Vcrkisw3ebr1;
	}
}
