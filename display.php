<?php
   @include('connect.php');
   @include('./connect.php');
session_start();
if(!isset($_SESSION['name'])){
    header('location:admin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
    <link rel="stylesheet" href="./CSS/display.css">
</head>
<body>
    <div class="container">
        <button class= "btn btn-primary my-9"> <a href="user.php" class="added">Add User</a></button>
        <button class= "btn btn-primary my-9"> <a href="index.php" class="added">Back to Home</a></button>
        <button class= "btn btn-primary my-9"> <a href="logout.php" class="added">Logout</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">USER NAME</th>
      <th scope="col">EMPLOYEE ID</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">MOBILE No</th>
      <th scope="col">ADMIN</th>
      <th scope="col">TEAM LEADER</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="select * from `employess`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result))
            {
                $id=$row['EM00'];
                $name=$row['user_name'];
                $employee_id=$row['employee_id'];
                $password=$row['password'];
                $mobile_number=$row['mobile_number'];
                $admin_name=$row['admin_name'];
                $teamleader=$row['teamleader'];

                echo ' <tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$employee_id.'</td>
                <td>'.$password.'</td>
                <td>'.$mobile_number.'</td>
                <td>'.$admin_name.'</td>
                <td>'.$teamleader.'</td>
                
                <td>
                    <button class="btn-bd-primary"><a href="update.php?updateid='.$id.'" class="add">Update</a> </button>
                    <button class="btn-add btn-danger"><a href="delete.php?deleteid='.$id.'" class="delete">Delete</a> </button>
                </td>
                </tr>';
            }
        }
    ?>
    
  </tbody>
</table>

    </div>
</body>
</html>