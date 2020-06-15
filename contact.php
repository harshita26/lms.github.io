<html>
<head>
<title>Contact</title>
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
                <li><a href="login.php">Login</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="column_c">
            <form method="POST" action="contact.php">
                <h2 class="row_h2">Contact Us</h2>
                Name:<input type="text" name="name" placeholder="Enter Name" class="form_control" size="20" required>
                Email:<input type="email" name="mail" id="mail" class="form_control" placeholder="exp@gmail.com"  required>
                Your message:
                <textarea class="form_control" name="message"rows="6">Your message...</textarea><br>
                <input type="submit" class="button" name="send" value="Send Email" onclick="myFunction()"> 
                <div class="msg">
                    <p id="demo"></p>
                </div> 
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
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $msg=$_POST['message'];
        $qry="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$mail','$msg')";
        $run=mysqli_query($con,$qry);
        if($run==true){
           ?><script>document.getElementById("demo").innerHTML = "Message is successfully submitted";</script><?php
        }
        else{
            ?><script>document.getElementById("demo").innerHTML = "Message is Not submitted";</script><?php
        }
    }
    ?>
    
</body>
</html>