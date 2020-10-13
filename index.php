<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>GICM Examination Center</title>
<link rel="shortcut icon" type="image/x-icon" href="image/Lgo1.png">
<link  rel="stylesheet" href="css/bootstrap.min.css?ver=1.0"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/man.css?ver=1.0">
 <link  rel="stylesheet" href="css/font.css?ver=1.1">
 <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=1.0">

<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<style>
  .row
  {
    margin: 0;
    padding: 0;
  }
  .header
  {
    margin: 0;
    padding: 0;
  }
  .hd-right i
    {
      margin: 5px;
      padding: 15px;
      background-color: orange;
      border-radius: 50%;
      font-size: 16px;
      color: #002147;
    }
    .hd-right i:hover
    {
      border: 1px solid orange;
      border-radius: 50%;
      background-color:  #002147;
      cursor: pointer;
      animation: 0.5s sample;
      color: orange;
      text-shadow: 2px 4px 10px white;
    }
    @keyframes sample
    {
      0%
      {
        transform:  rotate(0deg);
      }
      50%
      {
          transform: rotate(180deg);  
      }
      100%
      {
        transform: rotate(360deg);
      }
    }
  .navbar
  {
    background-color: orange;
    margin-bottom: 0px;
  }
  .nav-item
  {
    display: flex;
    align-items: center;
    justify-content: space-around;
    list-style: none;
    text-decoration: none;
  }
  .nav-link
  {
    color: white;
    font-weight: 700;
     font-size: 16px;
     padding: 10px;
  }
  .nav-link:hover
  {
    text-decoration:  none;
    color:orange;
      background-color:#002147;

  }
  .navbar-toggle
  {
     background-color: #002147;
  }
  .icon-bar
  {
    margin: 0;
    padding: 0;
    background-color: orange;
  }
  .dropdown-menu
  {
    min-width: 0px;
    padding: 6px;
    margin: 0;
    background-color:orange;
    border-radius: 15px;
    color:white;
    font-weight: 400;
    text-align: center;
    list-style: none;
  }
  .dropdown-menu>a
  {
    color:white;
    padding: 0;
    margin: 0;
    font-size: 16px;
  }
  .dropdown-menu>a:hover
  {
    color: white;
    background-color: #002147;
    text-decoration: none;
  }
  .sub
  {
    background-color:orange;
    color: white;
  }
  .subb:hover
  {
    background-color: #002147;
    color: orange;
  }
  .signup
  {
    margin: 1px;
    padding: 0;
  }
  .signup-box
  {
     border-color:#eee;
     background-color:#fff;
     margin:0px;
     padding:20px;
     font: 15px "Century Gothic", "Times Roman", sans-serif;
  }
  .footer
  {
    background-color: orange;
    color: white;
    font-size: 16px;
    font-weight: 400;
    padding: 5px;
  }

</style>

</head>

<body>
<div class="header container-fluid">
    <div class="row" style="background-color: #002147;padding: 6px;">
      <div class="col-md-9" >
        <span><img src="image/Logo1.png" style="width: 60px;height: 60px;"></span>
        <span><a href="#" style="text-decoration: none; color: orange;font-size: 28px;font-family:'Cambria';margin-right: 20px;">Online Q&A Portal</a></span>
        <span class="m-sm-auto" style="color: white;margin-right: 10px;font-family:'Cambria';">Powered by</span>
        <span><a href="https://www.gicmodisha.com" target="_blank" style="color: orange;text-decoration: none;font-family:'Cambria';"> GICM</a></span>
      </div>
      <div class="col-md-3 hd-right d-flex align-items-center justify-content-center">
        <span><i class="fa fa-facebook"></i></span>
        <span><i class="fa fa-instagram"></i></span>
        <span><i class="fa fa-twitter"></i></span>
        <span><i class="fa fa-youtube"></i></span>
        <span><i class="fa fa-linkedin"></i></span>
      </div>
    </div>
  </div>

</div>

<!-- Navbar Menu Start -->
<nav class="navbar container-fluid">

   <!-- Toggler/collapsibe Button -->

   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <hr class="icon-bar" id="toggler"></hr>
        <hr class="icon-bar" id="toggler"></hr>
        <hr class="icon-bar" id="toggler"></hr>
   </button>

  <!--Nav Links -->
    <div class="collapse navbar-collapse" id="myNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#about-us">About Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#contact-us">Contact Us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#feedback">Feedback</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
         Sign In
      </a>
      <div class="dropdown-menu">
        <a href="#" class="pull-right btn dropdown-item" data-toggle="modal" data-target="#login" ><span><b>Admin LogIn</b></span></a>
        <a href="#" class="pull-right btn dropdown-item" data-toggle="modal" data-target="#myModal"><span><b>&nbsp;Student LogIn</b></span></a>
      </div>
    </li>
  </ul>
</nav>

<!--About Us Modal-->

<div class="modal fade title1" id="about-us" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">About Us</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/IMG-20200518-WA0002.jpg" width=100 height=100 alt="Gayatri Institute" class="img-rounded">
     </div>
     <div class="col-md-5">
    <a href="http://gicmodisha.com" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">GICM</a>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 7008530215</h4>
    <h4 style="font-family:'typo' ">sadangirashmiranjan@gmail.com</h4>
    <h4 style="font-family:'typo' ">GAYATRI INSTITUTE OF COMPUTER AND MANAGEMENT VIDYAKUNJA,RANGUNIPALI,HINJILICUT</h4></div></div>
    </p>
      </div>
    
    </div> <!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Contact Us Modal -->
<div class="modal fade title1" id="contact-us">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Contact Us</span></h4>
      </div>
    
      <div class="modal-body">
        <p>
    <div class="row">
    <div class="col-md-4">
     <img src="image/Logo1.png" width=100 height=100 alt="Gayatri Institute" class="img-rounded">
     </div>
     <div class="col-md-5">
    <h4 style="font-family:'typo' ">GAYATRI INSTITUTE OF COMPUTER AND MANAGEMENT VIDYAKUNJA,RANGUNIPALI,HINJILICUT</h4></div></div>
    <h4 style="font-family:'typo' ">Our Official Sites - <a href="https://www.gicmodisha.com" target="_blank">gicmodisha.com / </a><a href="https://www.gicm.online" target="_blank">gicm.online</a></h4>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">Contact No. - +91 7008530215,9776722625</h4>
    <h4 style="font-family:'typo' ">Emial - sadangirashmiranjan@gmail.com</h4>
    
    </p>
      </div>
    
    </div> <!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
     <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>

<!-- Sign In Email Input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your Email " class="form-control input-md" type="text">
  </div>
</div>


<!--Sign In  Password input-->
<div class="form-group">
  </span><label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
  </div>
</div>


<div class="form-group">
  </span><label class="col-md-3 control-label" for="forgot password ?"></label>
    <div class="col-md-6">
           <a href="#" data-toggle="modal" data-target="#forgotpassword">Forgot Password ?</a>
    </div>
</div>

    
<div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   <button type="submit" class="btn btn-primary">Log in</button>
 </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!-- Admin modal-->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
           <form role="form" method="post" action="admin.php?q=index.php">
              <div class="form-group">
                <input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
              </div>
              <div class="form-group">
                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
              </div>
              <div class="form-group" align="center">
                <input type="submit" name="login" value="Login" class="btn btn-success" />
              </div>
           </form>
         </div>
        <div class="col-md-3"></div>
      </div>
  </div>
</div>
</div>
</div>


<!-- Feedback modal-->
<div class="modal fade" id="feedback">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Feedback</span></h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
         <div class="col-md-12" style="background-color: #002147;padding: 10px;">
           <form role="form" method="post" action="feed.php?q=index.php">
              <div class="form-group">
                <input type="text" id="name" name="name" maxlength="20"  placeholder="Enter Your Name" class="form-control"/> 
              </div>
              <div class="form-group">
                <input type="text" id="name" name="subject" maxlength="100" placeholder="Enter Subject" class="form-control"/>
              </div>
              <div class="form-group">
                <input type="email" id="email" name="email" maxlength="35" placeholder="Enter Your Emaill" class="form-control"/>
              </div>
              <div class="form-group"> 
                 <textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
              </div>
              <div class="form-group" align="center">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
              </div>
           </form>
         </div>
      </div>
  </div>
</div>
</div>
</div>
<!-- Feedback Modal Closed -->

<!-- Forgot Password Modal-->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Forgot Password ?</span></h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
         <div class="col-md-12" style="background-color: #002147;padding: 30px;">
           <form role="form" method="post" action="main.php?index.php">
              <div class="form-group">
                <input type="text" id="email" name="email" maxlength="20"  placeholder="Enter Your Email" class="form-control"/> 
              </div>
              <div class="form-group">
                <input type="text" id="otp" name="otp" maxlength="20"  placeholder="Enter OTP" class="form-control"/> 
              </div>
              <div class="form-group" align="center">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
              </div>
           </form>
         </div>
      </div>
  </div>
</div>
</div>
</div>

<!-- Body Section -->
<div class="container-fluid signup-box">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4">
<!-- sign up form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=index.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Name input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>



<!-- College input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="colleg"></label>  
  <div class="col-md-12">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Email input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
  </div>
</div>

<!-- RollNo and Regd No Input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="rollno and regdno"></label>
  <div class="col-md-12">
    <input id="rollno" name="rollno" placeholder="Enter Roll No" type="text" class="col-md-6" maxlength="7">
    <input id="regdno" name="regdno" placeholder="Enter Regd No" type="text" class="col-md-6" maxlength="7">
  </div>
</div>


<!--Mobile Input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number" maxlength="10">
    
  </div>
</div>

<!-- Gender Input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <span> Gender :  </span>
      <span> Male  <input type="radio" id="gender" name="gender" value="M"></span> 
      <span> Female <input type="radio" id="gender" name="gender" value="F"></span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<!--Confirm Password Section-->
<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
  </div>
</div>

<!-- For Sign Up Confirmation Message -->
<?php 
if(@$_GET['q7'])
{   
  echo'
  <script>
  window.location.replace("index.php");
  alert("Succesfully Signe Up !!!");
  </script>'.@$_GET['q7'];

}
if(@$_GET['q8'])
{   
  echo'
  <script>
  window.location.replace("index.php");
  alert("Email Already Registered !!!");
  </script>'.@$_GET['q7'];

}
?>
<!-- End Of Confirmation Message-->

<!-- Button Start -->
             <div class="form-group">
                  <label class="col-md-12 control-label" for=""></label>
                     <div class="col-md-4 offset-md-4"> 
                         <input type="submit" class="subb" value="Free Sign Up"/>
                     </div>
             </div>
           </fieldset>
         </form>
      </div><!--col-md-6 end-->
    </div>
  </div>
</div><!--container end-->


<!--Footer start-->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-md-12 text-center">
        <span>© - All Copyrights reserved | Gayatri Institute Of Computer and Management</span>
    </div>
  </div>
</div>
<!--Footer End -->

<!-- Script For Form Validation -->
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value;
  var letters = /^[A-Za-z]+$/;
  if (y == null || y == "") 
   {
    alert("Name must be filled out.");
    return false;
   }
   var z =document.forms["form"]["college"].value;
   if (z == null || z == "")
    {
      alert("college must be filled out.");
      return false;
    }
    var x = document.forms["form"]["email"].value;
    var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
       {
        alert("Not a valid e-mail address.");
        return false;
       }
      var rollno =document.forms["form"]["rollno"].value;
      if (rollno == null || rollno == "")
        {
          alert("RollNo must be filled out.");
          return false;
        }
      var regdno =document.forms["form"]["regdno"].value;
      if (regdno == null || regdno == "")
        {
          alert("Regd No. must be filled out.");
          return false;
        }
       var a = document.forms["form"]["password"].value;
       if(a == null || a == "")
        {
          alert("Password must be filled out");
          return false;
        }
        if(a.length<5 || a.length>25)
        {
          alert("Passwords must be 5 to 25 characters long.");
          return false;
        }
        var b = document.forms["form"]["cpassword"].value;
        if (a!=b)
        {
            alert("Passwords must match.");
            return false;
        }
    }
</script>

<
</body>
</html>