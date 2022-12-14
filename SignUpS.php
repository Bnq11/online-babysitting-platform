<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href=style.css>
    <link rel="shortcut icon" type="image/x-icon" href=KG1.png>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Sign Up Babysitter</title>
</head>
<body>
    <nav>
        <div class="conatainer">
            <img src="KG4.png" class="logo" alt="Logo" />
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="#footer">About us</a></li>
                    <li><a href="signInS.php">Sign in</a></li>
                    
                </ul>
        </div>
    </nav>
<!-- ========================================================================================== -->



<section class="Registeration">
    
    <form action="includes/signUpS.inc.php" method="post">
    <?php
            if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p> You didn't fill in all fields! </p>";
                    }
                    else if ($_GET["error"] == "invalidemail"){
                        echo "<p> Write a proper email! </p>";
                    }

                    else if ($_GET["error"] == "passwordsdontmatchl"){
                        echo "<p> Your passwords don't match! </p>";
                    }

                    else if ($_GET["error"] == "stmtfailed"){
                        echo "<p> Something went wrong, try again! </p>";
                    }

                    else if ($_GET["error"] == "emailtaken"){
                        echo "<p> Email already taken! </p>";
                    }

                    else if ($_GET["error"] == "none"){
                        echo "<p> You signed up! </p>";
                    }
            }
    ?>    
    <h2>Sign Up</h2>
            <!-- <div class="container">    -->
        <div class="left">
            <label> Firstname: </label>   
            <input type="text" name="firstname" placeholder= "Firstname" size="15" required >   
            <label>Lastname: </label>    
            <input type="text" name="lastname" placeholder="Lastname" size="15" required >   
            <label for="email">Email:</label>  
            <input type="email" placeholder="Enter Email" id = "email" name="email" required>  <br>
            <label for="psw">Password:</label>  
            <input type="password" placeholder="Enter Password" id="psw" name="psw" required>  <br>
            <label for="psw-repeat">Re-type Password:</label>  
            <input type="password" placeholder="Retype Password" id="psw-repeat" name="psw-repeat" required><br>  
            <label>Upload photo: </label>    
            <input type="file" onchange="readURL(this)" accept="Image/*" />  
        </div>
        <div class="right">
            <label> City: </label>    
            <input type="text" name="City" placeholder="City" size="15" required >   
            <label> ID: </label>  
            <input type="number" placeholder="Enter your id" name = "NationalID"   required/>  
            <label> age:  </label>  
            <input type="number" name = "Age"  required>  
            <br>
            <label> Phone:  </label>  
            <input type="number" placeholder="with country code." name="Phone" required>   
            <label> Bio:  </label>   <br>
            <!-- <input type="text" placeholder="bio{such us, years of experience,...etc }"    required>  -->
            <textarea name = "Bio" cols="60" rows="3" placeholder="bio{such us, years of experience, education, languages, spoken, skills...etc }" value="bio" required>
            </textarea><br>
                <div>  
                <label> Gender: </label><br>
                <input type="radio" value="Male" name="gender"  required> Male   
                <input type="radio" value="Female" name="gender" required> Female  
                </div>  
        </div> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <center><input type="checkbox" checked="checked"> I agree to the terms of use <a href="#">Terms & Policy</a>.<br>
            <!-- <a href="menusitter.html"><button type="submit" class="registerbtn">Register</button> </a>    -->
            <button type="submit" id="1" name= "submit" class="registerbtn">Register</button>
            <br><br>
            <label> <b>Already have an account?  <a href="signInS.php">LOG IN</a>  </b> </label><br></form></center>
            <!-- </div>   -->
        </form>
</section> 












<!-- ========================================================================================== -->


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