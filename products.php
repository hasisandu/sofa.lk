<?php
require_once __DIR__.'/api/dbconnection/DBConnection.php';
$con = (new DBConnection())->getConnection();
$result = $con->query("SELECT * FROM product WHERE status=1");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/products.css">
</head>
<body>
<h1 id="feature-product">Featured Products</h1>
<div id="product-set" class="jumbotron">

    <div id="filter-aria">
        <div class="row" id="filter-set">
            <div class="col-2"><span>ALL <sup>40</sup></span></div>
            <div class="col-2"><span>LIVING ROOM <sup>40</sup></span></div>
            <div class="col-2"><span>BED ROOM <sup>40</sup></span></div>
            <div class="col-2"><span>OFFICE <sup>40</sup></span></div>
            <div class="col-2" id="filter-btn">Filter</div>
        </div>
    </div>
    <div id="filter-component" class="collapse">

    </div>

    <div class="row">

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="item-wrap col-md-6 col-lg-4 col-xl-3">
                <div id="<?php echo $row['product_id'] ?>" class="items" onclick="openModalForProductData(this.id)">
                    <img src="<?php echo $row['image'] . '.jpg' ?>" class="img-thumbnail"
                         style="width: 300px; height: 200px;">
                    <p style="text-align: center; font-weight: bold;"><?php echo $row['product_name'] ?></p>
                    <p style="text-align: center; "><?php echo 'RS ' . $row['price'] ?></p>
                </div>
            </div>
            <?php
        }
        ?>


    </div>
</div>


<!------------------------------------------------------------>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/js/newarival.js" type="application/javascript "></script>
<script src="dist/js/products.js"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/topbar.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>


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

            $('#pimage').attr("src", my['image'] + '.jpg');
            $('#exampleModalLabel').html(my['product_name']);
            $('#modal').html(my['modal']);
            $('#size').html(my['size']);
            $('#metirial').html(my['metirial']);
            $('#price').html(my['price']);
            $('#color').css("background-color", my['color']);
            $('#categery').html(my['categery']);
            $('#discount').html(my['discount']);
            $('#discription').html(my['description']);

            var x = '<button type="button" class="btn btn-secondary" style="background-color: #d35400" data-dismiss="modal" id="' + my['product_id'] + '" onclick="addtoCart(this.id)">Add to Cart</button>\n' +
                '                <button type="button" class="btn btn-primary" data-dismiss="modal" id="' + my['product_id'] + '" onclick="addtoCart(this.id)">Order</button>';
            $('#A').empty().append(x);

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