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
                                    <?php

                                    include "../logics/connection.php";

                                    $user_id = $_SESSION['user_id'];

                                    $sql = "SELECT * FROM bidhaa WHERE user_id='$user_id' ORDER BY id Desc";
                                    $check = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($check)) {

                                    ?>
                                        <tr>
                                            <td class="cell"><img src="<?php echo $row['picha']; ?>" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                            <td class="cell"><span class="truncate"><?php echo $row['jina_bidhaa']; ?></span></td>
                                            <td class="cell"><span class="truncate">Tsh <?php echo number_format($row['bei']); ?>/= <?php echo $row['kipimo_bei']; ?> </span></td>
                                            <td class="cell"><span class="truncate"><?php echo $row['quantity']; ?> <?php echo $row['kipimo_quantity']; ?></span></td>
                                            <td class="cell"><span class="truncate"><?php echo $row['maelezo']; ?></span></td>
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