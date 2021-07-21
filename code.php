<?php
session_start();

$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";

include('security.php');
if (isset($_POST['cheak_submit_btn'])) {
    # code...
    $email=$_POST['email_id'];


$email_query="select * from register where email='$email'";
 $email_query_run=mysqli_query($connection,$email_query);
 if(mysqli_num_rows($email_query_run)> 0){
   echo"Email Already Taken,Please Try Another One";

 } 
 else {
   echo"it's available";

}}
  
if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];

    
 $email_query="select * from register where email='$email'";
 $email_query_run=mysqli_query($connection,$email_query);
 if(mysqli_num_rows($email_query_run)> 0){
      $_SESSION['status'] = "Email Already Taken,Please Try Another One";
            header('Location: register.php'); 

 } 
 else {
     # code...
       if($password === $cpassword)
        {
            $password=md5($password);
            $query = "INSERT INTO register (username,email,password,usertype) VALUES ('$username','$email','$password','$usertype')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: register.php');  
        }
 }
    
      
    

}






if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $update_usertype = $_POST['update_usertype'];
    

 $email_query="select * from register where email='$email'";
 $email_query_run=mysqli_query($connection,$email_query);
 if(mysqli_num_rows($email_query_run)> 0){
      $_SESSION['status'] = "Email Already Taken,Please Try Another One";
            header('Location: register.php'); 

 }
 else {
     
 


print $query = "UPDATE register SET username='$username', email='$email', password='$password',usertype='$update_usertype' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }
} 
}



// delete



if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}


// login


if(isset($_POST['login_btn']))
{
    
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['passwordd']; 


		
		
     $password_login = md5($password_login); 

    $query = "SELECT * FROM register WHERE email='$email_login' AND password='$password_login' ";
    // $query ="SELECT * FROM `register` INNER JOIN `user_type` ON (register.usertype = user_type.id)WHERE register.email = '$email_login'
    //     AND register.password = '$password_login'";
        
    $query_run = mysqli_query($connection, $query);
    $usertype=mysqli_fetch_array($query_run);
   if($usertype['usertype']=="1")
   {
       $_SESSION['is_login'] = true;
       $_SESSION['username'] = $email_login;
       $_SESSION['users'] = $usertype;
       $_SESSION['success'] = "You have logged in!";
        header('Location: index.php');
   } 

   elseif($usertype['usertype']=="2")
   {
       $_SESSION['is_login'] = true;
       $_SESSION['username'] = $email_login;
       $_SESSION['users'] = $usertype;
       $_SESSION['success'] = "You have logged in!";
    
        // header('Location: index.php');
        header('Location: ./user_temp/user_index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
   }
    

}





?>
