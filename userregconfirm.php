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
    <!-- Brand -->
    <a class="navbar-brand" href="#"></a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="login.php">Home</a>
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
            print "<a href='login.php' class='btn-primary'>Log In</a><br>";

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