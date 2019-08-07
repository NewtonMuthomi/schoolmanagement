<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accounts Dashboard</title>
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
            <a class="nav-link" href="accounts_dashboard.php">Billing/Invoices</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Receipts.php">Receipts</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="accounts_invoicesearch_rep.php">1.<b>Invoice Reports</b></a>
                <a class="dropdown-item" href="accounts_receiptsearch_rep.php">2.<b>Payment Reports</b></a>
                <a class="dropdown-item" href="accounts_studbalance_rep.php">3.<b>Balances Reports</b></a>
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
        $sql="insert into receipts(admin_no,first_name,other_names,course,receipt_date,tution_fees,registration_fees,hostel_fees,library_fees,total_amount,amount_paid,balance)
values('$_POST[admin]','$_POST[fname]','$_POST[onames]','$_POST[course]','$_POST[rdate]','$_POST[tfees]','$_POST[rfees]','$_POST[hfees]','$_POST[lfees]','$_POST[amount]','$_POST[amountpaid]','$_POST[balance]')";
        if($conn->query($sql)==true)
        {
            print "Student Receipt Created Successfully! <br><br>";
            print "<a href='Receipts.php' class='btn btn-primary'>New Receipt</a><br>";
        }
        else
        {
            print "Error encountered!!";
        }
    }
    mysqli_close($conn)


    ?>
</div>

</body>
</html>