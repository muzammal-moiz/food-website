<?php
require_once("header.php");
require_once("sidebar.php");
require_once("database.php");


/*$data="SELECT * FROM newsletter";
$rec=db::getRecordS($data);*/
?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background: #5ce1e6;color: black;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-0 text-light">NewsLetter Us</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="card" style="background:transparent;">
			<div class="card-body">
				<table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
					<thead>
						<tr>
							<th><span class="resize-col">ID</span></th>
							<th><span class="resize-col">Username</span></th>
							<th><span class="resize-col">Invoice </span></th>
							<th><span class="resize-col">Number</span></th>
							<th><span class="resize-col">Company</span></th>
							<th><span class="resize-col">Location</span></th>
							<th><span class="resize-col">Delivery address</span></th>
							<th><span class="resize-col">Pickup address</span></th>
							<th><span class="resize-col">Date</span></th>
							<th><span class="resize-col">Status</span></th>
							<th><span class="resize-col">Action</span></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col"></span></td>
							<td><span class="resize-col">
								<a href="" class="btn btn-outline-danger text-dark">Trash</a>
							</span></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php
	require_once("footer.php")
?>