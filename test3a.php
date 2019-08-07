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
        $sql="insert into accounts(tution_fees,registration_fees,hostel_fees,library_fees,total_amount)
        if($conn->query($sql)==true)
        {
            print "Student Invoice Details Submitted Successfully! <br>";
            print "<a href='sysadmin_accounts.php' class='btn-primary'>New Invoice</a><br>";
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