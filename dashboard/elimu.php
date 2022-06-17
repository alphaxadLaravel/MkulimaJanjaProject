<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-2 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-book-open-page-variant text-danger"></i> Elimu Bure!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="docs-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-docs" name="searchdocs" class="form-control search-docs" placeholder="Tafuta Mada hapa...">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Tafuta</button>
                                    </div>
                                </form>
                            </div>

                            <div class="col-auto">
                                <select class="form-select w-auto">
                                    <option selected="" value="option-1">Mada Zote</option>
                                    <option value="option-2">Elimu ya Mazao</option>
                                    <option value="option-2">Elimu ya Madawa</option>
                                    <option value="option-2">Elimu ya Mbolea</option>
                                    <option value="option-2">Elimu kwa Mkulima</option>
                                </select>
                            </div>

                            <div class="col-auto">

                                <a class="btn app-btn-primary" href="#"> <i class="mdi mdi-filter-outline"></i>
                                    Chuja Mada</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row ">
                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="col-md-4 wow my-3 fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <div class="card border-0 shadow-sm">
                            <img class="img-fluid" src="../assets/images/cocoa.webp" alt="">
                            <div class="bg-light p-4">
                                <a class="d-block h5 lh-base mb-4" href="">Jifunze Kilimo cha Cocoa</a>
                                <div class="text-muted border-top pt-4">
                                    <small class="me-3"><i class="fa fa-user text-primary me-2"></i>MkulimaJanja</small>
                                    <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2022</small>
                                </div>
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

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>