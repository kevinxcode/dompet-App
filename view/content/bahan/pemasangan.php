<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<ol class="breadcrumb pull-right">
                            <li class="active"><a href="index.php?p=pemasangan_aprove"><span class="label label-danger">Aprove pemasangan</span></a></li>
                           
                        </ol>
         <!-- sample modal content -->
                            <!-- /.modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Pemasangan</button>
                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Permohonan Pemasangan TV Kabel</h4> </div>
                                        <div class="modal-body">
										
                    <form  class="form-horizontal form-material" id="loginform"action="model/input_pemasangan.php" method="POST" >
                      <input class="form-control" type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
                      <input class="form-control" type="hidden" name="tanggal" id="ctgl" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d")+3, date("Y"));
$awalbulan = date("Y-m-d", $tanggal);
echo $awalbulan;
?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer" />  
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="nama" value="<?php echo $_SESSION['nama'];?>" required="" placeholder="Nama Pemohon">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                           	<textarea class="textarea"  name="alamat" value="" placeholder="alamat" autocomplete="off" style="width: 100%; height: 100px" required ></textarea>
						
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="no_telp" required="" placeholder="Nomor telpon">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="paket" required="" placeholder="paket pemasangan">
                        </div>
                    </div>
					
					<div class="form-group ">
                        <div class="col-xs-12">
                           	<select class="form-control" name="status_pengajuan">
							<option value="Proses Pengajuan">Proses Pengajuan</option>
							
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
				<th>Telpon</th>									
				<th>status</th>	
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
               $sql=mysql_query("select * from pengajuan_pemasangan   ORDER BY id_pengajuan DESC LIMIT 25");
               }while($data=mysql_fetch_array($sql)){ $i++; ?>
               
			   <tr>
                <td><?php echo $i;   ?></td>
				<td><?php echo $data['nama'];  ?></td>
				<td><a href="tel:<?php echo $data['no_telp'];  ?>"><?php echo $data['no_telp'];  ?></td>
				<td><?php echo $data['status_pengajuan'];  ?></td>
				<td><a href="index.php?p=pemasangan_detail&&id_pengajuan=<?php echo $data['id_pengajuan']; ?>"><span class="label label-danger">Action</span></a></td>
              </tr>
                                        
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                   