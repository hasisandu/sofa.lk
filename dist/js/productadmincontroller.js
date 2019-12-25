$('.btn-product-save-update').click(function () {
    var name = $('.btn-product-save-update').attr('value');

    if ($('#product-id').val().length > 0 && $('#product-name').val().length > 0 && $('#product-modal').val().length > 0 && $('#product-price').val().length > 0 && $('#product-size').val().length > 0 && $('#product-material').val().length > 0 && $('#product-color').val().length > 0  && $('#product-type').val().length > 0 && $('#product-status').val().length > 0) {
        var formData=$('#product-form-id').serialize();
        alert(formData);
        $.ajax({
            url: "api/service/ProductService.php",
            method:"POST",
            data:formData+"&operation="+name,
            async:true
        }).done(function (resp) {
            if (parseInt(resp.trim())>0){
                alert("Done");
            }else{
                alert(resp);
                console.log(resp);
            }
        }).fail(function (resp) {
            alert(resp)
        });

    }else{
        alert("Missing Fields")
    }


});