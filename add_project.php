<?php include "security.php"?>
<?php
// session_start();
$sql = "SELECT * FROM project2";
$result = $connection->query($sql);
$row= mysqli_fetch_array($result);

$arr_users = [];

?>



<?php include("includes/header.php")?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<?php include("includes/navbar.php")?>

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



        <!-- project panel start-->



        <div class="container text-info text-uppercase mt-5 ">

            <h1>Project</h1>
            <div class="d-flex justify-contect-end">
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add New Project
                </button>
            </div>
            <div id="record_contect">


            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> Add New Project</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <form action="project_backend.php" method="post" class="row g-3 needs-validation"
                                    novalidate>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="slug-source" required>
                                        <div class="valid-feedback">
                                            Title good!
                                        </div>
                                        <div class="invalid-feedback">
                                            Please provide a valid Title
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom02" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug-target" readonly
                                            required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>


                                    <input type="hidden" class="form-control" name="res_id" id="validationCustom03"
                                        value="<?php echo  $_SESSION['users']['id'];; ?>" required>
                                    <div class="col-md-12">
                                        <label for="validationCustom03" class="form-label">Description</label>
                                        <input type="text" class="form-control" name="description"
                                            id="validationCustom03" required>
                                        <div class="invalid-feedback">
                                            Please provide a Description
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label">Language</label>
                                        <select class="form-select" name="language" id="validationCustom04" required>
                                            <option selected value="">Choose...</option>
                                            <option value="c">C</option>
                                            <option value="C++">C++</option>
                                            <option value="C#">C#</option>
                                            <option value="Objective-c">Objective-c</option>
                                            <option value="JAVA">JAVA</option>
                                            <option value=".NET">.NET</option>
                                            <option value="ASP">ASP</option>
                                            <option value="Python">Python</option>
                                            <option value="Ruby on rails">Ruby on rails</option>
                                            <option value="HTML">HTML</option>
                                            <option value="PHP">PHP</option>
                                            <option value="Node.js">Node.js</option>
                                            <option value="React.js">React.js</option>
                                            <option value="Swift">Swift</option>
                                            <option value="SQL">SQL</option>
                                            <option value="Dart">Dart</option>
                                            <option value="JavaScript">JavaScript</option>
                                            <option value="Other Language">Other Language</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a Your Language.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationCustom04" class="form-label">Status</label>
                                        <select class="form-select" name="status" aria-label="Default select example">
                                            <option selected value="">Choose...</option>

                                            <option value="Pending 50%">Pending 50%</option>
                                            <option value="Pending 75%">Pending 75%</option>
                                            <option value="Completed">Completed</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a Your Language.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" name="" type="checkbox" value=""
                                                id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to Save Data
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-info" type="submit" onClick="myFunction()" name="add">Add
                                            Project</button>
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>

                                    </div>

                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <script>
        (function() {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        </script>


        <div class="container mt-5 ">
            <div class="row row-cols-2 row-cols-md-3 g-4">

                <?php

                 
                 if ($result->num_rows > 0) {
                     $arr_users = $result->fetch_all(MYSQLI_ASSOC);
                 }
                     ?>
                <?php if(!empty($arr_users)) { ?>
                <?php foreach($arr_users as $user) { ?>
                <?php if($_SESSION['users']['id']==$user['register_id']){?>

                <div class=" col">
                    <div class="card border-info">

                        <div class="card-header  ">
                            Project S.No:- <?php echo $user['id']; ?>
                        </div>

                        <div class="card">
                            <div class="card-body ">
                                <h5 class="card-title"> <a href="view_project.php?id=<?php echo $user['id']; ?>"
                                        style="text-decoration: none; " class=" text-dark">
                                        <?php echo $user['tittle']; ?></a></h5>






                                Language :<?php echo $user['language'];?>
                                <br>
                                Status :<?php echo $user['status'];
                                
                                // short description code
                              $description=  $user['description'];
                              $string=strip_tags( $description);
                            if(strlen($string)>50):
                                $stringcut=substr($string,0,50);
                                $endpoint=strrpos($stringcut,' ');
                                $string=$endpoint?substr($stringcut,0,$endpoint):substr($stringcut,0);

                endif;
                echo '<br>'.$string;
                                // end short description code

                              
                                ?>
                                </p>

                                <?php
                                       echo '<center><a href="update_project.php?id='. $user['id'] .'" class="font-sixe ml-5 btn btn-info" title="Update Record" data-toggle="tooltip">Edit</a>';
                                             ?>

                                <a type="button" class="btn btn-danger"
                                    href="delete_project.php?id=<?php echo $user['id']; ?>">Delete</a>





                            </div>
                            <div class="card-footer">

                                <?php echo $user['data_time'];?>



                            </div>

                        </div>
                    </div>
                </div>
















                <?php } }}?>
            </div>
        </div>




    </div>




    <?php include("includes/script.php")?>
    <?php include("includes/footer.php")?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
    function myFunction() {

        var a = document.getElementById("slug-source").value;

        var b = a.toLowerCase().replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        document.getElementById("slug-target").value = b;

        document.getElementById("slug-target-span").innerHTML = b;
    }
    </script>
