<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
<ol class="breadcrumb pull-right">
                            <span class="label label-primary">Laporan</span>
                           
                        </ol>
						</div>
  <?php include 'config/notif.php';?>
  
 

         
          <form action="index.php?p=laporan_detail" method="POST">
                                    <div class="example">
                                        
                                        <div class="input-daterange input-group" id="date-range">
                                            <input class="form-control" type="text" name="awal"  id="ctgl" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d"), date("Y"));
$awalbulan = date("Y-m-d", $tanggal);
echo $awalbulan;
?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl','yyyyMMdd')" style="cursor:pointer" />
											<span class="input-group-addon bg-info b-0 text-white">to</span>
                                            <input class="form-control" type="text" name="akhir"  id="ctgl3" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(0, 0, 0, date("m"), date("d")+5, date("Y"));
$awalbulan = date("Y-m-d", $tanggal);
echo $awalbulan;
?>" data-parsley-required="true" onclick="javascript:NewCssCal ('ctgl3','yyyyMMdd')" style="cursor:pointer" />
											</div>
                                    </div>
									 <button type="submit" name="button" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
                                    </form>