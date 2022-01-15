<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $student_name_roll = $_POST['student_name_roll'];
	 $supervisor_name = $_POST['supervisor_name'];
	 $topics_name = $_POST['topics_name'];
	 $group_name = $_POST['group_name'];

	 $sql = "INSERT INTO group_data(student_name_roll,supervisor_name,topics_name,group_name)
	 VALUES ('$student_name_roll','$supervisor_name','$topics_name','$group_name')";

	 if (mysqli_query($con, $sql)) {
		echo '<script type ="text/JavaScript">';  
		echo 'alert("Succesfully Create Group")';  
		echo '</script>'; 
		echo "<script> location.href='../index.html'; </script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>