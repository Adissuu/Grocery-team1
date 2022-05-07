<?php include('./assets/php/header.php'); ?>


    <main>


    <!-- Default form register -->
    <form action="assets/php/p6_signup.inc.php" method="post">
    <div>
        
    <div class="login-container">

<h1 class="section-title"><span>Sign up</span></h1>

        <?php
            if(isset($_GET['error'])){  //<!-- Checking the error that we wrote in URL -->
                if($_GET['error'] == 'emptyfields')
                    echo '<p class="text-center text-danger lead">Please fill in the name, email and password fields.</p>';
                else if($_GET['error'] == 'usertaken')
                    echo '<p class="text-center text-danger lead">Email already registered. Please change your email.</p>';
            }
            else if(isset($_GET['signup']))
                if($_GET['signup'] == "success")
                    echo '<p class="text-center text-success lead">Sign up successfull! Click <a href="p5-signin.php">here</a> to login.</p>';
        ?>
    <div class="border rounded  container productwrap shadow-lg mt-3" style=" padding-left: 60px; padding-top: 40px;  padding-bottom: 40px;">
    <input type="text" name="name" placeholder="enter your name"><br>

<input type="text" name="email" placeholder="enter email"> <br>

<input type="password" name="pwd" placeholder="enter password"><br>

<input type="password" name="pwdrepeat" placeholder="enter password again"><br>

<input type="text" name="postal" placeholder="enter your postal code"><br>

<a href="./p5_login.php">I already have an account</a><br>

<a href="#" type="submit" name="operationtype" value="signup" class="login-btn"> Sign up Now </a>
</div>
            <form class="border-class"></form>
   
                <label><input type="checkbox" name="consent" id="consent" value="conditions">
    </label> <span> I agree to the legal stuff </span>
    <br>
    </div><br><button class="btn btn-outline-success" role="submit" name="signup-submit">Create Account</button>
    <p id="demo"></p>
        </div>
    </form>


    </main>


    <!---- Footer --->
    <div id="footer"></div>


    <script src="js/script.js"></script>
</body>

</html>