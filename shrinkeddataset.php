<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/shrinkeddata.css">
</head>
<body>

<div id="shrink-wrap">
    <div class="row" style="margin: 0px; padding: 50px 0 50px 0;">
        <div class="xx col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="data-set">
                <h3 class="txt-for-shrink-item">RECOMMENDED</h3>
                <div class="items-data">

                    <?php
                    $con = (new DBConnection())->getConnection();
                    $result = $con->query("SELECT * FROM reccomended r JOIN product p ON r.status=1 AND r.productid=p.product_id");
                    while ($row1 = $result->fetch_assoc()) {
                        ?>
                        <div class="item row">
                            <div class="image-content" id="<?php echo $row1['product_id']?>" onclick="loadmodalforshrink(this.id)">
                                <img src="<?php echo $row1['image'].'.jpg'?>" class="img-thumbnail"
                                     style="width: 150px; height: 100px;">
                            </div>
                            <div class="image-detail-content">
                                <label class="sofa-name"><?php echo $row1['product_name']?></label><br>
                                <h6 class="price-txt">RS. <?php echo $row1['price']?></h6>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="xx col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="data-set">
                <h3 class="txt-for-shrink-item">BEST SELLERS</h3>
                <div class="items-data">


                    <?php
                    $con = (new DBConnection())->getConnection();
                    $result = $con->query("SELECT * FROM product ORDER BY product_id DESC LIMIT 20");
                    while ($row1 = $result->fetch_assoc()) {
                        ?>
                        <div class="item row">
                            <div class="image-content" id="<?php echo $row1['product_id']?>" onclick="loadmodalforshrink(this.id)">
                                <img src="<?php echo $row1['image'].'.jpg'?>" class="img-thumbnail"
                                     style="width: 150px; height: 100px;">
                            </div>
                            <div class="image-detail-content">
                                <label class="sofa-name"><?php echo $row1['product_name']?></label><br>
                                <h6 class="price-txt">RS. <?php echo $row1['price']?></h6>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="xx col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="data-set">
                <h3 class="txt-for-shrink-item">FEATURED</h3>
                <div class="items-data">


                    <?php
                    $con = (new DBConnection())->getConnection();
                    $result = $con->query("SELECT * FROM featured r JOIN product p ON r.status=1 AND r.productid=p.product_id");
                    while ($row1 = $result->fetch_assoc()) {
                        ?>
                        <div class="item row">
                            <div class="image-content" id="<?php echo $row1['product_id']?>" onclick="loadmodalforshrink(this.id)">
                                <img src="<?php echo $row1['image'].'.jpg'?>" class="img-thumbnail"
                                     style="width: 150px; height: 100px;">
                            </div>
                            <div class="image-detail-content">
                                <label class="sofa-name"><?php echo $row1['product_name']?></label><br>
                                <h6 class="price-txt">RS. <?php echo $row1['price']?></h6>
                            </div>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="dist/js/products.js"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/topbar.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>


<script>
    function loadmodalforshrink(id) {
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
            $('#A').empty().append(x);

            document.getElementById("btnmodal1").click();
        }).fail(function (resp) {
            console.log(resp);
        });

    }
</script>

</body>
</html>