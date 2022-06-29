<div class="app-header-inner">
	<div class="container-fluid py-2">
		<div class="app-header-content">
			<div class="row justify-content-between align-items-center">

				<div class="col-auto">
					<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
							role="img">
							<title>Menu</title>
							<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
								stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
						</svg>
					</a>
				</div>
				<!--//col-->
				<div class="search-mobile-trigger d-sm-none col">
					<i class="search-mobile-trigger-icon fas fa-search"></i>
				</div>
				<!--//col-->
				<div class="app-search-box col">
					<form class="app-search-form">
						<input type="text" placeholder="Tafuta chochote hapa..." name="search"
							class="form-control search-input">
						<button type="submit" class="btn search-btn btn-primary" value="Search"><i
								class="fas fa-search"></i></button>
					</form>
				</div>
				<!--//app-search-box-->

				<?php 

					$user_id = $_SESSION['user_id'];

					$sql = "SELECT * FROM users WHERE id='$user_id'";
					$data = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_assoc($data)){
				?>
					<div class="app-utilities col-auto">
						<div class="app-utility-item app-notifications-dropdown dropdown">
							<?php

								// Vuta taarifa za cart kulingana na cart alizoweka
								$sql = "SELECT sum(added_quantity) AS 'count' FROM cart  WHERE user_id ='$user_id'";
								$result = mysqli_query($conn, $sql);
								$check = mysqli_fetch_assoc($result);
		
								$count = $check['count'];
							?>
							<a class="dropdown-toggle no-toggle-arrow"  href="../dashboard/cart.php" >
								
								<i class="fa fa-cart-plus fs-4" width="1em" height="1em" viewBox="0 0 16 16" aria-hidden="true"></i>
								<span class="icon-badge"><?php if($count > 0){ echo $count; } else{ echo 0; } ?></span>
							</a>

							<!-- <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
								<div class="dropdown-menu-header p-3">
									<h5 class="dropdown-menu-title mb-0">Kapu Langu</h5>
								</div>

								<div class="dropdown-menu-content">
									<div class="item p-3">
										<div class="row gx-2 justify-content-between align-items-center">
											<div class="col-auto">
												<img class="profile-image rounded"
													src="../assets/images/mbolea-1.jpg"  alt="">
											</div>
											<div class="col">
												<div class="info">
													<div class="desc">Mbolea Grade A+</div>
													<div class="meta"> +1</div>
												</div>
											</div>
											
										</div>
										<div class="row gx-2 justify-content-between align-items-center mt-2">
											<div class="col-auto">
												<img class="profile-image rounded"
													src="../assets/images/mbolea-1.jpg" alt="">
											</div>
											<div class="col">
												<div class="info">
													<div class="desc">Mbolea Grade A+</div>
													<div class="meta"> +2</div>
												</div>
											</div>
											
										</div>
										<a class="link-mask" href="cart.php"></a>
									</div>
								</div>

								<div class="dropdown-menu-footer p-2 text-center">
									<a href="cart.php">Kapu lote</a>
								</div>

							</div> -->
							<?php ?>
						</div>
						<!-- another icon can be added here aside CART -->

						<div class="app-utility-item app-user-dropdown dropdown">
							<a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
								role="button" aria-expanded="false"><img src="<?php echo $row['profiles']; ?>"
									alt="user profile" class="rounded-circle"></a>
							<ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="profile.php">Wasifu</a></li>
								<!-- <li><a class="dropdown-item" href="settings.html">Settings</a></li> -->
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="../outside/login.php">Toroka</a></li>
							</ul>
						</div>
						<!--//app-user-dropdown-->
					</div>
				<?php } ?>
				<!--//app-utilities-->
			</div>
			<!--//row-->
		</div>
		<!--//app-header-content-->
	</div>
	<!--//container-fluid-->
</div>