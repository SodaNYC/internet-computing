<!DOCTYPE html>
<html>
<head>
<title>Add New Record</title>
</head>
<body>
<a href="WelcomePage.html">Welcome Page</a><br>
<h2>Add New Record</h2>


<form action="add.php" method="post">	
<form enctype="multipart/form-data" method="post" action="insert.php">
<table border="1">
<tr >
<td colspan="2" align="center"><strong>Import CSV file</strong></td>
</tr>
<tr>
<td align="center">CSV File:</td><td><input type="file" name="file" id="file"></td></tr>
<tr >
<td colspan="2" align="center"><input type="submit" value="submit"></td>
</tr>
</table>

<label>First Name:</label>
<input class="input" name="first_name" type="text" value=""><br>
<label>Last Name:</label>
<input class="input" name="last_name" type="text" value=""><br>
<label>Email:</label>
<input class="input" name="email" type="text" value=""><br>
<label>Street:</label>
<input class="input" name="street" type="text" value=""><br>
<label>City:</label>
<input class="input" name="city" type="text" value=""><br>
<label>State:</label>
<input class="input" name="state" type="text" value=""><br>
<label>Zip:</label>
<input class="input" name="zip" type="text" value=""><br>
<label>Phone:</label>
<input class="input" name="phone" type="text" value=""><br>
<label>Birth Date:</label>
<input class="input" name="birth_date" type="text" value=""><br>
<label>Sex:</label>
<input class="input" name="sex" type="text" value=""><br>
<label>Lunch Cost:</label>
<input class="input" name="lunch_cost" type="text" value=""><br>
<input class="submit" name="submit" type="submit" value="Insert">
<input  class="button standard" name="reset" type="reset"value="Clear" />
</form>
</body>
</html>



<?php
 require_once('StudentDB.php');
 require_once('mysql_conn.php');

 if (mysqli_connect_errno()) {    
  printf("Connect failed: %s\n", mysqli_connect_error());    
  exit();
 }

if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$birth_date = $_POST['birth_date'];
$sex = $_POST['sex'];
$lunch_cost = $_POST['lunch_cost'];

if($first_name !=''&& $last_name !=''&& $email !=''&& $street !=''&& $city !=''&& $state !=''&& $zip !=''&& $phone !=''&& $birth_date !=''&& $sex !=''&& $lunch_cost !=''){
$query = "insert into students(first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, lunch_cost) values ('$first_name', '$last_name', '$email', '$street', '$city','$state','$zip','$phone','$birth_date','$sex','$lunch_cost')";
echo "Data Inserted successfully! Thank you!";
mysqli_query($dbc,$query); 
mysqli_close($dbc);

}
else{
echo "Insertion Failed! Some Fields are Blank!";
}
}

?>

