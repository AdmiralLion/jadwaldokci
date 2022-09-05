<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php') ?>
</head>

<body class="background-col">
<div class="card col-sm-9 align-middle">
  <img class="card-img-top" src="<?= base_url('assets/image/bg.jpg')?>" alt="Card image cap">
    <div class="card-body">
      <div class="container">
        <div class="container-fluid">
        <h1 style="text-align:center">Jadwal Dokter</h1>
        <br><br>
          <div class="container">
            <div class="row">
              <div class="col">
              <h3 class="col-sm-6">Unit Pelayanan</h3>
              </div>
              <div class="col">
              <h3 class="col-sm-6">Pilih hari</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
              <?php 
                echo "<select id='dokter' onchange='selectDokter()' class='selectpicker col-sm-12' data-live-search='true' data-style='btn-success btn-lg' >";
                foreach ($poli->result() as $row) :
					echo "<option selected='selected' value=".$row->id.">".$row->nama."</option>";
			endforeach;
			echo "</select>";
                ?>
              </div>
              <div class="col-6">
              <select name="hari" id="hari" onchange="selectHari()" class="selectpicker col-sm-12" data-style='btn-info btn-lg'>
                  <option value="1">Senin</option>
                  <option value="2">Selasa</option>
                  <option value="3">Rabu</option>
                  <option value="4">Kamis</option>
                  <option value="5">Jumat</option>
                  <option value="6">Sabtu</option>
                  <option value="7">Minggu</option>
                </select>
              </div>
                </div>
          <br><br>
        <hr/>
              <!-- <table class="table table-striped">
                <thead>
                  <th class='hidden'>ID</th>
                  <th>Nama Dokter</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Hari</th>
              </thead>

          </table> -->

          <div class="result-table">
    </div>
                <?php 
              ?>
              <br><br>
              <a href="#" class="btn btn-success">Kembali</a> 
        </div>
        </div>
    </div>
  </div>

</body>
<script>
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
        url:"jadwal/tampil",
        // url: base_url + "jadwal/tampil",
        method: "POST",
        data:{
            id : x,
            hari : y1
        },
        async: false,
        success:function(data){
            $(".result-table").html(data);
        }
        })
    }
</script>
</html>
