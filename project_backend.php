<?php
include "security.php"?>
<?php
if(isset($_POST['add'])){
$title = $_POST['title'];
$slug=$_POST['slug'];
$description=$_POST['description'];
$status=$_POST['status'];
$language=$_POST['language'];
$res_id=$_POST['res_id'];



print $hello="INSERT INTO `project2`(`register_id`,`slug`,`tittle`,`description`, `status`, `language`) VALUES ('$res_id','$slug','$title','$description','$status','$language')";

if(mysqli_query($connection, $hello)){
    header("location:add_project.php");
    

} else{
    echo "ERROR: Could not able to execute ";
}
	

}
?>
