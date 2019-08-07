<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>System Administrator Dashboard</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="Css/Custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-dark fixed-top">
    <!-- Brand -->
    <a class="navbar-brand" href="#"></a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="sysadmin_dashboard.php">Enquiries</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Registration
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="registration_form.php">1.<b>Student Registration</b></a>
                <a class="dropdown-item" href="staff_reg_details.php">2.<b>Staff Registration</b></a>
                <a class="dropdown-item" href="new_user.php">3.<b>User Registration</b></a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="search_admin.php">Accounts</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="sysadmin_accounts.php" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href=""></a>
                <a class="dropdown-item" href=""></a>
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
        $sql="insert into accounts(first_name,other_names,course,invoice_date,tution_fees,registration_fees,hostel_fees,library_fees,total_amount)
values('$_POST[fname]','$_POST[onames]','$_POST[course]','$_POST[idate]','$_POST[tfees]','$_POST[rfees]','$_POST[hfees]','$_POST[lfees]','$_POST[amount]')";
        if($conn->query($sql)==true)
        {
            print "Student Invoice Details Submitted Successfully! <br>";
            print "<a href='search_admin.php' class='btn-primary'>New Invoice</a><br>";
        }
        else
        {
            print "Student not registered";
        }
    }
    mysqli_close($conn)


    ?>
</div>




</body>
</html>