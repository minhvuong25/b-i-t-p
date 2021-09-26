<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Food Order Website</title>
</head>

<body>
    <?php include("header.php") ?>
    <main>
        <div class="wrapper content">
            <h1 class="name-content">Dashboard</h1>
            <br>
            <div class="login"> Login Successful.</div>
            <br>
            <br>
            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3 border bg-light">
                            <h1>4</h1>
                            <br> Categories
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">
                            <h1>7</h1>
                            <br> Foods
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">
                            <h1>3</h1>
                            <br> Total Orders
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-3 border bg-light">
                            <h1>$36.00</h1>
                            <br> Revenue Generated
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <?php include("end.php") ?>
</body>

</html>