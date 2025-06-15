<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");

/*$query="SELECT * FROM banner";
$recs=db::getRecord($query);*/
?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background: #5ce1e6;color: black;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h5 class="mb-0 text-light" style="padding-top:7px;">Add Banner Fields</h5>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_banner.php" class="btn btn-primary w-100 text-dark">Add Our Banner</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body" style="border: 4px solid rgb(193 193 193);
					padding: 40px; padding-left:20px; padding-right:20px; margin-top: 5px;">
					<div class="row g-3"> 
						<div class="col-lg-4 col-6 col-xs-12">
							<div class="card main_card">
								<div class="card-body">
									<img src="images/plane.png">
									<h4 class="mt-4 text-dark">The New Logestic Revolution</h4>
									<p class="mt-3 text-dark"> It was popularized in the 1960 with the release letterset sheets containing</p>
									<div class="row">
										<div class="col-md-6">
											<a href="update_banner.php" class="btn btn-primary w-100 text-dark">Edit</a>
										</div>
										<div class="col-md-6">
											<a href="" class="btn btn-outline-danger w-100 text-dark">Trash</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-6 col-xs-12">
							<div class="card main_card">
								<div class="card-body">
									<img src="images/plane.png">
									<h4 class="mt-4 text-dark">The New Logestic Revolution</h4>
									<p class="mt-3 text-dark"> It was popularized in the 1960 with the release letterset sheets containing</p>
									<div class="row">
										<div class="col-md-6">
											<a href="update_banner.php" class="btn btn-primary w-100 text-dark">Edit</a>
										</div>
										<div class="col-md-6">
											<a href="" class="btn btn-outline-danger w-100 text-dark">Trash</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-6 col-xs-12">
							<div class="card main_card">
								<div class="card-body">
									<img src="images/plane.png">
									<h4 class="mt-4 text-dark">The New Logestic Revolution</h4>
									<p class="mt-3 text-dark"> It was popularized in the 1960 with the release letterset sheets containing</p>
									<div class="row">
										<div class="col-md-6">
											<a href="update_banner.php" class="btn btn-primary w-100 text-dark">Edit</a>
										</div>
										<div class="col-md-6">
											<a href="" class="btn btn-outline-danger w-100 text-dark">Trash</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	require_once("footer.php")
?>