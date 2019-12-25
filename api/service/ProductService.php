<?php

require_once __DIR__ . '/../dbconnection/DBConnection.php';
$conn = (new DBConnection())->getConnection();
require_once __DIR__ . '/../business/impl/ProductBoIMPL.php';
require_once __DIR__ . '/../business/impl/QueryBoImpl.php';
require_once __DIR__ . '/../core/ProductDTO.php';


$productbo = new ProductBoIMPL();
$querybo = new QueryBoImpl();
$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case "POST":
        $operation = $_POST["operation"];
        switch ($operation) {
            case "ADDPRODUCT":
                ob_start();
                ob_end_clean();

                /* print '-'.$_POST["productid"];
                 print '-'.$prductname = $_POST["productname"];
                 print '-'.$prductmdal = $_POST["modal"];
                 print '-'.$prductsize = $_POST["size"];
                 print '-'.$prductmatirial = $_POST["material"];
                 print '-'.$prductprice = $_POST["price"];
                 print '-'.$prductcolor = $_POST["color"];
                 print '-'.$prductimage = $_POST["location"];
                 print '-'.$prductstatus = $_POST["status"];
                 print '-'.$prductcatagery = $_POST["categery"];
                 print '-'.$prductdescription = $_POST["description"];
                 print '-'.$prductdiscount = $_POST["discount"];*/


                $prductid = $_POST["productid"];
                $prductname = $_POST["productname"];
                $prductmdal = $_POST["modal"];
                $prductsize = $_POST["size"];
                $prductmatirial = $_POST["material"];
                $prductprice = $_POST["price"];
                $prductcolor = $_POST["color"];
                $prductimage = $_POST["location"];
                $prductstatus = $_POST["status"];
                $prductcatagery = $_POST["categery"];
                $prductdescription = $_POST["description"];
                $prductdiscount = $_POST["discount"];

                echo $isAdded = $productbo->saveProduct(new ProductDTO(
                    $prductid,
                    $prductname,
                    $prductmdal,
                    $prductsize,
                    $prductmatirial,
                    $prductprice,
                    $prductcolor,
                    $prductimage,
                    $prductstatus,
                    $prductcatagery,
                    $prductdescription,
                    $prductdiscount
                ));
                break;

            case "GETID":
                ob_start();
                ob_end_clean();
                echo $productbo->getID();
                break;
            case "UPDATEPRODUCT":

                ob_start();
                ob_end_clean();

                $prductid = $_POST["productid"];
                $prductname = $_POST["productname"];
                $prductmdal = $_POST["modal"];
                $prductsize = $_POST["size"];
                $prductmatirial = $_POST["material"];
                $prductprice = $_POST["price"];
                $prductcolor = $_POST["color"];
                $prductimage = $_POST["location"];
                $prductstatus = $_POST["status"];
                $prductcatagery = $_POST["categery"];
                $prductdescription = $_POST["description"];
                $prductdiscount = $_POST["discount"];

                echo $isAdded = $productbo->updateProduct(new ProductDTO(
                    $prductid,
                    $prductname,
                    $prductmdal,
                    $prductsize,
                    $prductmatirial,
                    $prductprice,
                    $prductcolor,
                    $prductimage,
                    $prductstatus,
                    $prductcatagery,
                    $prductdescription,
                    $prductdiscount
                ));

                break;

            case "GETALLPRODUCTS":
                $conn = (new DBConnection())->getConnection();
                echo $productbo->getAllProducts();
                break;

            case "ADDRECCOMEND":
                $conn = (new DBConnection())->getConnection();
                ob_start();
                ob_end_clean();
                $prductid = $_POST["productid"];
                $prductstatus = $_POST["status"];

                $status = 0;
                print $prductstatus;
                if ($prductstatus == "Active") {
                    $status = 1;
                }

                echo $isAdded = $conn->query("INSERT INTO reccomended VALUES('{$prductid}','{$status}')");
                break;

            case "DeletePRODUCTS":
                $conn = (new DBConnection())->getConnection();
                $id = $_POST["id"];
                echo $isdeleted = $conn->query("DELETE FROM product WHERE product_id={$id}");
                break;

            case "SAVEFEATURED":
                $prductid = $_POST["productid"];
                $prductstatus = $_POST["status"];

                $status = 0;

                if ($prductstatus == "Active") {
                    $status = 1;
                }
                $conn = (new DBConnection())->getConnection();
                echo $isAdded = $conn->query("INSERT INTO featured VALUES('{$prductid}','{$status}')");
                break;

            case "UPDATEFEATURED":
                $prductid = $_POST["productid"];
                $prductstatus = $_POST["status"];

                $status = 0;

                if ($prductstatus == "Active") {
                    $status = 1;
                }
                $conn = (new DBConnection())->getConnection();
                echo $isAdded = $conn->query("UPDATE featured SET status={$status} WHERE productid={$prductid}");
                break;
            case "DELETEFEATURED":
                $conn = (new DBConnection())->getConnection();
                $id = $_POST["id"];
                echo $isdeleted = $conn->query("DELETE FROM featured WHERE productid={$id}");
                break;
            case "SIGNUP":
                $conn = (new DBConnection())->getConnection();
                $cusid = $_POST['email'];
                $name = $_POST['name'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $password = $_POST['password'];

                print $cusid;
                print $name;
                print $address;
                print $contact;
                print $password;

                echo $isdeleted = $conn->query("INSERT INTO customer VALUES('{$cusid}','{$name}','{$address}','{$contact}','{$password}')");
                break;
            case "SIGNIN":
                $conn = (new DBConnection())->getConnection();
                $cusid = $_POST['email'];
                $password = $_POST['password'];
                $isdeleted = $conn->query("SELECT * FROM customer WHERE customer_id='{$cusid}' AND password='{$password}'");
                if ($row = $isdeleted->fetch_assoc()) {
                    echo $row['customer_id'];
                    return;
                }
                echo 'NO_DATA';
                break;

            case "getProductsForModal":
                $conn = (new DBConnection())->getConnection();
                $pid = $_POST['id'];
                $isdeleted = $conn->query("SELECT * FROM product WHERE product_id={$pid}");
                if ($row = $isdeleted->fetch_assoc()) {
                    echo json_encode(array(
                        'product_id' => $row['product_id'],
                        'product_name' => $row['product_name'],
                        'modal' => $row['modal'],
                        'size' => $row['size'],
                        'metirial' => $row['metirial'],
                        'price' => $row['price'],
                        'color' => $row['color'],
                        'image' => $row['image'],
                        'status' => $row['status'],
                        'categery' => $row['categery'],
                        'description' => $row['description'],
                        'discount' => $row['discount'],

                    ));
                    return;
                }
                break;

            case "ADDTOCART":
                $conn = (new DBConnection())->getConnection();
                $id = $_POST["id"];
                $email = $_POST["email"];
                echo $isAdded = $conn->query("INSERT INTO cart VALUES('{$id}','{$email}')");
                break;

            case "DELETEFROMCART":
                $conn = (new DBConnection())->getConnection();
                $id = $_POST["id"];
                $email = $_POST["email"];
                echo $isAdded = $conn->query("DELETE FROM cart WHERE product_id={$id} AND customer_id='{$email}'");
                break;
        }
        break;
}
