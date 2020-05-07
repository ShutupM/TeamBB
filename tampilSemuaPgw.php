<?php  
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tb_profile limit 10";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['idprofile'],
			"name"=>$row['namalengkap']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array("result"=>$result));	
	mysqli_close($con);
?>