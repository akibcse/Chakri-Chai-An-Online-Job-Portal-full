
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="design/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" a href="index.php">
    <img src="./design/logo.PNG" width="140" height="30" class="d-inline-block align-top" alt="">
    <span class="web-name">চাকরি চাই !</span>
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
      <li class="nav-item active">
        <a class="nav-link" a href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="TopJobs.php">Top Companies</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="AboutUs.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
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
       <label for="email">Email</label>
       <input type="text" id="txtEmail" name="txtEmail"  placeholder="Enter email">
     </div>
     <div class="form-element">
       <label for="password">Password</label>
       <input type="password" id="Password" name="Password"  placeholder="Enter password">
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
       <a href="Forget.php">Forgot password?</a>
     </div>
   </div>
</form>
 </div>
<!-- Banner -->
<div class="container">

<!-- Article -->
<div class="article">
                <h2><span><a>Forget Password?</a></span></h2>
               

                <form id="form2" method="post" action="ForPass.php">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="left" valign="middle">Select User:</td>
                      <td><p>
                        <label>
                          <input type="radio" name="rdUser" value="Employer" id="rdUser_0" />
                          Employer</label>
                        <br />
                        <label>
                          <input type="radio" name="rdUser" value="JobSeeker" id="rdUser_1" />
                          JobSeeker</label>
                        <br />
                      </p></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                    <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                     
                    </tr>
                   
                    <tr>
                      <td>&nbsp;</td>
                      <td><label>
                        <input type="submit" name="button2" id="button2" value="Submit" />
                      </label></td>
                    </tr>
                  </table>
              </form>
                <p>&nbsp;</p>
              <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->
    
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