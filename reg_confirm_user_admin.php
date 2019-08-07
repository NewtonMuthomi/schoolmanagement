<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Dashboard</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="Css/Custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-dark fixed-top">
    <img src="images/fiu.jpg" alt="logo">
    <br> <br>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="admin_dashboard.php">Enquiries</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Registration
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="stud_reg_admin.php">1.<b>Student Registration</b></a>
                <a class="dropdown-item" href="Staff_reg_admin.php">2.<b>Staff Registration</b></a>
                <a class="dropdown-item" href="user_reg_admin.php">3.<b>User Registration</b></a>
            </div>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="admin_enquirysearch_rep.php">1.<b>Enquiries Reports</b></a>
                <a class="dropdown-item" href="admin_studsearch_rep.php">2.<b>Student Reports</b></a>
                <a class="dropdown-item" href="admin_staffsearch_rep.php">3.<b>Staff Reports</b></a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
        </li>
    </ul>
</nav>
<br><br>
<br><br>
<h2 class="text-centre">Success</h2>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","schoolmanagement");
    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }
    else
    {
        $sql="insert into users(first_name,middle_name,last_name,department,username,password,usergroup)
values('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[department]','$_POST[uname]','$_POST[passwd]','$_POST[user_group]')";
        if($conn->query($sql)==true)
        {
            print "<p> New User Added Successfully</p>";
            print "<a href='user_reg_admin.php' class='btn btn-primary'>Add New User</a><br>";

        }
        else
        {
            print "User not added";
        }
    }
    mysqli_close($conn);


    ?>
</div>



</body>
</html>