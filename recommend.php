<?php

require_once __DIR__ . '/api/dbconnection/DBConnection.php';

$con = (new DBConnection())->getConnection();

$result1 = $con->query("SELECT productid FROM reccomended  LIMIT 5");

$arr = array();
while ($row = $result1->fetch_assoc()) {
    $arr[] = $row['productid'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dist/css/recommend.css">
</head>
<body>

<h1 id="recommend-txt">Recommended For You</h1>

<div class="container">
    <div class="row" style="margin: 0px; margin-bottom: 10px;">
        <div class="col-md-7">
            <div class="intern-div">
                <figure class="snip1477">
                    <?php
                    $result2 = $con->query("SELECT * FROM product WHERE product_id={$arr[0]}");
                    while ($row1 = $result2->fetch_assoc()) {
                    ?>
                    <img src="<?php echo $row1['image'] . '.jpg' ?>" alt="<?php echo $row1['image'] ?>">


                    <div class="title">
                        <div>
                            <h2><?php echo $row1['product_name'] ?></h2>
                            <h4><?php echo $row1['price'] ?></h4>
                        </div>
                    </div>
                    <figcaption>
                        <p><?php echo $row1['description'] ?></p>
                    </figcaption>
                    <a href="#"></a>
                </figure>


                <?php
                }
                ?>
            </div>
        </div>
        <div class="col-md-5">
            <div class="intern-div">
                <figure class="snip1477">

                    <?php
                    $result2 = $con->query("SELECT * FROM product WHERE product_id={$arr[1]}");
                    while ($row2 = $result2->fetch_assoc()) {
                    ?>
                    <img src="<?php echo $row2['image'] . '.jpg' ?>" alt="<?php echo $row1['image'] ?>">


                    <div class="title">
                        <div>
                            <h2><?php echo $row2['product_name'] ?></h2>
                            <h4><?php echo $row2['price'] ?></h4>
                        </div>
                    </div>
                    <figcaption>
                        <p><?php echo $row2['description'] ?></p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


    <div class="row" style="margin: 0px">
        <div class="col-md-4">
            <div class="intern-div">
                <figure class="snip1477">

                    <?php
                    $result2 = $con->query("SELECT * FROM product WHERE product_id={$arr[2]}");
                    while ($row3 = $result2->fetch_assoc()) {
                    ?>
                    <img src="<?php echo $row3['image'] . '.jpg' ?>" alt="<?php echo $row2['image'] ?>">


                    <div class="title">
                        <div>
                            <h2><?php echo $row3['product_name'] ?></h2>
                            <h4><?php echo $row3['price'] ?></h4>
                        </div>
                    </div>
                    <figcaption>
                        <p><?php echo $row3['description'] ?></p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <?php
                }

                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="intern-div">
                <figure class="snip1477">


                    <?php
                    $result2 = $con->query("SELECT * FROM product WHERE product_id={$arr[3]}");
                    while ($row4 = $result2->fetch_assoc()) {
                    ?>
                    <img src="<?php echo $row4['image'] . '.jpg' ?>" alt="<?php echo $row4['image'] ?>">

                    <div class="title">
                        <div>
                            <h2><?php echo $row4['product_name'] ?></h2>
                            <h4><?php echo $row4['price'] ?></h4>
                        </div>
                    </div>
                    <figcaption>
                        <p><?php echo $row4['description'] ?></p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <?php
                }

                ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="intern-div">
                <figure class="snip1477">


                    <?php
                    $result2 = $con->query("SELECT * FROM product WHERE product_id={$arr[4]}");
                    while ($row5 = $result2->fetch_assoc()) {
                    ?>
                    <img src="<?php echo $row5['image'] . '.jpg' ?>" alt="<?php echo $row5['image'] ?>">


                    <div class="title">
                        <div>
                            <h2><?php echo $row5['product_name'] ?></h2>
                            <h4><?php echo $row5['price'] ?></h4>
                        </div>
                    </div>
                    <figcaption>
                        <p><?php echo $row5['description'] ?></p>
                    </figcaption>
                    <a href="#"></a>
                </figure>
                <?php
                }

                ?>
            </div>
        </div>
    </div>
</div>


<script src="dist/js/recommend.js" type="application/javascript"></script>
<script src="https://kit.fontawesome.com/201c80a6f8.js"></script>
<script src="dist/js/topbar.js"></script>

</body>
</html>