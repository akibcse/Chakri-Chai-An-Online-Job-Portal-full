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
    <title>Registration</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>
<body>
<SCRIPT language="JavaScript1.2" src="gen_validation.js"></SCRIPT>
<SCRIPT language="JavaScript1.2">
var arrFormValidation=
             [
			 		[//First Name
						["minlen=1",
		"Please Enter First Name"
						  ]
					
                     ],
                   [//Last Name
						  ["minlen=1",
		"Please Enter Last Name"
						  ]
						  
                   ],
				   [//Email
						  
						["minlen=1",
		"Please Enter Email "
						  ], 
						  ["email",
		"Please Enter valid email "
						  ]  
                   ],
				   [//Mobile
						   ["num",
		"Please Enter valid Mobile "
						  ],
						  ["minlen=11",
		"Please Enter valid Mobile "
						  ] 	  
                   ],
				   [//Password
						["minlen=1",
		"Please Enter Password "
						  ]  
						  
						  
                   ],
                   [ //Upload
                ["minlen=1",
                "Please Upload Marksheet "
                  ] 
						  
						  
                   ],
				    [//Que
						  
						
                   ],
				    [//Answer
						  
						  ["minlen=1",
		"Please Enter Answer "
						  ]
						  
                   ]
           
            ];
</SCRIPT>


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
$conn->close();
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
        <a class="nav-link" href="AboutUs.php">About Us</a>
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
     <div class="form-element">
       <label for="email">Email</label>
       <input type="text" id="email" placeholder="Enter email">
     </div>
     <div class="form-element">
       <label for="password">Password</label>
       <input type="password" id="password" placeholder="Enter password">
     </div>
     <div class="form-element">
     <tr>
        <td>User Type*</td>
      </tr>
      <tr>
        <td><label>
            <select name="cmbUser" id="cmbUser">
              <option value="JobSeeker">JobSeeker</option>
              <option value="Employer" selected="selected">Employer</option>
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
       <a href="forget.php">Forgot password?</a>
     </div>
   </div>
 </div>
<!-- registration form -->
<div class="container">
<div class="container register">
    <div class="row">
        <div class="colom-1 register-left">
            <img src="./img/logo.PNG" alt=""/>
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
        </div>
        <div class="colom-2 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Job Seeker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Employer</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Apply as a Job Seeker</h3>
                    <form action="JobSeekerInsert.php" method="post"   id="form2"  enctype="multipart/form-data">
                    <div class="row register-form">
                        <div class="colom-3">
                            <div class="form-group">
                                <input type="text" id="txtFName" name="txtFName" class="form-control" placeholder="First Name *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtLName" name="txtLName" class="form-control" placeholder="Last Name *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" id="Email" name="Email" class="form-control" placeholder="Your Email *" value="" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtMobile" name="txtMobile" minlength="14" maxlength="14" name="txtEmpMobile" class="form-control" placeholder="+8801*********" value="" required/>
                            </div>
                            
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="cmbGender" id="cmbGender" value="male" checked>
                                        <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="cmbGender" id="cmbGender" value="female">
                                        <span>Female </span> 
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="colom-3">
                        <div class="form-group">
                                <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password *" value="" required/>
                            </div>
                            
                            <div class="form-group">
                            <td>Upload Your CV: *</td>
                                <input type="file" name="txtFile" id="txtFile" class="form-control"  placeholder="Upload CV *" value="" required/>
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <select class="form-control" id="cmbQue" name="cmbQue">
                                    <option class="hidden"  selected disabled>Please Select Your Sector</option>
                                    <option>Computer Engineering</option>
                                    <option>Accounting</option>
                                    <option>Law.</option>
                                    <option>EEE</option>
                                    <option>English</option>
                                </select>
                            </div>
                            
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Apply as an Employer!</h3>
                    <form action="EmployeInsert.php" method="post"   id="form2">
                    <div class="row register-form">
                        <div class="colom-3">
                            <div class="form-group">
                                <input type="text" id="txtCName" name="txtCName" class="form-control" placeholder="Company Name *" value="" required/>
                            </div>
                            <div class="form-group"><span id="sprytextfield5">
                                <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email *" value="" required/>
                            </div>
                            <div class="form-group"><span id="sprytextfield6">
                                <input type="text" id="txtMobile" name="txtMobile" maxlength="14" minlength="14" class="form-control" placeholder="Phone *" value="" required/>
                            </div>


                        </div>
                        <div class="colom-3">
                            <div class="form-group">
                                <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password *" value="" required/>
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="cmbQue" name="cmbQue">
                                    <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                    <option>Which city do you live?</option>
                                    <option>What is your favorite team?</option>
                                    <option>What is your Pet Name?</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" id="txtAnswer" name="txtAnswer"class="form-control" placeholder="`Answer *" value="" required/>
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

 <!--footer -->
<footer class="container-fluid text-center text-white bg-dark">
    <p>All Right reserved By Eastern University</p>
  </footer>







<script src="script.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
