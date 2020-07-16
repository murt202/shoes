function addToCart(id) {

    var quantity = $('#quant option:selected').text();

    $.ajax({
        method: "POST",
        url: "./add-cart",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            "id": id,
            "quantity": quantity
        }

    }).then(function(response) {

            console.log(response);
            $("#alert").text("Product Added")
        }
    )
}
