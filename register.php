<html>
<head>
<title>Register</title>
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
                <li><a href="register.php" class="active">Register</a></li>  
                <li><a href="login.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="column_c">
            <form action="register.php" name="myform" method="POST" onsubmit="return validateform()">
                <h2 class="row_h2">User Registration Page</h2>
                Name:<input type="text" name="name"placeholder="Enter Name" class="form_control" size="20" required><span id="nameloc"></span>
                Email:<br><input type="email" name="mail" class="form_control" placeholder="exp@gmail.com"  required>
                Phone No.:<input type="tel" name="phone" class="form_control"placeholder="985....." minlength="9"  maxlength="10"required>
                User Name:<input type="text" name="uname" class="form_control" placeholder="Enter Username"  size="20"required>
                Password:<input type="password" name="pass" class="form_control" placeholder="Enter password" size="20"required><span id="passloc"></span>
                Conform Password:<input type="password" name="password" class="form_control" placeholder="Enter password" size="20"required><span id="pass1loc"></span>
                <input type="submit" class="button" name="send"value="Submit">  
                <div class="msg">
                    <p id="demo"></p>
                </div> 
            </form>
        </div>
        <div class="news">
            <h2 class="row_h2">Latest Library News</h2>
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
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $phone=$_POST['phone'];
        $uname=$_POST['uname'];
        $pass1=$_POST['pass'];
        $pass2=$_POST['password'];
        $qry="INSERT INTO `register`(`name`, `email`, `phone`, `uname`, `password`, `cpassword`) VALUES ('$name','$mail','$phone','$uname','$pass1','$pass2');";
        $run=mysqli_query($con,$qry);
        if($run==true){
           ?><script>document.getElementById("demo").innerHTML = "Registration is successfully submitted";</script><?php
        }
        else{
            ?><script>document.getElementById("demo").innerHTML = "Registration is Not Success";</script><?php
        }
    }
    ?>
    <script>
        function validateform(){
            var name=document.myform.name.value;  
            var password=document.myform.pass.value;
            var secondpassword=document.myform.password.value;
            var letters = /^[A-Za-z]+$/;
            if (name==null || name==""){  
                document.getElementById("nameloc").innerHTML="name can't be empty";  
                return false;  
            }
             else if(password.length<6){  
                document.getElementById("passloc").innerHTML="Enter password greater than 6";  
                return false;  
            }else if(password==secondpassword){
                return true;
            }else if(password!=secondpassword){
                document.getElementById("pass1loc").innerHTML="Password must be same!";
                return false;
            }
        }
    </script>
</body>
</html>