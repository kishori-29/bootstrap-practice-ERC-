<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <title>NM Electricals</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'PT Sans', sans-serif;
    }

    .row {
        display: flex;
        margin: auto;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .product1,
    .product2 {
        display: flex;
        justify-content: center;
        align-items: center;
        border: solid;
        /* margin-top: 10px;
        margin-bottom: 10px; */
        padding: 10px;
    }

    .card {
        height: 100%;
        /* margin: auto; */
        margin: 10px 10px 10px 10px;
        padding: 10px;
        border: 2px solid red;
    }

    .products {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .heading {
        margin: 15px;
        display: flex;
        /* margin: auto; */
        align-items: center;
        justify-content: center;

    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include "header.php";
        ?>
        <div class="container-fluid">
            <div class="heading">
                <h2>Products</h2>
            </div>
            <div class="products">
                <div class="row">
                    <div class="col-lg-1">

                    </div>
                    <div class="product1 col-lg-4 col-md-12 col-sm-12">
                        <div class="card" style="">
                            <img src="images/product1.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Industrial Electric Switch</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius in
                                    accusamus architecto tempora. Ut dicta, atque ipsa debitis labore in qui dignissimos
                                    adipisci maxime, numquam odit eveniet nesciunt tenetur possimus aperiam excepturi
                                    voluptatibus reprehenderit et.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                    <div class="product2 col-lg-4 col-md-12 col-sm-12 ">
                        <div class="card" style="">
                            <img src="images/product2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Farming Electric Switch</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt
                                    alias sapiente delectus officia incidunt veritatis, et sequi similique quos
                                    voluptate
                                    corporis nostrum, inventore, repellendus quam dolor! Iste atque, labore nulla minus
                                    distinctio maxime accusamus ad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </div>
        <?php        
        include "footer.php"
        ?>
    </div>
</body>

</html>