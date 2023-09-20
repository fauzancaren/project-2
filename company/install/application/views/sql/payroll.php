<?php
 
$table="payroll_link";
$msg="";
$sql="

CREATE TABLE IF NOT EXISTS `payroll_link` (
  `last_check_file` varchar(255) character set utf8 default NULL,
  `last_gl_file` varchar(255) character set utf8 default NULL,
  `last_bank_account` varchar(50) character set utf8 default NULL,
  `last_source` int(11) default NULL,
  `last_selchecks` bit(1) default NULL,
  `last_selgl` bit(1) default NULL,
  `update_status` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_emp_angsuran";
$sql=" 

CREATE TABLE hr_emp_angsuran (
	id int(11) NOT NULL auto_increment,
	loan_number varchar (50) character set utf8 NOT NULL ,
	nip varchar (50) character set utf8 NOT NULL ,
	bulan int(2) NULL,
	tahun int(4) NULL,
	tanggal datetime null,
	angsuran double null,
	angsuran_bungan double null,
	bayar double null,
	bunga double,
	tanggal_bayar datetime null,
	no_bukti_bayar varchar(50) null,
	jenis_bayar int null,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_emp_default_com";
$sql=" 

CREATE TABLE hr_emp_default_com (
	id int(11) NOT NULL auto_increment,
	nip varchar (50) character set utf8 NOT NULL ,
	def_com_code varchar (50) character set utf8 NULL ,
	def_com_value double NULL ,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_emp_level_com";

$sql=" 

CREATE TABLE hr_emp_level_com (
	id int(11) NOT NULL auto_increment,
	level_code varchar (50) character set utf8 NOT NULL ,
	no_urut varchar (50) character set utf8 NULL ,
	formula_string varchar (250) character set utf8 NULL ,
	take_home_pay int NULL ,
	salary_com_code varchar (50) character set utf8 NULL ,
	salary_com_name varchar (50) character set utf8 NULL ,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_loan";

$sql=" 

CREATE TABLE hr_emp_loan (
	loan_number varchar (50) character set utf8 NULL ,
	level_type varchar (50) character set utf8 NOT NULL ,
	date_loan datetime null ,
	loan_amount double NULL ,
	loan_balance double NULL ,
	angsuran double NULL ,
	loan_count int  NULL ,
	loan_last_to int  NULL ,
	loan_last_date datetime NULL ,
	approved_by varchar(50) null,
	pay_method int null,
	nip varchar(50) null,
	id int(11) NOT NULL auto_increment,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_pph";

$sql=" 
CREATE TABLE hr_pph (
	kode varchar (50) character set utf8 NOT NULL ,
	percent_value real NULL ,
	low_value double NULL ,
	high_value double NULL ,
	PRIMARY KEY  (kode)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_pph_form";

$sql=" 

CREATE TABLE hr_pph_form (
	id int(11) NOT NULL auto_increment,
	kelompok varchar (50) character set utf8 NULL ,
	nomor varchar (50) character set utf8 NULL ,
	keterangan varchar (250) character set utf8 NULL ,
	jumlah double NULL ,
	header bit null,
	rumus varchar(250) null,
	template varchar(50) null,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="employee_pph";

$sql=" 

CREATE TABLE employee_pph (
	id int(11) NOT NULL auto_increment,
	nip varchar (50) character set utf8 NULL ,
	nomor varchar (50) character set utf8 NULL ,
	jumlah double NULL ,
	tahun int NULL ,
	bulan int null,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_shift";

$sql=" 

CREATE TABLE hr_shift (
	kode varchar (50) character set utf8 NOT NULL ,
	time_in datetime NULL ,
	time_out datetime NULL ,
	different_day bit NULL ,
	PRIMARY KEY  (kode)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="employee_shift";

$sql=" 

CREATE TABLE employee_shift (
	id int(11) NOT NULL auto_increment,
	nip varchar (50) character set utf8 NULL ,
	kode_shift varchar (50) character set utf8 NULL ,
	tanggal datetime NULL ,
	keterangan int NULL ,
	tcid varchar(50) null,
	PRIMARY KEY  (id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_ptkp";

$sql=" 

CREATE TABLE hr_ptkp (
	kode varchar (50) character set utf8 NOT NULL ,
	keterangan varchar(50) null,
	jumlah double NULL ,
	PRIMARY KEY  (kode)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$sql=" 

INSERT INTO hr_ptkp(kode,keterangan,jumlah)
values('K0','KAWIN ANAK 0',26326000),
('K1','KAWIN ANAK 1',28350000),
('K2','KAWIN ANAK 2',30375000),
('K3','KAWIN ANAK 3',32400000),
('TK','BELUM KAWIN',24300000);";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);


$table="overtime_detail";
$sql="
CREATE TABLE IF NOT EXISTS `overtime_detail` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`tanggal` datetime DEFAULT NULL,
	`nip` varchar(50) DEFAULT NULL,
	`time_in` varchar(50) DEFAULT NULL,
	`time_out` varchar(50) DEFAULT NULL,
	`time_total` varchar(50) DEFAULT NULL,
	`supervisor` varchar(50) DEFAULT NULL,
	`keterangan` varchar(250) DEFAULT NULL,
	`org_id` varchar(255) DEFAULT NULL,
	`jenis` varchar(50) DEFAULT NULL,
	`istirahat` double DEFAULT NULL,
	`ttc_1x` double DEFAULT NULL,
	`ttc_2x` double DEFAULT NULL,
	`ttc_3x` double DEFAULT NULL,
	`ttc_4x` double DEFAULT NULL,
	`time_total_calc` double DEFAULT NULL,
	`meal` tinyint(1) DEFAULT 0,
	`others` tinyint(1) DEFAULT 0,
	`amount` double DEFAULT NULL,
	`tcid` varchar(50) DEFAULT NULL,
	`salary_no` varchar(50) DEFAULT NULL,
	`hari_libur` tinyint(1) DEFAULT 0,
	`work_status` varchar(50) DEFAULT NULL,
	`add_to_slip` tinyint(1) DEFAULT 1,
	`time_total_run` double DEFAULT NULL,
	`periode` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
	PRIMARY KEY (`id`),
	KEY `ix_id` (`id`),
	KEY `ix_nip` (`nip`),
	KEY `ix_tanggal` (`tanggal`)
  ) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
  
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);
$table="hr_paycheck_sal_comp";
$sql="CREATE TABLE IF NOT EXISTS `hr_paycheck_sal_comp` (
	`pay_no` varchar(50) DEFAULT NULL,
	`salary_com_code` varchar(50) DEFAULT NULL,
	`salary_com_name` varchar(150) DEFAULT NULL,
	`org_value` double DEFAULT NULL,
	`calc_value` double DEFAULT NULL,
	`unit` varchar(50) DEFAULT NULL,
	`id` int(9) NOT NULL AUTO_INCREMENT,
	`manual` int(11) DEFAULT NULL,
	PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=879 DEFAULT CHARSET=utf8;";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

$table="hr_paycheck_sal_comp";
$sql="  INSERT INTO `hr_paycheck_sal_comp` (`pay_no`, `salary_com_code`, `salary_com_name`, `org_value`, `calc_value`, `unit`, `id`, `manual`) VALUES
	('SL00034', 'BJBT', NULL, 200000, 0, '', 496, NULL),
	('SL00034', 'BONUS', NULL, 200000, 0, '', 497, NULL),
	('SL00034', 'BPJS', NULL, 0, 0, '', 498, NULL),
	('SL00034', 'G_POKOK', NULL, 4000000, 0, '', 499, NULL),
	('SL00034', 'HARI_ABSEN', NULL, 2, 0, '', 500, NULL),
	('SL00034', 'HARI_HADIR', NULL, 27, 0, '', 501, NULL),
	('SL00034', 'JAMSOSTEK', NULL, 120000, 0, '', 502, NULL),
	('SL00034', 'LOAN', NULL, 50000, 0, '', 503, NULL),
	('SL00034', 'P_ARISAN', NULL, 0, 0, '', 504, NULL),
	('SL00035', 'BJBT', NULL, 175000, 0, '', 517, NULL),
	('SL00035', 'G_POKOK', NULL, 3500000, 0, '', 518, NULL),
	('SL00035', 'HARI_ABSEN', NULL, 0, 0, '', 519, NULL),
	('SL00035', 'HARI_HADIR', NULL, 27, 0, '', 520, NULL),
	('SL00035', 'JAMSOSTEK', NULL, 105000, 0, '', 521, NULL),
	('SL00035', 'POT_ABSEN', NULL, 0, 0, '', 522, NULL),
	('SL00036', 'BJBT', NULL, 200000, 0, '', 523, NULL),
	('SL00036', 'BONUS', NULL, 200000, 0, '', 524, NULL),
	('SL00036', 'BPJS', NULL, 0, 0, '', 525, NULL),
	('SL00036', 'G_POKOK', NULL, 4000000, 0, '', 526, NULL),
	('SL00036', 'HARI_ABSEN', NULL, 0, 0, '', 527, NULL),
	('SL00036', 'HARI_HADIR', NULL, 30, 0, '', 528, NULL),
	('SL00036', 'JAMSOSTEK', NULL, 120000, 0, '', 529, NULL),
	('SL00036', 'LOAN', NULL, 50000, 0, '', 530, NULL),
	('SL00036', 'P_ARISAN', NULL, 0, 0, '', 531, NULL),
	('SL00037', 'BJBT', NULL, 175000, 0, '', 532, NULL),
	('SL00037', 'G_POKOK', NULL, 3500000, 0, '', 533, NULL),
	('SL00037', 'HARI_ABSEN', NULL, 0, 0, '', 534, NULL),
	('SL00037', 'HARI_HADIR', NULL, 0, 0, '', 535, NULL),
	('SL00037', 'JAMSOSTEK', NULL, 105000, 0, '', 536, NULL),
	('SL00037', 'POT_ABSEN', NULL, 0, 0, '', 537, NULL),
	('SL00038', 'BJBT', NULL, 100000, 0, '', 538, NULL),
	('SL00038', 'G_POKOK', NULL, 2000000, 0, '', 539, NULL),
	('SL00038', 'HARI_ABSEN', NULL, 0, 0, '', 540, NULL),
	('SL00038', 'HARI_HADIR', NULL, 0, 0, '', 541, NULL),
	('SL00038', 'JAMSOSTEK', NULL, 60000, 0, '', 542, NULL),
	('SL00038', 'POT_ABSEN', NULL, 0, 0, '', 543, NULL),
	('SL00040', 'BJBT', NULL, 175000, 0, '', 553, NULL),
	('SL00040', 'G_POKOK', NULL, 3500000, 0, '', 554, NULL),
	('SL00040', 'HARI_ABSEN', NULL, 0, 0, '', 555, NULL),
	('SL00040', 'HARI_HADIR', NULL, 0, 0, '', 556, NULL),
	('SL00040', 'JAMSOSTEK', NULL, 105000, 0, '', 557, NULL),
	('SL00040', 'POT_ABSEN', NULL, 0, 0, '', 558, NULL),
	('SL00041', 'BJBT', NULL, 100000, 0, '', 559, NULL),
	('SL00041', 'G_POKOK', NULL, 2000000, 0, '', 560, NULL),
	('SL00041', 'HARI_ABSEN', NULL, 0, 0, '', 561, NULL),
	('SL00041', 'HARI_HADIR', NULL, 0, 0, '', 562, NULL),
	('SL00041', 'JAMSOSTEK', NULL, 60000, 0, '', 563, NULL),
	('SL00041', 'POT_ABSEN', NULL, 0, 0, '', 564, NULL),
	('SL00039', 'BJBT', NULL, 200000, 0, '', 779, NULL),
	('SL00039', 'BONUS', NULL, 200000, 0, '', 780, NULL),
	('SL00039', 'BPJS', NULL, 0, 0, '', 781, NULL),
	('SL00039', 'G_POKOK', NULL, 4000000, 0, '', 782, NULL),
	('SL00039', 'HARI_ABSEN', NULL, 1, 0, '', 783, NULL),
	('SL00039', 'HARI_HADIR', NULL, 9, 0, '', 784, NULL),
	('SL00039', 'JAMSOSTEK', NULL, 120000, 0, '', 785, NULL),
	('SL00039', 'JAM_LEMBUR', NULL, 15, 0, '', 786, NULL),
	('SL00039', 'LOAN', NULL, 50000, 0, '', 787, NULL),
	('SL00039', 'OT', NULL, 450859.5, 0, '', 788, NULL),
	('SL00039', 'PPH21', NULL, 75375, 0, '', 789, NULL),
	('SL00039', 'P_ARISAN', NULL, 0, 0, '', 790, NULL),
	('SL00042', 'BJBT', NULL, 200000, 0, '', 791, NULL),
	('SL00042', 'BONUS', NULL, 200000, 0, '', 792, NULL),
	('SL00042', 'BPJS', NULL, 0, 0, '', 793, NULL),
	('SL00042', 'G_POKOK', NULL, 4000000, 0, '', 794, NULL),
	('SL00042', 'HARI_ABSEN', NULL, 1, 0, '', 795, NULL),
	('SL00042', 'HARI_HADIR', NULL, 58, 0, '', 796, NULL),
	('SL00042', 'JAMSOSTEK', NULL, 120000, 0, '', 797, NULL),
	('SL00042', 'JAM_LEMBUR', NULL, 7, 0, '', 798, NULL),
	('SL00042', 'LOAN', NULL, 50000, 0, '', 799, NULL),
	('SL00042', 'OT', NULL, 393057, 0, '', 800, NULL),
	('SL00042', 'PPH21', NULL, 0, 0, '', 801, NULL),
	('SL00042', 'P_ARISAN', NULL, 0, 0, '', 802, NULL),
	('SL00043', 'BJBT', NULL, NULL, 0, '', 803, NULL),
	('SL00043', 'BONUS', NULL, NULL, 0, '', 804, NULL),
	('SL00043', 'BPJS', NULL, NULL, 0, '', 805, NULL),
	('SL00043', 'G_POKOK', NULL, 4000000, 0, '', 806, NULL),
	('SL00043', 'HARI_ABSEN', NULL, 0, 0, '', 807, NULL),
	('SL00043', 'HARI_HADIR', NULL, 0, 0, '', 808, NULL),
	('SL00043', 'JAMSOSTEK', NULL, 4000000, 0, '', 809, NULL),
	('SL00043', 'JAM_LEMBUR', NULL, 4000000, 0, '', 810, NULL),
	('SL00043', 'LOAN', NULL, 4000000, 0, '', 811, NULL),
	('SL00043', 'OT', NULL, 4000000, 0, '', 812, NULL),
	('SL00043', 'PPH21', NULL, 4000000, 0, '', 813, NULL),
	('SL00043', 'P_ARISAN', NULL, 4000000, 0, '', 814, NULL),
	('SL00044', 'BJBT', NULL, NULL, 0, '', 815, NULL),
	('SL00044', 'BONUS', NULL, NULL, 0, '', 816, NULL),
	('SL00044', 'BPJS', NULL, NULL, 0, '', 817, NULL),
	('SL00044', 'G_POKOK', NULL, 4000000, 0, '', 818, NULL),
	('SL00044', 'HARI_ABSEN', NULL, 0, 0, '', 819, NULL),
	('SL00044', 'HARI_HADIR', NULL, 0, 0, '', 820, NULL),
	('SL00044', 'JAMSOSTEK', NULL, 4000000, 0, '', 821, NULL),
	('SL00044', 'JAM_LEMBUR', NULL, 4000000, 0, '', 822, NULL),
	('SL00044', 'LOAN', NULL, 4000000, 0, '', 823, NULL),
	('SL00044', 'OT', NULL, 4000000, 0, '', 824, NULL),
	('SL00044', 'PPH21', NULL, 4000000, 0, '', 825, NULL),
	('SL00044', 'P_ARISAN', NULL, 4000000, 0, '', 826, NULL),
	('SL00045', 'BJBT', NULL, NULL, 0, '', 827, NULL),
	('SL00045', 'BONUS', NULL, NULL, 0, '', 828, NULL),
	('SL00045', 'BPJS', NULL, NULL, 0, '', 829, NULL),
	('SL00045', 'G_POKOK', NULL, 4000000, 0, '', 830, NULL),
	('SL00045', 'HARI_ABSEN', NULL, 0, 0, '', 831, NULL),
	('SL00045', 'HARI_HADIR', NULL, 0, 0, '', 832, NULL),
	('SL00045', 'JAMSOSTEK', NULL, 4000000, 0, '', 833, NULL),
	('SL00045', 'JAM_LEMBUR', NULL, 4000000, 0, '', 834, NULL),
	('SL00045', 'LOAN', NULL, 4000000, 0, '', 835, NULL),
	('SL00045', 'OT', NULL, 4000000, 0, '', 836, NULL),
	('SL00045', 'PPH21', NULL, 4000000, 0, '', 837, NULL),
	('SL00045', 'P_ARISAN', NULL, 4000000, 0, '', 838, NULL),
	('SL00046', 'BJBT', NULL, 200000, 0, '', 839, NULL),
	('SL00046', 'BONUS', NULL, 200000, 0, '', 840, NULL),
	('SL00046', 'BPJS', NULL, 0, 0, '', 841, NULL),
	('SL00046', 'G_POKOK', NULL, 4000000, 0, '', 842, NULL),
	('SL00046', 'HARI_ABSEN', NULL, 0, 0, '', 843, NULL),
	('SL00046', 'HARI_HADIR', NULL, 0, 0, '', 844, NULL),
	('SL00046', 'JAMSOSTEK', NULL, 120000, 0, '', 845, NULL),
	('SL00046', 'JAM_LEMBUR', NULL, 0, 0, '', 846, NULL),
	('SL00046', 'LOAN', NULL, 50000, 0, '', 847, NULL),
	('SL00046', 'OT', NULL, 0, 0, '', 848, NULL),
	('SL00046', 'PPH21', NULL, 0, 0, '', 849, NULL),
	('SL00046', 'P_ARISAN', NULL, 4000000, 0, '', 850, NULL),
	('SL00048', 'BJBT', NULL, 175000, 0, '', 851, NULL),
	('SL00048', 'G_POKOK', NULL, 3500000, 0, '', 852, NULL),
	('SL00048', 'HARI_ABSEN', NULL, 1, 0, '', 853, NULL),
	('SL00048', 'HARI_HADIR', NULL, 28, 0, '', 854, NULL),
	('SL00048', 'JAMSOSTEK', NULL, 105000, 0, '', 855, NULL),
	('SL00048', 'POT_ABSEN', NULL, 20000, 0, '', 856, NULL),
	('SL00049', 'BJBT', NULL, 100000, 0, '', 857, NULL),
	('SL00049', 'G_POKOK', NULL, 2000000, 0, '', 858, NULL),
	('SL00049', 'HARI_ABSEN', NULL, 0, 0, '', 859, NULL),
	('SL00049', 'HARI_HADIR', NULL, 29, 0, '', 860, NULL),
	('SL00049', 'JAMSOSTEK', NULL, 60000, 0, '', 861, NULL),
	('SL00049', 'POT_ABSEN', NULL, 0, 0, '', 862, NULL),
	('SL00048', 'JAM_LEMBUR', NULL, 3, 0, '', 863, NULL),
	('SL00048', 'OT', NULL, 343927, 0, '', 864, NULL),
	('SL00048', 'PPH21', NULL, 0, 0, '', 865, NULL),
	('SL00048', 'POT_UMAKAN', NULL, 10000, 0, '', 866, NULL),
	('SL00050', 'BJBT', NULL, 200000, 0, '', 867, NULL),
	('SL00050', 'BONUS', NULL, 200000, 0, '', 868, NULL),
	('SL00050', 'BPJS', NULL, 0, 0, '', 869, NULL),
	('SL00050', 'G_POKOK', NULL, 4000000, 0, '', 870, NULL),
	('SL00050', 'HARI_ABSEN', NULL, 1, 0, '', 871, NULL),
	('SL00050', 'HARI_HADIR', NULL, 58, 0, '', 872, NULL),
	('SL00050', 'JAMSOSTEK', NULL, 120000, 0, '', 873, NULL),
	('SL00050', 'JAM_LEMBUR', NULL, 0, 0, '', 874, NULL),
	('SL00050', 'LOAN', NULL, 50000, 0, '', 875, NULL),
	('SL00050', 'OT', NULL, 0, 0, '', 876, NULL),
	('SL00050', 'PPH21', NULL, 0, 0, '', 877, NULL),
	('SL00050', 'P_ARISAN', NULL, 4000000, 0, '', 878, NULL);
";
if(mysqli_query($link,$sql))$msg .="<br>-$table..OK";else $msg .="<br>-$table..<br>ERROR -" . mysqli_error($link);

?>