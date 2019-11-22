<?php  
	include_once('connection.php'); 

	$id =$_POST['id'];
	$nama=$_POST['nama'];
	$jumlah=$_POST['jumlah'];
	$harga=$_POST['harga'];
	$status=$_POST['status'];

	$getdata = mysqli_query($koneksi,"SELECT * FROM barang WHERE id ='$id'"); 
	$rows = mysqli_num_rows($getdata);

	$respose = array();

	if($rows > 0 )
	{
		$query = "UPDATE barang SET nama='$nama',jumlah='$jumlah',harga='$harga' ,status='$status' WHERE id='$id'";
		$exequery = mysqli_query($koneksi,$query);
		if($exequery)
		{
				$respose['code'] =1;
				$respose['message'] = "Update Success";
		}
		else
		{
				$respose['code'] =0;
				$respose['message'] = "Failed Update";
		}
	}
	else
	{
				$respose['code'] =0;
				$respose['message'] = "Failed Update : data tidak ditemukan";
	}
	
	echo json_encode($respose);
?>