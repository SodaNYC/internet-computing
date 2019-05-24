<!DOCTYPE html>
<html>
<body>
<a href="WelcomePage.html">Welcome Page</a>
</body>
</html>
<?php

 require_once('StudentDB.php');
 require_once('mysql_conn.php');

 if (mysqli_connect_errno()) {    
  printf("Connect failed: %s\n", mysqli_connect_error());    
  exit();
 }
	
	$set=$_POST['search'];
	if($set) {	
	$show="SELECT * FROM students WHERE last_name='$set'";
	$result=mysqli_query($dbc,$show);
	$count= mysqli_num_rows($result);

		if($count == "0"){
		echo "Reccord was not found.";
		}
		else{
?>
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
			while($row=mysqli_fetch_array($result)){
				$student_id = $row['student_id'];
				echo "<tr>";		
				echo "<td>";
				echo $row['student_id'];
				echo "</td>";		
				echo "<td>";		
				echo $row['first_name'];
				echo "</td>";
				echo "<td>";
				echo $row['last_name'];
				echo "</td>";
				echo "<td>";
				echo $row['email'];
				echo "</td>";
				echo "<td>";
				echo $row['street'];
				echo "</td>";
				echo "<td>";
				echo $row['city'];
				echo "</td>";
				echo "<td>";
				echo $row['state'];
				echo "</td>";
				echo "<td>";
				echo $row['zip'];
				echo "</td>";
				echo "<td>";
				echo $row['phone'];
				echo "</td>";
				echo "<td>";
				echo $row['birth_date'];
				echo "</td>";
				echo "<td>";
				echo $row['sex'];
				echo "</td>";
				echo "<td>";
				echo $row['date_entered'];
				echo "</td>";
				echo "<td>";
				echo $row['lunch_cost'];
				echo "</td>";	
?>
		    		<td>
				<a href="delete.php?delete=<?php echo $student_id; ?>" onclick="return confirm('Are you sure?');">Delete</a>
		    		</td>
<?php
				echo "</tr>";
			}
			 }
			}


		if(isset($_GET['delete'])){
		$delete_id = $_GET['delete'];

		mysqli_query($dbc, "DELETE FROM students WHERE student_id = '$delete_id'");


		
		}

?>
