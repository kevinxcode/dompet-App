<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   

         <!-- sample modal content -->
                            <!-- /.modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Pengaduan</button>
                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Pengaduan Pelanggan</h4> </div>
                                        <div class="modal-body">
										
                    <form  class="form-horizontal form-material" id="loginform"action="model/input_pengaduan.php" method="POST" >
                     
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="nama" value="<?php echo $_SESSION['nama'];?>" required readonly placeholder="Nama Pemohon">
                        
                        </div>
                    </div>
                    
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="no_telp" value="<?php echo $_SESSION['no_telp'];?>" required="" placeholder="Nomor telpon">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                       <input class="form-control" type="hidden" name="tanggal" id="ctgl" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d")+3, date("Y"));
$awalbulan = date("Y-m-d", $tanggal);
echo $awalbulan;
?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer" /> </div>
                    </div>
					
					<div class="form-group">
                        <div class="col-xs-12">
                           	<textarea class="textarea"  name="isi_pengaduan" value="" placeholder="isi pengaduan" autocomplete="off" style="width: 100%; height: 100px" required ></textarea>
						
                        </div>
                    </div>
					
					
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="subbmit" class="btn btn-success waves-effect waves-light">Kirim Pengaduan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
							</div>
                            <!-- Button trigger modal -->
 <?php include 'config/notif.php';?>
                <!-- /row -->
                <?php 
include "config/config.php"; 
$input=$_POST[tcari];
$sql=mysql_query("select * from pengaduan  order by  id_pengaduan  desc  ");$no=0;
while($data=mysql_fetch_array($sql)){$no++?>
<p>
<p>
<p>
                        <div class="panel panel-success">
                            <div class="panel-heading"><?PHP echo $data['nama'];?> - <small class="text-muted"><a href="tel:<?php echo $data['no_telp'];  ?>"><?php echo $data['no_telp'];  ?></small>
                                <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="glyphicon glyphicon-minus"></i></a> 
								  <?php
$t = $_SESSION['status'];
$a = $data['id_pengaduan'];

if ($t >"Pegawai") {
    echo '';
} else {
    echo '<a href="model/hapus_pengaduan.php?id_pengaduan='.$a.'"><i class="glyphicon glyphicon-trash"></i></a>';
}
?>
								
								
								</div>
								    
                            </div>
                            <div class="panel-wrapper collapse in">
                                <div class="panel-body">
                                    <p><?PHP echo $data['isi_pengaduan'];?> - <?PHP echo $data['tanggal'];?></p> 
									 </div>
                                
                            </div>
                        </div>
                   
					<?php }?>