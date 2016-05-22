<?php
	include"ini.php";
	$col = array("nama_sekolah","email","telepon_sekolah","alamat_sekolah","nama1","kelas1","telepon1","nama2","kelas2","telepon2","nama3","kelas3","telepon3","pesan","tanggal_daftar");
	$tgl = date("d M Y");
	if(isset($_POST[nama1])){
			$pos = array($_POST[$col[0]],$_POST[$col[1]],$_POST[$col[2]],$_POST[$col[3]],$_POST[$col[4]],$_POST[$col[5]],$_POST[$col[6]],$_POST[$col[7]],$_POST[$col[8]],$_POST[$col[9]],$_POST[$col[10]],$_POST[$col[11]],$_POST[$col[12]],$_POST[$col[13]],$tgl);		
			$do = mysql_query("INSERT INTO pendaftaran
	VALUES('','$pos[0]','$pos[1]','$pos[2]','$pos[3]','$pos[4]','$pos[5]','$pos[6]','$pos[7]','$pos[8]','$pos[9]','$pos[10]','$pos[11]','$pos[12]','$pos[13]')");	
		echo "<script type='text/javascript'>alert('Data telah masuk ".$pos[0]."');</script>
				<meta http-equiv='refresh' content='0; url=index.php'>";	
	}; // Close if(Isset)
?>
