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
        success:function(data){
            $("#coba").html(data);
            $(".hidden").hide();
            console.log($("#coba"));
            // $(".checkbox").change(function() {
            //     if(this.checked) {
            //         //Do stuff
            //     }
            // });
            // const hideBox = document.querySelector('#hide');
            // hideBox.addEventListener('change',function(e){
            //     if(hideBox.checked){
            //         list.style.display = "none";
            //         console.log($("#hide"));
            //     }
            //     else{
            //         list.style.display = "initial";
            //         console.log($("#hide"));
            //     }
            // 
        }
        })
    }
