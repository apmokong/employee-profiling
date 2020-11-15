<?php
include 'lib/includes/autoload.inc.php';

session_start();
(empty($_SESSION)) ? header('Location: login.php') : '';
$profile_id = (!empty($_SERVER['QUERY_STRING'])) ? $_SERVER['QUERY_STRING'] : $_SESSION['id'];
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

	<?php
	$employee = new employeeView;

	$employeeDetails = $employee->viewEmployee($profile_id);
	?>
	<div class="container">
		<div class="row">
			<div class="col-12 mx-auto">
				<div class="col-md-12">
					<?php
					if (!empty($employeeDetails)) {
					?>
					<div class="card">
						<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
							<h6 class="m-0 font-weight-bold text-primary">Profile</h6>
							<?php
							if ($_SESSION['type'] == 'admin') {
								?>
							<h6 class="m-0 text-secondary"><a href="employee_edit.php?<?=$employeeDetails['e_id']?>" class="text-secondary">Edit</a></h6>
							<?php } ?>
						</div>
						<div class="card-body">
	                        <div class="row">
	                            <div class="d-flex justify-content-start col-4">
	                                <div class="image-container">
	                                    <img src="http://placehold.it/150x150" id="imgProfile" class="img-thumbnail" />
	                                </div>
	                                <div class="userData ml-3">
	                                    <h5 class="d-block font-weight-bold">
	                                    	<?=$employeeDetails['e_firstname']." ".$employeeDetails['e_lastname']?>
	                                    </h5>
	                                    <h6 class="d-block"><?=$employeeDetails['e_title']?></h6>
	                                    <h6 class="d-block"><?=$employeeDetails['e_email']?></h6>
	                                </div>
	                            </div>

	                            <div class="col-8">
	                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
	                                    <li class="nav-item">
	                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
	                                    </li>
	                                    <li class="nav-item">
	                                        <a class="nav-link" id="workDetails-tab" data-toggle="tab" href="#workDetails" role="tab" aria-controls="workDetails" aria-selected="false">Work Details</a>
	                                    </li>
	                                </ul>
	                                <div class="tab-content ml-1" id="myTabContent">
	                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Full Name</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                    			<?=$employeeDetails['e_firstname']." ".$employeeDetails['e_lastname']?>
	                                            </div>
	                                        </div>
	                                        <hr />

	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Birth Date</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=date("F j, Y", strtotime($employeeDetails['e_birthdate']))?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        
	                                        
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Address</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_address'].", ".$employeeDetails['e_city'].", ".$employeeDetails['e_state'].", ".$employeeDetails['e_country'].", ".$employeeDetails['e_postal']?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Phone</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_phone']?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Fax</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_fax']?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Email</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_email']?>
	                                            </div>
	                                        </div>
	                                    </div>
	                                    <div class="tab-pane fade" id="workDetails" role="tabpanel" aria-labelledby="workDetails-tab">
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Title</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_title']?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Reports To</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                                <?=$employeeDetails['e_reportsTo']?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                        <div class="row">
	                                            <div class="col-sm-3 col-md-2 col-5">
	                                                <label class="font-weight-bold">Hire Date</label>
	                                            </div>
	                                            <div class="col-md-8 col-6">
	                                            	<?=date("F j, Y", strtotime($employeeDetails['e_hiredate']))?>
	                                            </div>
	                                        </div>
	                                        <hr />
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
						</div>
					</div>
					<?php
					} else {
					?>
					<div class="card border-danger border-left shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="h5 font-weight-bold text-danger text-uppercase mb-1">
									Employee Not Found!</div>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>