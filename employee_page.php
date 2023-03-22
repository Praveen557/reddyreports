<?php
    @include('./connect.php');
    session_start();
    if(!isset($_SESSION['employee_id'])){
        header('location:login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Page</title>
	
	<link rel="stylesheet" href="./CSS-boot/bootstrap.css">
	<link rel="stylesheet" href="./CSS/emply.css">
	
	
    
</head>
<body>
    <div class="logout">
<button class= "btn btn-btn btn-danger"> <a href="logout.php" class="added">Logout</a></button>
<button class= "btn btn-primary"> <a href="weekly_report.php" class="added">Weekly Report</a></button>
<button class= "btn btn-primary"> <a href="monthly_report.php" class="added">Monthly Report</a></button>
</div>
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
		 
        //  $_SESSION['employee_id']==$employee_id;
         echo  $_SESSION['employee_id'];
         $sql = "SELECT * FROM employess WHERE employee_id = ".$_SESSION['employee_id'];
         $result = $con->query($sql);
         
         if ($result->num_rows > 0) {
           // Output data of the selected employee
           $row = $result->fetch_assoc();
           echo "Employee ID: " . $row["employee_id"]. " - Employee Name: " . $row["user_name"]. "<br>";
         } else {
           echo "0 results";
         }
         
?>
         
        
			

    
</body>
</html>
<?php
        include_once('weekly_report.php');
    ?>