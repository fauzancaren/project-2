<?php
$msg="";
$table="work_exec";
$sql="
CREATE TABLE IF NOT EXISTS `work_exec` (
  `work_exec_no` varchar(50) NOT NULL DEFAULT '',
  `wo_number` varchar(50) NOT NULL DEFAULT '',
  `start_date` datetime DEFAULT NULL,
  `expected_date` datetime DEFAULT NULL,
  `dept_code` varchar(50) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `person_in_charge` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `wo_customer` varchar(50) NOT NULL,
  PRIMARY KEY (`work_exec_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";

if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="work_exec_detal";
$sql="
CREATE TABLE IF NOT EXISTS `work_exec_detail` (
  `work_exec_no` varchar(50) DEFAULT NULL,
  `item_number` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="work_order";
$sql="
CREATE TABLE IF NOT EXISTS `work_order` (
  `work_order_no` varchar(50) NOT NULL DEFAULT '',
  `start_date` datetime DEFAULT NULL,
  `expected_date` datetime DEFAULT NULL,
  `customer_number` varchar(50) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `wo_status` varchar(50) DEFAULT NULL,
  `special_order` tinyint(1) DEFAULT NULL,
  `sales_order_number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`work_order_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="work_order_detail";
$sql="
CREATE TABLE IF NOT EXISTS `work_order_detail` (
  `work_order_no` varchar(50) DEFAULT NULL,
  `item_number` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `total` double DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qty_exec` double DEFAULT NULL,
  `qty_bal` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);
 
 
$table="manifest"; 
$sql="
CREATE  TABLE  IF NOT EXISTS `manifest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `date_mf` datetime DEFAULT NULL,
  `date_go` datetime DEFAULT NULL,
  `date_to` datetime DEFAULT NULL,
  `ship_via` varchar(50) DEFAULT NULL,
  `plat_no` varchar(50) DEFAULT NULL,
  `person` varchar(50) DEFAULT NULL,
  `nama_kapal` varchar(50) DEFAULT NULL,
  `keterangan` varchar(150) DEFAULT NULL,
  `armada` varchar(50) DEFAULT NULL,
  `agent` varchar(50) DEFAULT NULL,
  `koli` int(11) DEFAULT NULL,
  `biaya_kirim` double DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `komisi_agent` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="manifest_detail";
$sql="
CREATE TABLE IF NOT EXISTS `manifest_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_mf` varchar(50) DEFAULT NULL,
  `book_no` varchar(50) DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `penerima` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `jenis_barang` varchar(100) DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `banyaknya` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `biaya` double DEFAULT NULL,
  `koli_matang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="mat_release_detail";
$sql="
CREATE TABLE IF NOT EXISTS `mat_release_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mat_rel_no` varchar(50) DEFAULT NULL,
  `item_number` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `quantity` double DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `warehouse` varchar(50) DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `line_exec_no` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="mat_release_header";
$sql="
CREATE TABLE IF NOT EXISTS `mat_release_header` (
  `mat_rel_no` varchar(50) NOT NULL DEFAULT '',
  `date_rel` datetime DEFAULT NULL,
  `wo_number` varchar(50) DEFAULT NULL,
  `exec_number` varchar(50) DEFAULT NULL,
  `warehouse` varchar(50) DEFAULT NULL,
  `person` varchar(50) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`mat_rel_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

 
?>