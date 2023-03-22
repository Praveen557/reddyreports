<?php
        $login=0;
        $invalid=0;

        if($_SERVER['REQUEST_METHOD']=='POST'){

            @include('./connect.php');
            $username=$_POST['name'];
            $password=$_POST['password'];

            $sql="select * from `admins` where name='$username' and password='$password'";

            $result=mysqli_query($con,$sql);

            if($result){
                $num=mysqli_num_rows($result);

                if($num>0){
                    $login=1;
                    
                    session_start();
                    $_SESSION['name']=$username;
                    header("Location:display.php");
                    
                    
                }else{
                    
                   $invalid=1;
                
                   
                }
            }


        }


    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>

<?php 
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <string>Success</string> You are Successfully logged in.
        <button type="button" class="close" data-dismiss="alert" aria-lable="close">
        <span aria-hidden="true">&times;</span>
        </button></div>';
        
    }
    if($invalid){
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <string>Error</string> Invalid user id or password.
        <button type="button" class="close" data-dismiss="alert" aria-lable="close">
        <span aria-hidden="true">&times;</span>
        </button></div>';
    }


?>
    
    <a href="./index.php" class="homebtn">Back To Home</a>
    <div class="box">
        <span class="borderLine"></span>
        <form action="" onsubmit="return isivalid()" method="POST">
            <h2>Admin Login</h2>
            <div class="inputbox">
                <input type="text" name="name" required="required">
                <span>User Name</span>
            <i></i>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required="required">
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forget Password</a>
                
            </div>
        <input type="submit" name="submit" value="Login">
        </form>
    </div>
    
</body>
</html>