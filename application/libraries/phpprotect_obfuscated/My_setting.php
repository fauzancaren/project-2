<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class My_setting  extends Sysvar
{
     
    function __construct()
    {
         $this->CI =& get_instance();        
         $this->CI->load->helper('mylib');
         $this->CI->load->library("list_of_values");
     }
    public function create_invoice_from_receive(){
        $Vcrkisw3ebr1=false;
        $V0urgekm0f1f=$this->getvar("create_invoice_from_receive");
        if($V0urgekm0f1f!=""){
            $Vcrkisw3ebr1=$V0urgekm0f1f;
        }
        return $Vcrkisw3ebr1;
    }
    public function sort_by(){
        $Vcrkisw3ebr1=false;
        $V0urgekm0f1f=$this->getvar("sort_by");
        if($V0urgekm0f1f!=""){
            $Vcrkisw3ebr1=$V0urgekm0f1f;
        }
        return $Vcrkisw3ebr1;
    }

 }
     
