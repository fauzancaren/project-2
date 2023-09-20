<?php
 
$table="purchase_order";

$sql="

CREATE TABLE IF NOT EXISTS `purchase_order` (
  `purchase_order_number` varchar(50) character set utf8 NOT NULL,
  `supplier_number` varchar(50) character set utf8 default NULL,
  `po_date` datetime default NULL,
  `due_date` datetime default NULL,
  `inv_date` datetime default NULL,
  `ship_to_contact` varchar(15) character set utf8 default NULL,
  `bill_to_contact` varchar(15) character set utf8 default NULL,
  `ordered_by` varchar(50) character set utf8 default NULL,
  `terms` varchar(50) character set utf8 default NULL,
  `fob` varchar(50) character set utf8 default NULL,
  `shipped_via` varchar(50) character set utf8 default NULL,
  `ship_date` varchar(50) character set utf8 default NULL,
  `approved_by` varchar(50) character set utf8 default NULL,
  `approved_date` datetime default NULL,
  `freight` double default NULL,
  `tax` double default NULL,
  `tax_2` double default NULL,
  `other` double default NULL,
  `received` tinyint(1) default NULL,
  `paid` tinyint(1) default NULL,
  `ship_customer_display` varchar(50) character set utf8 default NULL,
  `bill_customer_display` varchar(50) character set utf8 default NULL,
  `posted` tinyint(1) default NULL,
  `posting_gl_id` varchar(50) character set utf8 default NULL,
  `discount` double default NULL,
  `potype` varchar(5) character set utf8 default NULL,
  `po_ref` varchar(50) character set utf8 default NULL,
  `uang_muka` double default NULL,
  `saldo_invoice` double default NULL,
  `comments` varchar(250) default NULL,
  `account_id` int(11) default NULL,
  `disc_amount_1` double default NULL,
  `disc_2` double(11,0) default NULL,
  `disc_amount_2` double default NULL,
  `disc_3` double(11,0) default NULL,
  `disc_amount_3` double default NULL,
  `org_id` varchar(50) character set utf8 default NULL,
  `update_status` int(11) default NULL,
  `amount` double default NULL,
  `type_of_invoice` varchar(50) character set utf8 default NULL,
  `update_date` datetime default NULL,
  `tax_amount` double default NULL,
  `warehouse_code` varchar(50) default NULL,
  `currency_code` varchar(50) default NULL,
  `currency_rate` double default NULL,
  `subtotal` double default NULL,
  `branch_code` varchar(50) DEFAULT NULL,
  `division_code` varchar(50) DEFAULT NULL,
  `dept_code` varchar(50) DEFAULT NULL,
  `doc_status` varchar(50) DEFAULT NULL,
  `project_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`purchase_order_number`),
  KEY `x1` (`po_date`),
  KEY `x2` (`supplier_number`),
  KEY `x3` (`potype`),
  KEY `x4` (`warehouse_code`),
  KEY `x5` (`branch_code`),
  KEY `x6` (`project_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table.=", purchase_order_lineitems";

$sql="

CREATE TABLE IF NOT EXISTS `purchase_order_lineitems` (
  `purchase_order_number` varchar(50) character set utf8 default NULL,
  `line_number` int(11) NOT NULL auto_increment,
  `item_number` varchar(50) character set utf8 default NULL,
  `stock_item_number` varchar(50) character set utf8 default NULL,
  `date_expec` datetime default NULL,
  `date_recvd` datetime default NULL,
  `description` varchar(255) character set utf8 default NULL,
  `price` double default NULL,
  `received` tinyint(1) default NULL,
  `comment` double default NULL,
  `serial_number` varchar(255) character set utf8 default NULL,
  `color` varchar(20) character set utf8 default NULL,
  `size` varchar(10) character set utf8 default NULL,
  `qty_recvd` double(11,0) default NULL,
  `quantity` double(11,0) default NULL,
  `discount` double(11,2) default NULL,
  `total_price` double default NULL,
  `unit` varchar(50) character set utf8 default NULL,
  `currency_code` varchar(50) character set utf8 default NULL,
  `currency_rate` double default NULL,
  `multi_unit` varchar(50) character set utf8 default NULL,
  `mu_qty` double(11,0) default NULL,
  `mu_harga` double default NULL,
  `forex_price` double default NULL,
  `base_curr_amount` double default NULL,
  `inventory_account` int(11) default NULL,
  `disc_amount_1` double default NULL,
  `disc_2` double(11,0) default NULL,
  `disc_amount_2` double default NULL,
  `disc_3` double(11,0) default NULL,
  `disc_amount_3` double default NULL,
  `update_status` int(11) default NULL,
  `from_line_number` int(11) default NULL,
  `from_line_type` varchar(50) character set utf8 default NULL,
  `from_line_doc` varchar(50) character set utf8 default NULL,
  `sourceautonumber` varchar(50) character set utf8 default NULL,
  `sourcefile` varchar(255) character set utf8 default NULL,
  `create_date` datetime default NULL,
  `create_by` varchar(50) character set utf8 default NULL,
  `update_date` datetime default NULL,
  `update_by` varchar(50) character set utf8 default NULL,
  `retail` double default NULL,
  `dept` varchar(50) character set utf8 default NULL,
  `dept_sub` varchar(50) character set utf8 default NULL,
  `price_margin` int(11) default NULL,
  `warehouse_code` varchar(50) default NULL,
  `selected` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`line_number`),
  KEY `x1` (`purchase_order_number`),
  KEY `x2` (`warehouse_code`),
  KEY `x3` (`item_number`),
  KEY `x4` (`description`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

?>