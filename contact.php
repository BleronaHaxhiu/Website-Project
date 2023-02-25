<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
                        <li><a href="products.php">Products</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="login.php">Log In/Register</a></li>
                    </ul>
                </nav>
            </div>
    
        </div>
    </div>
    <div class="contact">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>GET IN TOUCH</h3>
            <input type="text" id="name" placeholder="Your Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="phone" placeholder="Phone Number" required>
            <textarea id="message" rows="4" placeholder="How Can We Help You?"></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <script src="Js/contact.js"></script>
    <script>
        // function sendEmail(){
        //     Email.send({
        //         Host : "smtp.gmail.com",
        //         Username : "blendi.kras2003@gmail.com",
        //         Password : "Bbbbbbb2003.",
        //         To : 'blendikras96@gmail.com',
        //         From : document.getElementById('email').value,
        //         Subject : "New Contact Form Enquiry",
        //         Body : "Name: " + document.getElementById("name").value
        //             +"<br> Email:" + document.getElementById("email").value
        //             +"<br> Phone:" + document.getElementById("phone").value
        //             +"<br> Message:" + document.getElementById("message").value
        //     }).then(
        //     message => alert("Message Sent Succesfully!")
        //     );
        //             }
    </script>

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
</body>
</html>