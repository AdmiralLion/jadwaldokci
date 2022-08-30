<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body class="background-col">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
  <script src=getDokter2.js></script>
  <div class="card col-sm-9 align-middle">
  <img class="card-img-top" src="img/bg.jpg" alt="Card image cap">
    <div class="card-body">
      <div class="container">
        <div class="container-fluid">
        <h1 style="text-align:center">Jadwal Dokter</h1>
          <p>Unit Pelayanan</p>
          <div class="col-sm-12">
            <select name="hari" id="hari" onchange="selectHari()" class="selectpicker" data-style='btn-info'>
              <option value="1">Senin</option>
              <option value="2">Selasa</option>
              <option value="3">Rabu</option>
              <option value="4">Kamis</option>
              <option value="5">Jumat</option>
              <option value="6">Sabtu</option>
              <option value="7">Minggu</option>
          </select>
          <label for="hari">Pilih Hari</label>
          </div>
          <br><br>
          <?php 
          require ("koneksi.php");
          $sql = "SELECT * from b_ms_unit WHERE nama LIKE 'Poli%' AND aktif=1 GROUP BY nama";
          $result = $conn->query($sql);
          
          echo "<select id='dokter' onchange='selectDokter()' class='selectpicker col-md-12' data-live-search='true' data-style='btn-success' >";
          if ($result->num_rows > 0) {
             while($rows = $result->fetch_assoc()) {
              echo "<option selected='selected' value=".$rows['id'].">".$rows['nama']."</option>";
              }
            }
            
          echo "</select>";
          
          ?>
          <br><br>
        <hr/>
              <table class="table table-striped">
                <thead>
                  <th class='hidden'>ID</th>
                  <th>Nama Dokter</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Hari</th>
              </thead>
              <tbody id="coba">
              </tbody>
          </table>
                <?php 
              ?> 
        </div>
        <a href="#" class="btn btn-success">Kembali</a>
        <p></p>
        </div>

    </div>
  </div>
</body>
</html>