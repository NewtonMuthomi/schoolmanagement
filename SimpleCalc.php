<?php
if(isset($_POST['submit']))
{
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $sum =  $number1+$number2;
    $prod = $number1*$number2;
    $diff = $number1-$number2;
    $divsn = $number1/$number2;
    $remdr = $number1%$number2;
//                echo "The sum of $number1 and $number2 is: ".$sum;
}
?>
<html>
<head>
    <title>A Simple Calculator</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<h2 class="text-center">A Simple Calculator</h2>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="" method="post" class="form-group">
                <table class="table table-striped table-responsive-sm">
                    <tr>
                        <td class="text-right">
                            <label for="">Enter First Number : </label>
                        </td>
                        <td>
                            <input type="number" name="number1" class="form-control" required value="<?php echo $number1;?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Enter Second Number : </label>
                        </td>
                        <td>
                            <input type="number" name="number2" class="form-control" required value="<?php echo $number2;?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Sum : </label>
                        </td>
                        <td>
                            <label for="" class="form-control">
                                <?php echo $sum;?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Product : </label>
                        </td>
                        <td>
                            <label for="" class="form-control">
                                <?php echo $prod;?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Difference : </label>
                        </td>
                        <td>
                            <label for="" class="form-control">
                                <?php echo $diff;?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Division : </label>
                        </td>
                        <td>
                            <label for="" class="form-control">
                                <?php echo $divsn;?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <label for="">Remainder : </label>
                        </td>
                        <td>
                            <label for="" class="form-control">
                                <?php echo $remdr;?>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">
                            <input  type="submit" name="submit" value="Compute" class="btn btn-primary">
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