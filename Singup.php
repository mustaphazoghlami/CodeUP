<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Singup</div>
				<div class="panel-body">
					<form method="post" action="Classes/store.php">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="FirstName" name="FirstName" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="LastName" name="LastName" type="text" value="">
							</div>							
							<div class="form-group">
								<input class="form-control" placeholder="Email" name="Email" type="email" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="Password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Reapeat Password" name="password2" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Phone" name="phone" type="text" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input type="submit" class="btn btn-primary"value="Singup" />
							</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
