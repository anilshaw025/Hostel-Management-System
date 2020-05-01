<?php 
session_start();
include_once "includes/config.php";

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
	<title>Room Fare</title>
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

</head>
<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title" style="margin-top: 4%">Room Fare</h2>
						<div class="panel panel-default">
							<div class="panel-heading">All Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Seater</th>
											<th>Room No.</th>
											<th>Fees (PM) </th>
											<th>Posting Date  </th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Sno.</th>
											<th>Seater</th>
											<th>Room No.</th>
										
											<th>Fees (PM) </th>
											<th>Posting Date  </th>
										</tr>
									</tfoot>
									<tbody>
								
									
<?php
			$sql="select * from rooms";
			
			$rs=mysqli_query($mysqli,$sql);
			$cnt=1;
			while($d=mysqli_fetch_array($rs))
			{
			?>
            <tr>
            	<tr><td><?php echo $cnt;;?></td>
                <td><?php echo $d['seater'];?></td>
                <td><?php echo $d['room_no'];?></td>
                <td><?php echo $d['fees'];?></td>
                <td><?php echo $d['posting_date'];?></td>
          
            </tr>
			<?php
			$cnt=$cnt+1;
			}
			
			?>
											
								
								</table>


			</center>
		</div>
	</div>


</body>
</html>