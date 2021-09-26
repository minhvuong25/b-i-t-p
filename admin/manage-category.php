<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./manage-category.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Food Order Website</title>
</head>

<body>
    <?php include("header.php") ?>
    <div class="main-content">
        <div class="wrapper">
            <h1>Manage category</h1>

            <br>
            <button type="button" class="btn btn-primary btn-lg">Add category</button>
            <br>
            <br>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-2" scope="col">Title</th>
                        <th class="col-sm-2"  scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Featured</th>
                        <th class="col-sm-1" scope="col">Active</th>
                        <th class="col-sm-3" scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1.</td>
                        <td>Pizza</td>
                        <td><img width="100px" src="./amazing/pizza.jpg" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Burger</td>
                        <td><img src="./amazing/bugu.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>MoMo</td>
                        <td><img src="./amazing/banhbao.jpg" width="100px" alt=""></td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-success">Update Category</a>
                            <a href="" class="btn-danger">Delete Category</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Quia est ipsum id id</td>
                        <td><img src="./amazing/categories.jpg" width="100px" alt=""></td>
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