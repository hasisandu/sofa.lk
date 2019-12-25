<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';

$con = (new DBConnection())->getConnection();
$result = $con->query("SELECT * FROM featured");
$result2 = $con->query("SELECT product_id FROM product");
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
<!--start 0714615987 recommend-->
<div style="background-color: #2980b9; margin-top: 200px;">
    <h2 style="color: white; font-weight: bold; text-align: center">Featured-aria</h2>
</div>
<form id="featuredproduct">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Product Id</label>
        <select name="productid" class="form-control" id="exampleFormControlSelect1">
            <?php
            while ($row = $result2->fetch_assoc()) {
                ?>
                <option><?php echo $row['product_id'] ?></option>
                <?php
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option name="active">Active</option>
            <option name="deactivate">DeActive</option>

        </select>
    </div>
    <button type="button" class="btn btn-primary" id="btnsavefeatured" onclick="saveFeatured()">Save</button>
    <button type="button" class="btn btn-warning" onclick="updateFeatured()">Update</button>
</form>
<br>

<div style="height: 250px; overflow: auto;">
    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Product Id</th>
            <th scope="col">Status</th>
            <th scope="col">Operate</th>
        </tr>
        </thead>
        <tbody>

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <th scope="row"><?php echo $row['productid'] ?></th>
                <td>
                    <?php
                    if ($row['status'] == 0) {
                        echo "DeActive";
                    } else {
                        echo "Active";
                    }

                    ?>
                </td>
                <td><img id="<?php echo $row['productid'] ?>" class="dltbtn" style="width: 30px; height: 30px;"
                         src="dist/images/delete.png" alt="delete" onclick="deleteFetaured(this.id)">
                </td>

            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>


</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="dist/controller/productadmincontroller.js"></script>

<script>
    function saveFeatured() {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: $('#featuredproduct').serialize() + "&operation=SAVEFEATURED",
            async: true
        }).done(function (resp) {
            alert("Saved");
        }).fail(function (resp) {
            console.log(resp);
        });
    }

    function updateFeatured() {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: $('#featuredproduct').serialize() + "&operation=UPDATEFEATURED",
            async: true
        }).done(function (resp) {
            alert("Updated");
        }).fail(function (resp) {
            console.log(resp);
        });
    }

    function deleteFetaured(value) {
        $.ajax({
            url: "api/service/ProductService.php",
            method: "POST",
            data: "id=" + value + "&operation=DELETEFEATURED",
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
