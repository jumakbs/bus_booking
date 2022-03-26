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

   

    if(isset($_POST['send'])){
        $driversname = $_POST['driversname'];
        $froms = $_POST['froms'];
        $via = $_POST['via'];
        $destination = $_POST['destination'];
        $busname = $_POST['busname'];
        $price = $_POST['price'];
        $travel_time = $_POST['travel_time'];
    
        $sql = "INSERT INTO assigntrip (driversname, froms, via, destination,busname, price, travel_time) VALUES ( '$driversname', '$froms', '$via', '$destination', '$busname', '$price', '$travel_time' ) ";
        $result = mysqli_query($link, $sql);
    }

   //code for updating the contents
   if(isset($_POST['update_btn'])){
    $edit_id = $_POST['edit_id'];
    $driversname = $_POST['driversname'];
    $froms = $_POST['froms'];
    $via = $_POST['via'];
    $destination = $_POST['destination'];
    $busname = $_POST['busname'];
    $price = $_POST['price'];
    $travel_time = $_POST['travel_time'];

    $query = "UPDATE assigntrip SET driversname='$driversname', froms='$froms', via='$via', destination='$destination', busname='$busname', price='$price', travel_time='$travel_time' WHERE id='$edit_id' ";
    $query_run = mysqli_query($link, $query);

    if($query_run){
             
             $_SESSION['success'] = "Bus trip updated";
            
    }else{
        $_SESSION['status'] = "Bus trip not updated";
        
    }
}




    $query = "SELECT * from assigntrip";

    $result = mysqli_query($link, $query);

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli = "DELETE FROM assigntrip WHERE id=$id";
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
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#tripModal">
                        <h5><b>Add Trip</b></h5>
                        
                    </a>
                
                
                <!-- Add form -->
    <div class="modal fade" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    
                    <form action="assigntrip.php" method="POST">
               <div class="modal-body">
               <h4><b>NEW TRIP</b></h4>
               <div class="form-group">
                      <label for=""> DRIVER NAME </label>
                      <select name="driversname" id="driversname" class="form-control">
                          <option > choose driver</option>
                            <?php
                            
                            $query = "SELECT DISTINCT driversname FROM drivers ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['driversname'].'">'.$row['driversname'].'</option>';
                            }

                            ?>
                      </select>

                   </div>

                   
                   <div class="form-group">
                      <label for="">FROM </label>
                      <select name="froms" id="froms" class="form-control">
                          <option > from where</option>
                            <?php
                            
                            $query = "SELECT DISTINCT froms FROM routes ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['froms'].'">'.$row['froms'].'</option>';
                            }

                            ?>
                      </select>

                   </div>
                   <div class="form-group">
                      <label for="">VIA</label>
                      <select name="via" id="via" class="form-control">
                          <option > via </option>
                            <?php
                            
                            $query = "SELECT DISTINCT via FROM routes ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['via'].'">'.$row['via'].'</option>';
                            }

                            ?>
                      </select>

                   </div>
                   

                   <div class="form-group">
                      <label for="">DESTINATION </label>
                      <select name="destination" id="destination" class="form-control">
                          <option > To where</option>
                            <?php
                            
                            $query = "SELECT DISTINCT destination FROM routes ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['destination'].'">'.$row['destination'].'</option>';
                            }

                            ?>
                      </select>

                   </div>
                   <div class="form-group">
                      <label for="">BUS NAME </label>
                      <select name="busname" id="busname" class="form-control">
                          <option > To where</option>
                            <?php
                            
                            $query = "SELECT DISTINCT busname FROM buses ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['busname'].'">'.$row['busname'].'</option>';
                            }

                            ?>
                      </select>

                   </div>

                   <div class="form-group">
                      <label for="">PRICE </label>
                      <select name="price" id="price" class="form-control">
                          <option > Select bus fare</option>
                            <?php
                            
                            $query = "SELECT DISTINCT price FROM routes ";
                            $do = mysqli_query($link,$query);
                            while($row = mysqli_fetch_array($do)){
                                echo '<option value="'.$row['price'].'">'.$row['price'].'</option>';
                            }

                            ?>
                      </select>

                   </div>

                   <div class="form-group">
                      <label for=""> TIME</label>
                      <input type="datetime-local" name="travel_time" class="form-control" placeholder="Enter travel time">
                   </div>


                                <button type="send" class="btn btn-primary" name="send">Save</button>        
  

            </form>
            </div>
            </div>
              </div>
           </li>  
                        
        </ul>
</div>
        <!-- Content Row -->
               <div class="card-body">
                   <div class="form-outline mb-4">
                       <input type="search" class="form-control" id="dataTable-search-input" placeholder="Search">       
                   </div>
                   <div id="datatable">

                   </div>
                   <div class="table-responsive">
                        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0" >
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>DRIVER NAMES</th>
                                   <th>FROM</th>
                                   <th>Via</th>
                                   <th>DESTINATION</th>
                                   <th>BUS NAME</th>
                                   <th>PRICE</th>
                                   <th>TIME</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>
                           <?php 
                                while($row1=mysqli_fetch_assoc($result))
                                {
                            ?>
                           <tbody>
             
                               <tr>
                                   <td><?php echo $row1['id']; ?></td>
                                   <td><?php echo $row1['driversname']; ?></td>
                                   <td><?php echo $row1['froms']; ?></td>
                                   <td><?php echo $row1['via']; ?></td>
                                   <td><?php echo $row1['destination']; ?></td>
                                   <td><?php echo $row1['busname']; ?></td>
                                   <td><?php echo $row1['price']; ?></td>
                                   <td><?php echo $row1['travel_time']; ?></td>
                                   <td> 
                                      <form action="edit_trip.php" method="POST">
                                             <input type="hidden" name="edit_id" value="<?php echo $row1['id']; ?>">
                                             <button type="submit" name="edit_data" class="btn btn-success">Edit</button>
                                             <a href="assigntrip.php?delete=<?php echo $row1['id']; ?>" class="btn btn-danger">Delete</a>
                                       </form>
                                   </td>
                               </tr>
                           </tbody>
                <?php
                    }

                ?>
                    </table>
                         </div>
                         </div>
                    </div>
                </div>
             
                </div>
    
    </div>
    <!-- /.container-fluid -->



<script>
    const data2 = {
        columns: []
        rows:[
            []
        ],
    };

    const instance = new mdb.Datatable(document.getElementById('datatable'), data2)

    document.getElementById('datatable-search-input').addEventListener('input', (e) => {
        instance.input-group(e.target.value);
    });
</script>

<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>