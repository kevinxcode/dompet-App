
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
   
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
$tanggal= mktime(0, 0, 0, date("m"), date("d")-1, date("Y"));
$yesterday = date("Y-m-d", $tanggal);

?>

<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal= mktime(date("m"),date("d"),date("Y"));
$tglsekarang22 = date("d F Y", $tanggal);

?>
            
                <div class="row">

                    <div class="col-sm-12">
					
                       
                            
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
              <tbody>
              <tr>
                <td> Today : <?php echo $tglsekarang22 ?>  </td>
                <td><a href="index.php?p=credit"><span class="label label-danger waves-effect waves-light">  <b> <?php 
		include "config/config.php";
$input=$awalbulan;
$input2=$tglsekarang2;
			$x=mysql_query("select  sum(jumlah) as total_all from credit where tanggal='$tglsekarang2' ");
			$xx=mysql_fetch_array($x);			
			echo " Rp.". number_format($xx['total_all']).",-";		
		?></b></span></a></td>
              </tr>
			  
			  <tr>
                <td> Yesterday</td>
                <td><form  class="form-horizontal form-material" id="loginform"action="index.php?p=credit_search" method="POST" >
                      <input class="form-control" type="hidden" name="awal" value="<?php echo $yesterday;?>">
                
                       <button type="subbmit" name="button" id="button" class="label label-danger"><b><?php 
		include "config/config.php";
$input=$awalbulan;
$input2=$tglsekarang2;
			$x=mysql_query("select  sum(jumlah) as total_all from credit where tanggal='$yesterday' ");
			$xx=mysql_fetch_array($x);			
			echo " Rp.". number_format($xx['total_all']).",-";		
		?></button>
			</form>
				</td>
              </tr>
          
			  
			  <tr>
                <td><?php echo $bulan ?></td>
                <td><form  class="form-horizontal form-material" id="loginform"action="index.php?p=credit" method="POST" >
                      <input class="form-control" type="hidden" name="awal" value="<?php echo $awalbulan;?>">
                      <input class="form-control" type="hidden" name="akhir" value="<?php echo $tglsekarang;?>">
                       <button type="subbmit" name="button" id="button" class="label label-danger"><b><?php 
		include "config/config.php";
$input=$awalbulan;
$input2=$tglsekarang;
			$x=mysql_query("select  sum(jumlah) as total_all from credit where tanggal BETWEEN '$awalbulan' AND '$tglsekarang' ");
			$xx=mysql_fetch_array($x);			
			echo " Rp.". number_format($xx['total_all']).",-";		
		?> </b></button>
					  </form>
			</td>
              </tr>
			  
              
              
              </tbody>
            </table>
          </div>
          
        
</section>
<!--Contact ends-->

<a class="btn btn-success btn-sm  waves-effect waves-lights" href="index.php?p=credit"><span class="glyphicon glyphicon-arrow-left"></span></i></i></a>
   
<div class="pull-right">

  
   
                                     
  </div>
          

