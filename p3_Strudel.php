<?php session_start(); ?>
<!DocTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strudel page</title>

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

    <main>
        <!-- details of single product  -->

        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="./images/Strudel.jpg" width="100%" id="ProductImg">
                </div>


                <div class="col-2">
                    <h2><a href="./index.php">Home</a>/<a href="./p2_PastryAisle.php">Pastry</a>/Strudel</h2>
                    <h1>Raspberry Strudel</h1>
                    <h4 style="display: none;" id="unitPrice">2.00</h4>
                    <h4 class="product-price">$2.00 /<span>unit</span>
                    </h4>
                    <br>
                    <input id="quantity" type="number" min="0" value="1" onchange="updatePrice();saveValue(this)">
                    <a href="" class="btn">Add To Cart</a>
                    <br>
                    <h2 class="proddetail">Product Details <i class="fa fa-indent"></i></h2>
                    <br>
                    <p class="prod-dsc">Local, ethically sourced and any other adjective the marketing team can think of
                        <span id="dots">...</span><span id="more">Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit. Neque sapiente alias maxime quasi dolorem iusto id magni, voluptatem, ab quibusdam
                            aperiam enim eligendi ad ipsum ipsa blanditiis. Repellat, aliquam nemo!</span>
                    </p>
                    <br>
                    <button onclick="myFunction()" id="myBtn">Read more</button>
                    <br>
                </div>
            </div>
        </div>


        <!-- product list -->
        <section>
            <h1 class="section-title"><span>Similar Offerings</span></h1>

            <!-- the files path will have to be changed -->
            <div class="row2">

                <div class="col-5">
                    <div class="product">
                        <a href="./p3_Danish.php">
                            <img src="./images/Danish.jpg" alt="Danish">
                            <h4 class="aisle-text">Plain Danishl</h4>
                            <p class="aisle-text">$1.50/unit</p>
                        </a>
                    </div>
                </div>


                <div class="col-5">
                    <div class="product">
                        <a href="./p3_Croissant.php">
                            <img src="./images/Croissant.jpg" alt="Croissant">
                            <h4 class="aisle-text">Croissant</h4>
                            <p class="aisle-text">$1.75/unit</p>
                        </a>
                    </div>
                </div>



            </div>

        </section>


    </main>


    <!---- Footer --->
    <div id="footer"></div>
    <!-End Of Footer->

        <script src="js/script.js"></script>

        <script>
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                    dots.style.display = "inline";
                    btnText.innerHTML = "Read more";
                    moreText.style.display = "none";
                } else {
                    dots.style.display = "none";
                    btnText.innerHTML = "Read less";
                    moreText.style.display = "inline";
                }
            }
        </script>
        <script type="text/javascript">
            document.querySelector(".product-price").innerHTML = updatePrice2(getSavedValue("quantity")); // set the value to this input
            document.getElementById("quantity").value = getSavedValue("quantity");
            //Save the value function - save it to localStorage as (ID, VALUE)
            function saveValue(e) {
                var id = e.id; // get the sender's id to save it . 
                var val = e.value; // get the value. 
                localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override . 
                var unitPrice = parseFloat(document.querySelector(".product-price").innerHTML);
                localStorage.setItem('product-price', unitPrice);
            }

            //get the saved value function - return the value of "v" from localStorage. 
            function getSavedValue(v) {
                if (!localStorage.getItem(v)) {
                    return 0;
                }
                return localStorage.getItem(v);

            }
        </script>
</body>

</html>