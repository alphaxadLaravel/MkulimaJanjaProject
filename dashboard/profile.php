<?php include "../layouts/inside_head.php"; ?>
<header class="app-header fixed-top">

    <?php include "../components/top_nav.php"; ?>
    <!-- Include the side bar here -->

    <?php include "../components/sidebar.php"; ?>

</header>
<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title"><i class="mdi mdi-account text-success"></i> Wasifu Wangu</h1>
            <?php

            // tambua ni user gan yukokatika session
            $user_id = $_SESSION['user_id'];

            // Vuta taarifa zake zote hapa
            $sql = "SELECT * FROM users WHERE id='$user_id'";
            $data = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($data)) {
            ?>
                <div class="row gy-4">
                    <div class="col-12 col-lg-6" id="profile">
                        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                            </svg>
                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Wasifu</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-data">
                                                <img class="profile-image rounded" src="<?php echo $row['profiles'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="col text-end">
                                            <button class="btn-sm app-btn-secondary" onclick="badiliPicha()"><i class="mdi mdi-pencil"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Jina Kamili</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <div class="item-data"><?php echo $row['jina_kamili'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Namba ya Simu</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <div class="item-data"><?php echo $row['simu'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Kitengo</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <div class="item-data"><?php echo $row['role'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>TIN Namba</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <div class="item-data"><?php echo $row['tin_number'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Username</strong></div>
                                        </div>
                                        <div class="col text-end">
                                            <div class="item-data"><?php echo $row['username'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Neno Siri</strong></div>
                                            <div class="item-data">????????????????????????</div>

                                        </div>
                                        <div class="col text-end">
                                            <button onclick="badiliPassword()" class="btn-sm app-btn-secondary"><i class="mdi mdi-pencil"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Badili taarifa Hapa -->
                    <div class="col-12 col-lg-6 " id="picha" style="display: none;">
                        <div class="app-card  shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                            </svg>
                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Badili Picha</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <img class="rounded img-fluid" style="height: 50%;" src="<?php echo $row['profiles'] ?>" alt="">
                                    </div>
                                </div>
                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label"><strong>Chagua Picha</strong></div>
                                        </div>
                                        <form action="../logics/profileServer.php" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-8">
                                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" name="file" placeholder="Enter Property ID" required>
                                                </div>
                                                <div class="col-4">
                                                    <button type="submit" name="badili" class="btn app-btn-primary">Badili</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Badili Neno Siri Hapa -->
                    <div class="col-12 col-lg-6 " id="neno" style="display: none;">
                        <div class="app-card  shadow-sm d-flex flex-column align-items-start">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <i class="mdi mdi-lock"></i>
                                        </div>

                                    </div>
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Badili Neno Siri</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">

                                        <form action="../logics/profileServer.php" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="password mb-2">
                                                        <small class="text-muted">Neno Siri la Zamani</small>
                                                        <input id="signup-password" name="password" type="password" class="form-control signup-password" required="required">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="password mb-2">
                                                        <small class="text-muted">Neno Siri Jipya</small>
                                                        <input id="signup-password" name="password2" type="password" class="form-control signup-password" required="required">
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" name="neno" class="btn app-btn-primary w-100">Badili hapa</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-6" id="change">
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
                                        <h4 class="app-card-title">Namba Ya malipo</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="app-card-body px-4 w-100">

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <div class="item-label">
                                                <strong><i class="mdi mdi-phone"></i> Namba ya Malipo </strong>
                                                <div class="item-data"><?php echo  $row['simu']; ?></div>
                                            </div>
                                        </div>
                                        <!--//col-->
                                        <div class="col text-end">
                                            <button class="btn-sm app-btn-secondary" onclick="badiliNamba()">Badili</button>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                            </div>
                        </div>
                        <!--//app-card-->
                    </div>

                    <!-- BAdili namba ya malipo -->
                    <div class="col-12 col-lg-6 " id="namba" style="display: none;">
                        <div class="app-card  shadow-sm d-flex flex-column align-items-start">
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
                                        <h4 class="app-card-title">Namba ya Malipo</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="app-card-body px-4 w-100">

                                <div class="item border-bottom py-3">
                                    <div class="row justify-content-between align-items-center">
                                        <form action="../logics/profileServer.php" method="post">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="password mb-2">
                                                        <small class="text-muted">Namba mpya ya Malipo</small>
                                                        <input id="signup-password" name="simu" type="number" class="form-control signup-password" required="required">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="namba" class="btn app-btn-primary w-100">Badili hapa</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <script>
                        function badiliPicha() {
                            var edit = document.getElementById("picha");
                            var profile = document.getElementById("profile");

                            edit.style.display = "block";
                            profile.style.display = "none";
                        }

                        function badiliPassword() {
                            var neno = document.getElementById("neno");
                            var profile = document.getElementById("profile");

                            neno.style.display = "block";
                            profile.style.display = "none";
                        }

                        function badiliNamba() {
                            var namba = document.getElementById("namba");
                            var change = document.getElementById("change");

                            namba.style.display = "block";
                            change.style.display = "none";
                        }
                    </script>
                </div>

            <?php } ?>

        </div>
        <!--//container-fluid-->
    </div>



    <?php include "../components/inner_footer.php" ?>

</div>
<?php include "../layouts/inside_foot.php"; ?>