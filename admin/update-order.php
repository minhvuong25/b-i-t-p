<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./update-order.css">
    <title>Food Order Website-Home Page</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Update Order</h1>
            <br>
            <table class="tbl-30">
                <tbody>
                    <tr>
                        <td>Food Name</td>
                        <td><b>Sadeko Momo</b></td>
                    </tr>
                    <tr>
                        <td>Food name </td>
                        <td><b>$ 6.00</b></td>
                    </tr>
                    <tr>
                        <td>Qty</td>
                        <td><input type="number" name="qty" value="3"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status" id="">
                                <option value="Ordered">Ordered</option>
                                <option value="On Delivery">On Delivery</option>
                                <option value="Delivery">Delivery</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Customer Name:</td>
                        <td>
                            <input type="text" name="customer_name" value="Bradley Farrell">
                        </td>
                    </tr>
                    <tr>
                        <td>Customer Contact:</td>
                        <td>
                            <input type="text" name="customer_contact" value="+1 (576) 504-4657">
                        </td>
                    </tr>
                    <tr>
                        <td>Customer Email:</td>
                        <td>
                            <input type="text" name="customer_email" value="zuhafiq@mailinator.com">
                        </td>
                    </tr>
                    <tr>
                        <td>Customer Address:</td>
                        <td>
                            <textarea name="customer_address" cols="30" rows="5">Duis aliqua Qui lor</textarea>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="price" value="6.00">
                        <input type="submit" name="submit" value="Update Order" class="btn-secondary">
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php include("end.php") ?>
</body>

</html>