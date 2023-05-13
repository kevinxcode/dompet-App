

<!--Contact Starts-->
<section id="emp_contact" class="emp_contact equal_parent">
  <div class="container-fluid">
    <div class="row">
   <br>
   <div class="col-sm-12 timings">
  <?php
include "config/config.php";
$sql="select * from user where id_user='$_GET[id_user]'";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);
?>
          <!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										Edit Data
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="model/update_user.php" method="POST" >
												<div class="form-group">
													<label class="control-label mb-10 text-left">Username</label>
													<input type="text" name="username" value="<?php echo $data['username']; ?>" class="form-control" >
													<input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>" class="form-control" >
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">Pasword</label>
													<input type="text" name="password" class="form-control" >
												</div>
												<div class="form-group">
													<label class="control-label mb-10 text-left">nama </label>
													<input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" >
												</div>
											
												
												
												<div class="form-group">
													<label class="control-label mb-10 text-left">Status User </label>
													<select class="form-control" name="status">
														<option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
														<option value="Pegawai">Pegawai</option>
							<option value="Pelanggan">Pelanggan</option>
							<option value="Teknisi">Teknisi</option>
							<option value="Pimpinan">Pimpinan</option>
													
														
														
													</select>
												</div>
												<div class="form-group">
									<a href="index.php?p=user" class="btn btn-danger m-t-xs m-b-xs">Cancel</a>
									<a class="btn btn-warning m-t-xs m-b-xs" href="model/hapus_user.php?id_user=<?php echo $data['id_user']; ?>">delete</i></a>
                                     <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
												</div>
												
												
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<!-- /Row -->
         