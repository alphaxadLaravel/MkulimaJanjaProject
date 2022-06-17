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
                    <h1 class="app-page-title mb-0"> 🛒 Wanunuaji !</h1>
                </div>
            </div>

            <div class="row mt-4">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Bidhaa</th>
                                        <th class="cell"></th>
                                        <th class="cell">Mnunuaji</th>
                                        <th class="cell">Idadi</th>
                                        <th class="cell">Jumla</th>
                                        <th class="cell">Tawi</th>
                                        <th class="cell">Tarehe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="cell"><img src="../assets/images/product-1.jpg" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                            <td class="cell"><span class="truncate">Nyanya za Mchuzi</span></td>
                                            <td class="cell"><span class="truncate">Philmon Mbuto Philmon</span></td>
                                            <td class="cell"><span class="truncate ">20</span>
                                            <td class="cell"><span class="truncate ">200,0000</span>
                                            <td class="cell"><span class="truncate ">Airtel Money</span>
                                            <td class="cell"><span class="truncate">29-04-2022</span>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

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