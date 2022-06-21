<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Cosmetics -->
    <title>SplitIt!</title>
    <link rel="icon" href="tinder-512.ico">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- css  -->
    <link rel="stylesheet" href="css/styles.css">


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/ae8fea21dc.js" crossorigin="anonymous"></script>

    <!-- others -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

</head>

<!-- <body style="background-image:url(images/back.jpg)"> -->

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class=" navbar-brand logo"><span><span style="font-size: 45px;">S</span>plit</span><span style="font-size: 45px; color: white;">I</span>t!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="collapseExample">
                <ul class="navbar-nav ms-auto navlinks">
                    <li class="nav-item">
                        <a id="big" class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="big" class="nav-link" href="#">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a id="big" class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a id="big" class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item btn2">
                        <a class="nav-link" href="expense.php">+ | New Expense</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-6 heading-phrase">
                <h1 class="phrase" style="color: white;">This Website is a Project Created by: </h1>
            </div>

            <div class="col-md-6 heading-phrase">
                <h1> <span id="about-phrase" class="changing-phrase auto-input"></span></h1>
            </div>
        </div>



    </div>
    </div>
    </div>

    <!-- typing effect -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-input", {
            strings: ["for Entertainment", "for Food", "while Travelling", "while Shopping", "for Literally Anything!"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true
        })
    </script> -->
    </header>
    <!-- <div class="v-header container" style="margin:0px;">
        <img src="images/contact.jpg" alt="" style="height: auto; width:100%;">
    </div> -->
    <script src="js/script.js"></script>
</body>

</html>