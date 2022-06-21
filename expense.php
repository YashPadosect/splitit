<?php
    session_start();
    if(!isset($_SESSION['login_user2']))
    {
        header("location:login.php");
    }
    
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
    <link rel="stylesheet" href="css/expense.css">

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

<body>
    <div class="header">
        <nav>
            <div class="logo"><span><span style="font-size: 45px;">S</span>plit</span><span style="font-size: 45px; color: white;">I</span>t!</div>
            <input type="checkbox" id="check">
            <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
                </label>

            <ul class="navlinks" style="margin-left: -500px;">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="#">Split</a></li>
                <li><a href="#">Groups</a></li> -->
                <li><a href="#">Transactions</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">ContactUs</a></li>
                <li class="btn2"><a href="expense.php">+ | New Expense</a></li>
            </ul>
        </nav>

        <div class="content">
            <h1 style="color: white;">Let's Be Organized...</h1>
            <form action="">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="&#x270e; Enter Amount: ">
                    </div>
                    <div class="col">
                        <div class="form-group col-md-4 flextype">
                            <label for="inputType">What's this for?</label>
                            <select id="inputType" class="form-control">
                              <option selected>Other</option>
                              <option>Travel</option>
                              <option value="">Shopping</option>
                              <option value="">Food</option>
                              <option value="">Entertainment</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check col-md-4 flextype">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label small-font" for="gridCheck">
                              Divide equally
                            </label>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-group"> -->
                <!-- <input class="form-control main-input" type="text" placeholder="&#x270e; Enter Amount: "> -->
                <!-- <input class="main-input" type="text" placeholder="&#x270e; Enter Amount: ">
                    <button type="submit">Proceed</button>
                </div> -->
                <!-- <br> -->

                <div class="form-group">
                    <label for="formGroupExampleInput">Name of First Person:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Name of Second Person:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name of Third Person:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name of Forth Person:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Name of Fifth Person:</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter the name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Paid By:</label>
                    <input type="text" class="form-control green-background" id="formGroupExampleInput" placeholder="Enter the name">
                </div>
                <button type="submit">Proceed</button>
            </form>
        </div>

        <!-- <div class="expense-form">
            <form>
                <input type="text" placeholder="&#x270e; Enter Name 1: ">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname">
            </form>

        </div> -->

    </div>
    </div>
    </div>
    </header>
    <!-- <div class="v-header container" style="margin:0px;">
        <img src="images/contact.jpg" alt="" style="height: auto; width:100%;">
    </div> -->
</body>

</html>