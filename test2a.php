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

<?php
if(isset($_POST['submit']))
{
    $tfees = $_POST['tfees'];
    $rfees = $_POST['rfees'];
    $hfees = $_POST['hfees'];
    $lfees = $_POST['lfees'];
    $sum = $tfees+$rfees+$hfees+$lfees;


//               echo "The sum of $number1 and $number2 is: ".$sum;
}
?>
<h2 class="text-center font-weight-bold"><u> Student Details</u> </h2>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
<!--            --><?php
//
//            $conn=mysqli_connect("localhost","root","","schoolmanagement");
//            if(!$conn)
//            {
//                die("Connection Failed : " . mysqli_connect_error());
//            }
//
//            $sql="select admin_no,first_name,other_names,course_enrolled from registration where admin_no='$_POST[admin]'";
//            $result=$conn->query($sql);
//
//            if($result->num_rows>0)
//            {
//                while($row=$result->fetch_assoc())
//                {
//                    ?>
                    <h6 class="text-center"><i>Kindly fill in the required details</i></h6>
                    <form action="test3a.php" method="post" class="form-group">
                        <table class="table table-responsive-sm table-striped">
                            <tr>
                                <td class="text-right">
                                    <label for="">Tution Fees : </label>
                                </td>
                                <td>
                                    <input type="number" name="tfees" class="form-control" required value="<?php echo $tfees;?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Registration Fees : </label>
                                </td>
                                <td>
                                    <input type="number" name="rfees" class="form-control" required value="<?php echo $rfees;?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Hostel Fees : </label>
                                </td>
                                <td>
                                    <input type="number" name="hfees" class="form-control" required value="<?php echo $hfees;?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="text-right">
                                    <label for="">Library Fees : </label>
                                </td>
                                <td>
                                    <input type="number" name="lfees" class="form-control" required value="<?php echo $lfees;?>">
                                </td>
                            </tr>
                            <!--                            <tr class="text-hide">-->
                            <!--                                <td class="text-right text-hide">-->
                            <!--                                    <label for="" class="text-hide">Total Amount : </label>-->
                            <!--                                </td>-->
                            <!--                                <td class="text-hide">-->
                            <!--                                    <label for="" class="form-control text-hide">-->
                            <!--                                        --><?php //echo $sum;?>
                            <!--                                    </label>-->
                            <!--                                </td>-->
                            <!--                            </tr>-->
                            <tr>
                                <td class="text-right">
                                    <label for="">Total Amount : </label>
                                </td>
                                <td>
                                    <input type="number" name="amount" class="form-control" value="<?php echo $sum;?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input  type="submit" name="submit" value="Compute" class="btn btn-primary">
                                </td>
                                <!--                                <td>-->
                                <!--                                    <button class="btn btn-success" type="submit">submit</button>-->
                                <!--                                </td>-->
                            </tr>
                        </table>
                    </form>
<!--                    --><?php
//                }
//            }
//            mysqli_close($conn);
//
//            ?>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>

</body>
</html>
