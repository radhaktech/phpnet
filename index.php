<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<title>PHPNet::Your Ultimate Network</title>
		<!-- link to bootstrap styles -->
		<link href="styles/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/style.css">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- Warning: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="header">
			<div class="container">
				<div class="logo">
					<img src="images/logo.png">
				</div><!-- end of logo -->	
				<div id="header-login-form">
					<form action="#" method="post">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" />
						<label for="password">Password:</label>
						<input type="password" name="password" id="password" />
						<button class="btn btn-primary" type="button">Login</button>
					</form>
				</div>
			</div><!-- end of container -->
		</nav><!-- end of nav class-->
		<div class="home-bg">
			<div class="container">
					<div id="register-form">
						<form action="#" method="post">
							<h1>Sign up for an account</h1>
						<div class="form-group">
							<label for="firstname">First name</label>
							<input type="text" name="firstname" id="firstname" class="form-control" />
							<label for="lastname">Last name</label>
							<input type="text" name="lastname" id="lastname" class="form-control" />
						</div>
						<div class="form-group">
							<label for="lastname">Last name</label>
							<input type="text" name="lastname" id="lastname" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" id="username" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" class="form-control"/>
						</div>
						<div class="form-group">
							<h4>Birthday</h4>
							<select id="day" name="birthday-day" aria-label="Day" class="options-primary">
								<option selected="1" value="0">Day</option>
								<?php
								 // print options for day
								$i=1;
								while($i<32) {
									echo '<option value="'. $i .'">'. $i . '</option>';
									$i++;
								} 
								?>
							</select>
							<select id="month" name="birthday-month" aria-label="Month" class="options-primary">
								<option selected="1" value="0">Month</option>
								<option value="1">January</option>
								<option value="2">February</option>
								<option value="3">March</option>
								<option value="4">April</option>
								<option value="5">May</option>
								<option value="6">June</option>
								<option value="7">July</option>
								<option value="8">August</option>
								<option value="9">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>		
							<select id="year" name="birthday-year" aria-label="Year" class="options-primary">
								<option selected="1" value="0">Year</option>
								<?php
									$i=2015;
									while($i>1904) {
									echo '<option value="'.$i.'">'.$i.'</option>';
									$i--;
								}
								?>
							</select>	
						</div><!-- end of select form group -->
							<div class="form-group">
								<div class="radio-inline">
									<label>
										<input type="radio" name="optionsRadio" id="maleRadio" checked>
										&nbsp;Male
									</label>
								</div>
								<div class="radio-inline">
									<label>
										<input type="radio" name="optionsRadio" id="maleRadio">
										&nbsp;Female
									</label>
								</div>
							</div>
						</form>
				</div><!-- end of row -->
			</div><!-- end of container -->
		</div><!-- end of content class -->
		<div class="footer">
		</div><!-- end of footer -->
	</body>
</html>
