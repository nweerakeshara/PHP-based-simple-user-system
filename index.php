<?php
    session_start();
    require 'dbconfig/config.php';
?>

<html>
<head>
    <title>Login Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color:grey">
    <div id="main-wrapper">
        <center>
            <h2>Login Form</h2>

            <img class="avatar" src="images/icon%20for%20emp.png" >



        </center>

        <form class="myform" action="index.php" method="post">

            <label>Username:</label><br>
            <input class="inputvalues" name="un" type="text" placeholder="Input Username"><br>
            <label>Password</label>
            <input class="inputvalues" name="pw" type="password" placeholder="Input Password"><br>
            <input id="loginbtn" name ="loginbtn" type="submit" value="Login"><br>
            <a href="register.php"> <input id="regbtn" type="button" value="Register">  </a> <br>

        </form>

        <?php
            if(isset($_POST['loginbtn'])){
                $un = $_POST['un'];
                $pw = $_POST['pw'];

                $query = "select * from users where username ='$un' and password ='$pw'";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)>0){
                    $_SESSION['un'] = $un;
                    header('location:home.php');
                }
                else{
                     echo'<script type="text/javascript"> alert("Invalid Credentials")</script>';
                }
            }


        ?>

    </div>


</body>
</html>
