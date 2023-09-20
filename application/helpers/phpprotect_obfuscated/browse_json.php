<?php
$Vrdb3kpcuebp =& get_instance();
 $V4f1kyrl3j4t="select customer_number,company,street from customers";
$Vrgmu3jbi2sw=$Vrdb3kpcuebp->db->query($V4f1kyrl3j4t.' limit 1');
$V55vc4mewy5w=0;
foreach($Vrgmu3jbi2sw->result_array() as $Vjs4rkfllnin){
    $Vjs4rkfllnins[$V55vc4mewy5w++]=$Vjs4rkfllnin;
};
echo json_encode($Vjs4rkfllnins);
?>