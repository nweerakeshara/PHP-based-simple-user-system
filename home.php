<?php
    session_start();
?>

<html>
<head>
    <title>Home Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body style="background-color:grey">
    <div id="main-wrapper">
        <center>
            <h2>Home Page</h2>
            <h3>Welcome <?php echo $_SESSION['un'] ?> </h3>
            <img class="avatar" src="images/icon%20for%20emp.png" >



        </center>

        <form class="myform" action="home.php" method="post">


            <input id="logoutbtn" name="logout" type="submit" value="Log Out"><br>


        </form>

        <?php
            if(isset($_POST['logout'])){
                session_destroy();
                header('location:index.php');
            }
        ?>
    </div>


</body>
</html>
