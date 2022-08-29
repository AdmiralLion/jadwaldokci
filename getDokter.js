$(document).ready(function(){
    $("#dokter").change(function(){
        var id = $(this).find(":selected").val();
        var dataString = 'empid=' + id;
        $.ajax({
            url:'getDokter.php?empid='+id,
            dataType:"json",
            data: dataString,
            cache: false,
            success: function(empData){
                if(empData){
                    $("#errorMassage").addClass
                    ('hidden').text("");
                    $("#recordListing").removeClass
                    ('hidden');
                    $("#empId").text(empData.id);
                    $("#empName").text(empData.nama);
                    $("#empMulai").text(empData.mulai);
                    $("#empSelesai").text(empData.selesai);

                }
                else{
                    $("#recordListing").addClass
                    ('hidden');
                    $("#errorMassage").removeClass
                    ('hidden').text("tidak ada");
                }
            }

        })
    })
})