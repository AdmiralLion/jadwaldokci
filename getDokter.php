<?php
    require('koneksi.php');
    $k = $_POST['id'];
    $Hari = $_POST['hari'];
    $k = trim($k);
    $Hari = trim($Hari);
    $sql = "SELECT b_ms_unit.id,b_ms_unit.nama,b_ms_jadwal_dokter.hari,b_ms_jadwal_dokter.mulai,b_ms_jadwal_dokter.selesai,b_ms_pegawai.nama,b_ms_jadwal_dokter.aktif,
    CASE b_ms_jadwal_dokter.hari
    WHEN 1 THEN 'Senin'
    WHEN 2 THEN 'Selasa'
    WHEN 3 THEN 'Rabu'
    WHEN 4 THEN 'Kamis'
    WHEN 5 THEN 'Jum\'at'
    WHEN 6 THEN 'Sabtu'
    WHEN 7 THEN 'Minggu'
    END AS hari2 FROM ((`b_ms_jadwal_dokter` INNER JOIN b_ms_pegawai ON b_ms_jadwal_dokter.dokter_id = b_ms_pegawai.id) INNER JOIN b_ms_unit ON b_ms_jadwal_dokter.unit_id = b_ms_unit.id)  WHERE b_ms_unit.id='{$k}' AND b_ms_jadwal_dokter.aktif = 1 AND b_ms_jadwal_dokter.hari = '{$Hari}' ORDER BY hari ASC, dokter_id ASC " ;
    // MENCOBA DENGAN MENGGUNAKAN INPUTAN USER LALU DIMASUKKAN KE DALAM QUERY LALU DILAKUKAN SELECT SESUAI INPUTAN USER YANG DIINGINKAN
    $resultSet = $conn->query($sql);
    if ($resultSet->num_rows > 0) {
        while($emp = mysqli_fetch_assoc($resultSet)){
            ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td class="hari2"> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }
            echo $sql;
        }else{
            ?>
            <tr>
                <td> JADWAL DOKTER UNTUK HARI INI TIDAK ADA </td>
            </tr>
            <?php
        }
    ?>
    
    
    