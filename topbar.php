<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--<div class="py-1 bg-black">-->
<!--    <div class="container">-->
<!--        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">-->
<!--            <div class="col-lg-12 d-block">-->
<!--                <div class="row d-flex">-->
<!--                    <div class="col-md pr-4 d-flex topper align-items-center">-->
<!--                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><i-->
<!--                                    class="fas fa-phone"></i></div>-->
<!--                        <span class="text tx">+ 1235 2355 98</span>-->
<!--                    </div>-->
<!--                    <div class="col-md pr-4 d-flex topper align-items-center">-->
<!--                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><i-->
<!--                                    class="far fa-envelope"></i></div>-->
<!--                        <span class="text tx">Sofalkinfo@email.com</span>-->
<!--                    </div>-->
<!--                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">-->
<!--                        <span class="text tx t"><i class="far fa-user"></i>&nbsp;&nbsp;Login</span>-->
<!--                        <span class="text tx"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Register</span>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<!--start modal-->
<header role="banner">
    <div id="cd-logo"><a href="#0"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/cd-logo_1.svg"
                                        alt="Logo"></a></div>

    <nav class="main-nav">
        <ul>
            <!-- inser more links here -->
            <li><a class="cd-signin" href="#0">Sign in</a></li>
            <li><a class="cd-signup" href="#0">Sign up</a></li>
        </ul>
    </nav>
</header>

<div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
    <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
        <ul class="cd-switcher">
            <li><a href="#0">Sign in</a></li>
            <li><a href="#0">New account</a></li>
        </ul>

        <div id="cd-login"> <!-- log in form -->
            <form class="cd-form" id="idsigninform">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="signin-email">E-mail</label>
                    <input name="email" class="full-width has-padding has-border" id="signin-email" type="email"
                           placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signin-password">Password</label>
                    <input name="password" class="full-width has-padding has-border" id="signin-password" type="text"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="remember-me" checked>
                    <label for="remember-me">Remember me</label>
                </p>

                <p class="fieldset">
                    <input class="full-width" type="button" value="Login" onclick="sigin()">
                </p>
            </form>

            <!-- <p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>-->
            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-login -->

        <div id="cd-signup"> <!-- sign up form -->
            <form class="cd-form" id="idsignupform">

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-email">E-mail</label>
                    <input name="email" class="full-width has-padding has-border" id="signup-email" type="email"
                           placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>


                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-name">Name</label>
                    <input name="name" class="full-width has-padding has-border" id="signup-name" type="text"
                           placeholder="Name">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-address">Name</label>
                    <input name="address" class="full-width has-padding has-border" id="signup-address" type="text"
                           placeholder="Address">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-email" for="signup-contact">Contact</label>
                    <input name="contact" class="full-width has-padding has-border" id="signup-contact" type="text"
                           placeholder="Contact">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <label class="image-replace cd-password" for="signup-password">Password</label>
                    <input name="password" class="full-width has-padding has-border" id="signup-password" type="text"
                           placeholder="Password">
                    <a href="#0" class="hide-password">Hide</a>
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input type="checkbox" id="accept-terms">
                    <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                </p>

                <p class="fieldset">
                    <input style="background-color: #1e90ff" class="full-width has-padding" type="button"
                           value="Create account" onclick="signup()">
                </p>
            </form>

            <!-- <a href="#0" class="cd-close-form">Close</a> -->
        </div> <!-- cd-signup -->

        <div id="cd-reset-password"> <!-- reset password form -->
            <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to
                create a new password.</p>

            <form class="cd-form">
                <p class="fieldset">
                    <label class="image-replace cd-email" for="reset-email">E-mail</label>
                    <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                    <span class="cd-error-message">Error message here!</span>
                </p>

                <p class="fieldset">
                    <input class="full-width has-padding" type="submit" value="Reset password">
                </p>
            </form>

            <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
        </div> <!-- cd-reset-password -->
        <a href="#0" class="cd-close-form">Close</a>
    </div> <!-- cd-user-modal-container -->
</div> <!-- cd-user-modal -->

<!--End modal-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>

<script>

    function signup() {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: $('#idsignupform').serialize() + "&operation=SIGNUP",
            async: true
        }).done(function (resp) {
            alert("You are In");
            window.location.replace("index.php");
        }).fail(function (resp) {
            console.log(resp);
        });
    }

    function sigin() {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: $('#idsigninform').serialize() + "&operation=SIGNIN",
            async: true
        }).done(function (resp) {
            if (resp!='NO_DATA'){
                alert('Welcome');
                document.cookie = "useremail="+resp;
                window.location.replace("index.php");

            }else{
                document.cookie = "useremail=NO_DATA";
                alert('Try Again....');
            }
        }).fail(function (resp) {
            alert(resp);
        });
    }

</script>


</body>
</html>