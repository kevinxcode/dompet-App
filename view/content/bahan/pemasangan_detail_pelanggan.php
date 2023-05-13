
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
   
  
            <?php
include "config/config.php";
$sql="select * from pengajuan_pemasangan where id_pengajuan='$_GET[id_pengajuan]'";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);
?>
                <div class="row">

                    <div class="col-sm-12">
					
                       
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
              <tbody>
              <tr>
                <td>Nama Pemohon </td>
                <td>: <?php echo $data['nama'];  ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: <?php echo $data['alamat'];  ?></td>
              </tr>
              <tr>
                <td>NO Telpon</td>
                <td>: <a href="tel:<?php echo $data['no_telp'];  ?>"><?php echo $data['no_telp'];  ?></a></td>
              </tr>
              <tr>
                <td>Paket</td>
                <td>: <?php echo $data['paket'];  ?></td>
              </tr>
			  
			  <tr>
                <td>Tgl Pengajuan</td>
                <td>: <?php echo $data['tanggal'];  ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>: <?php echo $data['status_pengajuan'];  ?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
          
        
</section>
<!--Contact ends-->

<a class="btn btn-danger m-t-xs m-b-xs" href="index.php?p=pemasangan_pelanggan">Back</i></i></a>
