<?php include "../layouts/outside.php"; ?>
<div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto mt-3">	
				    <!-- <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div> -->
					<h2 class="auth-heading text-center mb-4 text-success">Usajili - Muuzaji</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form">         
							<div class="email mb-2">
								<small class="text-muted">TIN Number</small>
								<input  name="tin" type="text" class="form-control signup-name"  required="required">
							</div>
                            <div class="email mb-2">
								<small class="text-muted">Jina Kamili</small>
								<input  name="jina" type="text" class="form-control signup-name"  required="required">
							</div>
							<div class="email mb-2">
								<small class="text-muted">Username</small>
								<input  name="username" type="text" class="form-control signup-email" required="required">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="password mb-2">
										<small class="text-muted">Tengeneza Password</small>
										<input id="sig" name="pwd1" type="password" class="form-control signup-password"  required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="password mb-2">
										<small class="text-muted">Thibitisha Password</small>
										<input id="signup-password" name="pwd2" type="password" class="form-control signup-password"  required="required">
									</div>
								</div>
								<div class="email mb-2">
									<small class="text-muted">Namba ya Simu</small>
									<input  name="namba" type="text" class="form-control signup-name"  required="required">
								</div>
							</div>
							
							<div class="text-center">
								<button type="submit" name="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Jisajili</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Tayari una Account? <a class="text-link" href="login.php" >Ingia hapa! </a>| Jisajili Kama <a href="signup.php">Member!</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://alphajozee.me/alpha" target="_blank"> Alpha Jozee </a> @MkulimaJanja</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col" style="background-image: url('../assets/images/about.jpg');">
		    <div class="auth-background-holder">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">All the Best Guys @Final Year Project</h5>
					    <div>Nawatakia kila lakheri wakubwa 🙄😶 ... Say's<a href="http://alphajozee.me/alpha"> Alpha Jozee</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->

    </body>
</html> 
