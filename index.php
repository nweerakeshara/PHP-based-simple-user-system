<?php

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
            <input class="inputvalues"  type="text" placeholder="Input Username"><br>
            <label>Password</label>
            <input class="inputvalues" type="password" placeholder="Input Password"><br>
            <input id="loginbtn" type="submit" value="Login"><br>
            <a href="register.php"> <input id="regbtn" type="button" value="Register">  </a> <br>

        </form>

    </div>


</body>
</html>
