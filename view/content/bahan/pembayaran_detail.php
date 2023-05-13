
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
   
  
            <?php
include "config/config.php";
$sql="select * from pembayaran where id_pembayaran='$_GET[id_pembayaran]'";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);
?>
                <div class="row">

                    <div class="col-sm-12">
					
                       
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
              <tbody>
              <tr>
                <td>Nama  </td>
                <td>: <?php echo $data['nama'];  ?></td>
              </tr>
            
              <tr>
                <td>NO Telpon</td>
                <td>: <a href="tel:<?php echo $data['no_telp'];  ?>"><?php echo $data['no_telp'];  ?></a></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>: <?php echo $data['tanggal'];  ?></td>
              </tr>
			  
			  <tr>
                <td>Jumlah</td>
                <td>: <?php echo $data['jumlah_pembayaran'];  ?></td>
              </tr>
			  <tr>
                <td>Ket</td>
                <td>: <?php echo $data['keterangan'];  ?></td>
              </tr>
              <tr>
                <td>Status</td>
                <td>: <?php echo $data['status'];  ?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
          
        
</section>
<!--Contact ends-->

<div class="pull-right">
<a class="btn btn-danger m-t-xs m-b-xs" href="index.php?p=pembayaran">Back</i></i></a>
<a class="btn btn-warning m-t-xs m-b-xs" href="model/hapus_pembayaran.php?id_pembayaran=<?php echo $data['id_pembayaran']; ?>">Delete</i></a>
                                     
    <input type="button" value="Edit" class="btn btn-rounded btn btn-primary" data-toggle="modal" data-target="#myModal"  />
   
                                     
  </div>
          

<!-- modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							Edit Data
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-12 span-12">
											<!-- Row -->
								<form action="model/update_pembayaran.php" method="POST" >
		<div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>" required="" placeholder="Nama Pelanggan ">
						    <input class="form-control" type="hidden" name="id_pembayaran" value="<?php echo $data['id_pembayaran'];?>" required="" placeholder="Nama Pelanggan ">
                        
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp'];?>" required="" placeholder="No Telepon">
                        
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
						   <input class="form-control" type="text" name="tanggal" id="ctgl" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d")+3, date("Y"));
$awalbulan = date("Y-m-d", $tanggal);
echo $awalbulan;
?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer" /> 
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="jumlah_pembayaran" value="<?php echo $data['jumlah_pembayaran'];?>" required="" placeholder="Jumlah Pembayaran">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                           	<textarea class="textarea"  name="keterangan" value="" placeholder="keterangan" autocomplete="off" style="width: 100%; height: 100px" required ><?php echo $data['keterangan'];?></textarea>
						
                        </div>
                    </div>
					
					
					
					<div class="form-group ">
                        <div class="col-xs-12">
                           	<select class="form-control" name="status">
							<option value="Lunas">Lunas</option>
							<option value="Belum Lunas">Belum Lunas</option>
							
							</select>
                        </div>
                    </div>
					
					
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="subbmit" class="btn btn-success waves-effect waves-light">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
					
					
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
<!-- modal -->


