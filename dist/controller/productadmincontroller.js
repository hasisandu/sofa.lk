$('#btn-product-save').click(function () {
    var formData = $('#product_form').serialize();
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        data: formData + "&operation=ADDPRODUCT",
        async: true
    }).done(function (resp) {
        if (parseInt(resp.trim()) > 0) {
            findId();
            alert("Done");
        } else {
            alert(resp);
            console.log(resp);
        }
    }).fail(function (resp) {
        console.log(resp);
    });

});

$('#btn-product-update').click(function () {
    var formData = $('#product_form').serialize();
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        data: formData + "&operation=UPDATEPRODUCT",
        async: true
    }).done(function (resp) {
        if (parseInt(resp.trim()) > 0) {
            findId();
            alert("Done");
        } else {
            alert(resp);
            console.log(resp);
        }
    }).fail(function (resp) {
        console.log(resp);
    });

});

/*load Products for admin*/

function loadProducts() {
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        data: formData + "&operation=GETALLPRODUCTS",
        async: true
    }).done(function (resp) {
        console.log(resp);
    }).fail(function (resp) {
        console.log(resp);
    });
}

