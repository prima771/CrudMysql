<?php 
	include_once('connection.php'); 

	$id =$_POST['id'];
	$nama=$_POST['nama'];
	$jumlahh=$_POST['jumlah'];
	$harga=$_POST['harga'];
	$status=$_POST['status'];


	$insert = "INSERT INTO barang(id,nama,jumlah,harga,status) VALUES ('$id','$nama','$jumlah','$harga','$status')";

	$exeinsert = mysqli_query($koneksi,$insert);

	$response = array();

	if($exeinsert)
	{
		$response['code'] =1;
		$response['message'] = "Success ! Data di tambahkan";
	}
	else
	{
		$response['code'] =0;
		$response['message'] = "Failed ! Data Gagal di tambahkan";
	}

		echo json_encode($response);

 ?>