<?php
    require 'dbconfig/config.php'
?>

<html>
<head>
    <title>Register Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color:grey">
    <div id="main-wrapper">
        <center>
            <h2>Register Form</h2>

            <img class="avatar" src="images/icon%20for%20emp.png" >



        </center>

        <form class="myform" action="register.php" method="post">

            <label>Username:</label><br>
            <input class="inputvalues" name="un" type="text" placeholder="Input Username" required><br>
            <label>Password</label>
            <input class="inputvalues" name ="pw" type="password" placeholder="Input Password" required><br>
            <label>Confirm Password</label>
            <input class="inputvalues" name="cpw" type="password" placeholder="Input Password" required><br>
            <input id="signupbtn" name="signupbtn" type="submit" value="sign Up"><br>
            <a href="index.php"> <input id="backbtn" type="button" value="Back"> </a><br>

        </form>

        <?php
            if(isset($_POST['signupbtn'])){
                echo'<script type="text/javascript"> alert("Sign Up clicked")</script>';
                    $un = $_POST['un'];
                    $pw = $_POST['pw'];
                    $cpw = $_POST['cpw'];

                    if($pw == $cpw){
                        $query="select * from users where username ='$un'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows ($query_run)> 0){
                         echo'<script type="text/javascript"> alert("User already exsist")</script>';
                        }
                        else{
                             $query="insert into users values('$un','$pw')";
                             $query_run = mysqli_query($con,$query);

                            if($query_run){
                                echo'<script type="text/javascript"> alert("Success")</script>';
                            }else{
                                echo'<script type="text/javascript"> alert("Failed")</script>';
                            }
                        }
                    } else{
                        echo'<script type="text/javascript"> alert("Password and Confirm Password doesnt match")</script>';
                    }
            }
        ?>
    </div>


</body>
</html>
