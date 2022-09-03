function selectHari(){
        var y = document.getElementById("hari").value;
        console.log(y);
        return y;
    } 
function selectDokter(){

    var x = document.getElementById("dokter").value;
    var y1 = selectHari()
    // var base_url='http://localhost/jadwaldokci/'
    console.log(x);
    $.ajax({
        url:"<?= site_url()?> jadwal/tampil",
        // url: base_url + "jadwal/tampil",
        method: "POST",
        data:{
            id : x,
            hari : y1
        },
        async: false,
        success:function(data){
            $("#coba").html(data);
            console.log($("#data"));
        }
        })
    }
