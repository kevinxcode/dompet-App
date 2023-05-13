<?php
	session_start();
		if (empty($_SESSION['username']) AND
			empty($_SESSION['password'])){
		 	header('location:login.php');
			
			}
			else{
				if ($_SESSION['status']=='Pegawai'){
					include 'view/head.php';
					include 'view/container.php';
					include 'view/footer.php';
					
				}else
				if ($_SESSION['status']=='Pelanggan'){
					include 'view/head.php';
					include 'view/container_pelanggan.php';
					include 'view/footer.php';
					
				}else
					if ($_SESSION['status']=='Teknisi'){
					include 'view/head.php';
					include 'view/container_teknisi.php';
					include 'view/footer.php';
					
				}else
				if ($_SESSION['status']=='Pimpinan'){
					include 'view/head.php';
					include 'view/container_pimpinan.php';
					include 'view/footer.php';
				}else
				if ($_SESSION['status']=='Calon Pelanggan'){
					include 'view/head.php';
					include 'view/container_calon.php';
					include 'view/footer.php';
				}else
				if ($_SESSION['hak_akses']=='Kepala Puskesmas'){
					include 'page/pages_kepala.php';
				}else
				if ($_SESSION['hak_akses']=='counter'){
					include 'pages/head.php';
					include 'pages/container_counter.php';
					include 'pages/footer.php';
				
				}else { echo "<script>alert('Anda Tidak Memiliki Akses'); window.location ='login.php'</script>"; }
			}

	
?>
