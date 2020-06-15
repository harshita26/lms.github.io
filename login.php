<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:loginn.php');
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
                <form action="login.php" method="POST">
                    <h2 class="row_h2">Login to Account</h2>
                    User Name:<input type="text" name="name" placeholder="Enter Username" class="form_control" size="20" required>
                    Password:<input type="password" name="password" placeholder="Enter password" class="form_control" minlength="6" size="20" required>
                    <input type="submit" name="send" class="button" value="Login">
                    <a href="register.php" class="button"> Register New User </a>
                    <div class="msg">
                        <p id="demo"></p>
                    </div>
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
        <?php
    if(isset($_POST['send'])){
        include('db.php');
        $uname=$_POST['name'];
        $password=$_POST['password'];
        $qry="SELECT * FROM `register` WHERE `uname`='$uname' AND `password`='$password';";
        $run=mysqli_query($con,$qry);
        $row= mysqli_num_rows($run);
        if($row>0){
           ?><script>document.getElementById("demo").innerHTML = "Login is successful";</script><?php
           $data=mysqli_fetch_assoc($run);
            $id=$data['id'];
            echo "id = ".$id; 
            $_SESSION['uid']=$id;
            // header('location:loginn.php');
        }
        else{
            ?><script>document.getElementById("demo").innerHTML = "Login is not Done";</script><?php
        }
    }
    ?>
    </body>
</html>
