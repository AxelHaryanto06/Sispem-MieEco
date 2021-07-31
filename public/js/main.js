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

function getSelectValue() {
    var selectedValue = document.getElementById("date_range").value;
    
    if (selectedValue == "hariini") {
        // var date = moment().format('YYYY-MM-DD');
        var selectvalue = document.getElementById("1").value = moment().format('YYYY-MM-DD');
    }
    
    if (selectedValue == "kemarin") {
        // var date = moment().subtract(1, 'days').format('YYYY-MM-DD');
        var selectvalue = document.getElementById("2").value = moment().subtract(1, 'days').format('YYYY-MM-DD');
    }
    // var harini = moment().format('YYYY-MM-DD');
    // var viewHariini = document.getElementById("hariini").value = harini;
    
    // var kemarin = moment().subtract(1, 'days').format('YYYY-MM-DD');
    // var viewKemarin = document.getElementById("kemarin").value = kemarin;
    console.log(selectvalue);
}