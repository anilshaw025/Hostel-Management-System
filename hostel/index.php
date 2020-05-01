<?php
session_start();
include('includes/config.php');
$msg="";
if(isset($_POST['login']) && isset($_POST["captcha"]))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$stmt=$mysqli->prepare("SELECT email,password,id FROM userregistration WHERE email=? and password=? ");
				$stmt->bind_param('ss',$email,$password);
				$stmt->execute();
				$stmt -> bind_result($email,$password,$id);
				$rs=$stmt->fetch();
				$stmt->close();
				
				if($_SESSION["captcha"]==strtolower($_POST["captcha"])){
				$_SESSION['id']=$id;
				$_SESSION['login']=$email;
				$uip=$_SERVER['REMOTE_ADDR'];
				$ldate=date('d/m/Y h:i:s', time());
				if($rs)
				{
             		$uid=$_SESSION['id'];
             		$uemail=$_SESSION['login'];
					$ip=$_SERVER['REMOTE_ADDR'];
					$geopluginURL='http://www.geoplugin.net/php.gp?ip='.$ip;
					$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
					$city = $addrDetailsArr['geoplugin_city'];
					$country = $addrDetailsArr['geoplugin_countryName'];
					$log="insert into userLog(userId,userEmail,userIp,city,country) values('$uid','$uemail','$ip','$city','$country')";
					$mysqli->query($log);
					if($log)
					{
					header("location:dashboard.php");
									}
				}
									else
									{
										echo "<script>alert('Invalid Username/Email or password');</script>";
									}
				}
				else{
					$msg="Invalid Captcha";
				}
}
				?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Login</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row page-title">
					<div class="col-md-10">
						<h2 class=" " style="margin-top: 2%">User Login </h2>
					</div>
					<div class="col-md-2">
						<a href="admin/index.php"><h2 class="text-center" style="margin-top: 15%;color: red;font-weight: bolder;font-size: 20px;border: 1px solid red">Admin</h2></a>
					</div>
				</div>
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							
								<form action="" class="mt" method="post">
									<p style="font-size: 16px;color: red" align="center"><?php if ($msg){
									echo $msg;
									}			?></p>
									<label for="" class="text-uppercase text-sm">Email</label>
									<input type="text" placeholder="Email" name="email" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Password</label>
									<input type="password" placeholder="Password" name="password" class="form-control mb">
									
									<img src="captcha.php" alt="captcha image"><br><br>
									<label for="" class="text-uppercase text-sm">Enter Captcha </label>
									<input type="text" name="captcha" class="form-control" maxlength="6" required="required">
									<br>
									<input type="submit" name="login" class="btn btn-primary btn-block" value="login" >
								</form>
							</div>
						</div>
						<div class="text-center text-light" style="color:black;">
							<a href="forgot-password.php" style="color:black;font-weight: bolder;">Forgot password?</a>
							<a href="registration.php" style="color:black;padding-left: 5%;color: red;font-weight: bolder;">new user</a>
						</div>
					</div>
				</div>
						</div>			
			
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>

</html>