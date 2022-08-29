// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();
    });

$(document).ready(function(){
    $('#unitid').change(function(){
        var unit_id = $(this).val();

        $.ajax({
            url:"tampil_dok.php", 
            method:"POST",
            data:{unit_id:unit_id},
            success:function(data){
                $('#show_product').html(data);
            }
        })
    })
})