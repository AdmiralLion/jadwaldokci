function selectHari(){
        var y = document.getElementById("hari").value;
        console.log(y);
        return y;
    } 
function selectDokter(){

    var x = document.getElementById("dokter").value;
    var y1 = selectHari()
    console.log(x);
    $.ajax({
        url:"getDokter.php",
        method: "POST",
        data:{
            id : x,
            hari : y1
        },
        async: false,
        success:function(data){
            $("#coba").html(data);
            $(".hidden").hide();
            console.log($("#coba"));
        }
        })
    }
