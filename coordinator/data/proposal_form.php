<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $student_name = $_POST['student_name'];
	 $father_name = $_POST['father_name'];
	 $mother_name = $_POST['mother_name'];
	 $gender = $_POST['gender'];
	 $mobile= $_POST['mobile'];
	 $reg_no= $_POST['reg_no'];
	 $group_no= $_POST['group_no'];
	 $batch_no= $_POST['batch_no'];
	 $session_id= $_POST['session_id'];
	 $teacher_name= $_POST['teacher_name'];
	 $message= $_POST['message'];
	 $details= $_POST['details'];
	


	 $sql = "INSERT INTO proposal_form_data (student_name,father_name,mother_name,gender,mobile,reg_no,group_no,batch_no,session_id,
	 teacher_name,message,details)
	 VALUES ('$student_name','$father_name','$mother_name','$gender','$mobile','$reg_no','$group_no',
	 '$batch_no','$session_id','$teacher_name','$message','$details')";

	 if (mysqli_query($con, $sql)) {
		echo '<script type ="text/JavaScript">';  
		echo 'alert("Succesfully Saved Data")';  
		echo '</script>'; 
		echo "<script> location.href='../index.html'; </script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>