<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<form action="./pdf/laporan.php" method="POST" target="blank"  >
			<input type="hidden" name="awal" value="<?php $input=$_POST[awal]; echo  $input; ?>" class="form-control" >
			<input type="hidden" name="akhir" value="<?php $input2=$_POST[akhir]; echo  $input2; ?>" class="form-control" >
			<div class="form-group">
			<button type="submit" class="btn btn-primary m-t-15 waves-effect">Create PDF</button>
			</div></form>
         
 <?php include 'config/notif.php';?>
                <!-- /row -->
                <div class="row">

                    <div class="col-sm-12">
					
                       Laporan Pembayaran
                       <?php 
//        includekan fungsi paginasi
       
//        koneksi ke database
     include "config/config.php";
//        query
$input=$_POST[awal];
$input2=$_POST[akhir];
        $sql =  "SELECT * FROM pembayaran where tanggal BETWEEN '$input' AND '$input2'";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 25; // jumlah record per halaman
        $reload = "index.php?p=laporan";
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>     
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                 <th>#</th>									
				<th>nama</th>									
				<th>tanggal</th>									
				<th>jumlah</th>	
				<th>status</th>	
				
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
					<?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>				
               
			   <tr>
                <td width="50px">
                            <?php echo ++$id;?> 
                        </td>
				<td><?php echo $data['nama'];  ?></td>

				<td><?php echo $data['tanggal'];  ?></td>
				<td><?php echo $data['jumlah_pembayaran'];  ?></td>
				<td><?php echo $data['status'];  ?></td>
			</tr>
                                        
                                       <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            
                   