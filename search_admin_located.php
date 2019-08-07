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

<h2 class="text-center font-weight-bold"><u> Student Details</u> </h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <?php

            $conn=mysqli_connect("localhost","root","","schoolmanagement");
            if(!$conn)
            {
                die("Connection Failed : " . mysqli_connect_error());
            }

            $sql="select first_name,other_names,course_enrolled from registration where admin_no='$_POST[admin]'";
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    ?>
                        <h6 class="text-center"><i>Kindly fill in the required details</i></h6>
                                <form action="search_admin_updated.php" method="post" class="form-group">
                                    <table class="table table-responsive-sm table-responsive-sm">
                                        <tr>
                                            <td class="text-right">
                                                <label for="">First Name : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="fname" class="form-control" value="<?php echo $row["first_name"];?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Other Names : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="onames" class="form-control" value="<?php echo $row["other_names"];?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Course Enrolled : </label>
                                            </td>
                                            <td>
                                                <input type="text" name="course" class="form-control" value="<?php echo $row["course_enrolled"];?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Invoice Date : </label>
                                            </td>
                                            <td>
                                                <input type="date" name="idate" class="form-control" required="required" value="$num1">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Tution Fees : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="tfees" class="form-control" required="required" value="$num2">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Registration Fees : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="rfees" class="form-control" required="required" value="$num3">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Hostel Fees : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="hfees" class="form-control" required="required" value="$num4">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Library Fees : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="lfees" class="form-control" value="$num5">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right">
                                                <label for="">Total Amount : </label>
                                            </td>
                                            <td>
                                                <input type="number" name="amount" class="form-control" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <button class="btn btn-success" type="submit">Submit</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                    <?php
                }
            }
            mysqli_close($conn);

            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>