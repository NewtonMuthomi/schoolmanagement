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
        $sql="insert into enquiries_details(enquiry_date,first_name,other_names,tel_no,email,course,how_did_you_know_about_us,comments)
values('$_POST[endate]','$_POST[fname]','$_POST[oname]','$_POST[telno]','$_POST[email]','$_POST[course]','$_POST[knowabouts]','$_POST[comments]')";
        if($conn->query($sql)==true)
        {
            print "Enquiry Submission Successful!<br>";
            print "<a href='front_office_dashboard.php' class='btn btn-primary'>New Enquiry</a><br>";
        }
        else
        {
            print "Enquiry not submitted";
        }
    }
    mysqli_close($conn)


    ?>
</div>


</body>
</html>