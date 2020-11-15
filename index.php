<?php
include 'lib/includes/autoload.inc.php';
include 'lib/includes/session.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Profiling</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-3">
	  <a class="navbar-brand" href="index.php">Employee Profiling</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	<!--<ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Features</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul> -->
	  </div>
	  <a class="text-white" href="logout.php">Log Out</a>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Employee</h6>
							<a href="employee_add.php" class="btn btn-secondary">Add</a>
						</div>
						<div class="card-body">
							<div class="col-md-12 table-responsive">
								<?php
								// get all employees
								$employee = new employeeView;
								$allEmployee = $employee->viewAll();
								?>

								<table class="table table-bordered">
									<thead>
										<tr>
											<th width="2%"></th>
											<th>Name</th>
											<th>Position</th>
											<th width="10%">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										foreach ($allEmployee as $key => $employee) {
											?>
										<tr>
											<th scope="row"><?=$key+1?></th>
											<td><?=$employee['e_firstname']." ".$employee['e_lastname']?></td>
											<td><?=$employee['e_title']?></td>
											<td>
												<a href="profile.php?<?=$employee['e_id']?>" class="btn btn-secondary">View</a>
											</td>
										</tr>
											<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>