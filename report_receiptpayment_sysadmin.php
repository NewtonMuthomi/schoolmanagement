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
    <img src="images/fiu.jpg" alt="logo">
    <br> <br>
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Accounts
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="sysadmin_accounts.php">1.<b>Billing</b></a>
                <a class="dropdown-item" href="sysadmin_receiptsearch_stud.php">2.<b>Receipts</b></a>
            </div>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="report_studsearch_sysadmin.php">1.<b>Student Report</b></a>
                <a class="dropdown-item" href="report_staffsearch_sysadmin.php">2.<b>Staff Report</b></a>
                <a class="dropdown-item" href="report_invoicesearch_sysadmin.php">3.<b>Invoice Report</b></a>
                <a class="dropdown-item" href="report_enquirysearch_sysadmin.php">4.<b>Enquiries Report</b></a>
                <a class="dropdown-item" href="report_receiptsearch_sysadmin.php">5.<b>Payment Report</b></a>
                <a class="dropdown-item" href="report_studbalance_sysadmin.php">6.<b>Balances Report</b></a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="login.php">Log Out</a>
        </li>
    </ul>
</nav>
<br><br>
<br><br>
<div class="heading">
    <h2 class="text-center">Payment Details Report</h2>
</div>
<div class="container">
    <?php
    $con=mysqli_connect("localhost","root","","schoolmanagement");
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM receipts where receipt_date>='$_POST[jdatefrom]' and receipt_date<='$_POST[jdateto]'");

    echo "<table class='table table-striped table-responsive-lg'>
<tr>
<th>Receipt Number</th>
<th>Admission Number</th>
<th>First Name</th>
<th>Other Names</th>
<th>Course Enrolled</th>
<th>Receipt Date</th>
<th>Tution Fees</th>
<th>Registration Fees</th>
<th>Hostel Fees</th>
<th>Library Fees</th>
<th>Total Amount</th>
<th>Amount Paid</th>

</tr>";

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['receipt_no'] . "</td>";
        echo "<td>" . $row['admin_no'] . "</td>";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['other_names'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['receipt_date'] . "</td>";
        echo "<td>" . $row['tution_fees'] . "</td>";
        echo "<td>" . $row['registration_fees'] . "</td>";
        echo "<td>" . $row['hostel_fees'] . "</td>";
        echo "<td>" . $row['library_fees'] . "</td>";
        echo "<td>" . $row['total_amount'] . "</td>";
        echo "<td>" . $row['amount_paid'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);
    ?>
</div>
<div class="text-center">
    <tr>
        <a href="report_receiptsearch_sysadmin.php" class="btn btn-success" type="submit">Pick a different date range</a>
    </tr>
</div>


</body>
</html>