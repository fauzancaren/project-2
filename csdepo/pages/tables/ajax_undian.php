<?php 
include 'conn.php'; 
$req = $_GET;
$post= $_POST;
$cari = isset($req['search_input']) ? $req['search_input'] : null;
if(isset($req['search_by']) && $req['search_by']=='customer' ){
	$result = mysqli_query($koneksi,"select c.customer_number,trim(ifnull(c.company,c.first_name)) company,c.phone, concat(c.street,', ',c.suite,', ',c.city) address from customers c 
	where c.customer_number like '%{$cari}%'");
	if($result){
		$result = mysqli_fetch_assoc($result);
	}
}

if(isset($req['search_by']) && $req['search_by']=='fjk' ){
	$customer_id = isset($req['customer_id']) ? $req['customer_id'] : null;
	$result = mysqli_query($koneksi,"
	select 
		c.customer_number,i.amount, (u.invoice_number = i.invoice_number) is_undian, ifnull(group_concat(u.no_undian),'-') no_undian,(i.amount >= 500000) available_undian
	from invoice i 
		inner join customers c on i.sold_to_customer = c.customer_number
		left join undian u on u.invoice_number = i.invoice_number
	where i.sold_to_customer = '{$customer_id}' and i.invoice_number = '{$cari}'
	");
	if($result){
		$result = mysqli_fetch_assoc($result);
	}
}
if(isset($post['save_at']) && $post['save_at']=='undian' ){
	$customer_id = isset($post['customer_id']) ? $post['customer_id'] : null;
	$invoice_id = isset($post['invoice_id']) ? $post['invoice_id'] : null;
	$result = mysqli_query($koneksi,"
	select 
		c.customer_number,trim(c.company) company,c.phone,
		concat(c.street,', ',c.suite,', ',c.city) address,i.amount, (u.invoice_number = i.invoice_number) is_undian,(i.amount >= 500000) available_undian
	from customers c 
		inner join invoice i on i.invoice_number = '{$invoice_id}' 
		left join undian u on u.invoice_number = i.invoice_number
	where c.customer_number = '{$customer_id}' and i.invoice_number = '{$invoice_id}'
	");
	if($result){
		$result = mysqli_fetch_assoc($result);
		if($result['amount'] >= 500000 && $result['is_undian']==null ){
			$undian = mysqli_query($koneksi,"select (lpad((ifnull(max(no_undian),0)+1),8,0) ) no_urut from undian");
			$undian = mysqli_fetch_assoc($undian);
			//$no_undian = $undian['no_urut'];
			$abis = 500000;
			$sisa = intval(floor($result['amount'] / $abis));
			$tgl_fjk = date('y-m-d');
			$amount = $result['amount'];
			$company = $result['company'];
			$alamat = $result['address'];
			
			$urutan = intval($undian['no_urut']);
			for($i=0; $i<$sisa;$i++){
				$no_undian = sprintf("%08d",($urutan+$i));
				$undian = mysqli_query($koneksi,"insert into undian values (null,'{$invoice_id}','{$customer_id}','{$no_undian}','{$tgl_fjk}','{$amount}','{$company}','{$alamat}')");
				
			}
			
			
			$result = ["status"=>($undian),"message"=>($undian ? "Berhasil" : "Gagal")." menambahkan undian"];
		}else{
			$result = ["status"=>false,"message"=>"TIdak memenuhi persyaratan"];
		}
	}
}
header("Content-type:application/json");
echo json_encode(isset($result) ? $result : null,JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
