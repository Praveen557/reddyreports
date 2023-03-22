<?php

@include('./connect.php');
session_start();
if(!isset($_SESSION['name'])){
    header('location:admin.php');
}

if(isset($_POST['submit'])){
        $name=$_POST['user_name'];
        $employee_id=$_POST['employee_id'];
        $password=$_POST['password'];
        $mobile_number=$_POST['mobile_number'];
        $admin_name=$_POST['admin_name'];
        $teamleader=$_POST['teamleader'];

        $sql="insert into `employess` (user_name,employee_id,password,mobile_number,admin_name,teamleader) values('$name','$employee_id','$password','$mobile_number','$admin_name','$teamleader')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data Inserted Succuessfully";
            header('loacation:display.php');
        }
        else{
            die(mysqli_error($con));
        }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="./CSS/user.css">
</head>
<body>
    
    <h1 class="head">welcome
        <?php 
            echo $_SESSION['name'];
        ?>
    </h1>
    <div class="container">
        <button class="log_btn" >
        <a href="logout.php"> Logout</a>
        </button>
    </div>

    <form method="post">
        <div class="form-group">
            <label for="user_name"> User Name</label>
            <input type="text" id="user_name" name="user_name" placeholder="Enter User Name" autocomplete="off" required="required">
        </div>
        <div class="form-group">
            <label for="employee_id"> Employee ID</label>
            <input type="text" id="employee_id" name="employee_id" placeholder="Enter Employee ID" autocomplete="off" required="required">
        </div>

        <div class="form-group">
            <label for="password"> Password</label>
            <input type="password" id="password" name="password" placeholder="Enter Employee Password" required="required" >
        </div>

        <div class="form-group">
            <label for="mobile_number"> Mobile Number </label>
            <input type="text" id="mobile_number" name="mobile_number" placeholder="Enter Your Mobile Number" autocomplete="off" required="required">
        </div>
        
        <div class="form-group">
            <label for="admin_name"> Admin Name</label>
            <select name="admin_name" id="admin_name">
            <option value="Ajith">Ajith</option>
            <option value="Ali">Ali</option>
            <option value="Praveen">Praveen</option>
            </select>
        </div>
        <div class="form-group">
            <label for="teamleader"> Team Leader Name</label>
            <select name="teamleader" id="teamleader">
            <option value="Ajith">Ajith</option>
            <option value="Ali">Ali</option>
            <option value="Praveen">Praveen</option>
            <option value="Ramesh">Ramesh</option>
            <option value="Divya">Divya</option>
            <option value="Sagar">Sagar</option>
            <option value="Sarala">Sarala</option>
            <option value="Sarala">Anitha</option>
            </select>
        </div>
        <button type="submit" name="submit">Submit</button>


    </form>



</body>
</html>