<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fifty Ten</title>

    <!-- boxicon link -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <!-- import css -->
    <link rel="stylesheet" href="./css/styles.css">

    <!-- favicon (title of page image) -->
    <link rel="icon" href="/images/favicon.JPG" sizes="32x32" type="image/JPG">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integity="sha256-2Kok7Mb0yxpgUVvAk/H32jig0SYS2auk4Pfzbm7uH60=" crossorigin "anonymous"></script>
    <script>
        $(function() {
            $('#footer').load("./assets/php/footer.php");
        });
    </script>


</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="./index.php " class="logo"> <i class="bx bxs-cricket-ball"></i> 50/10</a>
        <!-- menu -->
        <nav class="navbar">
            <a href="./index.php">home</a>
            <a href="#aisles" id="aisles-btn">Aisles</a>
            <a href="./about.php">about us</a>
            <a href="./p7_backstore.php">Backstore</a>
        </nav>
        <div class="aisles-menu">
            <a href="./p2_fruitaisle.php">Fruits</a>
            <a href="./p2_VegetablesAisle.php">Vegetables</a>
            <a href="./p2_DairyAisle.php">Dairy</a>
            <a href="./p2_MeatAisle.php">Meat</a>
            <a href="./p2_PastryAisle.php">Pastry</a>
            <a href="./p2_SnacksAisle.php">Snacks</a>
            <a href="./p2_SeafoodAisle.php">Seafood</a>
            <a href="./p2_WaterAisle.php">Drinks</a>
        </div>
        <!-- buttons -->
        <div class="icons">
            <div class='bx bx-menu-alt-right' id="menu-btn"></div>
            <div class='bx bx-search-alt' id="search-btn"></div>
            <div class='bx bx-cart' id="cart-btn"></div>
            <div class='bx bx-log-in-circle' id="log-btn"></div>
        </div>
        <!-- search -->
        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="Search...">
            <label for="search-box" class="bx bx-search-alt"></label>
        </form>
        <!-- cart -->
        <div class="cart">
            <div class="box">
                <i class='bx bx-trash'></i>
                <img src="./images/k.jpg" alt="">
                <div class="content">
                    <h3>Name</h3>
                    <span class="price">price$</span>
                    <span class="quantity">qty: variable</span>
                </div>
            </div>
            <div class="box">
                <i class='bx bx-trash'></i>
                <img src="./images/k.jpg" alt="">
                <div class="content">
                    <h3>name</h3>
                    <span class="price">price$</span>
                    <span class="quantity">qty: variable</span>
                </div>
            </div>
            <div class="total">total: totalPrice$</div>
            <a href="./p4_cart.php" class="btn">Review Items</a>
        </div>

        <!-- login -->

        <form action="" class="login-form">
            <h3>log in</h3>
            <input type="email" placeholder="enter email" class="box">
            <input type="password" placeholder="enter password" class="box">
            <br>
            <a href="https://alzheimer.ca/sites/default/files/documents/alzheimers-disease_getting-a-diagnosis_0.pdf" target="_blank">forgot your password?</a>

            <a href="./p6_signup.php">Create An Account</a>
            <a href="#" class="btn"> Login Now </a>
        </form>
    </header>
    <!--END OF HEADER-->
    </div>

    <div>
        <h1 class="bs-header"></br>Edit an order

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Order Number: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder number" id="ordernumber" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Client Name: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder client" id="clientname" />
                </p>
            </form>

            <form action="" class="bs-add">
                <p>
                    <label class="bs-add"> Balance: </label>
                    <input class="data-entering" type="text" name="itemdata[]" value="placeholder balance" id="orderbalance" />
                </p>
            </form>

        </h1>
    </div>
    <!-- Temporary buttons just loop back to the previous page-->
    <div class="backstore-editing-buttons">
        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="saveitm">Save</label>
                <input type="button" id="saveitm" name="saveitm">
            </div>
        </a>

        <a href="p11_backstoreorders.php">
            <div class="btn">
                <label for="cancel">Cancel</label>
                <input type="button" id="cancel" name="cancel">
            </div>
        </a>
    </div>

    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>
</body>

</html>