<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title text-muted">👋 Karibu, <span class="text-success">Admin!</span></h1>
            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Mazao</h4>
                            <div class="stats-figure">200</div>
                        </div>
                        <a class="app-card-link-mask" href=""></a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Mbolea</h4>
                            <div class="stats-figure">100</div>
                        </div>
                        <a class="app-card-link-mask" href=""></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Madawa</h4>
                            <div class="stats-figure">23</div>
                        </div>
                        <a class="app-card-link-mask" href=""></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Watumiaji</h4>
                            <div class="stats-figure">6</div>
                        </div>
                        <a class="app-card-link-mask" href=""></a>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                    <div class="col-md-8">
                        <h6 class="text-muted fw-bold mb-3">🏘 Bidhaa</h6>
                        <div class="card border-0 app-card-orders-table shadow-sm mb-3">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Bidhaa</th>
                                                <th class="cell"></th>
                                                <th class="cell">Muuzaji</th>
                                                <th class="cell">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                                <tr>
                                                    <td class="cell"><img src="../assets/images/product-1.jpg" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                                    <td class="cell"><span class="truncate">Nyanya Nyekundu</span></td>
                                                    <td class="cell"><span class="truncate">Philmon Mbuto</span>
                                                    </td>
                                                    <td class="cell"><span class="truncate">Tsh 150,000</span></td>
                                                </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-muted fw-bold mb-3">😎 Watumiaji</h6>
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Jina kamili</th>
                                                <th class="cell"></th>
                                                <th class="cell">Jukumu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i = 0; $i < 6; $i++) { ?>
                                                <tr>
                                                    <td class="cell"><img src="../assets/images/mbuto.jpg" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                                    <td class="cell"><span class="truncate">Alpha jozee</span></td>
                                                    <td class="cell"><span class="truncate">Muuza Mbolea</span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>