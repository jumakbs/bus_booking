<?php
   session_start();
   include('includes/header.php');
   include('includes/navbar.php');

   include('../operators/security.php');
 
   


   $link = mysqli_connect('localhost', 'root','', 'bus_booking');

   if(!$link)
    {
		echo mysqli_connect_error();
	}

    if(isset($_POST['send'])){

        $fullname = $_POST['fullname'];
        $companyname = $_POST['companyname'];
        $email = $_POST['email'];
        $user_type = $_POST['user_type'];
        $logo = $_POST['logo'];
        $officelocation = $_POST['officelocation'];
        $phone = $_POST['phone'];
        $workingtime = $_POST['workingtime'];
        $passwords = $_POST['passwords'];
    
    // insertation code
        $sql = "INSERT INTO operators (fullname, companyname, email, user_type, logo, officelocation, phone, workingtime, passwords) 
                VALUES ( '$fullname','$companyname', '$email', '$user_type', '$logo', '$officelocation', '$phone', '$workingtime', '$passwords' )";
        $result = mysqli_query($link, $sql);
    }

   //code for updating the contents
  if(isset($_POST['update_btn'])){
       $edit_id = $_POST['edit_id'];

       $fullname = $_POST['fullname'];
        $companyname = $_POST['companyname'];
        $email = $_POST['email'];
        $logo = $_POST['logo'];
        $officelocation = $_POST['officelocation'];
        $phone = $_POST['phone'];
        $workingtime = $_POST['workingtime'];
        $passwords = $_POST['passwords'];

       $query = "UPDATE operators SET fullname='$fullname', companyname='$companyname', email='$email', logo='$logo', officelocation='$officelocation', phone='$phone', workingtime='$workingtime', passwords='$passwords' WHERE id='$edit_id' ";
       $query_run = mysqli_query($link, $query);

       if($query_run){
                
                $_SESSION['success'] = "bus info updates";
               
       }else{
           $_SESSION['status'] = "bus info not updated";
           
       }
   }




    
    $query = "SELECT * from operators";

    $result = mysqli_query($link, $query);

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli = "DELETE FROM operators WHERE id=$id";
        $results = mysqli_query($link, $mysqli);

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        
    }
 
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
                            <div class="small text-gray-500">Emily Fowler ?? 58m</div>
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
                            <div class="small text-gray-500">Jae Chun ?? 1d</div>
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
                            <div class="small text-gray-500">Morgan Alvarez ?? 2d</div>
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
                            <div class="small text-gray-500">Chicken the Dog ?? 2w</div>
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
                    
                <div class="border-top pt-3">
                    <div class="d-flex justify-content-between">
                    <h4 class="card-title">List of Operators</h4> 
                      <button class="btn btn-primary btn-icon-text" data-toggle="modal" data-target="#operator">
                        New Operator
                        <i class="btn-icon-append fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                
                
                <!-- Add form -->
    <div class="modal fade" id="operator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    
                    
              <form action="registers.php" method="POST"  class="px-4 py-3">
               <div class="modal-body">
               <h4><b>NEW BUS</b></h4>
                    <div class="form-group">
                      <label for="">Full name</label>
                      <input type="text" name="fullname" class="form-control"  placeholder="Enter your name">
                   </div>

                   <div class="form-group">
                      <label for="">Company name</label>
                      <input type="text" name="companyname" class="form-control"  placeholder="Enter company name">
                   </div>

                   <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control"  placeholder="Enter email">
                   </div>
                   <div class="form-group">
                       <select name="user_type" id="" class="form-control">>
                           <option value="operator">operator</option>
                       </select>
                   </div>

                   
                   <div class="form-group">
                      <label for="">logo</label>
                      <input type="file" name="logo"  class="form-control" >
                   </div>

                   <div class="form-group">
                      <label for="">Office location</label>
                      <input type="text" name="officelocation"  class="form-control" >
                   </div>


                   <div class="form-group">
                      <label for="">Phone number </label>
                      <input type="tel" name="phone" class="form-control"  placeholder="Enter phone no">
                   </div>
                    
                   

                   <div class="form-group">
                      <label for="">working Time</label>
                      <input type="time" name="workingtime" class="form-control"  min="09:00" max="18:00" required>
                   </div>
                   <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" name="passwords" class="form-control" placeholder="Enter password">
                   </div>

 
                       <button type="submitt" name="send" class="btn btn-primary" >SAVE</button>
            
                </form>
</div>
</div>
              </div>
           </li>  
                        
        </ul>
</div>
        <!-- Content Row -->
               <div class="card-body">
               <div class="col-md-3">
                      <form method="POST" action="">
                           <div class="input-group mb-3">
                                <input type="search" class="form-control" name="keyword" value="<?php echo isset($_POST['keyword']) ? $_POST['keyword'] : '' ?>"  placeholder="Search...." style="width: 150px" required=""/>
                                <button type="submit" name="search" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
                               
                           </div>
                      </form>
                  </div>
<div class="table-responsive">
<?php
	// require the database connection
	$link = new PDO( 'mysql:host=localhost;dbname=bus_booking', 'root', '');
	if(!$link){
		die("Error: Failed to coonect to database!");
	}
	if(ISSET($_POST['search'])){
?>
                        <table class="table table-sm" id="dataTable"  cellspacing="0" >
                        <thead>
                                           <tr>
                                               <th>S/N</th>
                                               <th>Names</th>
                                               <th>company </th>
                                               <th>email</th>
                                               <th>logo</th>
                                               <th>office location</th>
                                               <th>phone No</th>
                                               <th>working Time</th>
                                               <th class="text-center">Actions</th>

                                           </tr>
                                       </thead>
                                       <tbody>
            <?php
                $i = 1;
				$keyword = $_POST['keyword'];
				$query = $link->prepare("SELECT *  FROM operators WHERE user_type='operator' AND `fullname` LIKE '%$keyword%' or `companyname` LIKE '%$keyword%' or `email` LIKE '%$keyword%'  or `officelocation` LIKE '%$keyword%' ");
				$query->execute();
				while($row1 = $query->fetch()){
			?>
                                           <tr>
                                               <td><?php echo $i++ ?></td>
                                               <td><?php echo $row1['fullname']; ?></td>
                                               <td><?php echo $row1['companyname']; ?></td>
                                               <td><?php echo $row1['email']; ?></td>
                                               <td><?php echo'<img src="img/'.$row1['logo'].'" width="50px;" height="40px;" alt="Image">' ?></td>
                                               <td><?php echo $row1['officelocation']; ?></td>
                                               <td><?php echo $row1['phone']; ?></td>
                                               <td><?php echo $row1['workingtime']; ?></td>
                                                
                                  
                                   <td class="text-center">
                                   <form action="edit_registered.php" method="POST">
                                   <input type="hidden" name="edit_id" value="<?php echo $row1['id']; ?>">
							               <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                                           Action
		                                   </button>
		                             <div class="dropdown-menu" >
		                                 <a class="dropdown-item" href="view.php" data-id="<?php echo $row['id'] ?>">View</a>
		                              <div class="dropdown-divider"></div>
                                              <button type="submit" name="edit_data" class="dropdown-item">Edit</button>
		                              <div class="dropdown-divider"></div>
                                      <a href="registers.php?delete=<?php echo $row1['id']; ?>" class="dropdown-item">Delete</a>
		                                   
		                              </div>
                                    </form>
						           </td>
                                             
                               </tr>
                               <?php
				}
			?> 
                           </tbody>
                
                        </table>
                        <?php		
	}else{
?>
<table class="table table-sm" id="dataTable"  cellspacing="0" >
                                      <thead>
                                           <tr>
                                               <th>S/N</th>
                                               <th>Names</th>
                                               <th>company </th>
                                               <th>email</th>
                                               <th>logo</th>
                                               <th>office location</th>
                                               <th>phone No</th>
                                               <th>working Time</th>
                                               <th class="text-center">Actions</th>

                                           </tr>
                                       </thead>
                                       <tbody>
                                       <?php
                $i = 1;
				$query = $link->prepare("SELECT *  FROM operators where user_type='operator' ");
				$query->execute();
				while($row1 = $query->fetch()){
			?>

            
<tr>
                                               <td><?php echo $i++ ?></td>
                                               <td><?php echo $row1['fullname']; ?></td>
                                               <td><?php echo $row1['companyname']; ?></td>
                                               <td><?php echo $row1['email']; ?></td>
                                               <td><?php echo'<img src="img/'.$row1['logo'].'" width="50px;" height="40px;" alt="Image">' ?></td>
                                               <td><?php echo $row1['officelocation']; ?></td>
                                               <td><?php echo $row1['phone']; ?></td>
                                               <td><?php echo $row1['workingtime']; ?></td>
                                                
                                  
                                   <td class="text-center">
                                   <form action="edit_registered.php" method="POST">
                                   <input type="hidden" name="edit_id" value="<?php echo $row1['id']; ?>">
							               <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		                                           Action
		                                   </button>
		                             <div class="dropdown-menu">
		                                 <a class="dropdown-item" href="view.php" data-id="<?php echo $row['id'] ?>">View</a>
		                              <div class="dropdown-divider"></div>
                                              <button type="submit" name="edit_data" class="dropdown-item">Edit</button>
		                              <div class="dropdown-divider"></div>
                                      <a href="registers.php?delete=<?php echo $row1['id']; ?>" class="dropdown-item">Delete</a>
		                                   
		                              </div>
                                    </form>
						           </td>
                                             
                               </tr>
                               <?php
				}
			?>
                           </tbody>
                           </table>
<?php
}
$link = null;
?>

                         </div>
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