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

$(document).ready(function() {
    //var time = moment().format('HH:mm');
    var time = moment().format('HH:mm');
    var viewTime = document.getElementById("timepick").value = time;
    //document.getElementById("timepick").value = time;
    console.log(viewTime);
});       