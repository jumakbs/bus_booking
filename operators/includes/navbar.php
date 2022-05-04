<?php
      
   include('security.php');
?>
 
 
 <!-- Sidebar -->
 <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> OPERATOR </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="operatordashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Roads activities
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="buses.php">
        <i class="fas fa-bus"></i>
        <span>BUSES</span></a>
</li>

<!-- Routes Menu -->

<li class="nav-item">
    <a class="nav-link" href="routes.php">
        <i class="fa fa-road"></i>
        <span>ROUTES</span></a>
</li>
<!-- Driver Menu -->

<li class="nav-item">
    <a class="nav-link" href="drivers.php">
        <i class="fas fa-user"></i>
        <span>DRIVERS</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="assigntrip.php">
        <i class="fa fa-road"></i>
        <span>ASSIGN TRIP</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Offices activities
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="tickets.php">
    <i class="fas fa-ticket-alt"></i>
        <span>TICKETS</span></a>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>


<!-- Nav Item - Transactions -->
<li class="nav-item">
    <a class="nav-link" href="transactions.php">
        <i class="fas fa-money-check"></i>
        <span>Transactions</span></a>
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="passengers.php">
        <i class="fas fa-user"></i>
        <span>Passengers</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->


</ul>
<!-- End of Sidebar -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
               
                   <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <form action="logout.php" method="POST">
                        <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
