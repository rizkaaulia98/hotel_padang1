<?php
session_start();
$username = $_SESSION['username'];
$id_city  = $_SESSION['id'];
$city     = $_SESSION['name'];
?>
<ul class="sidebar-menu" id="nav-accordion">
  <?php if ($city=='Padang') {?>
    <p class="centered"><a href="profile.html"><img src="../../_foto/2.jpeg" class="img-circle" width="60"></a></p>
  <?php }elseif ($city=='Bukittinggi') {?>
    <p class="centered"><a href="profile.html"><img src="../../_foto/3.jpg" class="img-circle" width="90"></a></p>
  <?php } ?>

  <h5 class="centered"><p><?php echo $_SESSION['username']; ?></p></h5>

  <li class="mt">
      <a href="../">
        <i class="fa fa-dashboard"></i>
          <span>User Access</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="?page=chart">
          <i class="fa fa-bar-chart-o"></i>
          <span>Web Analytics</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="http://localhost/hotel_padang1/hotel/admin/pages/distribution.php">
          <i class="icon-chart"></i>
          <span>Hotel Distribution</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="?page=home">
          <i class="fa fa-building-o"></i>
          <span>List Hotel</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="?page=setRecommendation">
          <i class="fa fa-star"></i>
          <span>Set Recommendations</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="?page=fasilitas">
          <i class="fa fa-lightbulb-o"></i>
          <span>Facilities</span>
      </a>
  </li>
  <!-- <li class="sub-menu">
      <a href="?page=roomtype">
          <i class="fa fa-book"></i>
          <span>Room Type</span>
      </a>
  </li> -->
  <li class="sub-menu">
      <a href="?page=pass_change">
          <i class="fa fa-cog"></i>
          <span>Change Password</span>
      </a>
  </li>
  <li class="sub-menu">
      <a href="?page=manage_user">
          <i class="fa fa-sitemap"></i>
          <span>Manage User</span>
      </a>
  </li>
  <li class="sub-menu">
                      <a class="active" href="?page=city">
                          <i class="fa fa-chevron-circle-left"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
</ul>
