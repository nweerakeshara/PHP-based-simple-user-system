<?php

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

        <form class="myform" action="index.php" method="post">

            <label>Username:</label><br>
            <input class="inputvalues"  type="text" placeholder="Input Username"><br>
            <label>Password</label>
            <input class="inputvalues" type="password" placeholder="Input Password"><br>
            <label>Confirm Password</label>
            <input class="inputvalues" type="password" placeholder="Input Password"><br>
            <input id="signupbtn" type="submit" value="sign Up"><br>
            <input id="backbtn" type="button" value="Back"><br>

        </form>

    </div>


</body>
</html>
