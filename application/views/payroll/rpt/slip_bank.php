<?php
$CI =& get_instance();
$CI->load->model('company_model');
$model=$CI->company_model->get_by_id($this->access->cid)->row();
$dept=$this->input->post('text1');
$divisi=$this->input->post('text2');
$period=$this->input->post('text3');
$sql="select pay_no,pay_period,employee_id,e.nama,p.dept,p.divisi, 
p.total_pendapatan,p.total_potongan,bank_name,account
 from hr_paycheck p 
 left join employee e on e.nip=p.employee_id where 1=1 ";
if($dept!="")$sql.=" and p.dept='$dept'";
if($divisi!="")$sql.=" and p.divisi='$divisi'";
if($period!="")$sql.=" and pay_period='$period'";
if(multi_company_single_db()){
    $sql.=" and e.cid='".cid()."'";
}
$data['content']=browse_select( array('sql'=>$sql,
'group_by'=>array('bank_name'),
'fields_sum'=>array('total_pendapatan','total_potongan')));
$data['caption']='DAFTAR SLIP GAJI BY REKENING';
echo load_view('simple_print.php',$data);    

?>
