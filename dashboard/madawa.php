<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            
        <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-flask text-success"></i> Madawa Yote</h1>
                </div>
                <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="docs-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-docs" name="searchdocs" class="form-control search-docs" placeholder="Tafuta Madawa hapa...">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Tafuta</button>
                                        </div>
                                    </form>
                                    
                                </div><!--//col-->
                                <div class="col-auto">
                                    
                                    <select class="form-select w-auto">
                                            <option selected="" value="option-1">Madawa Yote</option>
                                            <option value="option-2">Madawa Mapya</option>
                                            <option value="option-3">ya zamani</option>
                                            <option value="option-4">Bei ndogo</option>
                                            <option value="option-5">Bei kubwa</option>
                                            <option value="option-5">Offer 🌟</option>
                                            
                                    </select>
                                </div>
                                <div class="col-auto">

                                    <a class="btn app-btn-primary" href="#"> <i class="mdi mdi-filter-outline"></i>
                                    Chuja Madawa</a>
                                </div>
                            </div>
                         </div>
                </div>
            <div class="row g-4">
                     <?php for($i=0; $i < 8; $i++) { ?>
						<div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="card border-0 shadow-sm">
                                <div class="position-relative bg-light overflow-hidden">
                                    <img class="img-fluid w-100" src="../assets/images/pestcide-1.jpg" height="2500px" alt="">
                                    <div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">New</div>
                                </div>
                                <div class="text-center p-4">
                                    <a class="d-block h5 mb-2" href="product.html">Round Up</a>
                                    <span class="text-primary me-1">Tsh 1,000/=</span>
                                    <span class="text-body text-decoration-line-through">Tsh 2,000/=</span>
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
                <div class="d-flex justify-content-center">
                    <nav class="app-pagination my-3">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="mdi mdi-chevron-double-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="mdi mdi-chevron-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
		
    <?php include "../components/inner_footer.php" ?>

	</div>
<?php include "../layouts/inside_foot.php"; ?>
