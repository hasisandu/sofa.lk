<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sofa.lk | Contact</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/topbar.css" type="text/css">
    <link rel="stylesheet" href="dist/css/contact.css" type="text/css">
    <link rel="stylesheet" href="dist/css/navigation.css" type="text/css">

    <!--start font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <!--end font-->

    <!-- start Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- End Bootstrap-->
</head>
<body>
<div id="header-wrap" class="fixed-top">
    <?php require 'header.php' ?>
</div>
<?php require 'social.php' ?>

<div style="width: 100%; margin-top: 200px">
    <section id="contact">

        <h1 class="section-header">CONTACT</h1>

        <div class="contact-wrapper">

            <!----------------

            CONTACT PAGE LEFT

            ----------------->

            <form class="form-horizontal" role="form" method="post" action="contact.php">

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="">
                    </div>
                </div>

                <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"></textarea>

                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                    <div class="button">
                        <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                    </div>

                </button>

            </form>

            <!----------------

            CONTACT PAGE RIGHT

            ----------------->

            <div class="direct-contact-container">

                <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Seattle | WA</span></i>
                    </li>

                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                                        href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i>
                    </li>

                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                                        href="mailto:#" title="Send me an email">emailme@gmail.com</a></span></i></li>

                </ul>

                <hr>
                <ul class="social-media-list">
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-github" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#" target="_blank" class="contact-icon">
                            <i class="fa fa-codepen" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <hr>

                <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>

            </div>

        </div>

    </section>


</div>


<?php require 'footer.php' ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/contact.js"></script>
<script src="dist/js/topbar.js"></script>
</body>
</html>