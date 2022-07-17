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
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-basket text-danger"></i> Nimenunua!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row  justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="cart.php"> <i class="mdi mdi-cart"></i>
                                    Rudi kapuni</a>
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
                                        <th class="cell">Bidhaa</th>
                                        <th class="cell">Muuzaji</th>
                                        <th class="cell">Nimelipa</th>
                                        <th class="cell">idadi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $user_id = $_SESSION['user_id'];

                                        $sql = "SELECT * FROM malipo JOIN bidhaa ON malipo.bidhaa_id = bidhaa.id WHERE malipo.user_id='$user_id'";

                                        // JOIN bidhaa ON bidhaa.user_id = users.id ORDER BY bidhaa.id Desc
                                        $check = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($check)) {
                                    
                                    ?>
                                        <tr>
                                            <td class="cell"><img src="<?php echo $row['picha'] ?>" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_bidhaa']); ?></span></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_muuzaji']); ?></span></td>
                                            <td class="cell"><span class="truncate">Tsh <?php echo number_format($row['total']); ?>/=</span></td>
                                            <td class="cell"><span class="truncate"><?php echo $row['idadi'] ?></span></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>