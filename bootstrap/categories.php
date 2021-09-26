<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./categories.css">
    <title>Restaurant Website</title>
</head>

<body>
    <?php
    include('h.php')
    ?>
    <main>
        <p class="text-center content-food">Explore food</p>


        <div class="container">
            <div class="row">
                <div class="col img-food">
                    <img src="./amazing/pizza.jpg" class="img-fluid" alt="...">
                    <h3 class="name-of-food">pizza</h3>
                </div>
                <div class="col img-food">
                    <img src="./amazing/bugu.jpg" class="img-fluid" alt="...">
                    <h3 class="name-of-food">buger</h3>
                </div>
                <div class="col img-food">
                    <img src="./amazing/banhbao.jpg" alt="">
                    <h3 class="name-of-food">momo</h3>
                </div>

            </div>
            <div class="container">
            <div class="row">
                <div class="col-md-4 image-add">
                    <img src="./amazing/categories.jpg" class="img-fluid" alt="...">
                    <h3 class="name-of-food">categories</h3>
                </div>
            </div>
            </div>




    </main>
    <?php
    include('end.php')
    ?>
</body>

</html>