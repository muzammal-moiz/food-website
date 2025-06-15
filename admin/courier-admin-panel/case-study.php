<?php
require_once("header.php");
require_once("database.php");
require_once("sidebar.php");

/*$data="SELECT * FROM  service";
$recs=db::getRecords($data);*/

?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background: #5ce1e6;color: black;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h5 class="mb-0 text-light" style="padding-top:7px;">Add Case Study Fields</h5>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_case-study.php" class="btn btn-primary w-100 text-dark">Add Our Case Study</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel mb-25">
					<div class="panel-body">
						<div class="row g-3">
							
							<div class="col-lg-4 col-6 col-xs-12">
								<div class="card main_card">
									<div class="card-body">
										<img src="images/portfolio-02.jpg">
										<h4 class="mt-4 text-dark">Distribution</h4>
										<h4 class="mt-4 text-dark">Indian Logistic Hubs</h4>
										<p class="mt-3 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<div class="row">
											<div class="col-md-6">
												<a href="update_case_study.php" class="btn btn-primary w-100 text-dark">Edit</a>
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
										<img src="images/portfolio-04.jpg">
										<h4 class="mt-4 text-dark">Warehouse</h4>
										<h4 class="mt-4 text-dark">Warehouse Inventory</h4>
										<p class="mt-3 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<div class="row">
											<div class="col-md-6">
												<a href="update_case_study.php" class="btn btn-primary w-100 text-dark">Edit</a>
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
										<img src="images/portfolio-05.jpg">
										<h4 class="mt-4 text-dark">Analystics</h4>
										<h4 class="mt-4 text-dark">Revolutionize business</h4>
										<p class="mt-3 text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
											quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
											consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
											cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<div class="row">
											<div class="col-md-6">
												<a href="update_case_study.php" class="btn btn-primary w-100 text-dark">Edit</a>
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