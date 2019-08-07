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
<h2 class="text-center"><b><u>User Registration</u></b></h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <h6 class="text-center"><i>Kindly fill in your details.</i></h6>
            <form action="reg_confirm_user_admin.php" method="post" class="form-group">
                <table class="table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for=""><b>First Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="fname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Middle Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="mname" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Last Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="lname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Department : </b></label>
                        </td>
                        <td>
                            <select name="department" id="department" class="form-control" required="required">
                                <option value="ICT">ICT</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Management">Management</option>
                                <option value="Sciences">Sciences</option>
                                <option value="Languages">Languages</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>User Name : </b></label>
                        </td>
                        <td>
                            <input type="text" name="uname" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>Password : </b></label>
                        </td>
                        <td>
                            <input type="password" name="passwd" class="form-control" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for=""><b>User Group : </b></label>
                        </td>
                        <td>
                            <select name="user_group" id="user_group" class="form-control" required="required">
                                <option value="Systems Administrator">Systems Administrator</option>
                                <option value="Administrator">Administrator</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Accounts">Accounts</option>
                                <option value="Management">Management</option>
                            </select>
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