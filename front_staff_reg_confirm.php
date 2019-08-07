<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Front Office Dashboard</title>
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
            <a class="nav-link" href="front_office_dashboard.php">Enquiries</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Registration
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="front_stud_reg.php">1.<b>Student Registration</b></a>
                <a class="dropdown-item" href="front_staff_reg.php">2.<b>Staff Registration</b></a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
        </li>
    </ul>
</nav>
<br><br>
<br><br>

<h2 class="text-center"> Success</h2>
<div class="container">
    <?php

    $conn=mysqli_connect("localhost","root","","schoolmanagement");
    if(!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }
    else
    {
        $sql="insert into staff_details(first_name,middle_name,last_name,gender,staff_position,department,join_date)
values('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[gender]','$_POST[sposition]','$_POST[department]','$_POST[joindate]')";
        if($conn->query($sql)==true)
        {
            print "Staff Registration Successful!<br>";
            print "<a href='front_staff_reg.php' class='btn btn-primary'>Register New Staff Member</a><br>";
        }
        else
        {
            print "Staff not Registered";
        }
    }
    mysqli_close($conn)


    ?>
</div>



</body>
</html>