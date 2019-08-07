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
        $sql="insert into accounts(admin_no,first_name,other_names,course,invoice_date,)
values('$_POST[admin]','$_POST[fname]','$_POST[onames]','$_POST[course]','$_POST[idate]')";
        if($conn->query($sql)==true)
        {
            print "<a href='test2a.php'>Enter Billing Details</a> <br>";
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