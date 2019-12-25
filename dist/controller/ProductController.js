/*

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
    <!--<script type="application/javascript">-->
    <!--    $('#btn-save-product').click(function () {-->
    <!---->
    <!--        let imageval=$('#productimage').val();-->
    <!--        let extention=imageval.split('.').pop().toLowerCase();-->
    <!---->
    <!--        if ($.inArray(extention,['gif','png','jpg','jpeg'])== -1){-->
    <!--            alert("Invalid Image");-->
    <!--            $('#productimage').val('');-->
    <!--            return false;-->
    <!--        }-->
    <!---->
    <!--        let v=$('#productimage').val();-->
    <!--        if( $('#productid').val().length>0 && $('#productname').val().length>0 && $('#productmodal').val().length>0 && $('#productprice').val().length>0 && $('#productsize').val().length>0 && $('#productmetirial').val().length>0 && $('#productcolor').val().length>0 &&  $('#productimage').val().length>0 &&  $('#producttype').val().length>0 &&  $('#productstatus').val().length>0) {-->
    <!--            let formData = $('#name-of-product').serialize();-->
    <!--            let name=$('#btn-save-product').val();-->
    <!---->
    <!--            -->
    <!--            $.ajax({-->
    <!--                url: "api/service/ProductService.php",-->
    <!--                method: "POST",-->
    <!--                data: formData + "&operation="+name+"&img="+v,-->
    <!--                async: true-->
    <!--            }).done(function (resp) {-->
    <!--                if(parseInt(resp.trim())>0){-->
    <!---->
    <!--                }else {-->
    <!--                    alert(resp);-->
    <!--                }-->
    <!--            }).fail(function (resp) {-->
    <!--                alert(resp);-->
    <!--            });-->
    <!--        }else {-->
    <!--            alert("Missing Fields !");-->
    <!--        }-->
    <!--    });-->
    <!--</script>-->*/

$('#btn-product-save').click(function () {
    var dataset = $('#product_form').serialize();
    $.ajax({
        url: "api/service/ProductService.php",
        method: "POST",
        async: true,
        data: dataset + "&operation=ADD",
        dataType: "json"
    }).done(function (response) {
        alert(response);
    }).fail(function (response, xxr) {
       console.log(JSON.stringify(response));
    });

});