<html>

<head>
	<style>

		body {
			background-image: url('y.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;

		}

		@media all and (min-width: 992px) {
			.navbar .nav-item .dropdown-menu {
				display: none;
			}

			.navbar .nav-item:hover .nav-link {}

			.navbar .nav-item:hover .dropdown-menu {
				display: block;
			}

			.navbar .nav-item .dropdown-menu {
				margin-top: 0;
			}
		}


	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	<link rel="stylesheet" media="screen" href="bootstrap.min.css">

	<title>Home</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark  ftco-navbar-darkened-image bg-dark" id="ftco-navbar">
			<div class="container">

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
					aria-label="Toggle navigation" class="zoom">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
					<ul class="navbar-nav">
						<a class="navbar-brand" href="adminhome.php">

						</a>
						<li class="nav-item active">
							<a class="nav-link" href="#">Welcome Admin<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="car_info.php">List of all Cars<span
									class="sr-only">(current)</span></a>
						</li>
						</li>


						<li class="nav-item dropdown">
							<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Reports </a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" data-toggle="modal" data-target="#cars&cust"> All Car &
										Customer Information </a>
								</li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#carsinfo"> Car
										Information </a></li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#carstatus"> Car Status
									</a></li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#custinfo"> Reservations Of Customer by Email
									</a></li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#daily"> Daily Payments </a></li>
							</ul>
						</li>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Modifications
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" data-toggle="modal" data-target="#addcars"> Add Car </a>
								</li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#updatecars"> Update Car
									</a></li>
							</ul>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="all_reservations.php">Reservations <span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Advanced Search
							</a>

							<ul class="dropdown-menu">
								<li><a class="dropdown-item" data-toggle="modal" data-target="#searchcars"> By Car </a>
								</li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#searchcust"> By
										Customer</a></li>
								<li><a class="dropdown-item" data-toggle="modal" data-target="#searchreg"> By
										Reservation </a>
								</li>
							</ul>
						</li>



						<li class="nav-item">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>
						</li>

						<li class="nav-item active">
							<meta name="viewport" content="width=device-width, initial-scale=1">
							<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
							<link rel="stylesheet"
								href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

							<body>

								<div class="w3-container">


									<div class="w3-padding w3-xlarge ">
										<i class="fa fa-home " href="adminhome.php"></i>



									</div>


						</li>
						<li class="nav-item">
							<a class="nav-link" href="adminhome.php">Home</a>
						</li>

					</ul>
				</div>
			</div>
		</nav>

		</head>

</html>
<div class="container">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

	<body>

		<!-- Modal -->
		<form name="car" action="displaycars.php" method="post">
			<div class="modal fade" id="searchcars" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Search for Car</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="brand">Brand</label>
								<input type="brand" class="form-control" name="brand" id="brand"
									placeholder="Enter Car Brand">
							</div>
							<div class="form-group">
								<label for="model">Model</label>
								<input type="model" class="form-control" name="model" id="model"
									placeholder="Ente Brand Model">
							</div>
							<div class="form-group">
								<label for="year">Year</label>
								<input type="year" class="form-control" name="year" id="year" placeholder="Enter Year">
							</div>
							<div class="form-group">
								<label for="plate">Plate Number</label>
								<input type="plate" class="form-control" name="plate_number" id="plate_number"
									placeholder="Enter Car Plate No">
							</div>
							<div class="form-group">
								<label for="office">Office ID</label>
								<input type="office" class="form-control" name="office_id" id="office"
									placeholder="Enter Office ID">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="searchCar">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>

		<form name="customer" action="displaycust.php" method="post">
			<div class="modal fade" id="searchcust" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Search For Customer</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="ssn">SSN</label>
								<input type="text" class="form-control" name="ssn" id="ssn"
									placeholder="Enter Customer SSN">
							</div>
							<div class="form-group">
								<label for="fname">First Name</label>
								<input type="text" class="form-control" name="first_name" id="fname"
									placeholder="Ente Customer First Name">
							</div>
							<div class="form-group">
								<label for="lname">Last Name</label>
								<input type="text" class="form-control" name="last_name" id="lname"
									placeholder="Enter Customer Last Name">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email"
									placeholder="Enter Customer Email">
							</div>
							<div class="form-group">
								<label for="phone">Phone Number</label>
								<input type="text" class="form-control" name="phone" id="phone"
									placeholder="Enter Phone No.">
							</div>

							<div class="form-group">
								<input type="radio" id="male" name="gender" value="M" />
								<label>Male</label><br>
								<input type="radio" id="female" name="gender" value="F" />
								<label>Female</label><br>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="searchCus">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>
		<form name="res" action="displayReg.php" method="post">
			<div class="modal fade" id="searchreg" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Search for Reservation</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label for="order">Order ID</label>
								<input type="order" class="form-control" name="order" id="order"
									placeholder="Enter Order ID">
							</div>
							<div class="form-group">
								<label for="ssn2">SSN</label>
								<input type="ssn2" class="form-control" name="ssn2" id="ssn2"
									placeholder="Enter Customer SSN">
							</div>
							<div class="form-group">
								<label for="plate">Plate Number</label>
								<input type="plate" class="form-control" name="plate_no" id="plate_no"
									placeholder="Enter Car Plate No">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="searchRes">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>

		<form name="rep1" action="FirstReport.php" method="post">
			<div class="modal fade" id="cars&cust" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Customer & Car Info</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="from" id="from" placeholder="From" required/>
							</div>
							<div class="form-group">
								<input type="date" class="form-control" name="to" id="to" placeholder="To" required/>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="Rep1">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>


		<form name="rep2" action="SecondReport.php" method="post">
			<div class="modal fade" id="carsinfo" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Car Info</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="from" id="from" placeholder="From" required/>
							</div>
							<div class="form-group">
								<input type="date" class="form-control" name="to" id="to" placeholder="To" required/>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="Rep2">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>
		<form name="dailypayment" action="dailypayments.php" method="post">
			<div class="modal fade" id="daily" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Car Info</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="from" id="from" placeholder="From" required/>
							</div>
							<div class="form-group">
								<input type="date" class="form-control" name="to" id="to" placeholder="To" required/>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="submit">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>

		<form name="rep3" action="ThirdReport.php" method="post">
			<div class="modal fade" id="custinfo" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Customer's Reservations by Email</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" id="email"
									placeholder="Enter Customer's Email" required />
							</div>

						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="Rep3">Search</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>


		<form name="add-car" action="car.php" method="post">
			<div class="modal fade" id="addcars" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Register a Car</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">

								<label>Plate Number </label>
								<input type="text" class="form-control" name="plate" required />
							</div>

							<div class="form-group">
								<label>Model</label>

								<input type="text" class="form-control" name="model" required />
							</div>

							<div class="form-group">
								<label>brand</label>
								<input type="text" class="form-control" name="brand" required />
							</div>

							<div class="form-group">
								<label>year</label>
								<input type="text" class="form-control" name="year" required />
							</div>

							<div class="form-group">
								<label>Color</label>
								<input type="text" class="form-control" name="color" required />
							</div>
							<div class="form-group">
								<label>price per day</label>
								<input type="text" class="form-control" name="price_per_day" required />
							</div>

							<div class="form-group">
								<label>Office_ID</label>
								<input type="text" class="form-control" name="office_id" required />
							</div>


							<div class="form-group">
								<label>Image</label>
								<input type="text" class="form-control" name="picture" required />
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="addcar">Register Car</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>

		<form name="update-car" action="updatecar.php" method="post">
			<div class="modal fade" id="updatecars" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Update a Car</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">

								<label>Plate Number </label>
								<input type="text" class="form-control" name="plate"
									placeholder="Enter the Car's Plate No." required />
							</div>

							<div class="form-group">
								<label>Daily Car Price</label>
								<input type="text" class="form-control" name="price_per_day"
									placeholder="Enter New Price">
							</div>

							<div class="form-group">
								<label>Car Status</label>
								<input type="text" class="form-control" name="status"
									placeholder="Enter new Car Status">
							</div>
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="curr_date"
									placeholder="Enter current date">
							</div>

						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="updated_car">Update</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>

		<form name="carstatus" action="car_status.php" method="post">
			<div class="modal fade" id="carstatus" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"> Car Status Report</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Date</label>
								<input type="date" class="form-control" name="current" id="current"
									placeholder="Enter specific day" required />
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark" name="view">View</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

						</div>
					</div>
				</div>
			</div>
		</form>





		<!--Bootstrap validation--->
		<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>



	</body>

	</html>