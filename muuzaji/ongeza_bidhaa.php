<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <?php
                    if ($_SESSION['role'] == "mbolea") {
                    ?>
                        <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-success"></i> Ongeza Mbolea!</h1>
                    <?php } ?>

                    <?php
                    if ($_SESSION['role'] == "mazao") {
                    ?>
                        <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-success"></i> Ongeza Mazao!</h1>
                    <?php } ?>

                    <?php
                    if ($_SESSION['role'] == "madawa") {
                    ?>
                        <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-success"></i> Ongeza Madawa!</h1>
                    <?php } ?>
                </div>
            </div>

            <div class="row px-2">
                <div class="app-card app-card-settings shadow-sm p-4">

                    <div class="app-card-body">

                        <form action="../logics/bidhaaServer.php" method="POST" enctype="multipart/form-data" class="settings-form">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Jina la Bidhaa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="setting-input-1" name="bidhaa" placeholder="Ipe bidhaa jina.." required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Picha <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control file-selector-button" id="setting-input-1" name="file" placeholder="Enter Property ID" required>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="setting-input-1" class="form-label">Bei ya Bidhaa <span class="text-danger">*</span></label>

                                    <div class="row">
                                        <div class="col-7">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <input type="number" class="form-control" id="setting-input-1" name="bei" placeholder="e.g 2000" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-5">
                                            <div class="mb-3">
                                                <select class="form-select " name="measure1">
                                                    <?php
                                                    if ($_SESSION['role'] == "mbolea" || $_SESSION['role'] == "mazao") {
                                                    ?>
                                                        <option value=" ">kipimo..</option>
                                                        <option value="kwa kilogram">kwa Kilogram</option>
                                                        <option value="kwa Fungu">kwa Fungu</option>
                                                        <option value="kwa Mafungu">kwa Mafungu</option>
                                                        <option value="kwa Gunia">kwa Gunia</option>
                                                        <option value="kwa Debe">kwa Debe</option>
                                                        <option value="kwa Ndoo">kwa Ndoo</option>
                                                    <?php } ?>
                                                    <?php
                                                    if ($_SESSION['role'] == "madawa") {
                                                    ?>
                                                        <option value=" ">kipimo..</option>
                                                        <option value="kwa Lita">kwa Lita</option>
                                                        <option value="kwa Chupa">kwa Chupa</option>
                                                        <option value="kwa Katoni">kwa katoni</option>
                                                        <option value="kwa Pakti">kwa Pakti</option>
                                                        <option value="kwa Box">kwa Box</option>
                                                        <option value="kwa Ndoo">kwa Ndoo</option>
                                                        <option value="kwa Kidonge">kwa Kidonge</option>
                                                    <?php } ?>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <label for="setting-input-1" class="form-label">Kiasi Kilichopo <span class="text-danger">*</span></label>
                                    <div class="row g-1">
                                        <div class="col-7">
                                            <div class="mb-3">
                                                <input type="number" class="form-control" id="setting-input-1" name="quantity" placeholder="e.g 12" required>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="mb-3">
                                                <select class="form-select " name="measure2">
                                                    <?php
                                                    if ($_SESSION['role'] == "mbolea" || $_SESSION['role'] == "mazao") {
                                                    ?>
                                                        <option value=" ">kipimo..</option>
                                                        <option value="kilogram">Kilogram</option>
                                                        <option value="Fungu">Fungu</option>
                                                        <option value="Mafungu">Mafungu</option>
                                                        <option value="Gunia">Gunia</option>
                                                        <option value="Debe">Debe</option>
                                                        <option value="Ndoo">Ndoo</option>
                                                    <?php } ?>
                                                    <?php
                                                    if ($_SESSION['role'] == "madawa") {
                                                    ?>
                                                        <option value=" ">kipimo..</option>
                                                        <option value="Lita">Lita</option>
                                                        <option value="Chupa">Chupa</option>
                                                        <option value="Katoni">katoni</option>
                                                        <option value="Pakti">Pakti</option>
                                                        <option value="Box">Box</option>
                                                        <option value="Ndoo">Ndoo</option>
                                                        <option value="Kidonge">Kidonge</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Maelezo kuhusu Bidhaa <span class="text-danger">*</span> </label>
                                        <textarea class="form-control" name="description" rows="5" cols="3" id="" placeholder="weka maelezo hapa..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" name="ongeza" class="btn app-btn-primary">Ongeza Hapa</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>