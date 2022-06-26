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

					$id = $_SESSION['id'];

					$sql = "SELECT * FROM users WHERE id='$id'";
					$check = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_assoc($check)){
				?>
					<div class="app-utilities col-auto">
						<div class="app-utility-item app-notifications-dropdown dropdown">
							<a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
								data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
								title="Notifications">
								
								<i class="fa fa-cart-plus fs-4" width="1em" height="1em" viewBox="0 0 16 16" aria-hidden="true"></i>
								<span class="icon-badge">0</span>
							</a>
							<!--//dropdown-toggle-->

							<div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
								<div class="dropdown-menu-header p-3">
									<h5 class="dropdown-menu-title mb-0">Kapu Langu</h5>
								</div>
								<!--//dropdown-menu-title-->
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
								<!--//dropdown-menu-content-->

								<div class="dropdown-menu-footer p-2 text-center">
									<a href="cart.php">Kapu lote</a>
								</div>

							</div>
							<!--//dropdown-menu-->
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