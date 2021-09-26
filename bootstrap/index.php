<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style1.css">
    <title>Restaurant Website</title>
</head>

<body>

    <?php
    include('h.php')
    ?>
    <main>
        <div class="food-search">
            <div class="container">
                <form action="" class="form-search">
                    <input class="input-search" type="search" name="search" placeholder="Search for Food.." required="">
                    <input type="submit" name="submit" value="Search" class="btn-search">
                </form>
            </div>
        </div>

        <p class="text-center content-food">Explore food</p>


        <div class="container">
            <div class="row">
                <div class="col img-food">
                    <img src="./amazing/pizza.jpg" alt="">
                    <h3 class="name-of-food">pizza</h3>
                </div>
                <div class="col img-food">
                    <img src="./amazing/bugu.jpg" alt="">
                    <h3 class="name-of-food">buger</h3>
                </div>
                <div class="col img-food">
                    <img src="./amazing/banhbao.jpg" alt="">
                    <h3 class="name-of-food">momo</h3>
                </div>
            </div>
        </div>




        <div class="container overflow-hidden">
            <p class="text-center menu-food">Menu food</p>
            <div class="row gy-5">
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="p-3 border bg-light"><img class="img-food1" src="./amazing/piza1.jpg" alt="">
                        <div class="content-food1">
                            <h4>Dumplings Specials</h4>
                            <p>$5.00</p>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="" class="btn btn-primary">Order Now</a>
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
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>