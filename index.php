<html>
  <head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
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
          <div class="col-sm-12">
            <form id="add-book">
            <input type="checkbox" id="senin"></input>
            <label for="hide"> senin </label></div>

        <hr/>
        <?php
          // require("koneksi.php");
          // $x = 0;
          // $sql = "SELECT hari FROM b_ms_jadwal_dokter";
          // $result = $conn->query($sql);
          // if ($result->num_rows > 0) {
			    //   while($row = $result->fetch_assoc()) {
          // while($x < 7){
          //   $x++;
            ?>
              <table class="table table-striped">
                <p>Senin</p>
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