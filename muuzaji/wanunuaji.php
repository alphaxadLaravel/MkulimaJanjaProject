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
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $user_id = $_SESSION['user_id'];

                                        $sql = "SELECT * FROM malipo JOIN bidhaa ON malipo.bidhaa_id = bidhaa.id JOIN users ON malipo.user_id = users.id WHERE bidhaa.user_id='$user_id'";

                                        // JOIN bidhaa ON bidhaa.user_id = users.id ORDER BY bidhaa.id Desc
                                        $check = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($check)) {
                                    ?>
                                        <tr>
                                            <td class="cell"><img src="<?php echo $row['picha'] ?>" class="img-fluid rounded" height="35px" width="35px" alt=""></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_bidhaa']); ?></span></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_kamili']); ?></span></td>
                                            <td class="cell"><span class="truncate "><?php echo $row['idadi'] ?></span>
                                            <td class="cell"><span class="truncate ">Tsh <?php echo number_format($row['total']); ?>/=</span>
                                            <td class="cell"><span class="truncate "><?php echo ucwords($row['branch']); ?></span>
                                            </td>
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