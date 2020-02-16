<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Charts</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php
if(date("h") !="23"){ 
	?>
	<script type="text/javascript">
        window.onload = function(){
        document.myform.Submit1.click();
        }
		
    </script>
	<button type="button" name="Submit1" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Break Time</h5>
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		  </button>
		</div>
		<div class="modal-body">
		  Time Break <span style='font-size:30px;'>&#128519;</span>
		</div>
	
	  </div>
	</div>
  </div>
  <!-- ##################### -->
<?php
 }
else{
	echo "<h1>Take Quick Break!</h1>";
	sleep(10);
}
?>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><span>Hello</span> Dali Ayadi</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.php"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li class="active"><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.php"><em class="fa fa-toggle-off">&nbsp;</em>Events</a></li>
			<li><a href="Games.php"><em class="fa fa-gamepad ">&nbsp;</em>Games</a></li>
			<li><a href="login.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
    </div><!--/.sidebar-->
</div>
</div><div class="container" style="width:58%;margin-left: 26%;">

<div class="row">
    <div class="card col" style="width: 18rem;float:left;margin-left:10px">
    <a href="XO">
         <img class="card-img-top" src="image/xo.jpg" style="width:100%"alt="Card image cap"/>
    </a>
         <div class="card-body">
             <p class="card-text">Best funny game Tic Toc</p>
         </div>
    </div>
    <!-- oooooooooooooo  -->
    <div class="card col" style="width: 18rem;float:left;margin-left:30px">
    <a href="Snake">
         <img class="card-img-top" src="image/Snake.png" style="width:180px;height:135px"alt="Card image cap"/>
    </a>
         <div class="card-body">
             <p class="card-text">Best funny game Tic Toc</p>
         </div>
    </div>
    <!-- oooooooooooooo  -->
    <div class="card col" style="width: 18rem;float:left;margin-left:10px">
    <a href="Tetris">
         <img class="card-img-top" src="image/tt.png" style="width:180px;height:135px" alt="Card image cap"/>
    </a>
         <div class="card-body">
             <p class="card-text">Best funny game Snake</p>
         </div>
    </div>
       <!-- oooooooooooooo  -->
       <div class="card col" style="width: 18rem;float:left;margin-left:10px">
    <a href="FlappyBird">
         <img class="card-img-top" src="image/flappy-bird.jpg" style="width:180px;height:135px" alt="Card image cap"/>
    </a>
         <div class="card-body">
             <p class="card-text">Best funny game Tic Toc</p>
         </div>
    </div>
    <!-- oooooooooooooo  -->
    </div>
    </div>

	</div>	<!--/.main-->
	  

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
