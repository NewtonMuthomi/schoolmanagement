<html>
<head>
    <title> Creating School Management Database</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
<h2 class="text-center"> Creating a database</h2>
<div class="container">
    <?php

    //Establishing a connection to MySQL Database server

    $conn=mysqli_connect("localhost","root","");

    //Checking whether MySQL Server is running or if the connection $conn exists
    if (!$conn)
    {
        die("Connection Failed : " . mysqli_connect_error());
    }

    //if the connection exists, create the database
    else
    {
        $sql="CREATE DATABASE schoolmanagement";
        //Checking whether the database dbClasses exists, and if not, create it
        if ($conn->query($sql)==true)
        {
            print "Database created successfully";
        }
        else
        {
            print "Cannot create database or database exists";
        }
    }
    mysqli_close($conn);

    ?>
</div>
</body>
</html>