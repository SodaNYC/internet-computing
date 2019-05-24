<!DOCTYPE html>
<html>
<head>
<title>Delete a Record</title>
</head>
<body>
<a href="WelcomePage.html">Welcome Page</a><br>
<h2>Delete a Record</h2>
<form action="delete_search.php" method="post">
	<input type="text" name="search" placeholder="Last Name"/>
	<button>search</button>
</form>
  </body>
</html>


 <table border="1">
     <tr>
	<th>Student ID</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Street</th>
	<th>City</th>	
	<th>State</th>
	<th>Zip</th>
	<th>Phone</th>		
	<th>Birth Date</th>
	<th>Sex</th>
	<th>Date Entered</th>
	<th>Lunch Cost</th>	
	<th>Action</th>
      </tr>
<?php
 require_once('StudentDB.php');
 require_once('mysql_conn.php');

 if (mysqli_connect_errno()) {    
  printf("Connect failed: %s\n", mysqli_connect_error());    
  exit();
 }



 $result = mysqli_query($dbc,"SELECT * FROM students");

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$student_id = $row['student_id'];	
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$street = $row['street'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$phone = $row['phone'];
		$birth_date = $row['birth_date'];
		$sex = $row['sex'];
		$date_entered = $row['date_entered'];
		$lunch_cost = $row['lunch_cost'];
		
		?>
		<tr>
		    <td><?php echo $student_id; ?></td>
		    <td><?php echo $first_name; ?></td>
		    <td><?php echo $last_name; ?></td>
		    <td><?php echo $email; ?></td>
		    <td><?php echo $street; ?></td>
		    <td><?php echo $city; ?></td>
		    <td><?php echo $state; ?></td>
		    <td><?php echo $zip; ?></td>
		    <td><?php echo $phone; ?></td>
		    <td><?php echo $birth_date; ?></td>
		    <td><?php echo $sex; ?></td>
		    <td><?php echo $date_entered; ?></td>
		    <td><?php echo $lunch_cost; ?></td>
		    <td>
			<a href="delete.php?delete=<?php echo $student_id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
		    </td>
		</tr>
		
<?php

	}
	
	
	if(isset($_GET['delete'])){
		$delete_id = $_GET['delete'];

		mysqli_query($dbc, "DELETE FROM students WHERE student_id = '$delete_id'");

		header("location: delete.php");
		

	}
	

?>	
	

