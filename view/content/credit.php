<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<ol class="breadcrumb pull-right">
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d"), date("Y"));
$awalbulan = date("Y-m-01", $tanggal);

?>
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang = date("Y-m-t", $tanggal);

?>

<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$bulan = date("F", $tanggal);
?>
<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang2 = date("Y-m-d", $tanggal);

?>

<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang22 = date("d-F-Y", $tanggal);

?>
                            <li class="active"><a href="index.php?p=credit_total"><span class="label label-danger waves-effect waves-light"> <?php echo $tglsekarang22 ?> - <b> <?php 
		include "config/config.php";
$input=$awalbulan;
$input2=$tglsekarang2;
			$x=mysql_query("select  sum(jumlah) as total_all from credit where tanggal='$tglsekarang2' ");
			$xx=mysql_fetch_array($x);			
			echo " Rp.". number_format($xx['total_all']).",-";		
		?></b></span></a></li>
                           
                        </ol>
         <!-- sample modal content -->
                            <!-- /.modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#responsive-modal">Credit</button>
                            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Credit </h4> </div>
                                        <div class="modal-body">
										
                    <form  class="form-horizontal form-material" id="loginform"action="model/input_credit.php" method="POST" >
                      <input class="form-control" type="hidden" name="id_user" value="<?php echo $_SESSION['id_user'];?>">
					  
					  
					 
   
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
				 <span class="input-group-addon" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer">
                        <span class="glyphicon glyphicon-calendar" ></span>
                    </span> 
                    <input class="form-control" type="text" name="tanggal" id="ctgl" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang2 = date("Y-m-d", $tanggal);
echo $tglsekarang2;
?>" data-parsley-required="true"  />  
                   
                </div>
            </div>
       
					  
                      
                    <div class="form-group ">
                        <div class="col-xs-12">
						    <input class="form-control" type="text" name="pengeluaran"  required="" placeholder="Credit / Pengeluaran">
                        
                        </div>
                    </div>
                   
					
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="jumlah" required="" placeholder="Pay / Jumlah">
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
				<th>Credit</th>									
				<th>Date</th>									
				<th>Pay</th>	
				<th>Action</th>	
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
               include "config/config.php";
              $i=0;
            if(isset($_POST['button'])){
				$input=$_POST[awal];
				$input2=$_POST[akhir];
               $sql=mysql_query("select * from credit where tanggal BETWEEN '$input' AND '$input2' ORDER BY id_credit DESC");
                }else{
               $sql=mysql_query("select * from credit where tanggal='$tglsekarang2'   ORDER BY id_credit DESC LIMIT 25");
               }while($data=mysql_fetch_array($sql)){ $i++; ?>
               
			   <tr>
                <td><?php echo $i;   ?></td>
				<td><?php echo $data['pengeluaran'];  ?></td>
				<td><?php echo $data['tanggal'];  ?></td>
				
				<td><?php echo $data['jumlah'];  ?></td>
				<td><a href="index.php?p=credit_detail&&id_credit=<?php echo $data['id_credit']; ?>">
				
				<button type="subbmit" class="btn btn-success btn-sm  waves-effect waves-light"><span class="glyphicon glyphicon-new-window"></span> </button>
				</span></a></td>
              </tr>
                                        
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                   