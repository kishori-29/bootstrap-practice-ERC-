<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">

    <title>Document</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'PT Sans', sans-serif;
    }

    .heading {
        background-image: url('images/about_img');
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        color: white;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        height: 150px;
        margin-bottom: 20px;
    }

    .article {
        border: 2px solid blue;
        align-items: center;
        justify-content: center;
        padding: 10px;
        margin: 50px;
    }

    .part1-info {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* margin-top: 20px; */
        height: 150px;
        margin: auto;
    }

    .image-row {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .part2 {
        font-size: large;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php
        include "header.php";
        ?>
        <div class="main-content">
            <div class="heading">
                <h1>About Us</h1>
            </div>
            <div class="article">
                <div class="part1">
                    <div class="image-row">
                        <img width:"200px" height="200px" src="images/profile.png">
                    </div>
                    <div class="part1-info">
                        <h3>Mr Ravindra Jathar</h3>
                        (Founder And Owner)
                    </div>
                </div>
                <div class="part2">
                    <p>He has more than 8 years of experience, he has gained deep understanding on Broadband Business
                        at
                        grass-root level on market and technology trends.</p>
                    <p>
                        <b>New Monitor Electricals</b>. is engaged in building the next generation information,
                        communication and entertainment services for home and SME customers in all over Pune
                        District
                    </p>
                    <p>
                        <b>New Monitor Electricals</b>. is a class “C” ISP unified License Holder by the Department
                        of
                        Telecommunications.
                    </p>
                    <p>
                        <b>New Monitor Electricals</b> Registered office located in Manchar, Pune. Sanjeevan is
                        spread 8+
                        (include Jv’s and Franchises) towns &amp; cities of Pune District.
                    </p>
                    <p>
                        <b>New Monitor Electricals</b> is currently engaged in the business of providing, Broadband
                        Internet, Wi-Fi and FTTH connectivity services to its customers in Pune District, And wishes
                        to
                        establish Franchise to distribute its Services. Across Pune District Sanjeevan offering
                        Managed
                        Internet broadband Services, Wifi wireless &amp; Fiber connectivity Solutions any more
                        services
                        which are lined up.
                    </p>
                </div>
            </div>
        </div>
        <?php
        include "footer.php";
        ?>

    </div>
</body>

</html>