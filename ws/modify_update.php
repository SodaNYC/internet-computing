<?php
 require_once('StudentDB.php');
 require_once('mysql_conn.php');

 if (mysqli_connect_errno()) {    
  printf("Connect failed: %s\n", mysqli_connect_error());    
  exit();
 }



$sql = "UPDATE students SET student_id='$_POST[student_id]',first_name='$_POST[first_name]',last_name='$_POST[last_name]',email='$_POST[email]',street='$_POST[street]',city='$_POST[city]',state='$_POST[state]',zip='$_POST[zip]',phone='$_POST[phone]',birth_date='$_POST[birth_date]',sex='$_POST[sex]',date_entered='$_POST[date_entered]',lunch_cost='$_POST[lunch_cost]' WHERE student_id='$_POST[student_id]'";

if(mysqli_query($dbc,$sql))
	header("refresh:1;url=modify.php");
else
	echo "Not Update";
?> 
