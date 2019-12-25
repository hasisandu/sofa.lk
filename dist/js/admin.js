function load() {
    $('#frame').load("adminproduct.php");
    findId();

}

$('#btnrecomend').click(function () {
    $('#frame').load("adminrecomend.php");
});

$('#btnproduct').click(function () {
    $('#frame').load("adminproduct.php");
    findId();
});

$('#btncomplain').click(function () {
    $('#frame').load("admincomplain.php");
});

$('#btnbest-seller').click(function () {
    $('#frame').load("adminbestSeller.php");
});

$('#btnfeatured').click(function () {
    $('#frame').load("adminfetured.php");
});

$('#btnorders').click(function () {
    $('#frame').load("adminorders.php");
});


function findId() {
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        async: true,
        data: "&operation=GETID",
        dataType: "json"
    }).done(function (response) {
        var num=parseInt(response);
        temp=num+1;
        $('#txtpid').val(temp);
        $('#imgloc').val('productimage/'+temp);

    }).fail(function (response, xxr) {
       //console.log(JSON.stringify(response));
    });
}

function saveRecc() {
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        data: $('#recform').serialize() + "&operation=ADDRECCOMEND",
        async: true
    }).done(function (resp) {
        console.log(resp);
    }).fail(function (resp) {
        console.log(resp);
    });
}
