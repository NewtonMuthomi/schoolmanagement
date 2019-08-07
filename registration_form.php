<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration Form</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="Css/Custom.css">
    <script src="bootstrap4/js/jquery-3.3.1.js"></script>
    <script src="bootstrap4/js/popper.js"></script>
    <script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-dark fixed-top">
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
                <a class="dropdown-item" href="new_user.php">2.<b>User Registration</b></a>
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
<br>
<h2 class="text-center"><b><u>Student Registration Form</u></b></h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h6 class="text-center"><i>Kindly fill in your details.</i></h6>
            <form action="reg_confirmation_stud.php" method="post" class="form-group">
                <table class="table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">First Name : </label>
                        </td>
                        <td>
                            <input type="text" name="fname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Other Names : </label>
                        </td>
                        <td>
                            <input type="text" name="oname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Telephone Number : </label>
                        </td>
                        <td>
                            <input type="number" name="telno" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Postal Address : </label>
                        </td>
                        <td>
                            <input type="text" name="address" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Email Address : </label>
                        </td>
                        <td>
                            <input type="email" name="email" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Gender : </label>
                        </td>
                        <td>
                            <select name="gender" id="gender" class="form-control" required="required">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Date of Birth : </label>
                        </td>
                        <td>
                            <input type="date" name="dob" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Next of kin name : </label>
                        </td>
                        <td>
                            <input type="text" name="kinname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Next of kin tel_no: </label>
                        </td>
                        <td>
                            <input type="number" name="kintel" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Course Enrolled : </label>
                        </td>
                        <td>
                            <select name="course" id="course" class="form-control" required="required">
                                <option value="HTML 5">HTML 5</option>
                                <option value="Bootstrap Framework">Bootstrap Framework</option>
                                <option value="PHP">PHP</option>
                                <option value="Java">Java</option>
                                <option value="Android">Android</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Education Level: </label>
                        </td>
                        <td>
                            <select name="education" id="education" class="form-control" required="required">
                                <option value="High School">High School</option>
                                <option value="College">College</option>
                                <option value="University">University</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Year Attended : </label>
                        </td>
                        <td>
                            <input type="text" name="year" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">KCSE Mean Grade : </label>
                        </td>
                        <td>
                            <select name="grade" id="grade" class="form-control" required="required">
                                <option value="A">-----A-----</option>
                                <option value="A-">-----A------</option>
                                <option value="B+">-----B+-----</option>
                                <option value="B">-----B-----</option>
                                <option value="B-">-----B------</option>
                                <option value="C+">-----C+-----</option>
                                <option value="C">-----C-----</option>
                                <option value="C-">-----C------</option>
                                <option value="D+">-----D+-----</option>
                                <option value="D">-----D-----</option>
                                <option value="D-">-----D------</option>
                                <option value="E">-----E-----</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Registration Date : </label>
                        </td>
                        <td>
                            <input type="date" name="regdate" class="form-control" required="required" value=" <?php echo "" . date("Y/m/d")?>">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <button type="submit" class="btn btn-success">Register</button>
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