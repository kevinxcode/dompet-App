<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<ol class="breadcrumb pull-right">
                            <li class="active"><a href="index.php?p=user_calon"><span class="label label-danger">Aprove Pelanggan</span></a></li>
                           
                        </ol>
         <!-- sample modal content -->
                            <!-- /.modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Tambah User</button>
                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Tambah User</h4> </div>
                                        <div class="modal-body">
										
                    <form  class="form-horizontal form-material" id="loginform"action="model/input_user.php" method="POST" >
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="nama" required="" placeholder="nama">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="alamat" required="" placeholder="alamat">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="no_telp" required="" placeholder="no telpon">
                        </div>
                    </div>
					<div class="form-group ">
                        <div class="col-xs-12">
                           	<select class="form-control" name="status">
							<option value="Pegawai">Pegawai</option>
							<option value="Pelanggan">Pelanggan</option>
							<option value="Teknisi">Teknisi</option>
							<option value="Pimpinan">Pimpinan</option>
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
					
                        <div class="white-box">
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                 <th>#</th>									
				<th>nama</th>									
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
               $sql=mysql_query("select * from user   ORDER BY id_user DESC LIMIT 25");
               }while($data=mysql_fetch_array($sql)){ $i++; ?>
               
			   <tr>
                <td><?php echo $i;   ?></td>
				<td><?php echo $data['nama'];  ?></td>
				<td><?php echo $data['status'];  ?></td>
				<td><a href="index.php?p=edit_user&&id_user=<?php echo $data['id_user']; ?>"><span class="label label-danger">Action</span></a></td>
              </tr>
                                        
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                   