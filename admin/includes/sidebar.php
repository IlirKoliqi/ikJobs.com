<?php 
ob_start();
require_once ('autoloader.php');?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ikJobs</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="admin.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    ikJobs
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Perdoruesit e Admin</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">ikJobs</h6>
            <a class="collapse-item" href="users.php">Shiko,Modifiko dhe Fshij</a>
            <a class="collapse-item" href="shtoUser.php">Shto Perdorues</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-table"></i>
        <span>Kategorite</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kategorite:</h6>
            <a class="collapse-item" href="kategorit.php">Shiko,Modifiko dhe Fshij</a>
            <a class="collapse-item" href="shtoKategori.php">Shto Kategori</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
        aria-expanded="true" aria-controls="collapseUtilities1">
        <i class="fas fa-fw fa-folder"></i>
        <span>Punet</span>
    </a>
    <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Punet:</h6>
            <a class="collapse-item" href="punet.php">Shiko,Modifiko dhe Fshij</a>
            <a class="collapse-item" href="shtoPune.php">Shto Pune</p></a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities11"
        aria-expanded="true" aria-controls="collapseUtilities1">
        <i class="fas fa-fw fa-folder"></i>
        <span>Aplikimet</span>
    </a>
    <div id="collapseUtilities11" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Aplikimet:</h6>
            <a class="collapse-item" href="aplikimet.php">Shiko,Modifiko dhe Fshij</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities111"
        aria-expanded="true" aria-controls="collapseUtilities1">
        <i class="fas fa-fw fa-cog"></i>
        <span>Subscribers</span>
    </a>
    <div id="collapseUtilities111" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Subscribers:</h6>
            <a class="collapse-item" href="subscribers.php">Shiko,Modifiko dhe Fshij</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>



</ul>
<!-- End of Sidebar -->