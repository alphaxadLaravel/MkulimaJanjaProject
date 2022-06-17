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
                    <h1 class="app-page-title mb-0"> 💸 Miamala !</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">

                                <select class="form-select w-auto">
                                    <option selected="" value="option-1">Miamala Yote</option>
                                    <option value="option-2">Miamala ya mazao</option>
                                    <option value="option-3">Miamala ya Mbolea</option>
                                    <option value="option-3">Miamala ya Madawa</option>
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
                                        <th class="cell">Kutoka kwa</th>
                                        <th class="cell">Kwenda Kwa</th>
                                        <th class="cell">Dhumuni</th>
                                        <th class="cell">Kiasi</th>
                                        <th class="cell">Tawi</th>
                                        <th class="cell">Tarehe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < 10; $i++) { ?>
                                        <tr>
                                            <td class="cell"><span class="truncate">Alpha Jozee Kakulu</span></td>
                                            <td class="cell"><span class="truncate">Philmon Mbuto Philmon</span></td>
                                            <td class="cell"><span class="truncate text-success">Mazao</span>
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