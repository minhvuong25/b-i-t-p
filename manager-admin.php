<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./manager-admin.css">
    <title>Food Order Website</title>
</head>

<body>
    <?php include("header.php") ?>
    <main>
        <div class="wrapper content">
            <h1 class="name-content">Manage Users</h1>
            <br>
            <button type="button" class="btn btn-primary btn-lg but-add">Add New User</button>
            <br>
            <br>
        </div>

        <div class="container">
            <table class="table">
                <thead>
                    <tr  class="cell-2">
                        <th scope="col">S.N.</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody> 
                    <tr  class="cell-1">
                        <th scope="row"  class="cell-1">1.</th>
                        <td>Arsenio Leach</td>
                        <td>toduwaxobi</td>
                        <td><a href="" class="btn-primary">Change Password</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr  class="cell-1">
                        <th scope="row" class="cell-1">2.</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td><a href="" class="btn-primary">Change Password</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr  class="cell-1"> 
                        <th scope="row" >3.</th>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td><a href="" class="btn-primary">Change Password</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr  class="cell-1">
                        <th scope="row" >4.</th>
                        <td>Administrator</td>
                        <td>admin</td>
                        <td><a href="" class="btn-primary">Change Password</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <?php include("end.php") ?>
</body>

</html>