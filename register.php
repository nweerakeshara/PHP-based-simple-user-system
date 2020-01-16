<?php
    require 'dbconfig/config.php'
?>

<html>
<head>
    <title>Register Page</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">


    <script>
        var loadFile = function(event) {
                var output = document.getElementById('avatar');
                output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

</head>
<body style="background-color:grey">
    <div id="main-wrapper">
        <form class="myform" action="register.php" method="post" enctype="multipart/form-data">
        <center>
            <h2>Register Form</h2>

            <img id ="avatar" class="avatar" src="images/icon%20for%20emp.png" ><br>
            <input name="imglink" type="file" accept="image/*" onchange="loadFile(event)">


        </center>



            <label>Username:</label><br>
            <input class="inputvalues" name="un" type="text" placeholder="Input Username" required><br>
            <label>Gender</label><br>
            <input class="inputgender" name ="gender" type="radio" value="Male" placeholder="Male" checked required>
            <input class="inputgender" name ="gender" type="radio" value="Female" placeholder="Female" required><br>

            <label>Class</label><br>
            <select class="qual" name="qual">
                <option value="A">A</option>
                <option value="B">B</option>
            </select><br>

            <label>Password</label><br>
            <input class="inputvalues" name ="pw" type="password" placeholder="Input Password" required><br>
            <label>Confirm Password</label><br>
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
                    $gender = $_POST['gender'];
                    $qual = $_POST['qual'];
                    $imgname = $_FILES['imglink']['name'];
                    $imgnsize = $_FILES['imglink']['size'];
                    $imgtmp = $_FILES['imglink']['tmp_name'];

                    $dir ='uploads/';
                    $target_file = $dir.$imgname;

                    if($pw == $cpw){
                        $query="select * from users where username ='$un'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows ($query_run)> 0){
                         echo'<script type="text/javascript"> alert("User already exsist")</script>';
                        }
                        else if(file_exists($target_file)){

                         echo'<script type="text/javascript"> alert("Image already exsist")</script>';

                        }
                        else{


                             move_uploaded_file($imgtmp,$target_file);
                             $query="insert into users values('$un','$pw', '$gender','$qual','$target_file')";
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
