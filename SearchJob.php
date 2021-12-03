<?php
session_start();
if(isset($_SESSION['$Email'])){
	header('location:Admin/index.php');
} 
if(isset($_SESSION['$UserEmail_job'])){
	header('location:JobSeeker/index.php');
} 
if(isset($_SESSION['$UserEmail_emp'])){
	header('location:Employer/index.php');
} 
?>

<?php
    // Create connection
$conn = new mysqli("localhost","root","","chakri");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="design/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" a href="index.php">
    <img src="./design/logo.PNG" width="140" height="30" class="d-inline-block align-top" alt="">
    <span class="web-name">চাকরি চাই !</span>
    <?php
$sql = "SELECT * FROM news_master";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?> 
    <tr>
        <td><marquee behavior="scroll" width="200%" direction="left" scrollamount="12"><?php echo $row["News"];?></marquee></td>  
      </tr>
  <?php }
} else {
  echo "0 results";
}

?>
  </a>
</nav>




<!-- navbar -->
<div class="">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" a href="index.php"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" a href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TopJobs.php">Top Companies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutUs.php">About Us</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="SearchJob.php">Searching a Job?</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" a href="registration.php">Don't have an account? Register Here!</a>
        </div>
      </li>
      <li class="nav-item">
        <button class="btn show-login btn-outline-success my-2 my-sm-0"> <a href="#">Login</a></button>
      </li>
    </ul>
    
  </nav>
</div>
<!-- Login pop up -->

 <div class="popup">
   <div class="close-btn">&times;</div>
   <div class="form">
     <h2>Log in</h2>
     <form method="post" action="login.php">
     <div class="form-element">
       <label for="Email">Email</label>
       <input type="text" id="txtEmail" name="txtEmail"  placeholder="Enter email">
     </div>
     <div class="form-element">
       <label for="Password">Password</label>
       <input type="Password" id="txtPassword" name="txtPassword"  placeholder="Enter password">
     </div>
     <div class="form-element">
     <tr>
        <td>User Type*</td>
      </tr>
      <tr>
        <td><label>
            <select name="cmbUser" id="cmbUser">
              <option value="JobSeeker">JobSeeker</option>
              <option value="Employer">Employer</option>
              <option value="Administrator">Administrator</option>
            </select>
          </label></td>
      </tr>
     </div>
     <div class="form-element">
       <input type="checkbox" id="remember-me">
       <label for="remember-me">Remember me</label>
     </div>
     <div class="form-element">
      <button>Sign in</button>    
     </div>
     <div class="form-element">
       <a href="Forget.php">Forgot password?</a>
     </div>
   </div>
</form>
 </div>
<!-- Banner -->
<!-- Banner -->
<div class="container">
<br><br><br>
<table class="table" id="myTable">
    <thead>
      <tr>
        <!-- <th>EmployerId</th> -->
        <th>CompanyName</th>
        <th>JobTitle</th>
        <th>Vacancy</th>
        <!-- <th>MinQualification</th>
        <th>Description</th> -->
        <th>Posted ON:</th>
      </tr>
    </thead>
    <tbody>


    <?php

        
$sql = "SELECT * FROM job_master";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) { ?>
    
    <tr>
    <!-- <td><a href="single-job.php?id=<?php echo $row["id"];?>"><?php echo $row["EmployerId"];?></a></td> -->
        <td><a href="single-job.php?id=<?php echo $row["id"];?>"><?php echo $row["CompanyName"];?></a></td>
        <td><a href="single-job.php?id=<?php echo $row["id"];?>"><?php echo $row["JobTitle"];?></a></td>
        <td><?php echo $row["Vacancy"];?></td>
        <!-- <td><?php echo $row["MinQualification"];?></td>
        <td><?php echo $row["Description"];?></td> -->
        <td><?php echo date("d-m-Y", strtotime($row["created_at"]));?></td> 
      </tr>
    
    

  <?php }
} else {
  echo "0 results";
}
$conn->close();

    ?>

      
    </tbody>
  </table>
  <br><br><br>
</div>

<!--footer -->
<footer class="container-fluid text-center text-white bg-dark">
    <p>All Right reserved By Eastern University</p>
  </footer>





  <script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



    <script src="script.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>