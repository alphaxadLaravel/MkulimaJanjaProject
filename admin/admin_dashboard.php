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
                            <?php

                            $sql = "SELECT count(*) as total FROM bidhaa WHERE category='mazao'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($result);
                            ?>
                            <div class="stats-figure"><?php echo $data['total']; ?></div>
                            <?php ?>
                            
                        </div>
                        <a class="app-card-link-mask" href="../admin/bidhaa.php"></a>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Mbolea</h4>
                            <?php

                            $sql = "SELECT count(*) as total FROM bidhaa WHERE category='mbolea'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($result);
                            ?>
                            <div class="stats-figure"><?php echo $data['total']; ?></div>
                            <?php ?>
                        </div>
                        <a class="app-card-link-mask" href="../admin/bidhaa.php"></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Madawa</h4>
                            <?php

                            $sql = "SELECT count(*) as total FROM bidhaa WHERE category='madawa'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($result);
                            ?>
                            <div class="stats-figure"><?php echo $data['total']; ?></div>
                            <?php ?>
                        </div>
                        <a class="app-card-link-mask" href="../admin/bidhaa.php"></a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Watumiaji</h4>
                            <?php

                            $sql = "SELECT count(*) as total FROM users WHERE role !='admin'";
                            $result = mysqli_query($conn, $sql);
                            $data = mysqli_fetch_assoc($result);
                            ?>
                            <div class="stats-figure"><?php echo $data['total']; ?></div>
                            <?php ?>
                        </div>
                        <a class="app-card-link-mask" href="../admin/watumiaji.php"></a>
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
                                        <?php 
                                        $sql = "SELECT * FROM users JOIN bidhaa ON bidhaa.user_id = users.id ORDER BY bidhaa.id Desc LIMIT 4";
                                        $check = mysqli_query($conn, $sql);
    
                                        while ($row = mysqli_fetch_assoc($check)) {
                                        
                                        ?>
                                            <tr>
                                                <td class="cell"><img src="<?php echo $row['picha']; ?>" class="img-fluid rounded" height="40px" width="40px" alt=""></td>
                                                <td class="cell"><span class="truncate"><?php echo  ucwords($row['jina_bidhaa']); ?></span></td>
                                                <td class="cell"><span class="truncate"><?php echo  ucwords($row['jina_kamili']); ?></span>
                                                </td>
                                                <td class="cell"><span class="truncate">Tsh <?php echo  number_format($row['bei']); ?></span></td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h6 class="text-muted fw-bold mb-3">😎 Wauzaji</h6>
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
                                        <?php 
                                            $sql = "SELECT * FROM users WHERE (role != 'admin' AND role != 'user') ORDER BY id Desc LIMIT 4";
                                            $check = mysqli_query($conn, $sql);
        
                                            while ($row = mysqli_fetch_assoc($check)) {
                                        ?>
                                            <tr>
                                                <td class="cell"><img src="<?php echo $row['profiles']; ?>" class=" rounded-circle" height="40px" width="40px" alt=""></td>
                                                <td class="cell"><span class="truncate"><?php echo  ucwords($row['jina_kamili']); ?></span></td>
                                                <td class="cell"><span class="truncate">Muuza <?php echo  ucwords($row['role']); ?></span>
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