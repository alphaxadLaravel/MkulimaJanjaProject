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
                    <h1 class="app-page-title mb-0">🍎 Bidhaa!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected="" value="option-1">Bidhaa Zote</option>
                                    <option value="option-2">Madawa</option>
                                    <option value="option-3">Mbolea</option>
                                    <option value="option-4">Mazao</option>
                                </select>
                            </div>
                        </div>
                    </div>
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
                                        <th class="cell">Kitengo </th>
                                        <th class="cell">Bei</th>
                                        <th class="cell">Muuzaji</th>
                                        <th class="cell">Inapatikana</th>
                                        <th class="cell">Block</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="cell"><img src="../assets/images/product-1.jpg" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                            <td class="cell"><span class="truncate">Nyanya za Mchuzi</span></td>
                                            <td class="cell"><span class="truncate text-danger">Mazao</span></td>
                                            <td class="cell"><span class="truncate text-success">100,000 @ kg</span>
                                            <td class="cell"><span class="truncate">Alphaxad Jozee</span>
                                            <td class="cell"><span class="truncate">kigamboni, Dar-es-Salaam</span>
                                            </td>
                                            <td class="cell d-flex">
                                                <a class="mx-2 btn-sm btn app-btn-secondary" href="#">🚫</a>
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