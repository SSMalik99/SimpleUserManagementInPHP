<?php
    if(isset($_GET['adminButton'])){
        echo "<div class='jumbotron'>i'm the admin</div>";
        header("Location:http://localhost:8080/dashboard/PHPlearning/userManagement/admin.php");
    }else if(isset($_GET['endUserClick'])){
        echo "<div class='jumbotron'>i'm the end User</div>";
        header("Location:http://localhost:8080/dashboard/PHPlearning/userManagement/endUser.php");
    }else{
        echo "<div class='jumbotron bg-dark text-warning' style=\"font-size:30px;\">i'm from the welcome page and working perfectly</div>";
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Select Profile</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card col-md-6 bg-success">
                <div class="text-warning bg-dark btn" style="font-size:30px;">Login According to Your profile</div></br></br>
                <div>
                    <form action="" method="GET" class="form">
                        <button name="adminButton" class="btn btn-primary">Admin</button>
                        <button name="endUserClick" class="btn btn-danger">End User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>