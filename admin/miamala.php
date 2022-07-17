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
                                        <th class="cell">Bidhaa</th>
                                        <th class="cell">Kiasi</th>
                                        <th class="cell">Idadi</th>
                                        <th class="cell">Tawi</th>
                                        <th class="cell">Hali</th>
                                        <th class="cell">Hamisha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                        $sql = "SELECT *, malipo.id AS lipa FROM malipo JOIN users ON malipo.user_id = users.id JOIN bidhaa ON malipo.bidhaa_id = bidhaa.id";
                                        // JOIN bidhaa ON bidhaa.user_id = users.id ORDER BY bidhaa.id Desc
                                        $check = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($check)) {
                                
                                    ?>
                                        <tr>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_kamili']); ?></span></td>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['jina_muuzaji']); ?></span></td>
                                            <td class="cell"><span class="truncate text-success"><?php echo ucwords($row['jina_bidhaa']); ?></span>
                                            <td class="cell"><span class="truncate "><?php echo ucwords($row['total']); ?></span>
                                            <td class="cell"><span class="truncate"><?php echo ucwords($row['idadi']); ?></span>
                                            <td class="cell"><span class="truncate "><?php echo ucwords($row['branch']); ?></span>
                                            <td class="cell">
                                                <?php if($row['hali'] != "imethibitishwa"){?>
                                                    <span class="truncate text-danger"><?php echo ucwords($row['hali']); ?>
                                                <?php }else { ?>
                                                <span class="truncate text-success"><?php echo ucwords($row['hali']); ?>
                                                <?php }?>
                                            </span>
                                            <td class="cell">
                                                <?php if($row['hali'] != "imethibitishwa"){?>
                                            <a class="mx-2 btn-sm btn app-btn-secondary" href="../logics/gawaMiamala.php?id=<?php echo $row['lipa']; ?>"><i class="mdi mdi-telegram text-success"></i></a>
                                            <?php }else { ?>
                                                <i class="mdi mdi-check-all text-success"></i>
                                            <?php }?>
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

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>