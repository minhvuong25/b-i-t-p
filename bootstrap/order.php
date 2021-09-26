<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./order.css">
    
    <title>Document</title>
</head>
<body>
    <?php include("h.php") ?>
    <main>
        <div class="container-fluid main-order">
            <h2 class="main-order-title">Fill this form to confirm your order</h2>
            <div class="row row-selected-foods">
                <div class="col-sm-4"></div>

                <div class="col-sm-4">
                    <fieldset class="selected-food">
                        <legend>Selected Food</legend>
                        <div class="row row-food-item">
                            <div class="col-sm-3 col-food-img">
                                <div class="food-img">
                                    <img src="./amazing/burger1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="col-sm-9 col-food-content">
                                <div class="sub-food">
                                    <p id="food-title">Food Title</p>
                                    <p id="food-price">$2.3</p>
                                    <p id="quantity">Quantity</p>
                                    <input type="number" name="" id="" value="1">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>

                <div class="col-sm-4"></div>

            </div>

            <div class="row row-ship-food">
                <div class="col-sm-4"></div>

                <div class="col-sm-4">
                    <fieldset class="ship-food">
                        <legend>Delivery Detail</legend>
                        <div class="row row-food-item">
                            <label for="fname">Full Name</label>
                            <input placeholder="E.g. NheoSS" type="text" id="fname">

                            <label for="pnumber">Phone Number</label>
                            <input placeholder="E.g. 038xxxxxxx" type="text" id="pnumber">

                            <label for="email">Email</label>
                            <input placeholder="E.g. NheoSS@gmail.com" type="email" id="email">

                            <label for="address">Address</label>
                            <textarea placeholder="E.g. Street, City, Country" name="" id="address" cols="30"
                                rows="10"></textarea>


                        </div>
                        <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">

                    </fieldset>
                </div>

                <div class="col-sm-4"></div>

            </div>
        </div>
    </main>
    <?php include("end.php") ?>
</body>
</html>