<?php
require_once __DIR__ . '/api/dbconnection/DBConnection.php';
$conn = (new DBConnection())->getConnection();

$method = $_SERVER["REQUEST_METHOD"];



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<!--start recommend-->
<div style="background-color: #2980b9; margin-top: 200px;">
    <h2 style="color: white; font-weight: bold; text-align: center">Recommend Aria</h2>
</div>
<form id="recform">
    <div class="form-group">
        <label for="exampleFormControlSelect1">Product Id</label>
        <select class="form-control" name="productid" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select class="form-control" name="status" id="exampleFormControlSelect1">
            <option name="active">Active</option>
            <option name="deactivate">DeActive</option>

        </select>
    </div>
    <button type="button" class="btn btn-primary" id="btn-save-recc" onclick="saveRecc()">Save</button>
    <button type="button" class="btn btn-danger">Delete</button>
</form>
<br>

<!--<div style="height: 250px; overflow: auto;">
    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Product Id</th>
            <th scope="col">Status</th>
            <th scope="col">Operate</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        <tr>
            <th scope="row">001</th>
            <td>Active</td>
            <td><img class="dltbtn" style="width: 30px; height: 30px;" src="dist/images/delete.png" alt="delete">
            </td>

        </tr>
        </tbody>
    </table>

<script src="dist/js/admin.js"></script>
</div>-->
</body>
</html>