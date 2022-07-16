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
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-cash-usd text-success"></i> Fanya Malipo</h1>
                </div>

            </div>

            <!-- steps ziko hapa -->
            <form action="" method="post">
                <div class="row mb-4 align-items-center justify-content-between">

                    <div class="col-md-6 mb-2">
                        <div class="app-card  shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <i class="mdi mdi-cart fs-4"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Jumla ya Gharama</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="app-card-body px-4 w-100">

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Jumla ya Bidhaa</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <?php

                                            $user_id = $_SESSION['user_id'];

                                            $sql = "SELECT sum(added_quantity) AS 'count' FROM cart  WHERE user_id ='$user_id'";
                                            $result = mysqli_query($conn, $sql);
                                            $check = mysqli_fetch_assoc($result);

                                            $total_bidhaa = $check['count'];
                                            ?>
                                            <div class="item-data">x<?php echo $total_bidhaa; ?></div>
                                            <?php ?>

                                        </div>
                                    </div>
                                </div>

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Gharama Jumla</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <?php

                                            $user_id = $_SESSION['user_id'];

                                            $sql = "SELECT sum(total_cost) AS 'costs' FROM cart WHERE cart.user_id ='$user_id'";
                                            $result = mysqli_query($conn, $sql);
                                            $check = mysqli_fetch_assoc($result);

                                            $total_costs = $check['costs'];
                                            ?>
                                            <div class="item-data fw-bolder text-danger">Tsh <?php echo number_format($total_costs);  ?>/=</div>
                                            <?php ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start py-4">
                                    <a class="btn app-btn-primary" href="cart.php"> <i class="mdi mdi-cart"></i>
                                        Rudi Kapuni</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="app-card pb-5 shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3  border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <i class="mdi mdi-map-marker mdi-24px"></i>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Taarifa za Upokeaji</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <small for="setting-input-1" class="form-label">Mkoa Uliopo<span class="text-danger">*</span></small>
                                            <select class="form-select " id="mkoa" required="" name="mkoa">
                                                <option value="">Chagua Mkoa uliopo...</option>
                                                <option value="mwanza">Mwanza</option>
                                                <option value="Dodoma">Dodoma</option>
                                                <option value="Dar">Dar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <small for="setting-input-1" class="form-label">Wilaya Uliyopo<span class="text-danger">*</span></small>
                                            <select class="form-select " required="">
                                                <option value="">Chagua wilaya uliyopo...</option>
                                                <option value="mwanza">Ilala</option>
                                                <option value="mwanza">Temeke</option>
                                                <option value="mwanza">Kinondoni</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <small for="setting-input-1" class="form-label">Mahali pakupolea <span class="text-danger">*</span></small>
                                            <input type="text" class="form-control" id="mahali" value="" placeholder="pakupokelea mzigo" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <small for="setting-input-1" class="form-label">Simu ya Mpokeaji <span class="text-danger">*</span></small>
                                            <input type="number" class="form-control" id="setting-input-1" value="" placeholder="07..." required="">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="app-card pb-5 shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3  border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Chagua Tawi la Malipo</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item border-bottom py-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="item-label"><img src="../assets/images/tigopesa.png" width="30px" height="30px" alt=""><span> Tigo Pesa</span></div>
                                                </div>
                                                <div class="col text-end">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" required="" value="Tigo Pesa">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="item border-bottom py-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="item-label"><img src="../assets/images/tpesa.png" class="rounded" width="30px" height="30px" alt=""><span> T Pesa</span></div>
                                                </div>
                                                <div class="col text-end">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" required="" value="T Pesa">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="item border-bottom py-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="item-label"><img src="../assets/images/airtelpesa.png" class="rounded" width="30px" height="30px" alt=""><span> Airtel Money </span></div>
                                                </div>
                                                <div class="col text-end">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" required="" value="Airtel Money">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="item border-bottom py-3">
                                            <div class="row justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="item-label"><img src="../assets/images/mpesa.png" class="rounded" width="30px" height="30px" alt=""><span> M-Pesa </span></div>
                                                </div>
                                                <div class="col text-end">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" required="" value="M-Pesa">
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="app-card pb-3 shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z"></path>
                                                <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Fanya Malipo</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">
                                <div class="app-card-body px-4 w-100">
                                    <div class="item mb-2">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-auto">
                                                <div class="item-label"><strong>Namba ya Malipo</strong></div>
                                                <div class="item-data"><?php echo $_SESSION['simu']; ?> </div>
                                            </div>
                                            <div class="col text-end">
                                                <a class="btn-sm btn-outline-success" href="profile.php"><i class="mdi mdi-pencil"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="mb-2">
                                            <small for="setting-input-1" class="form-label">Ingiza PIN yako <span class="text-danger">*</span></small>
                                            <input type="number" class="form-control" id="setting-input-1" value="" placeholder="...." required="">
                                        </div>
                                    </div>
                                    <div class="item py-2">
                                        <button type="submit" class="btn btn-success w-100 text-white"> Lipia </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <script>
        $('#next').click(function() {
            $('#next').hide();
        });
    </script>
    <?php include "../layouts/inside_foot.php"; ?>