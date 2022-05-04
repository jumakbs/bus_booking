<?php
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('security.php');
   


   $link = mysqli_connect('localhost', 'root','', 'bus_booking');

   if(!$link)
    {
		echo mysqli_connect_error();
	}

    
   //code for pagination
$per_page=6;
$start=0;
$current_page=1;
if(isset($_GET['start'])){
	$start=$_GET['start'];
	if($start<=0){
		$start=0;
		$current_page=1;
	}else{
		$current_page=$start;
		$start--;
		$start=$start*$per_page;
	}
}
$record=mysqli_num_rows(mysqli_query($link,"select * from bookingtickets"));
$pagi=ceil($record/$per_page);

$sql="select * from bookingtickets limit $start,$per_page";
$res=mysqli_query($link,$sql);
  
// query for deleting
    
    $query = "SELECT * from buses" ;

    $result = mysqli_query($link, $query);

    
 ?>
 
 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    <?php
                                        echo $_SESSION['username']; 
                                        
                                        
                                    ?>
                    </span>
                    <img class="img-profile rounded-circle"
                        src="img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        

            <div class="container-fluid">

    <!-- DataTales Example -->
                  

        <!-- Topbar Navbar -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <ul class="navbar-nav ml-auto">
          

            <!-- Nav Item - Alerts -->
           
            <li class="nav-item dropdown no-arrow">
                   
                        <h5><b>TICKETS</b></h5>
                        
          
                
                
                <!-- Add form -->
    
           </li>  
                        
        </ul>
</div>
        <!-- Content Row -->
               <div class="card-body">
<div class="modal fade" id="busModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
   if(isset($_GET['id'])){
       
       $qry = $link->query("SELECT *  FROM bookingtickets where id = ".$_GET['id'])->fetch_array();

   foreach($qry as $row){
}
}

   ?>  
   <!-- popup form for view -->
                    
    <form action="buses.php" method="POST"  class="px-4 py-3">
               <div class="modal-body">
               <h4><b>TICKETS</b></h4>
               <div class="widget-user-header ">
        <h3 class="widget-user-username">JUMA SHAIBU</h3>
        <h5 class="widget-user-desc">MBEYA to TABORA</h5>
        <h6 class="widget-user-desc">0716865555</h6>
        <h6>TRAVEL TIME:: 2022-03-21 10:38:48</h6>
      </div>
      
      <div class="card-footer">
        <div class="container-fluid">
        	<dl>
        		<dd>Rejea vigezo na masharti yanayohusika nyuma ya ticket hii <br>
                    Speer * Comfort Luxury * Reliability <br>
                    wwww.aboodbus.co.tz
                   
                </dd>
        	</dl>
        </div>
    </div>
	</div>
</div>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
            
                </form>
        
</div>
</div>
              <!-- Content Row -->
        <div class="card">
                    <div class="col-md-3">
                       <form action="GET">
                            <div class="input-group mb-3">
                                 <input type="search" class="form-control" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  placeholder="Search...." style="width: 150px">
                                 <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                            </div>
                       </form>
                   </div>
                    <div class="table-responsive "> 
                    
                        <table class="table table-sm" id="dataTable"  cellspacing="0" >
                        <thead>
					<tr>
						<th class="text-center">S/N</th>
						<th>Name</th>
						<th>FROM</th>
						<th>DESTINATION</th>
                        <th>via</th>
                        <th>Bus number</th>
                        <th>TICKET NUMBER</th>
                        <th>FARE</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
					?>
					<tr id="<?php echo $row['id'] ?>">
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b><?php echo ucwords($row['fullname']) ?></b></td>
						<td><b><?php echo $row['froms'] ?></b></td>
						<td><b><?php echo  $row['destinations'] ?></b></td>
                        <td><b><?php echo  $row['via'] ?></b></td>
                        <td><b><?php echo  $row['busnumber'] ?></b></td>
                        <td class="text-center"><b><?php echo  $row['ticket_no'] ?></b></td>
                        <td><b><?php echo  $row['price'] ?></b></td>
						<td>
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                      Action
		                    </button  >
		                    <div class="dropdown-menu">
		                      <a class="dropdown-item" data-toggle="modal" data-target="" href="#busModal" data-id="<?php echo $row['id'] ?>">View</a>
		                      <div class="dropdown-divider"></div>
		                      <a class="dropdown-item" href="#?page=edit_ticket&id=<?php echo $row['id'] ?>">Edit</a>
	
		                    </div>
						</td>
					</tr>	
                    <?php } } else {?>
	No records
	<?php } ?>
              
 
				</tbody>
                
             

                        </table>
<ul class="pagination mt-30">
	<?php 
	for($i=1;$i<=$pagi;$i++){
	$class='';
	if($current_page==$i){
		?><li class="page-item active"><a class="page-link" href="javascript:void(0)"><?php echo $i?></a></li><?php
	}else{
	?>
		<li class="page-item"><a class="page-link" href="?start=<?php echo $i?>"><?php echo $i?></a></li>
	<?php
	}
	?>
    
	<?php } ?>
</ul>

                         </div>
                    </div>
                </div>
             
                
    
    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>
