<? php session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/navigation2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Full-width input fields */
input[type=text],input[type=email],input[type=password]  {
 width:100%;
 height: 50%;
 border-radius: 15px 0 15px 0;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #fff;
  box-sizing: border-box;
  background: transparent;
  color: white;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
}


.imgcontainer {
  text-align: center;
  margin-top: 45px;
  position: relative;
}

img.avatar {
  width: 20%;
}

.container {

margin-left: 50px;
  align:right; 
  padding: 20px;
}
body
  {margin: 0;
    background-image:URL(images/loginn.jpg);
    -webkit-background-size: cover;
    background-size: cover;
    background-position:center center;
    font-family: poppins;
    }

.box{
  width: 500px;
  height: 400px;
  margin: 5px auto 0;
  background: rgba(0,0,0,0.6);
  text-align: center;
  padding: 30px;
  border: 3px solid #fff;
  border-radius: 70px 0 70px 0;
}
.box h2{
  margin-bottom: 30px;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.box p{
  text-align: left;
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
}
}

}
</style>
<script type="text/javascript">
  function myFun()
  {
    var a = document.getElementById("passwords").value;
    var b = document.getElementById("passwordss").value;
    
    if (a.length < 5|| a.length > 10)
    {
      document.getElementById("messages").innerHTML="** Password length must be between 5 to 10 characters"
      return false;
    }
    if(a!=b)
    {
      document.getElementById("messages").innerHTML="** Passwords are not same"
      return false;
    }
  }
</script>
</head>
<body>
<div class="navbar">
  <img class="logo-img" src="images/logo.jpg" width="150" height="50" ALT="company logo">
  <a href="homepage.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-fw fa-user"></i>Login
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="userlogin1.php">User Login</a>
      <a href="admin.php">Admin Login</a>
    </div>
  </div>
  <a href="package1.php"><i class="fa fa-fw fa-globe"></i>Tour Packages</a> 
  <a href="hotels.php"><i class="fa fa-fw fa-building-o"></i>Book Hotels</a>
  <a href="3cabs.php"><i class="fa fa-fw fa-cab"></i> Book Cab</a>
  <a href="feedback.php"><i class="fa fa-fw fa-commenting"></i>Feedback</a>
   <div class="dropdown">
    <button class="dropbtn"><i class="fa fa-fw fa-map-marker"></i>Places to visit 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="hawamahal.php">Hawa Mahal</a>
      <a href="city_palace.php">City Palace</a>
      <a href="jal_mahal.php">Jal Mahal</a>
      <a href="amber_fort.php">Amber fort</a>
      <a href="nahargarh.php">Nahargarh Fort</a>
      <a href="jaigarh.php">Jaigarh Fort</a>
      <a href="jantar mantar.php">Jantar Mantar</a>
      <a href="albert_hall.php">Albert Hall Meuseum</a>
    </div>
       
    
  </div> 
</div>
<br>


<br><br>
    <?php 
    if(isset($_GET['loginerror'])){
     // $loginerror=$_GET['loginerror'];
    echo '<p class="successmsg">login successfull...</p>';
    }
    if(!empty($loginerror)){
      echo '<p class="errmsg">invalid login credentials,please try again...</p>';}?>
  
  
  <form class="login form"  onsubmit="return myFun()" action="login_connection.php" method="post">


    <div class="box"><div class="container">

      <p><b>Username or Email:</b></p>
      <input type="text" placeholder="Enter Username"  value="<?php if(!empty($loginerror)){
        echo $loginerror; } ?>" name="Username"  minlength="3" maxlength="20" class="form-control" autocomplete="off" required><br>

    
        <p><b>Password:</b></p>
     <input type="password" placeholder="Enter Password" minlength="5" maxlength="8" name="Password" id="passwords" value="" required><br><label>
      <span id="messages" style="color: white;"></span>
     
     <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
</label>  
      <button type="submit" name="insert" value="insert" class="btn btn-success" onclick="myFunction()">Login</button>
       <div class="card-footer text-white bg-primary text-center">
          Don't have an account | <a href="signup_form.php" class="text-white" style="color: white;">Sign Up</a>
      </div>
      
    </div>

      </div>
  </form>
</div>
<script type="text/javascript">
  function myFunction() {
    window.location.href="account.php";
  }
</script>
</script>
<div id="mySidenav" class="sidenav">
  <a href="https://web.whatsapp.com/" id="whatsapp">WhatsApp &nbsp&nbsp<i class="fa fa-whatsapp"></i></a>
  <a href="https://www.facebook.com/?_rdc=1&_rdr" id="facebook">Facebook &nbsp&nbsp&nbsp&nbsp<i class="fa fa-facebook"></i></a>
  <a href="https://www.instagram.com/" id="contact">Instagram &nbsp&nbsp&nbsp<i class="fa fa-instagram"></i></a>
  <a href="https://twitter.com/" id="twitter">Twitter &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-twitter"></i></a>
</div>
</body>
</body>
</html>