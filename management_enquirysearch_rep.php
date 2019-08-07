<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Management Dashboard</title>
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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                Reports
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="management_studsearch_rep.php">1.<b>Student Report</b></a>
                <a class="dropdown-item" href="management_staffsearch_rep.php">2.<b>Staff Report</b></a>
                <a class="dropdown-item" href="management_invoicesearch_rep.php">3.<b>Invoice Report</b></a>
                <a class="dropdown-item" href="management_enquirysearch_rep.php">4.<b>Enquiries Report</b></a>
                <a class="dropdown-item" href="management_receiptsearch_rep.php">5.<b>Payment Report</b></a>
                <a class="dropdown-item" href="management_studbalance_rep.php">6.<b>Balances Report</b></a>
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
    <h2 class="text-center">Report by Enquiry Date</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="management_enquiry_rep.php" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Date From : </label>
                        </td>
                        <td>
                            <input type="date" name="jdatefrom" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Date To : </label>
                        </td>
                        <td>
                            <input type="date" name="jdateto" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button class="btn btn-success" type="submit">View Report</button>
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