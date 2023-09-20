<?php
echo link_button('New', 'tambah()', 'add', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Save', 'button_save_pressed=true;save_nota()', 'save', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Reprint', 'reprint_nota()', 'print', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Cash', 'pay_cash_nota()', 'sum', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Card', 'pay_card_nota()', 'sum', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Split', 'pay_split_nota()', 'sum', 'false', '', 'button-width', 'button-height button-spacing');
echo link_button('Logout', '', 'man', 'false', base_url('index.php/login/logout'), 'button-width', 'button-height');
?>

<style>
    .button-width {
        width: 250px; /* Set the desired width */
        border-radius: 0; /* Remove the border radius */
    }

    .button-height {
        height: 80px; /* Set the desired height */
        border-radius: 0; /* Remove the border radius */
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .button-spacing {
        margin-right: 2px; /* Adjust the spacing value as per your preference */
    }
    
    /* Center the text inside the buttons */
    button {
        text-align: center;
    }
</style>
