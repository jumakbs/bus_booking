<?php

$link = mysqli_connect('localhost', 'root','', 'bus_booking');

   if(!$link)
    {
		echo mysqli_connect_error();
	}

    // db for drivers infromation
    if(isset($_POST['send'])){
        $driversname = $_POST['driversname'];
        $nida = $_POST['nida'];
        $licenseno = $_POST['licenseno'];
        $levels = $_POST['levels'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    
        $sql = "INSERT INTO drivers (driversname, nida, licenseno, levels, phone, email) VALUES ( '$driversname', '$nida', '$licenseno', '$levels', '$phone', '$email' ) ";
        $result = mysqli_query($link, $sql);
    }


    $query = "SELECT * from drivers";

    $result = mysqli_query($link, $query);

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli = "DELETE FROM drivers WHERE id=$id";
        $results = mysqli_query($link, $mysqli);

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        
    }
  
    // db for bus information

    if(isset($_POST['send'])){
        $busname = $_POST['busname'];
        $companyname = $_POST['companyname'];
        $busnumber = $_POST['busnumber'];
        $busclass = $_POST['busclass'];
        $insuranceno = $_POST['insuranceno'];
        $logo = $_POST['logo'];
    
        $sql = "INSERT INTO buses (busname, companyname, busnumber, busclass, insuranceno,logo) VALUES ( '$busname', '$companyname', '$busnumber', '$busclass', '$insuranceno', '$logo' ) ";
        $result = mysqli_query($link, $sql);
    }

   //code for updating the contents for bus
   if(isset($_POST['update_btn'])){
       $edit_id = $_POST['edit_id'];
       $busname = $_POST['busname'];
       $companyname = $_POST['companyname'];
       $busnumber = $_POST['busnumber'];
       $busclass = $_POST['busclass'];
       $insuranceno = $_POST['insuranceno'];
       $logo = $_POST['logo'];

       $query = "UPDATE buses SET busname='$busname', companyname='$companyname', busnumber='$busnumber', busclass='$busclass', insuranceno='$insuranceno', logo='$logo' WHERE id='$edit_id' ";
       $query_run = mysqli_query($link, $query);

       if($query_run){
                
                $_SESSION['success'] = "bus info updates";
               
       }else{
           $_SESSION['status'] = "bus info not updated";
           
       }
   }



    
    $query = "SELECT * from buses";

    $result = mysqli_query($link, $query);

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli = "DELETE FROM buses WHERE id=$id";
        $results = mysqli_query($link, $mysqli);

        $_SESSION['message'] = "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";

        
    }
    
 
 ?>
