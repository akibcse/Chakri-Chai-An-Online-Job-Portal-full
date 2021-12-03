<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$Email=$_POST['txtEmail'];
$Password=$_POST['txtPassword'];
$UserType=$_POST['cmbUser'];
if($UserType=="Administrator")
{
$con = mysqli_connect("localhost","root","","chakri");

$sql = "select * from admin where Email='".$Email."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
}
else
{
	$_SESSION['$Email']=$Email;
header("location:Admin/index.php");
} 
mysqli_close($con);
}
else if($UserType=="JobSeeker")
{
$con = mysqli_connect("localhost","root","","chakri");
$sql = "select * from jobseeker_reg where Email='".$Email."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Email or Password");window.location=\'index.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['LastName'];
$_SESSION['$UserEmail_job']=$Email;
$_SESSION['Sector']=$row['Sector'];
header("location:JobSeeker/index.php");
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","chakri");
$sql = "select * from employer_reg where Email='".$Email."' and Password='".$Password."' and Status='Confirm'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong Email or Password");window.location=\'index.php\';</script>';
}
else
{
	$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['LastName'];
$_SESSION['$UserEmail_emp']=$Email;
$_SESSION['CompanyName']=$row['CompanyName'];
header("location:Employer/index.php");
} 
mysqli_close($con);
}
?>

</body>
</html>
