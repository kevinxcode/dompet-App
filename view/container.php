

<body class="fix-header">
    <!-- Preloader -->
   
    <div id="wrapper">
        <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> 
			<a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse">
		Fade Pay Money Management</a>

                <ul class="nav navbar-top-links navbar-right pull-right">

                    <!-- /.dropdown -->
					 <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> 
						<i class="glyphicon glyphicon-user">-</i>
						<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
						</b> </a>
						
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li><a href="#"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="model/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                </ul>
			
                <div class="top-left-part">
				</div>
                
                <ul class="nav navbar-top-links navbar-left pull-left">

                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="glyphicon glyphicon-align-left"></i></a></li>
                    <!-- /.dropdown -->
					 <!-- /.dropdown -->
                    
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        
        
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> <?php echo $_SESSION['nama'];?><span><i class="glyphicon glyphicon-remove right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
						
                             <ul class="nav" id="side-menu">
							<li class="nav-small-cap m-t-10"> Main Menu</li>
                    <li> <a href="index.php?p=home" class="waves-effect active"> Dashboard </a></li>
                    <li> <a href="index.php?p=user" class="waves-effect active"> User </a></li>
                    
                    <li> <a href="index.php?p=laporan" class="waves-effect active"> Laporan </a></li>
                        
                                
                            
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <!-- /.container-fluid -->
	
                  
<?php
            $pages_dir = 'view/content';
                if(!empty($_GET['p'])){
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if(in_array($p.'.php', $pages)){
                        include($pages_dir.'/'.$p.'.php');
                    } else {
                        include($pages_dir.'/404.php');
                    }
                } else {
                    include($pages_dir.'/home.php');
                }
            ?>