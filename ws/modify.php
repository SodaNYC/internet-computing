<!DOCTYPE html>
<html>
<head>
<title>Modify a Record</title>
</head>
<body>
<a href="WelcomePage.html">Welcome Page</a><br>
<h2>Modify a Record</h2>
<form action="modify_search.php" method="post">
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

	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		echo "<tr><form action=modify_update.php method=post>";
		echo "<td><input type=text name=student_id value='".$row['student_id']."'></td>";
		echo "<td><input type=text name=first_name value='".$row['first_name']."'></td>";
		echo "<td><input type=text name=last_name value='".$row['last_name']."'></td>";
		echo "<td><input type=text name=email value='".$row['email']."'></td>";
		echo "<td><input type=text name=street value='".$row['street']."'></td>";
		echo "<td><input type=text name=city value='".$row['city']."'></td>";
		echo "<td><input type=text name=state value='".$row['state']."'></td>";
		echo "<td><input type=text name=zip value='".$row['zip']."'></td>";
		echo "<td><input type=text name=phone value='".$row['phone']."'></td>";
		echo "<td><input type=text name=birth_date value='".$row['birth_date']."'></td>";
		echo "<td><input type=text name=sex value='".$row['sex']."'></td>";
		echo "<td><input type=text name=date_entered value='".$row['date_entered']."'></td>";
		echo "<td><input type=text name=lunch_cost value='".$row['lunch_cost']."'></td>";
		echo "<td><input type=submit>";
		echo "</form></tr>";
	}


?>	
