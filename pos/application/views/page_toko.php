<?php
    echo form_dropdown("shipping_location", $shipping_location_list, $shipping_location, 
        "id='shipping_location' style='width:99%'");
    echo "<h4 style='font-size:small'>" . strtoupper($company_name . "-" . $company_code) . "</h4>";
    echo link_button('Change', 'submit_session()', 'save', 'false','','','','','btn btn-warning ');
?>
