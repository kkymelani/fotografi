<header>
  <div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-4">
          <div class="logo"><a href="index.php"><img src="admin/img/logoputih.png" width="175px" height="50px" alt="image"/></a> </div>
        </div>
        <div class="col-sm-8 col-md-8">
          <div class="header_info">
			<?php   if(strlen($_SESSION['ulogin'])==0)
			{	
			?>
			<div class="login_btn" style="color:#14274E"> 
				<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> 
			</div>
			<?php }
			else{ 
				echo "Welcome!";
			} ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"  bgcolor="blue"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> 
<?php 
$email=$_SESSION['ulogin'];
$sql ="SELECT nama_user FROM member WHERE email='$email'";
$query = mysqli_query($koneksidb,$sql);
if(mysqli_num_rows($query)>0)
{
while($results = mysqli_fetch_array($query))
	{
	 echo htmlentities($results['nama_user']); }}?>
	 <i class="fa fa-angle-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
           <?php if($_SESSION['ulogin']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Change Password</a></li>
            <li><a href="riwayatsewa.php">Riwayat Pemesanan</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <?php }?>
          </ul>
            </li>
          </ul>
        </div>
      </div>
	  	  
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
		  <li><a href="index.php">Home</a></li>
          <li><a href="paket.php">Package</a></li>
          <li><a href="page.php?type=aboutus">About Us</a></li>
          <li><a href="contact-us.php">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>