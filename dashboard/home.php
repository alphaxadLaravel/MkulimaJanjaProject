<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">
    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->
    <?php include "../components/sidebar.php"; ?>
</header>
<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<h1 class="app-page-title">Karibu, <span class="text-success"><?php echo ucfirst($_SESSION['username']); ?>!</span></h1>

				<div class="row g-4 mb-4">
					<div class="col-12 col-lg-4">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder">
											<img src="../assets/images/icon-1.png" width="35px" height="35px" alt="">
										</div>
									</div>
									<div class="col-auto">
										<h4 class="app-card-title">Mazao</h4>
									</div>
								</div>
							</div>
							<div class="app-card-body px-4">

								<div class="intro">
                                Mkulima Janja inakuletea mazao halisi kutoka ka wakulima mbali mbali nchi kote!</div>
							</div>
							<div class="app-card-footer p-4 mt-auto">
								<a class="btn app-btn-secondary" href="../dashboard/shop.php?bidhaa=mazao">Tazama Mazao</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder">
                                         <img src="../assets/images/icon-2.png" width="35px" height="35px" alt="">
										</div>
									</div>
									<div class="col-auto">
										<h4 class="app-card-title">Mbolea</h4>
									</div>
								</div>
							</div>
							<div class="app-card-body px-4">
								<div class="intro">Tunazo mbolea safi kutoka katik viwanda na maduka yaliyothibitisha na TBS</div>
							</div>
							<div class="app-card-footer p-4 mt-auto">
								<a class="btn app-btn-secondary" href="../dashboard/shop.php?bidhaa=mbolea">Tazama Mbolea</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
							<div class="app-card-header p-3 border-bottom-0">
								<div class="row align-items-center gx-3">
									<div class="col-auto">
										<div class="app-icon-holder">
                                         <img src="../assets/images/icon-3.png" width="35px" height="35px" alt="">
										</div>
									</div>
									<div class="col-auto">
										<h4 class="app-card-title">Madawa</h4>
									</div>
								</div>
							</div>
							<div class="app-card-body px-4">

								<div class="intro">Dawa za kuua wadudu katika mimea na mazao pia zinapatikana!</div>
							</div>
							<div class="app-card-footer p-4 mt-auto">
								<a class="btn app-btn-secondary" href="../dashboard/shop.php?bidhaa=madawa">Tazama Madawa</a>
							</div>
						</div>
					</div>
				</div>
				<h4 class="app-page-title"><i class="fa-solid fa-seedling"></i> Baadhi ya <span class="text-danger">Mazao</span>!</h4>
				
				<div class="row g-4">
					<?php for($i=0; $i < 4; $i++) { ?>
						<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="card border-0 shadow-sm">
							<div class="position-relative bg-light overflow-hidden">
								<a href="bidhaa.php"><img class="img-fluid w-100" src="../assets/images/nyanya.webp" height="2500px" alt=""></a>
								<!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
							</div>
							<div class="text-center p-4">
								<a class="d-block h5 mb-2" href="bidhaa.php">Nyanya za Mchuzi</a>
								<span class=" me-1"><span class="text-dark">Bei:</span> <span class="text-primary">Tsh 1,000/=</span></span>
								<!-- <span class="text-body text-decoration-line-through">Tsh 2,000/=</span> -->
							</div>
							<div class="d-flex border-top">
								<small class="w-50 text-center border-end py-2">
									<a class="text-body" href="bidhaa.php"><i class="fa fa-eye text-primary me-2"></i>Taarifa  zaidi</a>
								</small>
								<small class="w-50 text-center py-2">
									<a class="text-body" href="cart.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Weka Kapuni</a>
								</small>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="d-flex justify-content-end my-3">
						<a href="mazao.php" class="btn btn-sm btn-outline-success">Tazama Mazao Yote <i class="mdi mdi-arrow-right"></i></a>
					</div>
				</div>

				<h4 class="app-page-title"><i class="mdi mdi-corn"></i> Baadhi ya <span class="text-danger">Mbolea</span>!</h4>
				
				<div class="row g-4">
				<?php for($i=0; $i < 4; $i++) { ?>
						<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="card border-0 shadow-sm">
							<div class="position-relative bg-light overflow-hidden">
								<a href="bidhaa.php"><img class="img-fluid w-100" src="../assets/images/mbolea-2.jpg" height="2500px" alt=""></a>
								<!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
							</div>
							<div class="text-center p-4">
								<a class="d-block h5 mb-2" href="bidhaa.php">Mbolea Grade A+</a>
								<span class=" me-1"><span class="text-dark">Bei:</span> <span class="text-primary">Tsh 1,000/=</span></span>
								<!-- <span class="text-body text-decoration-line-through">Tsh 2,000/=</span> -->
							</div>
							<div class="d-flex border-top">
								<small class="w-50 text-center border-end py-2">
									<a class="text-body" href="bidhaa.php"><i class="fa fa-eye text-primary me-2"></i>Taarifa  zaidi</a>
								</small>
								<small class="w-50 text-center py-2">
									<a class="text-body" href="cart.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Weka Kapuni</a>
								</small>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="d-flex justify-content-end my-3">
						<a href="mbolea.php" class="btn btn-sm btn-outline-success">Tazama Mbolea Zote <i class="mdi mdi-arrow-right"></i></a>
					</div>
				</div>

				
				<h4 class="app-page-title"><i class="mdi mdi-flask"></i> Baadhi ya <span class="text-danger">Madawa</span>!</h4>
				
				<div class="row g-4">
				<?php for($i=0; $i < 4; $i++) { ?>
						<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
						<div class="card border-0 shadow-sm">
							<div class="position-relative bg-light overflow-hidden">
								<a href="bidhaa.php"><img class="img-fluid w-100" src="../assets/images/pest-2.webp" height="2500px" alt=""></a>
								<!-- <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div> -->
							</div>
							<div class="text-center p-4">
								<a class="d-block h5 mb-2" href="bidhaa.php">Round Up Pest</a>
								<span class=" me-1"><span class="text-dark">Bei:</span> <span class="text-primary">Tsh 1,000/=</span></span>
								<!-- <span class="text-body text-decoration-line-through">Tsh 2,000/=</span> -->
							</div>
							<div class="d-flex border-top">
								<small class="w-50 text-center border-end py-2">
									<a class="text-body" href="bidhaa.php"><i class="fa fa-eye text-primary me-2"></i>Taarifa  zaidi</a>
								</small>
								<small class="w-50 text-center py-2">
									<a class="text-body" href="cart.php"><i class="fa fa-shopping-bag text-primary me-2"></i>Weka Kapuni</a>
								</small>
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="d-flex justify-content-end my-3">
						<a href="madawa.php" class="btn btn-sm btn-outline-success">Tazama Madawa Yote <i class="mdi mdi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>

		<?php include "../components/inner_footer.php" ?>

	</div>
<?php include "../layouts/inside_foot.php"; ?>
