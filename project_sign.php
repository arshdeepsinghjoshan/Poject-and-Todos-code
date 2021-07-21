<?php
include "security.php"?>
<?php

if(isset($_POST['sign'])){
$project_id = $_POST['project_id'];
// $user_id=implode(', ', $_POST['users']);

$user_id = $_POST['users'];



foreach($user_id as $row){
echo $row;


print $query="INSERT INTO `project_sign`(`project_id`, `user_id`) VALUES ($project_id,'$row')";
$query_row=mysqli_query($connection, $query);
}
if($query_row){
$_SESSION['status']="Succesfully sign project";
    header("location:add_project.php");
    

} 
else{
$_SESSION['status']="Sorry";
    header("location:add_project.php");

//  echo "ERROR: Could not able to execute ";
}
	

	}
?>
<!-- 
$chkbox=$rows['product'];
												$str = explode(",",$chkbox);
												$arr = array();
												foreach ($str as $key) {
													array_push($arr, trim($key));
												} -->
