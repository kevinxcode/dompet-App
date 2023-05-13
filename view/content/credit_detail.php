
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
   
  
            <?php
include "config/config.php";
$sql="select * from credit where id_credit='$_GET[id_credit]'";

$tampil=mysql_query($sql);
$data=mysql_fetch_array($tampil);
?>
                <div class="row">

                    <div class="col-sm-12">
					
                       
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
              <tbody>
              <tr>
                <td>Credit / Pengeluaran </td>
                <td>: <?php echo $data['pengeluaran'];  ?></td>
              </tr>
          
			  
			  <tr>
                <td>Date</td>
                <td>: <?php echo $data['tanggal'];  ?></td>
              </tr>
              <tr>
                <td>Pay</td>
                <td>: <?php echo $data['jumlah'];  ?></td>
              </tr>
              
              </tbody>
            </table>
          </div>
          
        
</section>
<!--Contact ends-->

<a class="btn btn-success btn-sm  waves-effect waves-lights" href="index.php?p=credit"><span class="glyphicon glyphicon-arrow-left"></span></i></i></a>
   
<div class="pull-right">

<a class="btn btn-danger btn-sm  waves-effect waves-lights" href="model/hapus_credit.php?id_credit=<?php echo $data['id_credit']; ?>"><span class="glyphicon glyphicon-trash"></span></i></a>

<a class="btn btn-rounded btn btn-primary" data-toggle="modal" data-target="#myModal"  /><span class="glyphicon glyphicon-pencil"></span></i></a>
                                     
  
   
                                     
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
								<form action="model/update_credit.php" method="POST" >
					<input class="form-control" type="hidden" name="id_user" value="<?php echo $data['id_user'];?>">
					<input class="form-control" type="hidden" name="id_credit" value="<?php echo $data['id_credit'];?>">
					
						<div class="form-group ">
                        <div class="col-xs-10">
                           
                        </div>
                    </div>
					
					
					
					
			
   <div class="form-group ">
        <div class='col-xs-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
				 <span class="input-group-addon" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input class="form-control" type="text" name="tanggal" id="ctgl" value="<?php echo $data['tanggal'];?>" data-parsley-required="true"  />  
                   
                </div>
            </div>
        </div>
       

					
                     
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="pengeluaran" value="<?php echo $data['pengeluaran'];?>" required="" placeholder="pengeluaran">
                        
                        </div>
                    </div>
                  
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="jumlah" value="<?php echo $data['jumlah'];?>" required="" placeholder="pay">
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


