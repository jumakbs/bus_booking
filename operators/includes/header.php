<?php
   
  include('security.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bus operator Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- <script>
        $(document).ready(function(){

            $('#froms').on('change', function(){
                var fromsID = $(this).val();
                if(fromsID){
                    $.get(
                        "ajax.php",
                        {froms: fromsID},
                        function(data){
                            $('#destination').html(data);
                        }
                    );
                }else{
                    $('#destination').html('<option> Selection destination </option>')
                }
            });
        });
    </script> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    

       
