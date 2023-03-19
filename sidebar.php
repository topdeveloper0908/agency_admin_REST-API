<?php  
    $authorization = $_COOKIE['authorization'];
    $agencies = explode("$$", $_COOKIE['agency']);
    $agencies_id = explode("$$", $_COOKIE['agency_id']);
?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">Admin Panel</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-building"></i>
        <span>Agency Names</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <?php
                foreach ($agencies as $key => $agency) {
                    if($key != count($agencies)-1)
                        echo "<button class='collapse-item d-inline-block' onClick='changeAgencyData(".$agencies_id[$key].")'>".$agency."</button>";
                }
            ?>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Charts -->
<li id="overview_item" class="nav-item">
    <a class="nav-link" href="overview.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Overview</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li id="setting_item" class="nav-item">
    <a class="nav-link" href="agency-setting.php">
        <i class="fas fa-fw fa-toolbox"></i>
        <span>Agency Settings</span>
    </a>
</li>
<li id="module_item" class="nav-item">
    <a class="nav-link" href="module-setting.html">
        <i class="fas fa-fw fa-tools"></i>
        <span>Module Settings</span>
    </a>
</li>
<li id="user_item" class="nav-item">
    <a class="nav-link" href="user-setting.html">
        <i class="fas fa-fw fa-user-cog"></i>
        <span>User Settings</span>
    </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li id="call_item" class="nav-item">
    <a class="nav-link" href="call-type.html">
        <i class="fas fa-fw fa-phone-alt"></i>
        <span>Call Types</span>
    </a>
</li>
<li id="users_item" class="nav-item">
    <a class="nav-link" href="users.html">
        <i class="fas fa-fw fa-user-friends"></i>
        <span>Users</span>
    </a>
</li>
<li id="devices_item" class="nav-item">
    <a class="nav-link" href="devices.html">
        <i class="fas fa-fw fa-desktop"></i>
        <span>Devices</span>
    </a>
</li>
<li id="page_item" class="nav-item">
    <a class="nav-link" href="page-group.html">
        <i class="fas fa-fw fa-network-wired"></i>
        <span>Page Groups</span>
    </a>
</li>
<li id="billing_item" class="nav-item">
    <a class="nav-link" href="billing.html">
        <i class="fas fa-fw fa-money-bill-wave"></i>
        <span>Billing</span>
    </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="logout.php">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Log Out</span>
    </a>
    <!-- Nav Item - Pages Collapse Menu -->
</li>
</ul>
<!-- End of Sidebar -->
<script>
    // To show the loader
    var currentUrl = window.location.href;
    if(currentUrl.includes('overview')) {
        document.getElementById('overview_item').classList.add('active');
    }
    if(currentUrl.includes('agency-setting')) {
        document.getElementById('setting_item').classList.add('active');
    }
    function changeAgencyData(agency_id) {
        document.cookie = "agency_id = " + agency_id;
        window.location.replace("overview.php");
    }

</script>