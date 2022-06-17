<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-store text-danger"></i> Duka Langu!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row  justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="ongeza_bidhaa.php"> <i class="mdi mdi-plus"></i>
                                    Ongeza Bidhaa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Picha</th>
                                        <th class="cell">Jina</th>
                                        <th class="cell">Bei</th>
                                        <th class="cell">idadi</th>
                                        <th class="cell">Maelezo</th>
                                        <th class="cell">Badili</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <tr>
                                            <td class="cell"><img src="../assets/images/product-1.jpg" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                            <td class="cell"><span class="truncate">Mbolea grade A+</span></td>
                                            <td class="cell"><span class="truncate">Tsh 20, 000/=</span></td>
                                            <td class="cell"><span class="truncate">30</span></td>
                                            <td class="cell"><span class="truncate">Hii bidhaa inapatikan mda wote lipia nikuletee ulipo</span></td>
                                            <td class="cell d-inline-flex">
                                                <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i class="mdi mdi-delete text-danger "></i></a>
                                                <a class="btn-sm btn app-btn-secondary" href="ongeza_bidhaa.php"><i class="mdi mdi-pencil text-primary "></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <!--//table-responsive-->

                    </div>
                </div>
            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>