<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="row g-3 mb-3 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">๐จโ๐ฉโ๐งโ๐ฆ Watumiaji!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-end justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <select class="form-select w-auto">
                                    <option selected="" value="option-1">Watumiaji wote</option>
                                    <option value="option-2">wateja</option>
                                    <option value="option-3">Wauza mbolea</option>
                                    <option value="option-4">wauza madawa</option>
                                    <option value="option-4">wauza Mazao</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row  mt-4">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Mtumiaji</th>
                                        <th class="cell">Jinakamili</th>
                                        <th class="cell">Username</th>
                                        <th class="cell">Simu</th>
                                        <th class="cell">Jukumu</th>
                                        <!-- <th class="cell">Block</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $sql = "SELECT * FROM users where role !='admin' ORDER BY id Desc";
                                    $check = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($check)) {


                                    ?>
                                        <tr>
                                            <td class="cell"><img src="<?php echo $row['profiles']; ?>" class=" rounded-circle" height="40px" width="40px" alt=""></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_kamili']); ?></span></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['username']); ?></span>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['simu']); ?></span>
                                            <td class="cell"><span class="truncate text-success"><?php echo ucwords($row['role']); ?></span>
                                            </td>
                                            <!-- <td class="cell d-flex">
                                                <a class="mx-2 btn-sm btn app-btn-secondary" href="#">๐ซ</a>
                                            </td> -->
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

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
    <?php include "../layouts/inside_foot.php"; ?>