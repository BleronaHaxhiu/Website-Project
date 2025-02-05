<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Little Babies Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.php"><img src="./images/logo2.png" width="120px"></a>
                </a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="login.php">Log In/Register</a></li>
                    <img src="./images/menu-icon.png" class="menu-icon" onclick="menutoggle()">
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col2">
                <h1>With Every Baby A New<br> A Sun Rises!</h1>
                <a href="products.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col2">
                <!-- <img src="./images/png.png"> -->

                <!-- <img class="col2" id="imazhi" src="" alt=""> -->
                <img id="imazhi" src=""> 
                <!-- <script src="Js/slider.js"></script> -->
                <!-- <img id="imazhi" src=""> -->
                <!-- <script>
                    krijoSlider();
                </script> -->

            </div>
        </div>
    </div>
</div>
   

<div class="categories">
    <div class="small-container">
        <h2>Latest Products</h2>
        <div class="row">
            <div class="col-3">
                <a href="login.php"><img src="./images/c1.jpeg"></a>
                <a href="login.php"><h4>Faux Shearling Overall</h4></a>
                <p>€ 15.00</p>
            </div>
            <div class="col-2">
                <a href="login.php"><img src="./images/c2.jpeg"></a>
                <a href="login.php"><h4>3-piece Cotton Set</h4></a>
                <p>€ 9.99</p>
            </div>
            <div class="col-1">
                <a href="login.php"><img src="./images/c3.jpeg"></a>
                <a href="login.php"><h4>3-pack Terry Socks</h4></a>
                <p>€ 8.99</p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--  Footer -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS mobile phone.</p>
                    <div class="app-logo">
                        <img src="./images/playstore.png" width="100px">
                        <img src="./images/appstore.png" width="100px">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./images/logo2.png" width="150px">
                    <p>Being created for the kids, the items from these shops correspond to the <br>highest quality standards 
                        and are marked with the pleasant to eyes look.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                   <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                   </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                   <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                   </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Sweet Little Babies Store</p>
        </div>
    </div>

    <script src="Js/slider.js"></script>

    
    <!-- ------ js for toggle menu ------------ -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
        }
    </script>

</body>
</html>