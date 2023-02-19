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
                    <a href="index.html"><img src="./images/logo2.png" width="120px"></a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="">Log In/Register</a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

    <!-- ------account------------- -->

    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/png.png" width="800px">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">LogIn</span>
                            <span onclick="register()">Register</span>
                            <hr id="indicator">
                        </div>
                        <form id="LoginForm">
                            <input type="email" placeholder="Email" id="email">
                            <input type="password" placeholder="Password" id="password">
                            <p class="error">!</p>
                            <button type="button" class="btn" id="submit">Login</button>
                            <a href="">Forgot password</a>
                        </form>

                        <form id="RegisterForm">
                            <input type="text" placeholder="Username" id="username">
                            <input type="email" placeholder="Email" id="email2">
                            <input type="password" placeholder="Password" id="password2">
                            <p class="error2"></p>

                            <button type="button" class="btn" id="submit2">Register</button>
                        </form>
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


    <script src="./Js/login.js"></script>
</body>

</html>