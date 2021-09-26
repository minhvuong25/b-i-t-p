<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./manage-order.css">
    <title>Food Order Website</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Order</h1>

            <br>
            <br>
            <br>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-1" scope="col">Food </th>
                        <th class="col-sm-1" scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Price</th>
                        <th class="col-sm-1" scope="col">Qty.Total</th>
                        <th class="col-sm-1" scope="col">Order Date</th>
                        <th class="col-sm-1" scope="col">Status</th>
                        <th class="col-sm-1" scope="col">Customer Name</th>
                        <th class="col-sm-1" scope="col">Contact</th>
                        <th class="col-sm-1" scope="col">Email</th>
                        <th class="col-sm-1" scope="col">Address</th>
                        <th class="col-sm-1" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Mixed Pizza</td>
                        <td>10.00</td>
                        <td>2</td>
                        <td>20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td><label style="color: green;">Delivered</label> </td>
                        <td>Jana Bush</td>
                        <td>+1 (562) 101-2028</td>
                        <td>tydujy@mailinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td>
                            <a href="./update-order.php" class="btn-success">Update Category</a>

                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Best Burger</td>
                        <td>4.00 </td>
                        <td>4</td>
                        <td>16.00</td>
                        <td>2020-11-30 03:52:43</td>
                        <td><label style="color: green;">Delivered</label></td>
                        <td>Kelly Dillard</td>
                        <td>+1 (908) 914-3106</td>
                        <td>fexekihor@mailinator.com</td>
                        <td>Incidunt ipsum ad d</td>
                        <td>
                            <a href="./update-order.php" class="btn-success">Update Category</a>

                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Sadeko Momo</td>
                        <td>6.00</td>
                        <td>3</td>
                        <td>18.00 </td>
                        <td>2020-11-30 03:49:48</td>
                        <td><label style="color: red;">Cancelled</label> </td>
                        <td>Bradley Farrell</td>
                        <td>+1 (576) 504-4657</td>
                        <td>zuhafiq@mailinator.com</td>
                        <td>Duis aliqua Qui lor</td>
                        <td>
                            <a href="./update-order.php" class="btn-success">Update Category</a>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include("end.php") ?>
</body>

</html>