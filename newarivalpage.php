<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';
$con = (new DBConnection())->getConnection();
$result=$con->query("SELECT * FROM product WHERE status=1 ORDER BY product_id DESC");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sofa.lk | New-Arrival</title>
    <link rel="stylesheet" href="dist/css/newarivalpage.css">
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="dist/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="dist/css/topbar.css" type="text/css">

    <!--start font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
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
<h1 class="ribbon" style="margin-top: 180px;">
    <strong class="ribbon-content">New Arrivals</strong>
</h1>


<div id="new-arrival-page-wrap">
    <div class="row" style="margin: 0px auto;">

        <?php
        while ($row=$result->fetch_assoc()) {
            ?>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 featured-item-detail-wrap">
                <div class="demo">
                    <figure class="imghvr-push-down">
                        <img src="<?php echo $row['image'].'.jpg'?>" alt=" image not found <?php echo $row['image'].'jpg'?>" style="width: 300px; height: 200px;">
                        <figcaption>
                            <h3><?php echo $row['product_name']?></h3>
                            <p>
                                Material: <?php echo $row['metirial']?>:&nbsp;
                                <br>
                                Price:&nbsp;<?php echo $row['price']?>
                            </p>
                        </figcaption>
                        <a href=""></a>
                    </figure>
                </div>
            </div>

            <?
        }
        ?>

    </div>
</div>

<?php require 'footer.php' ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/newarivalpage.js"></script>
<script src="dist/js/topbar.js"></script>
</body>
</html>