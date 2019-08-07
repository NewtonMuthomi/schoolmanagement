<html>
<head>
    <title>Courses</title>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
    <script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
<h2 class="text-centre">Courses</h2>
<div class="container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <form action="accounts_invoice_update.php" method="post" class="form-group">
            <table class="table table-responsive-sm table-responsive-sm">

                <tr>
                    <td class="text-right">
                        <label for="">Invoice Date : </label>
                    </td>
                    <td>
                        <input type="date" name="idate" class="form-control" required="required">
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <label for="">Tution Fees : </label>
                    </td>
                    <td>
                        <input type="number" name="tfees" class="form-control" required="required">
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <label for="">Registration Fees : </label>
                    </td>
                    <td>
                        <input type="number" name="rfees" class="form-control" required="required">
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <label for="">Hostel Fees : </label>
                    </td>
                    <td>
                        <input type="number" name="hfees" class="form-control" required="required">
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <label for="">Library Fees : </label>
                    </td>
                    <td>
                        <input type="number" name="lfees" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td class="text-right">
                        <label for="">Total Amount : </label>
                    </td>
                    <td>
                        <input type="number" name="amount" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="col-sm-3"></div>
</div>
</body>
</html>