<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("includes/config.php");
$msg="";
if($_POST)
{
  $email=$_POST['email'];
  $sql=mysqli_query($mysqli,"select * from userregistration where email='".$email."' ");
    $count=mysqli_num_rows($sql);
    $row=mysqli_fetch_array($sql);
    if($count>0)
    {
       require 'vendor/autoload.php';

     // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

       try
       {
    //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'cricketacademycenter@gmail.com';                     // SMTP username
        $mail->Password   = 'cac12345@';                               // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
        $mail->setFrom('cricketacademycenter@gmail.com', 'Password');
        $mail->addAddress($email,$email);     // Add a recipient
       
        // Attachments
       
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Forgot Password';
        $mail->Body    =" Hi $email your password is {$row['password']}";
        $mail->AltBody = " Hi $email your password is {$row['password']}";

        $mail->send();
        $msg="Your password has been send on your email id";
    } 
    catch (Exception $e) 
    {
        $msg='Email could not be sent.';
        $msg='Mailer Error:' .$mail->Errorinfo;
    }
    }

else
    {
      $msg="Email not found";
    }
}    

?>

<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="container text-center mt-5">
    <div class="row mt-5">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="myform form">
        <div class="card-body">
          <h2 class="text-center">Forgot Password</h2>
                </div>
                 <p style="font-size:16px; color:red" align="center">
                                <?php if($msg){
                                     echo $msg;
                                    }  ?> </p>
                <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>                          
                           <div class="col-md-12 text-center mt-4 mb-3">
                              <button type="submit" class=" btn  mybtn btn-primary tx-tfm">Send</button>
                            </div>
                            <div class="form-group mt-3">
                              <p class="text-center"><a href="index.php" id="signup">Login here</a></p>
                           </div>
                          
                        </form>
                 </div>
        </div>
    </div>
  </div>


</body>
</html>