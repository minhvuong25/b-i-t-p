<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./food.css">
    <title>Restaurant Website</title>
</head>

<body>
    <?php
    include('h.php')
    ?>


    </main>

    <div class="food-search">
        <div class="container">
            <form action="" class="form-search">
                <input class="input-search" type="search" name="search" placeholder="Search for Food.." required="">
                <input type="submit" name="submit" value="Search" class="btn-search">
            </form>
        </div>
    </div>

    <main>
        <div class="container overflow-hidden">
            <p class="text-center menu-food">Menu food</p>
            <div class="row gy-5">
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="./order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="./order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="./order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="./order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center all-food">
                <p><a href="">
                        See All Foods
                    </a></p>
            </div>
        </div>

    </main>
    <?php
    include('end.php')
    ?>
</body>

</html>