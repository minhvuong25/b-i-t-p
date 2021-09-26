<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./manage-food.css">
    <title>Food Order Website</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage Food</h1>

            <br>
            <button type="button" class="btn btn-primary btn-lg">Add Food</button>
            <br>
            <br>
            <table >
                <thead>
                    <tr  >
                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-2" scope="col">Title</th>
                        <th class="col-sm-1" scope="col">Price</th>
                        <th class="col-sm-2" scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Featured</th>
                        <th class="col-sm-1" scope="col">Active</th>
                        <th class="col-sm-5" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Dumplings Specials</td>
                        <td>$5.00</td>
                        <td><img width="100px" src="./amazing/momo1.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Best Burger</td>
                        <td>$4.00</td>
                        <td><img src="./amazing/burger1.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Smoky BBQ Pizza</td>
                        <td>$6.00</td>
                        <td><img src="./amazing/piza1.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Sadeko Momo</td>
                        <td>$6.00</td>
                        <td><img src="./amazing/momo1.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Mixed Pizza</td>
                        <td>$10.00</td>
                        <td><img src="./amazing/piza1.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Sed ipsum cillum in</td>
                        <td>$52.00</td>
                        <td class="content-img">Image not Added.</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Quia est ipsum id id</td>
                        <td>$4.00</td>
                        <td><img src="./amazing/piza1.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <?php include("end.php") ?>
</body>

</html>