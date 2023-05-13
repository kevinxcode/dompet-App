<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   

         <!-- sample modal content -->
                            <!-- /.modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Pembayaran</button>
                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Pembayaran Pemasangan TV Kabel</h4> </div>
                                        <div class="modal-body">
										
                    <form  class="form-horizontal form-material" id="loginform"action="model/input_pembayaran.php" method="POST" >
                      
                       
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="nama" value="<?php echo $data['nama'];?>" required="" placeholder="Nama Pelanggan ">
                        
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
                           	<textarea class="textarea"  name="keterangan" value="" placeholder="keterangan" autocomplete="off" style="width: 100%; height: 100px" required ></textarea>
						
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
                            <!-- Button trigger modal -->
 <?php include 'config/notif.php';?>
                <!-- /row -->
                <div class="row">

                    <div class="col-sm-12">
					
                       
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                 <th>#</th>									
				<th>nama</th>									
				<th>tanggal</th>									
				<th>jumlah</th>	
				<th>Action</th>	
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
               include "config/config.php";
              $i=0;
            if(isset($_POST['button'])){
               $sql=mysql_query("select * from tb_user where orcl or konsumen  Like '%" .$_POST['tcari']."'");
                }else{
               $sql=mysql_query("select * from pembayaran   ORDER BY id_pembayaran DESC LIMIT 25");
               }while($data=mysql_fetch_array($sql)){ $i++; ?>
               
			   <tr>
                <td><?php echo $i;   ?></td>
				<td><?php echo $data['nama'];  ?></td>

				<td><?php echo $data['tanggal'];  ?></td>
				<td><?php echo $data['jumlah_pembayaran'];  ?></td>
				<td><a href="index.php?p=pembayaran_detail&&id_pembayaran=<?php echo $data['id_pembayaran']; ?>"><span class="label label-danger">Action</span></a></td>
              </tr>
                                        
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                   