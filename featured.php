<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';

$con = (new DBConnection())->getConnection();
$result = $con->query("SELECT * FROM featured f JOIN product p ON f.status=1 AND f.productid=p.product_id");

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sofa.lk | Featured</title>
    <link rel="stylesheet" href="dist/css/featuredpage.css">
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
    <strong class="ribbon-content">Featured Products</strong>
</h1>

<div class="main-wrap-for-featured-page">
    <div class="row" style="margin: 0px;">

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3 featured-item-detail-wrap">
                <div class="feature-item" id="<?php echo $row['product_id']?>" onclick="openModalForProductData(this.id)">
                    <div class="feature-item-image-aria">
                        <img src="<?php echo $row['image'] . '.jpg' ?>" alt="<?php echo $row['image'] . 'jpg' ?>"
                             style="width: 300px; height: 200px;">
                        <div class="price-detail">
                            <p class="price"
                               style=" font-weight: bold; font-size: 19px; margin-top: 25px; text-align: center; font-family: Roboto; @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap'); color: white;">
                                RS: <?php echo $row['price']?></p>
                        </div>
                    </div>
                    <div class="feature-item-icon-bar collapse">
                        <h5 class="A"><?php echo $row['product_name']?></h5>
                    </div>
                    <div class="feature-item-detail-bar">

                    </div>
                </div>
            </div>


            <?php
        }
        ?>
    </div>
</div>

<?php require 'footer.php' ?>

<!------------------------------------------------------------>


<!-- Button trigger modal -->
<button id="btnmodal1" type="button" class="btn btn-primary collapse" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="width: 100%; height: 250px;">
                    <img style="width: 100%; height: 100%;" class="img-thumbnail" src="https://www.singerslfiles.com/images/products/furniture/SFU_WF-LEGEND-BK-01_zoom.jpg" alt="" id="pimage">
                </div>

                <div id="tbl-div">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Spec</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Modal</td>
                            <td id="modal"></td>
                        </tr>
                        <tr>
                            <td>Size</td>
                            <td id="size"></td>

                        </tr>
                        <tr>
                            <td>Metirial</td>
                            <td id="metirial"></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td id="price"></td>
                        </tr>
                        <tr>
                            <td>Color</td>
                            <td id="color" style="width: 20px; height: 20px;"></td>

                        </tr>
                        <tr>
                            <td>Categery</td>
                            <td id="categery"></td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td id="discount"></td>
                        </tr>
                        <tr>
                            <td>Discription</td>
                            <td id="discription"></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer" id="D"></div>
        </div>
    </div>
</div>

<!------------------------------------------------------------>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/featuredpage.js"></script>
<script src="dist/js/topbar.js"></script>


<script>
    function openModalForProductData(id) {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: 'id=' + id + "&operation=getProductsForModal",
            async: true
        }).done(function (resp) {
            var my = JSON.parse(resp);

            console.log(my);

            $('#pimage').attr("src",my['image']+'.jpg');
            $('#exampleModalLabel').html(my['product_name']);
            $('#modal').html(my['modal']);
            $('#size').html(my['size']);
            $('#metirial').html(my['metirial']);
            $('#price').html(my['price']);
            $('#color').css("background-color",my['color']);
            $('#categery').html(my['categery']);
            $('#discount').html(my['discount']);
            $('#discription').html(my['description']);

            var x='<button type="button" class="btn btn-secondary" style="background-color: #d35400" data-dismiss="modal" id="'+my['product_id']+'" onclick="addtoCart(this.id)">Add to Cart</button>\n' +
                '                <button type="button" class="btn btn-primary" data-dismiss="modal" id="'+my['product_id']+'" onclick="addtoCart(this.id)">Order</button>';
            $('#D').empty().append(x);

            document.getElementById("btnmodal1").click();
        }).fail(function (resp) {
            console.log(resp);
        });

    }

    function addtoCart(id) {
        let cookie = document.cookie;
        var a = cookie.split("useremail=");
        if (a[1] != null) {
            $.ajax({
                url: "api/service/ProductService.php",
                method: "POST",
                data: 'id=' + id + "&email=" + a[1] + "&operation=ADDTOCART",
                async: true
            }).done(function (resp) {
                alert("Added !!!")
            }).fail(function (resp) {
                console.log(resp);
            });
        } else {
            alert('Please Sign-in | Sign Up');
        }
    }
</script>


</body>
</html>