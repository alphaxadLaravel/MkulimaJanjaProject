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
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-clipboard-outline text-danger"></i> Bidhaa!</h1>
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="malipo.php"> <i class="mdi mdi-check-all"></i>
                                    Nunua Sahivi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-1">
                    <?php
                    $bidhaa = $_GET['id'];
                    $_SESSION['bidhaa'] = $bidhaa;

                    $sql = "SELECT * FROM bidhaa JOIN users ON bidhaa.user_id = users.id WHERE bidhaa.id ='$bidhaa'";
                    $check = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($check)) {

                    ?>
                        <div class="card  border-0 shadow-sm  my-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $row['picha'] ?>" alt="Trendy Pants and Shoes" class="img-fluid rounded-start h-100 w-100" />
                                </div>
                                <div class="col-md-8 px-4">
                                    <div class="d-flex justify-content-between py-3 align-items-center">
                                        <span class=" fw-bold">Bidhaa: <span class="text-danger"><?php echo $row['jina_bidhaa'] ?></span> </span>
                                        <div class="">
                                            <img src="<?php echo $row['profiles'] ?>" width="30px" height="30px" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                    <p>
                                        <?php echo $row['maelezo'] ?>
                                    </p>
                                    <!-- <span class="text-muted fw-bold">Bei: <span class="text-danger">1,0000,0000/= </span>Kwa KG</span> <br>
                                <span class="text-muted fw-bold">Idadi Iliyopo: <span class="text-danger"> 123 </span>KG</span> <br>
                                <span class="text-muted fw-bold">Eneo Zilipo: <span class="text-danger"> Kigoma Ujiji </span></span><br>
                                -->
                                    <span class="fw-bold">Bei:</span>
                                    <!-- <p class="text-muted"><span class="text-danger"><?php echo number_format($row['bei']) ?> </span> <?php echo $row['kipimo_bei'] ?></p> -->
                                    <div class="d-flex justify-content-start align-items-end">
                                    <h2 class="text-muted"><span class="text-danger"><?php echo number_format($row['bei']) ?>/= </span> </h2> <small><?php echo $row['kipimo_bei'] ?></small>

                                    </div>
                                    <span class="fw-bold">Idadi Iliyopo:</span>
                                    <p class="text-muted"><?php echo $row['kipimo_quantity'] ?> <span class="text-danger"><?php echo $row['quantity'] ?> </span> </p>

                                    <form action="../logics/cartServer.php" method="POST">
                                        <div class="row mt-2 d-flex align-items-center justify-content-center">

                                            <div class="col-md-8 my-3">
                                                <div class="row d-flex align-items-center">
                                                    <div class="col-5">
                                                        <input type="text" name="quantity" id="sst" maxlength="10" value="1" title="Quantity:" class="form-control">
                                                    </div>
                                                    <div class="col-7 d-flex">
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst < <?php echo $row['quantity'] ?>) result.value++;return false;" class="btn mx-1 btn-sm app-btn-secondary increase items-count" type="button"><i class="mdi mdi-plus"></i></button>
                                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 1 ) result.value--;return false;" class="btn btn-sm app-btn-secondary reduced items-count" type="button"><i class="mdi mdi-minus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 my-3">
                                                <button type="submit" name="add_cart" class="app-btn-secondary btn w-100">Ongeza Kapuni</a>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>