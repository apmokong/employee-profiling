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
		<div class="row mb-3">
			<div class="col-12 mx-auto">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Add Employee
						</div>
						<div class="card-body">
							<form action="add_new.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">First Name</label>
											<input type="text" class="form-control" name="first-name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Last Name</label>
											<input type="text" class="form-control" name="last-name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Title</label>
											<input type="text" class="form-control" name="title">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Reports to</label>
											<input type="text" class="form-control" name="reportsTo">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Birth Date</label>
											<input type="date" class="form-control" name="birthday">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Hire Date</label>
											<input type="date" class="form-control" name="hireDate">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Address</label>
											<input type="text" class="form-control" name="address">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">City</label>
											<input type="text" class="form-control" name="city">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">State</label>
											<input type="text" class="form-control" name="state">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Country</label>
											<input type="text" class="form-control" name="country">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Postal Code</label>
											<input type="text" class="form-control" name="postal">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Phone</label>
											<input type="text" class="form-control" name="phone">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Fax</label>
											<input type="text" class="form-control" name="fax">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Email</label>
											<input type="email" class="form-control" name="email">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
										    <label for="first-name">Create User?</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<input type="checkbox" checked="" name="create-user">
													</div>
												</div>
												<input type="text" class="form-control" placeholder="Username" name="username">
												<input type="password" class="form-control" placeholder="Password" name="password">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<button class="btn btn-success" type="submit">Add New</button>
										</div>
									</div>
								</div>
							</form>
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