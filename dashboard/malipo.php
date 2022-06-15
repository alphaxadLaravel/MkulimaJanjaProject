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
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-cash-usd text-success"></i> Fanya Malipo</h1>
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
                <!-- steps ziko hapa -->
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4" role="tablist">
                        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Njia za malipo</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false" tabindex="-1">Account ya Malipo</a>
                        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false" tabindex="-1">Hakiki & Lipa</a>
                    </nav>
                    <div class="tab-content" id="orders-table-tab-content">
                        <div class="tab-pane fade active show" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                                        <div class="app-card-header p-3 border-bottom-0">
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
                                                    <h4 class="app-card-title">Chagua Njia ya Malipo</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-card-body px-4 w-100">

                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="item border-bottom py-3">
                                                            <div class="row justify-content-between align-items-center">
                                                                <div class="col-auto">
                                                                    <div class="item-label"><img src="../assets/images/tigopesa.png" width="30px" height="30px" alt=""><strong> Tipo Pesa </strong></div>
                                                                </div>
                                                                <div class="col text-end">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" id="" value="checkedValue">
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
                                                                    <div class="item-label"><img src="../assets/images/tpesa.png" class="rounded" width="30px" height="30px" alt=""><strong> M-Pesa </strong></div>
                                                                </div>
                                                                <div class="col text-end">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" id="" value="checkedValue">
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
                                                                    <div class="item-label"><img src="../assets/images/airtelpesa.png" class="rounded" width="30px" height="30px" alt=""><strong> Tipo Pesa </strong></div>
                                                                </div>
                                                                <div class="col text-end">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" id="" value="checkedValue">
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
                                                                    <div class="item-label"><img src="../assets/images/mpesa.png" class="rounded" width="30px" height="30px" alt=""><strong> M-Pesa </strong></div>
                                                                </div>
                                                                <div class="col text-end">
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input type="radio" class="form-check-input" style="cursor: pointer;" name="branch" id="" value="checkedValue">
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-4 d-flex justify-content-end">
                                                    <button type="submit" class="btn app-btn-secondary">Endelea na Malipo</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
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
                                                    <h4 class="app-card-title">Hakiki Namba ya Malipo</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-card-body px-4 w-100">

                                            <form action="" method="post">
                                                <div class="app-card-body px-4 w-100">
                                                    <div class="item border-bottom py-3">

                                                        <div class="row justify-content-between align-items-center">
                                                            <div class="col-auto">
                                                                <div class="item-label"><strong>Namba ya Simu</strong></div>
                                                                <div class="item-data">+255-743-196-599 </div>
                                                            </div>
                                                            <div class="col text-end">
                                                                <a class="btn-sm app-btn-secondary" href="profile.php">Badili</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item border-bottom py-3">
                                                        <div class="row justify-content-between align-items-center">
                                                            <div class="col-auto">
                                                                <div class="item-label"><strong>Neno Siri</strong></div>
                                                                <div class="item-data">••••••••</div>
                                                            </div>
                                                            <div class="col text-end">
                                                                <a class="btn-sm app-btn-secondary" href="profile.php">Badili</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="py-4 d-flex justify-content-end">
                                                    <button type="submit" class="btn app-btn-secondary">Endelea na Malipo</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">

                            <div class="row gy-4">

                                <div class="col-md-12">
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
                                                        <div class="item-label"><strong>Idadi ya Bidhaa</strong></div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="item-data">100</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item border-bottom py-3">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-auto">
                                                        <div class="item-label"><strong>Gharama Jumla</strong></div>
                                                    </div>
                                                    <div class="col text-end">
                                                        <div class="item-data fw-bolder">Tsh 10,000/=</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="">
                                                <div class="d-flex justify-content-between p-3">
                                                    <a href="cart.php" class="btn app-btn-secondary">Rudi Kapuni</a>
                                                    <button type="submit" class="btn app-btn-secondary">Lipia</button>
                                                </div>
                                             </form>
                                        </div>
                                       
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