<?php 

require("connection.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
</head>

<body>
    <div class="login">
        <h2>Member Login</h2>
        <form action="" method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="" placeholder="username" />
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="" placeholder="password" />
            </div>
            <button type="submit" name="signin">Sign in</button>
            <div class="extra">
                <a href="#">Forget Password ?</a>
                <a href="#"> Create an Account</a>
            </div>
        </form>
    </div>
    <?php
 if(isset($_POST['signin']))
 {
    $query= "SELECT * FROM `admin_login` WHERE `Admin_Name` = '$_POST[name]' AND `Admin_Password` = '$_POST[password]'";
    $result= mysqli_query($con, $query); 
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['AdminloginId'] = $_POST['name'];
        header("location:admin-panel.php");
    }
    else{
        echo "<script>alert('Incorrect Password')</script>";
    }
}
 ?>


</body>

</html>