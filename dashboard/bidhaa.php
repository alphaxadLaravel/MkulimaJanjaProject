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
                <div class="card  border-0 shadow-sm  my-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../assets/images/product-1.jpg" alt="Trendy Pants and Shoes" class="img-fluid rounded-start h-100 w-100" />
                        </div>
                        <div class="col-md-8 px-4">
                            <div class="d-flex justify-content-between py-3 align-items-center">
                                <span class=" fw-bold">Bidhaa: <span class="text-danger">Nyanya Nyekundu</span> </span>
                                <div class="">
                                    <img src="../assets/images/mbuto.jpg" width="30px" height="30px" alt="" class="rounded-circle">
                                </div>
                            </div>
                            <p>
                                Hiziz nyanya ni za kwangu zinapatikana ilala boma sokoni ukija bei itapungua kidogo
                            </p>
                            <span class="text-muted fw-bold">Price: <span class="text-danger">1,0000,0000/= </span>For Rent</span> <br>
                            <span class="text-muted fw-bold">Idadi iliyopo: <span class="text-danger"> 500</span>KG</span>


                                
                                <div class="row mt-3 d-flex align-items-center justify-content-center">
                                    <div class="col-md-8 mt-4">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-6">
                                                <input type="text" name="qty" id="sst" maxlength="10" value="1" title="Quantity:" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="btn btn-sm app-btn-secondary increase items-count" type="button"><i class="mdi mdi-plus"></i></button>
                                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) && sst > 0 ) result.value--;return false;" class="btn btn-sm app-btn-secondary reduced items-count" type="button"><i class="mdi mdi-minus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-4">
                                        <a class="app-btn-secondary btn w-100" href="cart.php">Ongeza Kapuni</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>