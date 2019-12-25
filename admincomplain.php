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
<!--start recommend-->
<div style="background-color: #2980b9; margin-top: 200px;">
    <h2 style="color: white; font-weight: bold; text-align: center">Complain Aria</h2>
</div>
<form>
    <div class="row" style="margin:0px">
        <div id="col-md-4">
            <div class="form-group">
                <label for="complain">Complain Id</label>
                <input type="text" name="complainid" class="form-control" id="complain" aria-describedby="emailHelp">
            </div>
        </div>

        <div id="col-md-8">
            <div class="form-group">
                <label for="email-id">Email</label>
                <input type="text" name="email" class="form-control" id="email-id" aria-describedby="emailHelp">
            </div>
        </div>

    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
<br>

<div style="height: 250px; overflow: auto;">
    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Complain Id</th>
            <th scope="col">Email</th>
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
</div>
</body>
</html>
