<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="Css/Custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/fiu.jpg" alt="Los Angeles" class="logo">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<h2 class="text-center">Log In</h2>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post" class="form-group">
                <table class="table table-responsive-sm table-striped">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>User Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="username" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Password : </b></label>
                        </td>
                        <td>
                            <input type="password" name="password" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>User Group : </b></label>
                        </td>
                        <td>
                            <select name="usergroup" id="usergroup" class="form-control" required="required">
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Management">Management</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <input type="submit" value="login" class="btn btn-success" name="submit" >
                            &nbsp;<a href="userreg.php" class="btn btn-primary">Register</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>

<?php
session_start();

if (isset($_POST['submit'])){
    include 'db_connect.php';

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $usergroup = mysqli_real_escape_string($db,$_POST['usergroup']);



    $qry = mysqli_query($db,"select * from users where username='$username' and password='$password' and usergroup='$usergroup'");
    $row = mysqli_fetch_array($qry,MYSQLI_ASSOC);
    $active =$row['active'];


    $count = mysqli_num_rows($qry);



    if ($count==1) {


        if (!empty($username) && !empty($password) && !empty($usergroup == 'Systems Administrator')) {
            header("location:sysadmin_dashboard.php");
        } elseif (!empty($username) && !empty($password) && !empty($usergroup == 'Administrator')) {
            header("LOCATION:admin_dashboard.php");
        } elseif (!empty($username) && !empty($password) && !empty($usergroup == 'Accounts')) {
            header("LOCATION:accounts_dashboard.php");
        } elseif (!empty($username) && !empty($password) && !empty($usergroup == 'Front Office')) {
            header("LOCATION:front_office_dashboard.php");
        } elseif (!empty($username) && !empty($password) && !empty($usergroup == 'Management')) {
            header("LOCATION:management_dashboard.php");
        }

    }else{
           header("LOCATION:login_error.php");
        }
}

?>