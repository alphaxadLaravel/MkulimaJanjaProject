<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-cart text-danger"></i> Kapu langu!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="malipo.php"> <i class="mdi mdi-check-all"></i>
                                    Fanya Malipo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Picha</th>
                                            <th class="cell">Bidhaa</th>
                                            <th class="cell">Bei</th>
                                            <th class="cell">idadi</th>
                                            <th class="cell">Jumla</th>
                                            <th class="cell">Badili</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                            // Mtambue user alie request kuona cart
                                            $user_id = $_SESSION['user_id'];

                                            // Vuta taarifa za cart kulingana na cart alizoweka
                                            $sql_check = "SELECT * FROM cart JOIN bidhaa ON cart.bidhaa_id = bidhaa.id WHERE cart.user_id ='$user_id'";
                                            $check = mysqli_query($conn, $sql_check);

                                            while($row = mysqli_fetch_assoc($check)){
                                        
                                        ?>
                                            <tr>
                                                <td class="cell"><img src="<?php echo $row['picha']; ?>" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                                <td class="cell"><span class="truncate"><?php echo $row['jina_bidhaa']; ?></span></td>
                                                <td class="cell"><span class="truncate">Tsh <?php echo number_format($row['bei']); ?>/=</span></td>
                                                <td class="cell"><span class="truncate text-danger">x<?php echo $row['added_quantity']; ?></span></td>
                                                <td class="cell"><span class="truncate">Tsh <?php echo number_format($row['added_quantity'] * $row['bei']) ?>/=</span></td>
                                                <td class="cell d-flex">
                                                    <a class="btn-sm app-btn-secondary mx-2" href="../logics/deleteCart.php?id=<?php echo $row['id']; ?>"><i class="mdi mdi-delete text-danger"></i></a>
                                                    <a class="btn-sm app-btn-secondary" href="bidhaa.php?id=<?php echo $row['id']; ?>"><i class="mdi mdi-lead-pencil text-primary"></i></a>
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