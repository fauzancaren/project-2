<?php
    $set_item['dlgRetFunc'] = "$('#barcode').val(row.item_number);
        $('#item_nama_barang').val(row.description);
        $('#unit').val(row.unit_of_measure);
        $('#item_price').val(row.retail);
        find_barcode();";
    $set_item['dlgBindId'] = "inventory";
    $set_item['dlgCols'] = array(
        array("fieldname" => "item_number", "caption" => "Kode", "width" => "150px"),
        array("fieldname" => "description", "caption" => "Nama Barang", "width" => "200px"),
        array("fieldname" => "category", "caption" => "Category", "width" => "100px"),
        array("fieldname" => "retail", "caption" => "Price", "width" => "100px"),
        array("fieldname" => "quantity_in_stock", "caption" => "Qty", "width" => "80px"),
        array("fieldname" => "unit_of_measure", "caption" => "Unit", "width" => "80px"),
        array("fieldname" => "qty_last", "caption" => "Qty2", "width" => "80px"),
        array("fieldname" => "customer_pricing_code", "caption" => "Unit2", "width" => "80px"),
        array("fieldname" => "supplier_number", "caption" => "Supplier", "width" => "80px")
    );

    echo $this->list_of_values->render(array(
        "dlgBindId" => "NotaOpen",
        "dlgRetFunc" => "edit_nota(row.invoice_number);",
        "dlgCols" => array(
            array("fieldname" => "invoice_number", "caption" => "Nota", "width" => "80px"),
            array("fieldname" => "invoice_date", "caption" => "Tanggal", "width" => "80px"),
            array("fieldname" => "salesman", "caption" => "Salesman", "width" => "80px"),
            array("fieldname" => "sold_to_customer", "caption" => "Cust", "width" => "80px"),
            array("fieldname" => "company", "caption" => "Cust Name", "width" => "80px")
        )
    ));
?>

