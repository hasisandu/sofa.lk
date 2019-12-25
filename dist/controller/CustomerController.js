$('.btncussave').click(function () {
    if ($('#email').val().length > 0 && $('#fname').val().length > 0 && $('#lname').val().length > 0 && $('#contact').val().length > 0 && $('#city').val().length > 0 && $('#status').val().length > 0 && $('#address').val().length > 0) {
        let formData = $('#customer-form-id').serialize();
        let name = $('.btncussave').val();
        $.ajax({
            url: "api/service/CustomerService.php",
            method: "POST",
            data: formData + "&operation=" + name,
            async: true
        }).done(function (resp) {
            if (parseInt(resp.trim()) > 0) {

            } else {
                alert(resp);
            }
        }).fail(function (resp) {
            alert(resp);
        });
    } else {
        alert("Missing Fields !");
    }
});