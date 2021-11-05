<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>NM electricals</title>
    <style>
    #inner-container {
        display: flex;
        width: 100%;
        /* margin: auto; */
        /* height: 500px; */
        padding: 10px;
        justify-content: center;
        align-items: center;
    }

    .container .left {
        margin-top: 28px;
        /* margin-bottom: 10px; */
        /* padding: 10px; */
        border: 2px solid grey;
    }

    .container .right {
        /* margin-top: 20px; */
        /* margin-bottom: 10px; */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    /* .carousel-item img {
        width: 100%;
        overflow: hidden;
        object-fit: cover;
        background-size: cover;
    } */

    .image1 .logo {
        background-color: white;
        /* display: block; */
        border-radius: 25px;
        margin: auto;
        flex-wrap: wrap;
        background-attachment: fixed;
        /* position: center; */
    }
    </style>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <div class="container-fluid">
        <?php
          include "header.php";
        ?>
        <!-- image -->
        <div class="image1">
            <div class="logo">
                <img src="images/NM-Logo.png">
            </div>
        </div>
        <div class="container" id="inner-container">
            <div class="row">
                <div class="left col-sm-12 col-lg-6 col-md-6">

                    <!-- <div class="article col-sm-2 col-md-6 inline"> -->
                    <!-- <div style="border:1.5px solid black; margin-top:7px; margin-bottom:7px" class="col-lg-4 col-md-4"> -->
                    <h4 style="text-align:center">Loren Ipsum</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda laudantium eligendi fuga
                        harum. Nesciunt magni mollitia eius minima sequi rem hic corrupti est nulla itaque beatae,
                        doloribus voluptatem vel vitae in iusto. Magni libero, repudiandae minima quibusdam debitis
                        saepe corporis.</p>
                </div>
                <div class="right col-sm-12 col-md-6 col-lg-6" id="right-item">
                    <main>
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active img-fluid">
                                    <img src="images/capacitor.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Capacitor</h5>
                                        <p>This image shows capacitor</p>
                                    </div>
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img src="images/resistor4.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>resistor</h5>
                                        <p>This image shows resistor</p>
                                    </div>
                                </div>
                                <div class="carousel-item img-fluid">
                                    <img src="images/bulb.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Bulb</h5>
                                        <p>This image shows bulb</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <?php
            include "footer.php";
        ?>
    </div>
</body>

</html>