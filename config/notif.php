                <!--  Notif -->	
							  		<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['msg'])) {
	if ($_GET['msg'] == 1) {
		echo '<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Pendaftaran berhasil silakan login</strong>.. !
</div>';
} else if ($_GET['msg'] == 11) {
		echo ' <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>username sudah dipakai</strong> ...!
</div>';
	} else if ($_GET['msg'] == 2) {
		echo ' <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data Tersimpan</strong> ...!
</div>';
	} else if ($_GET['msg'] == 3) {
		echo '<div class="alert alert-warning" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data Gagal Tersimpan</strong> Cek Input Data!
</div>';
	} else if ($_GET['msg'] == 4) {
		echo '  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data diupdate</strong>.. !
</div>';
} else if ($_GET['msg'] == 44) {
		echo '  <div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>data stok bulan ini sudah ada</strong>.. !
</div>';
	} else if ($_GET['msg'] == 5) {
		echo '  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Data di Hapus</strong>.. !
</div>';
} else if ($_GET['msg'] == 55) {
		echo '  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>username & pasword Salah !</strong>.. !
</div>';
} else if ($_GET['msg'] == 6) {
		echo '  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Anda telah Keluar</strong>.. !
</div>';
} else if ($_GET['msg'] == 7) {
		echo '  <div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Profile Berhasil Dubah Silakan Login</strong>.. !
</div>';
	} else if ($_GET['msg'] == 8) {
		echo '  Reset Pasword Berhasil';
	}
	
}
?>
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 6000);
</script>
		 <!-- end Notif -->