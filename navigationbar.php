<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>









<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php" id="logo-name">Sofa.LK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto" id="fff">
                <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="featured.php">Featured</a></li>
                <li class="nav-item"><a class="nav-link" href="newarivalpage.php">New Arrival</a></li>
                <li class="nav-item"><a class="nav-link" href="livingroom.php">Living Room</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">My Account</a>
                    <div id="sub-nav" class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#" onclick="loadCart()">Cart</a>
                        <a class="dropdown-item" href="#" onclick="loadOrderHystory()">Orders History</a>
                    </div>
                </li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item cta cta-colored"><a href="about.php" class="nav-link"><span
                                class="icon-shopping_cart"></span>About Us</a></li>

            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>

<script>
    function loadCart() {
        let cookie = document.cookie;
        var a = cookie.split("useremail=");
        if (a[1] != null) {
            document.location.replace('cart.php');
        } else {
            alert('Please Sign-in | Sign Up');
        }
    }

    function loadOrderHystory() {
        let cookie = document.cookie;
        var a = cookie.split("useremail=");
        if (a[1] != null) {
            document.location.replace('orderhistory.php');
        } else {
            alert('Please Sign-in | Sign Up');
        }
    }
</script>

</body>
</html>