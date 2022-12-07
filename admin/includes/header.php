<div class="brand clearfix">
	<a href="dashboard.php" style="font-size: 20px; padding-left: 40px; top: 10px;
    position: relative;"><img src="img/logoputih.png" width="165px" height="40px"></a>  
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
            <?php
				$id = $_SESSION['id'];
				$sql = "SELECT * FROM admin WHERE id='$id'";
				$query = mysqli_query($koneksidb,$sql);
				$result = mysqli_fetch_array($query);
				$nama=$result['name'];
				$img=$result['Image'];
			?>
			<li class="ts-account">
				<a href="#">
				<img src="img/<?php echo $img;?>" width="20px" height="20px" padding="0px">&nbsp;
				<?php echo $nama; ?> 
                <span class="fa fa-angle-down"></span>
				</a>
				<ul>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="profile.php"></i>Profile</a></li>
					<li><a href="logout.php"></i>Log Out</a></li>
				</ul>
			</li>
		</ul>
	</div>
