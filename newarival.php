<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';
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
    <link rel="stylesheet" href="dist/css/newarival.css">
    <title>sdf</title>

</head>
<body>

<h1 id="new-arrival-txt">New Arrival</h1>

<div class="container">
    <div class="row">
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
            <div class="MultiCarousel-inner">
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>

                    <div class="item" id="<?php echo $row['product_id'] ?>" onclick="openModal(this.id)">
                        <div class="pad15">
                            <img src="<?php echo $row['image'] . '.jpg' ?>" class="img-thumbnail"
                                 alt="<?php echo $row['image'] . '.jpg' ?>"
                                 style="width: 180px; height: 130px; position: relative;">
                            <!--                            <p class="lead" style="position: relative;">Multi Item Carousel</p>-->
                            <!--                            <p>₹ 1</p>-->
                            <p style="position: absolute; bottom: 5px; padding: 5px; 5px 5px 5px; font-family: Arial; font-weight: bold; border-top-right-radius: 5px; border-bottom-right-radius: 5px; background-color: rgba(192, 57, 43,0.5)"
                               class="badge-danger"><?php echo $row['price'] ?></p>
                            <p><?php echo $row['discount'] ?> /= off</p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
        </div>
    </div>
</div>


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
            <div class="modal-footer" id="A">

            </div>
        </div>
    </div>
</div>

<!------------------------------------------------------------>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/js/newarival.js" type="application/javascript "></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/topbar.js"></script>

<script>

    function A() {
alert(5);
    }

 function openModal(id) {
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


    function addtoCart(id) {
        let cookie = document.cookie;
        var a = cookie.split("useremail=");
        if (a[1] != null) {
            $.ajax({
                url: "api/service/ProductService.php",
                method: "POST",
                data: 'id=' + id +"&email="+a[1] +"&operation=ADDTOCART",
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