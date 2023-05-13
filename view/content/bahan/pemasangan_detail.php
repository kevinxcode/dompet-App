
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
<input type="button" value="Aprove" class="btn btn-rounded btn btn-primary" data-toggle="modal" data-target="#myModal2"  />
   
<div class="pull-right">
<a class="btn btn-danger m-t-xs m-b-xs" href="index.php?p=pemasangan">Back</i></i></a>
<a class="btn btn-warning m-t-xs m-b-xs" href="model/hapus_pemasangan.php?id_pengajuan=<?php echo $data['id_pengajuan']; ?>">Delete</i></a>
                                     
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
								<form action="model/update_pemasangan.php" method="POST" >
					<input class="form-control" type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
					<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $data['id_pengajuan'];?>">
                      <input class="form-control" type="hidden" name="tanggal" id="ctgl" value="<?php echo $data['tanggal'];?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer" />  
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>" required="" placeholder="Nama Pemohon">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                           	<textarea class="textarea"  name="alamat" value="" placeholder="alamat" autocomplete="off" style="width: 100%; height: 100px" required ><?php echo $data['alamat'];?></textarea>
						
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="no_telp" value="<?php echo $data['no_telp'];?>" required="" placeholder="Nomor telpon">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="paket" value="<?php echo $data['paket'];?>" required="" placeholder="paket pemasangan">
                        </div>
                    </div>
					
					<div class="form-group ">
                        <div class="col-xs-12">
                           	<select class="form-control" name="status_pengajuan">
							<option value="<?php echo $data['status_pengajuan'];?>"><?php echo $data['status_pengajuan'];?></option>
							
							
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
                            </form>
					
					
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
<!-- modal -->


<!-- modal -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							Persetujuan Pemasangan
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-12 span-12">
								Nama : <?php echo $data['nama'];?> <br>Alamat : <?php echo $data['alamat'];?>
											<!-- Row -->
								<form action="model/update_pemasangan_status.php" method="POST" >
					<input class="form-control" type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
					
					<input class="form-control" type="hidden" name="id_pengajuan" value="<?php echo $data['id_pengajuan'];?>">
					<input class="form-control" type="hidden" name="status_pengajuan" value="Aprove">
                      
					
					
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="subbmit" class="btn btn-success waves-effect waves-light">Setujui</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </form>
					
					
								</div>
								
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
<!-- modal -->
