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


    ?>








<?php 
include('includes/scripts.php');
include('includes/footer.php');
?>