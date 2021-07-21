<?php
include "security.php"?>
<?php  
    if(isset($_REQUEST['submit'])) {

}
@$result = mysqli_query($connection,"SELECT * FROM project2 WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);


?>




<?php

if(isset($_POST['sign'])){
$project_id = $_POST['project_id'];

$user_id = $_POST['users'];



foreach($user_id as $row){
echo $row;


$query="INSERT INTO `project_sign`(`project_id`, `user_id`) VALUES ($project_id,'$row')";
$query_row=mysqli_query($connection, $query);
}
if($query_row){
$_SESSION['status']="Succesfully sign project";
    

} 
else{
$_SESSION['status']="Sorry";
 
}
	

	}
?>
<?php

if(isset($_POST['todo_sign'])){
$project_id = $_POST['project_id'];

$user_id = $_POST['users'];
$todo_id = $_POST['todo_id'];




foreach($user_id as $row){
// echo $row;


$query="INSERT INTO `todo_sign`(`project_id`, `user_id`,`todo_id`) VALUES ($project_id,$row,$todo_id)";
$query_row=mysqli_query($connection, $query);
}
if($query_row){
$_SESSION['status']="Succesfully sign ToDos";
    

} 
else{
$_SESSION['status']="Sorry";
 
}
	

	}
?>











<?php

$sql = "SELECT * FROM todo where status=0";
$results = $connection->query($sql);
$arr_users = [];
?>





<?php

 @$submit=$_POST['status'];
$var=mysqli_query($connection,"UPDATE todo set  status='1'  WHERE id='" .$submit . "'");
?>
<?php
 @$submitt=$_POST['statuss'];
mysqli_query($connection,"UPDATE todo set  status='0'  WHERE id='" .$submitt . "'");
?>

<?php

$sqll = "SELECT * FROM todo where status=1";
$resultss = $connection->query($sqll);
$arr_userss = [];
?>





<?php


if(isset($_POST['todo'])){
$project_name = $_POST['project_name'];
$todo_description=$_POST['todo_description'];

$project_id=$_POST['project_id'];



  $todo="INSERT INTO  `todo`(`project_name`, `todo_description`, `project_id`) VALUES ( '$project_name','$todo_description','$project_id')";

if(mysqli_query($connection, $todo)){

  
  
 


    

} else{
    echo "ERROR: Could not able to execute ";
}
	

}



?>



<?php include("includes/header.php")?>
<?php include("includes/navbar.php")?>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Nav Item - Alerts -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bell fa-fw"></i>
                        <!-- Counter - Alerts -->
                        <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">
                            Alerts Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 12, 2019</div>
                                <span class="font-weight-bold">A new monthly report is ready to
                                    download!</span>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-donate text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 7, 2019</div>
                                $290.29 has been deposited into your account!
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="mr-3">
                                <div class="icon-circle bg-warning">
                                    <i class="fas fa-exclamation-triangle text-white"></i>
                                </div>
                            </div>
                            <div>
                                <div class="small text-gray-500">December 2, 2019</div>
                                Spending Alert: We've noticed unusually high spending for your account.
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                            Alerts</a>
                    </div>
                </li>

                <!-- Nav Item - Messages -->
                <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-envelope fa-fw"></i>
                        <!-- Counter - Messages -->
                        <span class="badge badge-danger badge-counter">7</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">
                            Message Center
                        </h6>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">Hi there! I am wondering if you can help me with
                                    a
                                    problem I've been having.</div>
                                <div class="small text-gray-500">Emily Fowler · 58m</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                <div class="status-indicator"></div>
                            </div>
                            <div>
                                <div class="text-truncate">I have the photos that you ordered last month,
                                    how
                                    would you like them sent to you?</div>
                                <div class="small text-gray-500">Jae Chun · 1d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                <div class="status-indicator bg-warning"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Last month's report looks great, I am very happy
                                    with
                                    the progress so far, keep up the good work!</div>
                                <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                            </div>
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                    alt="...">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div>
                                <div class="text-truncate">Am I a good boy? The reason I ask is because
                                    someone
                                    told me that people say this to all dogs, even if they aren't good...
                                </div>
                                <div class="small text-gray-500">Chicken the Dog · 2w</div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                            Messages</a>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span
                            class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                            Activity Log
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->






        <div class="container mt-4">
            <?php
                    if(isset($_SESSION['status'])){
                        echo "<h2>".$_SESSION['status']."</h2>";
                        unset($_SESSION['status']);
                    }
                    ?>

            <div class="card diplay:none ">
                <div class="card-body">

                    <h2> <?php if($row==1){}else{echo $row['tittle'];}?>(<?php if($row==0){} else{ echo $row['id'];}?>)


                        <span class="float-end"> <?php echo $row['status'];?>
                    </h2>
                    </span>
                    <div class="float-end">
                        <?php
                            

                
                                            $queryy = "SELECT id FROM project_sign ORDER BY id";  
                                            $query_runn = mysqli_query($connection, $queryy);
                                            $roww = mysqli_num_rows($query_runn);
                                            echo '  <a data-bs-toggle="modal" data-bs-target="#people" href="update_project.php?id='. $row['id'] .'" class=" " title="Update Record" data-toggle="tooltip"><h4> '.$roww.' People on this project</h4> </a>  ';
                                        ?>


                        <a href="#" style="margin-left:90px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add More
                        </a>

                    </div>

                    <p>

                    <h6>
                        <?php  echo $row['description'];?>




                        </p>
                    </h6>
                    <div>
                        <p>Language:-<?php echo $row['language'];?></p>
                    </div>

                    <div class="bg-dark">
                        <hr>

                    </div>


                    <!-- Button trigger modal -->






                    <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalToggleLabel">ToDo List</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    You are sure To add ToDo List?
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-info" data-bs-target="#exampleModalToggle2"
                                        data-bs-toggle="modal" data-bs-dismiss="modal">Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                        aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel2">ToDo List</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <form action="" method="post">
                                    <div class="modal-body">



                                        <div class="mb-3">
                                            <!-- <input type="hidden" class="form-control" name="resg_id"
                                                id="validationCustom03"
                                                value="<?php  echo  $_SESSION['users']['id'];; ?>" required> -->


                                            <input type="hidden" class="form-control" name="project_id"
                                                id="validationCustom03" value="<?php  echo $row['id']; ?>" required>

                                            <label for="exampleFormControlInput1" class="form-label">project
                                                Name</label>
                                            <input type="text" class="form-control" name="project_name"
                                                id="exampleFormControlInput1" placeholder="Enter The project Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label">Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                name="todo_description" rows="3"></textarea>
                                        </div>




                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" name="todo">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <p>ToDos&nbsp;

                        <a class="btn btn-info" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add
                            ToDo
                            List</a>


                    </p>
                    <div class="card">
                        <div class="card-header">
                            Active
                        </div>
                        <?php
                                            $queryy = "SELECT id FROM todo_sign ORDER BY id";  
                                            $query_runn = mysqli_query($connection, $queryy);
                                            $roww = mysqli_num_rows($query_runn);
                                        ?>

                        <?php
                       if ($results->num_rows > 0) {
                     $arr_users = $results->fetch_all(MYSQLI_ASSOC);
                       }
                     ?>
                        <?php if(!empty($arr_users)) { ?>
                        <?php foreach($arr_users as $todo) { ?>
                        <?php if( $row['id']==$todo['project_id']){?>
                        <div class="card">

                            <div class="card-body">

                                <?php echo $todo['project_name'];   ?>



                                <span><a href="todo_delete.php?id=<?php echo $todo['id']; ?>"><i
                                            class="fa fa-trash float-end " style="font-size:24px"
                                            aria-hidden="true"></i></a></span>


                                <span><a href="todo_update.php?id=<?php echo $todo['id']; ?>"><i
                                            class="fa fa-pencil float-end" style="font-size:24px; margin-right:12px;"
                                            aria-hidden="true"></i></span></a>
                                <span>

                                    <?php  $fetch_username_todo_sign="SELECT todo_sign.user_id,register.username FROM todo_sign INNER JOIN register on todo_sign.user_id = register.id";
                                    $fetch_username_todo_sign_query=mysqli_query($connection,$fetch_username_todo_sign);
                                     $fetch_username_todo_sign_row = mysqli_fetch_array($fetch_username_todo_sign_query);
                                    
                                    
                                    ?>
                                    <?php  $todo_sign_query = "SELECT id FROM todo_sign ORDER BY id";  
                                            $todo_sign_query_runn = mysqli_query($connection, $todo_sign_query);
                                            $todo_sign_row = mysqli_num_rows($todo_sign_query_runn);?>
                                    <?php echo '<b>'.$todo_sign_row.' People on this ToDos List</b>'; ?>
                                    <a href=""> <i class="fa fa-eye float-end view-btn"
                                            style="font-size:24px; margin-right:12px;" data-toggle="modal"
                                            data-target="#myModal<?php echo $todo['id'] ?>"></i></a>

                                    <?php
                                  
                if($todo_sign_row==0){echo'<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaltodo">Assign</a>';}
                else{echo '- "Assigned to '.ucfirst( $fetch_username_todo_sign_row['username']). '"&nbsp<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModaltodo">Change</a>';}
                ?>


                                    <div id="myModal<?php echo $todo['id'] ?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">ToDo List</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h3> <?php echo $todo['project_name']; ?>(<?php echo $todo['id']; ?>)
                                                    </h3>
                                                    <?php echo $todo['todo_description']; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </span>
                                <form action="" method="post">
                                    <input type="hidden" value="<?php echo $todo['id'];?>" name="status">
                                    <a href=""> <button type="submit" name="submit"><i class="fa fa-check float-end"
                                                name="status" style=" margin-left:2px;"
                                                aria-hidden="true"></i></button></a>
                                </form>

                            </div>
                        </div>
                        <?php

                 
                

                                      }
                                      }
                                      }
                                      ?>




                    </div>


                    <br>


                    <div class=" card">
                        <div class="card-header">
                            Completed
                        </div>

                        <?php
                       if ($resultss->num_rows > 0) {
                     $arr_userss = $resultss->fetch_all(MYSQLI_ASSOC);
                       }
                     ?>
                        <?php if(!empty($arr_userss)) { ?>
                        <?php foreach($arr_userss as $Completed_todo) { ?>
                        <?php if( $row['id']==$Completed_todo['project_id']){?>
                        <div class="card">

                            <div class="card-body">

                                <?php echo $Completed_todo['project_name']; ?>


                                <span><a href="todo_delete.php?id=<?php echo $Completed_todo['id']; ?>"><i
                                            class="fa fa-trash float-end " style="font-size:24px"
                                            aria-hidden="true"></i></a></span>


                                <span><a href="todo_update.php?id=<?php echo $Completed_todo['id']; ?>"><i
                                            class="fa fa-pencil float-end" style="font-size:24px; margin-right:12px;"
                                            aria-hidden="true"></i></span></a>
                                <span>
                                    <?php echo $Completed_todo['id']; ?>
                                    <a href=""> <i class="fa fa-eye float-end view-btn"
                                            style="font-size:24px; margin-right:12px;" data-toggle="modal"
                                            data-target="#myModal<?php echo $Completed_todo['id'] ?>"></i></a>


                                    <div id="myModal<?php echo $Completed_todo['id'] ?>" class="modal fade"
                                        role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">ToDo List</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <h3> <?php echo $Completed_todo['project_name']; ?>(<?php echo $Completed_todo['id']; ?>)
                                                    </h3>
                                                    <?php echo $Completed_todo['todo_description']; ?>


                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <form action="" method="post">
                                        <input type="hidden" value="<?php echo $Completed_todo['id'];?>" name="statuss">
                                        <a href=""> <button type="submit" name="submitt"><i
                                                    class="fa fa-check float-end" name="statuss"
                                                    style=" margin-left:2px;" aria-hidden="true"></i></button></a>
                                    </form>

                            </div>
                        </div>

                        <?php

                 
                

                                }
                                }
                                }
                                ?>
                    </div>


                </div>
            </div>
        </div>



        <!--  add user-->
        <div class="modal fade" id="exampleModaltodo" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select the Multiple Users</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <form action="" method="post">
                            <input type="text" name="todo_id" value="<?php echo $todo['id'] ?>">
                            <input type="hidden" name="project_id" value="<?php echo $row['id']; ?>">


                    </div>

                    <?php
                     $queryy="select * from register where usertype=2";
                     $query_runn=mysqli_query($connection,$queryy);?>


                    <select name="users[]" class="form-control multiple-select" multiple="">

                        <?php 
                           
                     if(mysqli_num_rows($query_runn) > 0)
                     {
                        foreach($query_runn as $rowusers){
                                                
                                            ?>


                        <option value="<?php echo $rowusers['id']; ?>">
                            <?php echo ucfirst($rowusers['username']);?>
                        </option>

                        <?php
                                        }
                                    }
                                        else {
                                        echo"No record Found";
                                        }
                                        ?>


                    </select>

                    <!-- </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="todo_sign" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select the Multiple Users</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <form action="" method="post">

                    </div>

                    <?php
                     $queryy="select * from register where usertype=2";
                     $query_runn=mysqli_query($connection,$queryy);?>
                    <input type="hidden" name="project_id" value="<?php echo $row['id']; ?>">

                    <select name="users[]" class="form-control multiple-select" multiple="">

                        <?php 
                           
                     if(mysqli_num_rows($query_runn) > 0)
                     {
                        foreach($query_runn as $rowusers){
                                                
                                            ?>


                        <option value="<?php echo $rowusers['id']; ?>">
                            <?php echo ucfirst($rowusers['username']);?>
                        </option>

                        <?php
                                        }
                                    }
                                        else {
                                        echo"No record Found";
                                        }
                                        ?>


                    </select>

                    <!-- </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="sign" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- End add user -->

        <!-- Show People -->







    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">

    </script>
    </script>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".view-btn").click(function(e) {
            e.preventDefault();
            // alert('hello');

        });

    });
    </script>

    <script>
    $(".multiple-select").select2({

    });
    </script>

    <?php include("includes/script.php")?>
    <?php include("includes/footer.php")?>
    <div class="modal fade" id="people" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <?php echo '  <h4> '.$roww.' People on this project</h4> ';
                                        ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <?php
                        
                        $project_sign="select * from project_sign INNER JOIN register on project_sign.user_id = register.id";
                        $project_result = $connection->query($project_sign);
                        $arr_usersss=[];

                    ?>


                    <table class="table  table-hover table-bordered">

                        <thead>
                            <tr>

                                <th scope="col">Name</th>
                                <th scope="col">Email</th>

                            </tr>
                        </thead>
                        <?php
                                if($project_result->num_rows > 0)
                                {
                                    $arr_usersss=$project_result->fetch_all(MYSQLI_ASSOC);

                                }
                                if (!empty($arr_usersss)) {
                                    foreach($arr_usersss as $project_row){
                                  if ($row['id']==$project_row['project_id']) {
                                      # code...
                                 
                                ?>
                        <tbody>


                            <tr>


                                <td><?php echo ucfirst($project_row['username'])?></td>
                                <td><?php echo $project_row['email']?> </td>
                            </tr>

                        </tbody>
                        <?php
                        }
                    }
                         }
                        ?>

                    </table>


                </div>

            </div>
        </div>
    </div>
