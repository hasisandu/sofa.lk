<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .items img {
            width: 100%;
            height: 250px;
        }
    </style>
</head>
<body>
<!--start recommend-->
<div style="background-color: #2980b9; margin-top: 200px;">
    <h2 style="color: white; font-weight: bold; text-align: center">Order Aria</h2>
</div>
<form>
    <div class="row" style="margin:0px">
        <div id="col-4">
            <div class="form-group">
                <label for="complain">Order Id</label>
                <input type="text" name="complainid" class="form-control" id="complain" aria-describedby="emailHelp">
            </div>
        </div>

        <div id="col-4">
            <div class="form-group">
                <label for="email-id">Email</label>
                <input type="text" name="email" class="form-control" id="email-id" aria-describedby="emailHelp">
            </div>
        </div>

        <div id="col-4">
            <div class="form-group">
                <label for="email-id">Amount</label>
                <input type="text" name="email" class="form-control" id="email-id" aria-describedby="emailHelp">
            </div>
        </div>

        <div id="col-4">
            <div class="form-group">
                <label for="email-id">Date</label>
                <input type="text" name="email" class="form-control" id="email-id" aria-describedby="emailHelp">
            </div>
        </div>

        <div id="col-4">
            <div class="form-group">
                <label for="email-id">State</label>
                <br>
                <input type="button" style="width: 100%" class="btn btn-primary" id="email-id"
                       aria-describedby="emailHelp" value="Not-Submit">
            </div>
        </div>

    </div>
</form>
<br>

<div style="width: 100%; background-color: #FFEAC9; height: auto;">
    <div class="row" style="margin:0px;">
        <div class="col-4 items">
            <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg"
                 alt="">
            <br>
            <br>
            <div>
                <p>QTY: 2</p>
                <p>Price: 3520/=</p>
            </div>
        </div>

        <div class="col-4 items">
            <img src="https://helpx.adobe.com/content/dam/help/en/stock/how-to/visual-reverse-image-search/jcr_content/main-pars/image/visual-reverse-image-search-v2_intro.jpg"
                 alt="">
            <br>
            <br>
            <div>
                <p>QTY: 2</p>
                <p>Price: 3520/=</p>
            </div>
        </div>
    </div>
</div>

<hr>
<input type="search" name="search" class="form-control" id="email-id" aria-describedby="emailHelp" placeholder="Search">
<br>

<div style="height: 250px; overflow: auto;">
    <table class="table table-striped table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Customer Id</th>
            <th scope="col">Order Id</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Status</th>
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
