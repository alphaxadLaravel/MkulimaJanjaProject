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
                    <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-success"></i> Ongeza Bidhaa!</h1>
                </div>
            </div>

            <div class="row px-2">
                <div class="app-card app-card-settings shadow-sm p-4">

                    <div class="app-card-body">
                        <form class="settings-form">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Jina la Bidhaa <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="setting-input-1" value="" placeholder="Ipe bidhaa jina.." required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Kitengo <span class="text-danger">*</span></label>
                                        <select class="form-select" name="" id="">
                                            <option value=""></option>
                                            <option value="">Chagua Kitengo...</option>
                                            <option value="Mwanza">Mazao</option>
                                            <option value="">Mbolea</option>
                                            <option value="">Madawa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Picha <span class="text-danger">*</span></label>
                                        <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Bei ya Bidhaa <span class="text-danger">*</span></label>
                                        <div class="mb-3">
                                        <input type="number" class="form-control" id="setting-input-1" value="" placeholder="e.g 2000" required="">
                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="setting-input-1" class="form-label">Kiasi Kilichopo <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <input type="number" class="form-control" id="setting-input-1" value="" placeholder="e.g 12" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <select class="form-select ">
                                                    <option value="option-1">Kilogram</option>
                                                    <option value="option-1">Fungu</option>
                                                    <option value="option-1">Mafungu</option>
                                                    <option value="option-1">Gunia</option>
                                                    <option value="option-1">Debe</option>
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
                                        <textarea class="form-control" name="" rows="5" cols="3" id="" placeholder="weka maelezo hapa..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">

                                <button type="submit" class="btn app-btn-primary">Ongeza Bidhaa</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php include "../components/inner_footer.php" ?>

    </div>
    <?php include "../layouts/inside_foot.php"; ?>