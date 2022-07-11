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
                                        <th class="cell">Kilichopo</th>
                                        <th class="cell">Hali</th>
                                        <th class="cell">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $sql = "SELECT * FROM users JOIN bidhaa ON bidhaa.user_id = users.id ORDER BY bidhaa.id Desc";
                                        $check = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($check)) {

                                    ?>
                                        <tr>
                                            <td class="cell"><img src="<?php echo $row['picha']; ?>" class=" rounded" height="40px" width="40px" alt=""></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_bidhaa']);  ?></span></td>
                                            <td class="cell"><span class="truncate text-danger"><?php echo $row['category'] ?></span></td>
                                            <td class="cell"><span class="truncate text-success"><?php echo number_format( $row['bei'])." ".$row['kipimo_bei']; ?> </span>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_kamili']); ?></span>
                                            <td class="cell"><span class="truncate"><?php echo $row['kipimo_quantity']." ".$row['quantity']; ?></span>
                                            <td class="cell"><span class="truncate text-success"><?php echo $row['status'] ?></span>
                                            </td>
                                            <td class="gy-2">
                                                <a class="mx-2 btn-sm btn app-btn-secondary" href="../logics/blockBidhaa.php?id=<?php echo $row['id']; ?>"><i class="mdi mdi-block-helper"></i></a>
                                                <a class="mx-2 btn-sm btn app-btn-secondary" href="../logics/activateBidhaa.php?id=<?php echo $row['id']; ?>"><i class="mdi mdi-check-all"></i></a>
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