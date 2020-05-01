<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
$msg="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  // $id=$_POST['id'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];

  $query=mysqli_query($mysqli,"insert into enquiry (email,phone,message) value('$email','$phone','$message')");
  if($query>0){
    $msg="Message Sent";
  }
  else{
    $msg="Something Went Wrong";
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
  <title>Student Hostel Registration</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
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
          
            <h2 class="page-title" style="margin-top:4%">Contact Us </h2>

            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-primary">
                  <div class="panel-heading">Fill out the form below and representative will contact you soon</div>
                  <div class="panel-body">
                    <form method="post" action="" class="form-horizontal" id="signup" name="signup" enctype="multipart/form-data">

                      <div class="card s1">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-3"></div>
                              <div class="col-md-6">

                                <?php 
                                $aid=$_SESSION['id'];
                                  $ret="select * from userregistration where id=?";
                                    $stmt= $mysqli->prepare($ret) ;
                                   $stmt->bind_param('i',$aid);
                                   $stmt->execute() ;//ok
                                   $res=$stmt->get_result();
                                   //$cnt=1;
                                     while($row=$res->fetch_object())
                                    {
                                      ?>


                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $row->email;?>"  readonly aria-describedby="emailHelp">
                                <?php } ?>
                              </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-3"></div>
                              <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Mobile Number" aria-describedby="emailHelp">
                              </div>
                          </div>
                          <div class="row mt-2">
                            <div class="col-md-3"></div>
                              <div class="col-md-6">
                                <textarea class="form-control" rows="10" id="message" name="message" placeholder="Message" aria-describedby="emailHelp" maxlength="500"></textarea>
                              </div>
                          </div>
                          <div class="col-md-12 text-center mt-4 mb-3 ">
                              <button type="submit" class=" btn  mybtn btn-primary tx-tfm">Send Message</button>
                          </div>
                        </div>
                      </div>

                      <p style="font-size: 16px;color: red" align="center"><?php if ($msg){
                          echo $msg;
                        }     ?></p>  


                      <div class="text text-center mt-5" style="font-size: 25px;color: #000099">LOOKING FOR ANY SUPPORT</div>
                      <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                          <div class="mt-5 text-center" style="border: 1px solid red">
                            <a href="#map"><h5>See Our Office</h5></a>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4 text-center" style="font-size: 20px; margin-top: 20%; ">
                              <div style="font-size: 50px;color: #ff3300"><i class="fas fa-map-marked-alt"></i></div><br>
                              <p>29, Ballygunge Park, Near Haldiram's Mall, Ballygunge, Kolkata, West Bengal 700019</p>
                            </div>
                            <div class="col-md-4 text-center" style="font-size: 20px; margin-top: 20%; ">
                              <div style="font-size: 50px;color: #ff3300"><i class="fas fa-phone-alt"></i></div><br>
                              <p>+91 9784790675</p>
                            </div>
                            <div class="col-md-4 text-center" style="font-size: 20px; margin-top: 20%; ">
                              <div style="font-size: 50px;color: #ff3300"><i class="fas fa-envelope"></i></div><br>
                              <p>abcdefghij@gmail.com</p>
                            </div>
                            <div class="col-md-2"></div>
                          </div>
                        </div>
                      </div>
                      <div class="text-center mt-5" id="map" style="color: blue;font-size: 18px;">Address on Map</div>
                      <div class="row mt-4">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.2313075411253!2d88.36554181448005!3d22.533006390102436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0276d95e38e981%3A0x6970650a1a9c3b9d!2s29%2C+Ballygunge+Park%2C+Ballygunge%2C+Kolkata%2C+West+Bengal+700019!5e0!3m2!1sen!2sin!4v1565375363476!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                      



                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
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