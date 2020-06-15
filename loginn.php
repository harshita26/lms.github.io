<?php
        include('db.php');
        session_start();
        if($_SESSION['uid']){
             echo "";
        }
        else
        {
            header('location:login.php');
        }        
?>
<html>
    <head>
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="row">
            <div class="column">
                <h1>LIBRARY WEBSITE</h1>
            </div>
            <div class="column1">
                <ul class="nav">	
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="gallery.html" >Gallery</a></li>
                    <li><a href="register.php">Register</a></li>  
                    <li><a href="login.php" class="active">Login</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="column_c">
                
                    <h2 class="row_h2">Already Login to Account</h2>
                    <span class="row_h2"><a href="logout.php">Logout</a></h4>
                    <!-- <p><a href="forget.php">Forget Password?</a> click here</p> -->
                </form>
            </div>
            <div class="news">
                <h2 class="row_h2">Book Management</h2>
                <div class="row_p">
                    <div class="column_i">
                        <img src="images/1.jpeg" alt="" width="100px" height="100px">
                    </div>
                    <div class="column_p">
                        <p>Academic libraries are generally located on college and university campuses and primarily serve the students and faculty of that and other academic institutions. </p>
                    </div>
                </div>
                <hr class="margn_b">
                <div class="row_p">
                    <div class="column_i">
                        <img src="images/2.jpeg" alt="" width="100px" height="100px">
                    </div>
                    <div class="column_p">
                        <p>Children's libraries are special collections of books intended for juvenile readers and usually kept in separate rooms of general public libraries. </p>
                    </div>
                </div>
                <hr class="margn_b">
                <div class="row_p">
                    <div class="column_i">
                        <img src="images/3.jpeg" alt="" width="100px" height="100px">
                    </div>
                    <div class="column_p">
                        <p>A national or state library serves as a national repository of information, and has the right of legal deposit, which is a legal requirement that publishers.</p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </body>
</html>
