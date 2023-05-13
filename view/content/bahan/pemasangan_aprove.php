<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<ol class="breadcrumb pull-right">
                            <li class="active"><a href="index.php?p=pemasangan_aprove"><span class="label label-danger">Aprove pemasangan</span></a></li>
                           
                        </ol>
						</div>
         
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
               $sql=mysql_query("select * from pengajuan_pemasangan where status_pengajuan='Proses Pengajuan'   ORDER BY id_pengajuan DESC LIMIT 25");
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
            
                   