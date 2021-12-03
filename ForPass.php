<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
?>
<?php
        //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
?>
<?php
$Email=$_POST['txtEmail'];
;
$UserType=$_POST['rdUser'];

if($UserType=="EmployerId")
{
$con = mysqli_connect("localhost","root","","chakri");
//mysqli_select_db("job", $con);
$sql = "select * from employer_reg  where Email='".$Email."'";

$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
// echo $records;
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{

     $Password=$row['Password'];
     try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'chakrieu@gmail.com ';                     //SMTP username
        $mail->Password   = 'chakri1234';                              //SMTP password
        $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('chakrieu@gmail.com', 'Chakri Chai');
        $mail->addAddress($Email, 'Admin');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Chakri chai password';
        $mail->Body    =  $Password." is your password!!!";
    
        $mail->send();
        //echo '<b>Message has been sent</b>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","chakri");
//mysqli_select_db("job", $con);
$sql = "select * from jobseeker_reg  where Email='".$Email."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'Forget.php\';</script>';
}
else
{

     $Password=$row['Password'];
     try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'chakrieu@gmail.com ';                     //SMTP username
        $mail->Password   = 'chakri1234';                              //SMTP password
        $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('chakrieu@gmail.com', 'Chakri Chai');
        $mail->addAddress($Email, 'Joe User');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Chakri chai password';
        $mail->Body    =  $Password." is your password!!!";
    
        $mail->send();
        // echo '<b>Message has been sent</b>';
        echo '<script type="text/javascript">alert("Password Sent to your email adress");window.location=\'Forget.php\';</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
} 
mysqli_close($con);
}
?>
</body>
</html>