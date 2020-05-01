<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include("includes/config.php");
$msg="";
if($_POST)
{
  $email=$_POST['email'];
  $message=$_REQUEST['message'];
  $query=mysqli_query($mysqli,"insert into reply values(NULL,'".$email."','".$message."')");

  if ($query>0)
           {
             $msg="Your message sent successfully";
           }
         else
           {
             $msg="Something Went Wrong. Please try again";
           }


	$sql=mysqli_query($mysqli,"select * from reply where email='".$email."'");
    $count=mysqli_num_rows($sql);
    $row=mysqli_fetch_array($sql);

    if($count>0)
    {

      require 'vendor/autoload.php';

     // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);


  
  //Enable SMTP debugging.
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
        $mail->setFrom('cricketacademycenter@gmail.com', 'Hostel Management System');
        $mail->addAddress($email,$email);     // Add a recipient


  $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Reply';
        $mail->Body    =$row["message"];
        $mail->AltBody = "This is the plain text version of the email content";

        $mail->send();
        $msg="Message has been sent successfully";

  } 
    catch (Exception $e) 
    {
        $msg='Message could not be sent.';
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
	<title>Reply</title>
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
					<h2 class="text-center">Reply of Response</h2>
                </div>
                  <form method="post" action="" class="form-horizontal" id="signup" name="signup" enctype="multipart/form-data">

                      <div class="card s1">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-3"></div>
                              <div class="col-md-6">

                                <?php
                                $id=$_REQUEST['id'];
                                $sql=mysqli_query($mysqli,"select * from enquiry where id='$id'");
                                $d=mysqli_fetch_array($sql);
                                if($d>0)
                                {
                                  ?>

                                <input type="email" name="email" class="form-control" id="email" value="<?php echo $d['email'];?>" readonly >
                                
                              <?php } ?>
                                
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
                 </div>
		    </div>
		</div>
	</div>
</form>

</body>
</html>