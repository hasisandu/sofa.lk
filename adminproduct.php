<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';
$conn = (new DBConnection())->getConnection();

$sql = "SELECT * FROM product";
$result = $conn->query($sql);


?>


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
<!--start Product-->
<div style="background-color: #2980b9; margin-top: 200px;">
    <h2 style="color: white; font-weight: bold; text-align: center">Product Aria</h2>
</div>
<form id="product_form">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="txtpid">Product Id</label>
                <input readonly type="text" name="productid" class="form-control" id="txtpid"
                       aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-name">Product Name</label>
                <input type="text" name="productname" class="form-control" id="product-name"
                       aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-modal">Product Modal</label>
                <input type="text" name="modal" class="form-control" id="product-modal" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-size">Size</label>
                <input type="text" name="size" class="form-control" id="product-size" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-material">Material</label>
                <input type="text" name="material" class="form-control" id="product-material"
                       aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-price">Price</label>
                <input type="text" name="price" class="form-control" id="product-price" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-color">Color</label>
                <input type="color" name="color" class="form-control" id="product-color" aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="imgloc">Image Location</label>
                <input type="text" name="location" class="form-control" id="imgloc" readonly
                       aria-describedby="emailHelp">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-status">Status</label>
                <select class="form-control" name="status" id="product-status">
                    <option name="active">Active</option>
                    <option name="deactivate">DeActive</option>

                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="product-type">Category</label>
                <select name="categery" class="form-control" id="product-type"">
                    <option name="active">Living room</option>
                    <option name="deactivate">Siting room</option>

                </select>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="form-group">
                <label for="discribe">Description</label>
                <textarea name="description" class="form-control" id="discribe" rows="3"></textarea>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="discount">Discount</label>
                <input type="text" name="discount" class="form-control" id="discount" aria-describedby="emailHelp">
            </div>
        </div>

    </div>
    <br>
    <button type="button" class="btn btn-primary" id="btn-product-save">Save</button>
    <button type="button" class="btn btn-warning" id="btn-product-update">Update</button>
</form>
<br>

<!--<div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Products Search Here" aria-label="Recipient's username"
           aria-describedby="basic-addon2">
    <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">Search Product</span>
    </div>
</div>-->
<hr>

<div class="product-set-admin">
    <div class="row">

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-sm-4">
                <div class="item">
                    <img src="<?php echo $row['image'] ?>.jpg"
                         alt="Product Image for <?php echo $row['product_id'] ?>">
                    <div class="detail">
                        <h4>Product Id</h4>
                        <h6><?php echo $row['product_id'] ?></h6>
                        <hr>
                        <h4>Product Name</h4>
                        <h6><?php echo $row['product_name'] ?></h6>
                        <hr>
                        <h4>Product Modal</h4>
                        <h6><?php echo $row['modal'] ?></h6>
                        <hr>
                        <h4>Product Size</h4>
                        <h6><?php echo $row['size'] ?></h6>
                        <hr>
                        <h4>Product Material</h4>
                        <h6><?php echo $row['metirial'] ?></h6>
                        <hr>
                        <h4>Product Price</h4>
                        <h6><?php echo $row['price'] ?></h6>
                        <hr>
                        <h4>Product Color</h4>
                        <h6 style="background-color: <?php echo $row['color'] ?>; height: 20px;"></h6>
                        <hr>
                        <h4>Product Category</h4>
                        <h6><?php echo $row['categery'] ?></h6>
                        <hr>
                        <h4>Product Discount</h4>
                        <h6><?php echo $row['discount'] ?></h6>
                        <hr>
                        <input type="button" class="btn btn-danger" id="<?php echo $row['product_id'] ?>" value="Delete"
                               onclick="A(this.id)">

                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>

<script>
    function A(val) {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: "id=" + val + "&operation=DeletePRODUCTS",
            async: true
        }).done(function (resp) {
            alert("Deleted");
        }).fail(function (resp) {
            console.log(resp);
        });
    }
</script>
</body>
</html>