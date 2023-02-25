<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="./images/logo2.png" width="120px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="login.php">Log In/Register</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>


    <div class="categories">
        <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
                <select>
                    <option>Default Sorting</option>
                </select>
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="login.php"><img src="./images/c1.jpeg"></a>
                    <a href="login.php">
                        <h4>Faux Shearling Overall</h4>
                    </a>
                    <p>€ 15.00</p>
                </div>
                <div class="col-2">
                    <a href="login.php"><img src="./images/c2.jpeg"></a>
                    <a href="login.php">
                        <h4>3-piece Cotton Set</h4>
                    </a>
                    <p>€ 9.99</p>
                </div>
                <div class="col-1">
                    <a href="login.php"><img src="./images/c3.jpeg"></a>
                    <a href="login.php">
                        <h4>3-pack Terry Socks</h4>
                    </a>
                    <p>€ 8.99</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="login.php"> <img src="./images/c4.jpeg"></a>
                    <a href="login.php">
                        <h4>5-pack Wrapover Bodysuits</h4>
                    </a>
                    <p>€ 29.99</p>
                </div>
                <div class="col-2">
                    <a href="login.php"> <img src="./images/c5.jpeg"></a>
                    <a href="login.php">
                        <h4>Rib-knit Sweater</h4>
                    </a>
                    <p>€ 19.99</p>
                </div>
                <div class="col-1">
                    <a href="login.php"> <img src="./images/c6.jpeg"></a>
                    <a href="login.php">
                        <h4>2-piece Bodysuit and Shorts Set</h4>
                    </a>
                    <p>€ 12.75</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <a href="login.php"> <img src="./images/c7.jpeg"></a>
                    <a href="login.php">
                        <h4>Top and Pants</h4>
                    </a>
                    <p>€ 29.74</p>
                </div>
                <div class="col-2">
                    <a href="login.php"> <img src="./images/c8.jpeg"></a>
                    <a href="login.php">
                        <h4>3-piece Cotton Set</h4>
                    </a>
                    <p>€ 8.49</p>
                </div>
                <div class="col-1">
                    <a href="login.php"> <img src="./images/c9.jpeg"></a>
                    <a href="login.php">
                        <h4>Tulle-skirt bodysuit dress</h4>
                    </a>
                    <p>€ 14.99</p>
                </div>

            </div>
            <div class="row">
                <div class="col-3">
                    <a href="login.php"> <img src="./images/c10.jpeg"></a>
                    <a href="login.php">
                        <h4>Slip-on Shoes</h4>
                    </a>
                    <p>€ 6.99</p>
                </div>
                <div class="col-2">
                    <a href="login.php"> <img src="./images/c12.jpeg"></a>
                    <a href="login.php">
                        <h4>Shirt and Bow Tie</h4>
                    </a>
                    <p>€ 13.39</p>
                </div>
                <div class="col-1">
                    <a href="login.php"> <img src="./images/c11.jpeg"></a>
                    <a href="login.php">
                        <h4>Soft Teddy Fabric Slippers</h4>
                    </a>
                    <p>€ 8.75</p>
                </div>
            </div>

            <div class="page-btn">
                <span>1</span>
                <a href="products-page2.php"><span>2 </span></a>
                <a href="products-page2.php"><span>&#8594;</span></a>
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
                    <p>Being created for the kids, the items from these shops correspond to the <br>highest quality
                        standards
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

</body>

</html>