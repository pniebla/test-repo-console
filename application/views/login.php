

<!DOCTYPE html>
<html>
<head>
	<title>Console Login</title>
	<link type="text/css" rel="stylesheet" href="<?php base_url(); ?>assets/styles/bootstrap.min.css">
	<style type="text/css">
		.panel-body{
			font-size: 12px;

		}
		.panel-heading {
		    padding: 5px 15px;
			font-size: 14px;

		}

		.panel-footer {
			padding: 1px 15px;
			color: #A0A0A0;
			font-size: 14px;
		}

		.profile-img {
			width: 96px;
			height: 96px;
			margin: 0 auto 10px;
			display: block;
			-moz-border-radius: 50%;
			-webkit-border-radius: 50%;
			border-radius: 50%;
		}
	</style>
	
    <link type="text/css" rel="stylesheet" href="assets/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/all.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/main.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="assets/styles/jquery.news-ticker.css">
</head>
<body>
		  

    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong> Sign in to continue</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="/login" method="POST">
							<fieldset>
								<div class="row">
									<div class="center-block">
										<img class="profile-img"
											src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" name="user" type="text" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign in">
										</div>
										<?php if(isset($error)) {?> <label class="label bg-red label-error"> Wrong Username/Password </label> <?php }?>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="panel-footer ">
						Don't have an account! <a href="#" onClick=""> Sign Up Here </a>
					</div>
                </div>
			</div>
		</div>
	</div>
</body>
</html>