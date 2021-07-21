<?php
include "security.php"?>
<?php



if(isset($_POST["id"]) && !empty($_POST["id"])){
  
    $sql = "DELETE FROM project2 WHERE id = ?";
    
    if($stmtt = mysqli_prepare($connection, $sql)){
        
        mysqli_stmt_bind_param($stmtt, "i", $param_idd);
        
       
        $param_idd = trim($_POST["id"]);
        
        if(mysqli_stmt_execute($stmtt)){
            header("location:add_project.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    mysqli_stmt_close($stmtt);
    
    mysqli_close($connection);
} else{
    if(empty(trim($_GET["id"]))){
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Delete Record</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
        .wrapper {
            width: 600px;
            margin: 0 auto;
        }

        </style>
    </head>

    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mt-5 mb-3">Delete Record</h2>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="alert alert-danger">
                                <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>" />

                                <p>Are you sure
                                    you want to delete this project List record?</p>
                                <p>
                                    <input type="submit" value="Yes" class="btn btn-danger">
                                    <a href="add_project.php" class="btn btn-secondary">No</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
