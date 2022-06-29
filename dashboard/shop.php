<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <?php
    include "../components/product.php";

    $page_request = $_GET['bidhaa'];

    ?>

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row  mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">
                        <?php if ($page_request == "mazao") { ?>
                            <i class="fa-solid fa-seedling text-success"></i> Mazao Yote
                        <?php } ?>
                        <?php if ($page_request == "mbolea") { ?>
                            <i class="mdi mdi-cloud text-danger"></i> Mbolea Zote
                        <?php } ?>
                        <?php if ($page_request == "madawa") { ?>
                            <i class="mdi mdi-flask text-success"></i> Madawa Yote
                        <?php } ?>
                    </h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <form class="docs-search-form row gx-1 align-items-center">
                                    <div class="col-auto">
                                        <input type="text" id="search-docs" name="searchdocs" class="form-control search-docs" placeholder="Tafuta  hapa...">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn app-btn-secondary">Tafuta</button>
                                    </div>
                                </form>

                            </div>
                            <!--//col-->
                            <div class="col-auto">
                                <select class="form-select w-auto">
                                    <?php if ($page_request == "mazao") { ?>
                                        <option selected="" value="option-1">Mazao Yote</option>
                                        <option value="option-2">Mazao Mapya</option>
                                        <option value="option-3">Mazao ya zamani</option>
                                        <option value="option-4">Bei ndogo</option>
                                        <option value="option-5">Bei kubwa</option>
                                        <option value="option-5">Offer 🌟</option>

                                    <?php } ?>
                                    <?php if ($page_request == "mbolea") { ?>
                                        <option selected="" value="option-1">Mbolea Zote</option>
                                        <option value="option-2">Mbolea Mapya</option>
                                        <option value="option-3">za zamani</option>
                                        <option value="option-4">Bei ndogo</option>
                                        <option value="option-5">Bei kubwa</option>
                                        <option value="option-5">Offer 🌟</option>
                                    <?php } ?>
                                    <?php if ($page_request == "madawa") { ?>
                                        <option selected="" value="option-1">Madawa Yote</option>
                                        <option value="option-2">Madawa Mapya</option>
                                        <option value="option-3">ya zamani</option>
                                        <option value="option-4">Bei ndogo</option>
                                        <option value="option-5">Bei kubwa</option>
                                        <option value="option-5">Offer 🌟</option>
                                    <?php } ?>
                                </select>



                            </div>
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="#"> <i class="mdi mdi-filter-outline"></i>
                                    Chuja </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">

                <?php productCard($conn, $page_request); ?>

                <!-- <div class="d-flex justify-content-center">
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
                </div> -->
            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php ?>
    <?php include "../layouts/inside_foot.php"; ?>