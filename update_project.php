    <?php
include "security.php"?>
    <?php  
    if(isset($_REQUEST['submit'])) {
mysqli_query($connection,"UPDATE project2 set id='" . $_GET['id'] . "', tittle='" . $_POST['tittle'] . "', slug='" . $_POST['slug'] . "', description='" . $_POST['description'] . "' ,language='" . $_POST['language'] . "',status='" . $_POST['status'] . "' WHERE id='" . $_GET['id'] . "'");
$message = "Project Record Update Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM project2 WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>

    <?php include("includes/header.php")?>
    <?php include("includes/navbar.php")?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">





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
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


            <div class="container">

                <h3><?php if(isset($message)) { echo $message; } ?></h3>

                <form action="" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-6">

                        <label for="validationCustom03" class="form-label">Title</label>
                        <input type="text" class="form-control"
                            value="<?php if($row==0){}else{ echo $row['tittle']; }?>" name="tittle" id="slug-source"
                            required>
                        <div class="invalid-feedback">
                            Please provide a valid Title
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">Slug</label>
                        <input type="text" class="form-control" value="<?php if($row==0){}else{ echo $row['slug'];} ?>"
                            name="slug" id="slug-target" readonly required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">Description</label>
                        <input type="text" class="form-control"
                            value="<?php if($row==0){}else{ echo $row['description'];} ?>" name="description"
                            id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a Description
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Language</label>
                        <select class="form-select" name="language" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="c" <?php if($row==0){}else{ if($row['language']=='c'){echo 'selected';}}?>>C
                            </option>
                            <option value="C++"
                                <?php if($row==0){}else{ if($row['language']=='c++'){echo 'selected';}}?>>
                                C++</option>
                            <option value="C#" <?phpif($row==0){}else{ if($row['language']=='c#'){echo 'selected';}}?>>
                                C#
                            </option>
                            <option <?php if($row==0){}else{ if($row['language']=='Objective-c'){echo 'selected';}}?>
                                value="Objective-c"> Objective-c</option>
                            <option <?php if($row==0){}else{ if($row['language']=='JAVA'){echo 'selected';}}?>
                                value="JAVA">
                                JAVA</option>
                            <option <?php if($row==0){}else{ if($row['language']=='.NET'){echo 'selected';}}?>
                                value=".NET">
                                .NET</option>
                            <option <?php if($row==0){}else{ if($row['language']=='ASP'){echo 'selected';}}?>
                                value="ASP">
                                ASP</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Python'){echo 'selected';}}?>
                                value="Python">Python</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Ruby on rails'){echo 'selected';}}?>
                                value="Ruby on rails"> Ruby on rails</option>
                            <option <?php if($row==0){}else{ if($row['language']=='HTML'){echo 'selected';}}?>
                                value="HTML">
                                HTML</option>
                            <option <?php if($row==0){}else{ if($row['language']=='PHP'){echo 'selected';}}?>
                                value="PHP">
                                PHP</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Node.js'){echo 'selected';}}?>
                                value="Node.js">Node.js </option>
                            <option <?php if($row==0){}else{ if($row['language']=='React.js'){echo 'selected';}}?>
                                value="React.js">React.js</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Swift'){echo '  selected';}}?>
                                value="Swift">Swift</option>
                            <option <?php if($row==0){}else{ if($row['language']=='SQL'){echo 'selected';}}?>
                                value="SQL">
                                SQL</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Dart'){echo 'selected';}}?>
                                value="Dart">
                                Dart</option>
                            <option <?php if($row==0){}else{ if($row['language']=='JavaScript'){echo 'selected';}}?>
                                value="JavaScript"> JavaScript</option>
                            <option <?php if($row==0){}else{ if($row['language']=='Other Language'){echo 'selected';}}?>
                                value="Other Language">Other Language</option>

                        </select>
                        <div class="invalid-feedback">
                            Please select a Your Language.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="validationCustom04" class="form-label">Status</label>
                        <select class="form-select" name="status" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Pending 50%"
                                <?php if($row==0){}else{ if($row['status']=='Pending 50%'){echo 'selected';}}?>>
                                Pending 50%</option>
                            <option value="Pending 75%"
                                <?php if($row==0){}else{ if($row['status']=='Pending 75%'){echo 'selected';}}?>>
                                Pending 75%</option>
                            <option value="Completed"
                                <?php if($row==0){}else{ if($row['status']=='Completed'){echo 'selected';}}?>>Completed
                            </option>


                            <option value="Other">Other</option>

                        </select>
                        <div class="invalid-feedback">
                            Please select a Your Language.
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" name="" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to Save Data
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- <input > -->
                        <button class="btn btn-info" type="submit" name="submit" onClick="myFunction()"
                            value="Submit">Update</button>
                    </div>
                </form>
            </div>





        </div>
        <?php include("includes/script.php")?>
        <?php include("includes/footer.php")?>
        <script>
        function myFunction() {

            var a = document.getElementById("slug-source").value;

            var b = a.toLowerCase().replace(/ /g, '-')
                .replace(/[^\w-]+/g, '');

            document.getElementById("slug-target").value = b;

            document.getElementById("slug-target-span").innerHTML = b;
        }
        </script>
