function deleteCart(id) {
    if (confirm("Anda yakin akan menghapus menu ini ?")) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/cart/'+id,
            type:'DELETE',
            data:'id='+id,
            success:function(response) {
                $('#sid'+id).remove();
                $('#totalajaxcall').load(location.href + ' .totalload');
            }
        })        
    }    
}

// function updateCartTotal() {
//     var showCart = document.getElementsByClassName('show-cart')[0]
//     var tableRows = document.getElementById('#sid<?php $detail_pesanan->id ?>')
//     var total = 0

//     console.log(tableRows)

//     for (var i = 0; i < tableRows.length; i++){
//         var tableRow = tableRows[i]
//         var priceElement = tableRow.getElementsByClassName('cart-harga')[0]
//         var quantityElement = tableRow.getElementsByClassName('cart-jumlah')[0]
//         var price = priceElement.innerText.replace('Rp. ', '')
//         var quantity = quantityElement.value
//         total = total + (price * quantity)
//     }
//     document.getElementById('#cart-total')[0].innerText = total
// }