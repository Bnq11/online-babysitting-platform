<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href=style.css>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    
    
    <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
    

    <title>Sign In</title>
</head>
<body>

    <nav>
    <div class="conatainer">
        <img src="KG4.png" class="logo" alt="Logo" />

            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="#footer">About us</a></li>
                
                
            </ul>
    </div>
    </nav>
    <!--================================================================================-->
    <section class="sign-in-form">
    <form action="includes\signInS.inc.php" method="post">
            <?php
            if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p> You didn't fill in all fields! </p>";
                    }
                    else if ($_GET["error"] == "wronglogin"){
                        echo "<p> Incorrect Login Information! </p>";
                    }
                    else if ($_GET["error"] == "wronglogin1"){
                        echo "<p> Incorrect Password! </p>";
                    }

                }
            ?>   
    <h2>Sign In</h2>
    
        <label>Username </label>  <br>
            <input type="email" placeholder="Enter your email" name="username" required> <br> 
        <label>Password </label> <br>
            <input type="password" placeholder="Enter Password" name="password" required>  <br>
            <input type="checkbox" checked="checked"> Remember me <br>
            <button type="submit" id="1" name= "submit">Login</button>
            <br><br>
            <label> <b>Not a member? Sign up as a <a href="signUpP.php">Parent</a> or <a href="SignUpS.php">Sitter</a> </b> </label> 
    
    </form>
    </section> 



<!--===================================================================================================-->


    <!-- ======================================================================== -->

    
    

<div class= "footer">
    <div class="col-1">
        <h3><b>ABOUT US</b></h3>
        <p>At KinderGuardians we distinguish ourselves on creating special 
            memorable moments for your little angels. Our babysitters don't just babysit your kids, 
            they teach them valuable lessons that keep them amused and more importantly smiling thanks
            to their creative teaching style.</p>
        </div><br>
<div id="footer"></div>
<div class="col-2">

<h3><b>NEWSLETTER</b></h3>
<form>

    <input type="text" placeholder="Your Email Address" required>
    <br>
    <button type="submit">SUBSCRIBE NOW </button>
</form>
</div><br>

<div class="col-3">
<h3><b>CONTACT US</b></h3>
<a href="mailto:info@kinderguardians.com">info@kinderguardians.com</a>
<div class="social-icons"></div>
<i class="fab fa-twitter"></i>
<i class="fab fa-instagram"></i>
<br>
<p>&copy;2022 KinderGuardians</p>
</div>
</div>

    <!-- ======================================================================== -->


</body>
</html>