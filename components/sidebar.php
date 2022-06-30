<div id="app-sidepanel" class="app-sidepanel">
	<div id="sidepanel-drop" class="sidepanel-drop"></div>
	<div class="sidepanel-inner d-flex flex-column">
		<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none"></a>
		<div class="app-branding">
			<a class="app-logo" href="index.html"><img class="logo-icon me-2" src="../assets/images/back.png" alt="logo">
				<span class="logo-text text-success"><span class="text-danger">M</span>kulima<span class="text-danger">J</span>anja</span></a>

		</div>
		<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
			<ul class="app-menu list-unstyled accordion" id="menu-accordion">

				<?php
				if ($_SESSION['role'] == "admin") {
				?>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'admin_dashboard.php') ? 'active':''; ?>" href="../admin/admin_dashboard.php">
							<span class="nav-icon">
								<i class="mdi mdi-speedometer"></i>
							</span>
							<span class="nav-link-text">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'watumiaji.php') ? 'active':''; ?>" href="../admin/watumiaji.php">
							<span class="nav-icon">
								<i class="mdi mdi-account-multiple"></i>
							</span>
							<span class="nav-link-text">Watumiaji</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'bidhaa.php') ? 'active':''; ?>" href="../admin/bidhaa.php">
							<span class="nav-icon">
								<i class="mdi mdi-basket"></i>
							</span>
							<span class="nav-link-text">Bidhaa</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'miamala.php') ? 'active':''; ?>" href="../admin/miamala.php">
							<span class="nav-icon">
								<i class="mdi mdi-cash-usd"></i>
							</span>
							<span class="nav-link-text">Miamala</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'elimu.php') ? 'active':''; ?>" href="../admin/elimu.php">
							<span class="nav-icon">
								<i class="mdi mdi-book-open-page-variant"></i>
							</span>
							<span class="nav-link-text">Elimu</span>
						</a>
					</li>
					<li class="nav-item mb-3">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'ongeza_elimu.php') ? 'active':''; ?>" href="../admin/ongeza_elimu.php">
							<span class="nav-icon">
								<i class="mdi mdi-book-open-page-variant"></i>
							</span>
							<span class="nav-link-text">Ongeza Elimu</span>
						</a>
					</li>
				<?php } ?>

				<?php
				if ($_SESSION['role'] == "mazao" ||  $_SESSION['role'] == "user" || $_SESSION['role'] == "mbolea" || $_SESSION['role'] == "madawa") {
				?>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'home.php') ? 'active':''; ?>" href="../dashboard/home.php">
							<span class="nav-icon">
								<i class="mdi mdi-home fs-5"></i>
							</span>
							<span class="nav-link-text">Nyumbani</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'shop.php?bidhaa=mazao') ? 'active':''; ?>" href="../dashboard/shop.php?bidhaa=mazao">
							<span class="nav-icon">
								<i class="fa-solid fa-seedling"></i>
							</span>
							<span class="nav-link-text">Mazao</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'shop.php?bidhaa=mbolea') ? 'active':''; ?>" href="../dashboard/shop.php?bidhaa=mbolea">
							<span class="nav-icon">
								<i class="mdi mdi-cloud"></i>
							</span>
							<span class="nav-link-text">Mbolea</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'shop.php?bidhaa=madawa') ? 'active':''; ?>" href="../dashboard/shop.php?bidhaa=madawa">
							<span class="nav-icon">
								<i class="mdi mdi-flask"></i>
							</span>
							<span class="nav-link-text">Madawa</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'elimu.php') ? 'active':''; ?>" href="../dashboard/elimu.php">
							<span class="nav-icon">
								<i class="mdi mdi-book-open-page-variant"></i>
							</span>
							<span class="nav-link-text">Elimu</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'cart.php') ? 'active':''; ?>" href="../dashboard/cart.php">
							<span class="nav-icon">
								<i class="mdi mdi-cart"></i>
							</span>
							<span class="nav-link-text">Kapu Langu</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'payed.php') ? 'active':''; ?>" href="../dashboard/payed.php">
							<span class="nav-icon">
								<i class="mdi mdi-basket"></i>
							</span>
							<span class="nav-link-text">Nimenunua</span>
						</a>
					</li>
					<?php
					if ($_SESSION['role'] == "mazao" || $_SESSION['role'] == "mbolea" || $_SESSION['role'] == "madawa") {
					?>
						<li class="nav-item ">
							<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'wanunuaji.php') ? 'active':''; ?>" href="../muuzaji/wanunuaji.php">
								<span class="nav-icon">
									<i class="mdi mdi-book-open-page-variant"></i>
								</span>
								<span class="nav-link-text">Wanunuaji</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'ongeza_bidhaa.php') ? 'active':''; ?>" href="../muuzaji/ongeza_bidhaa.php">
								<span class="nav-icon">
									<i class="mdi mdi-lock-plus"></i>
								</span>
								<span class="nav-link-text">Ongeza Bidhaa</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'duka_langu.php') ? 'active':''; ?>" href="../muuzaji/duka_langu.php">
								<span class="nav-icon">
									<i class="mdi mdi-store"></i>
								</span>
								<span class="nav-link-text">Duka Langu</span>
							</a>
						</li>
					<?php } ?>

					<li class="nav-item mb-5">
						<a class="nav-link <?= (basename($_SERVER['REQUEST_URI']) == 'profile.php') ? 'active':''; ?>" href="../dashboard/profile.php">
							<span class="nav-icon">
								<i class="mdi mdi-account"></i>
							</span>
							<span class="nav-link-text">Wasifu</span>
						</a>
					</li>
				<?php } ?>





				<!-- <li class="nav-item">
					<a class="nav-link" href="../dashboard/malipo.php">
						<span class="nav-icon">
							<i class="mdi mdi-cash-usd"></i>
						</span>
						<span class="nav-link-text">Malipo</span>
					</a>
				</li> -->
			</ul>
		</nav>
	</div>

</div>