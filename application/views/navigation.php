<div class="container-fluid">
	<div class="row navigation">
		<div class="col-lg-12">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav>
							<a href="<?php echo base_url() ?>" id="logo"><span class="pinkColor">CLEANER</span> <span class="greenColor">FINDER</span></a>
							<a href="<?php echo base_url() ?>">Home</a>
							<?php 
								if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
							?>
								<a href="<?php echo base_url('Admin/') ?>">My Advert</a>
								<a href="<?php echo base_url('Logout/') ?>">Logout</a>
							<?php 
								} else {
							?>
								<a href="<?php echo base_url('Login/') ?>">Login</a>
								<a href="<?php echo base_url('Register/') ?>">Advertise Yourself</a>
							<?php 
								}
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>