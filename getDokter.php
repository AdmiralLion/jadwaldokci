<?php
    require('koneksi.php');
    $k = $_POST['id'];
    $k = trim($k);
    $sql = "SELECT b_ms_unit.id,b_ms_unit.nama,b_ms_jadwal_dokter.hari,b_ms_jadwal_dokter.mulai,b_ms_jadwal_dokter.selesai,b_ms_pegawai.nama,b_ms_jadwal_dokter.aktif,
    CASE b_ms_jadwal_dokter.hari
    WHEN 1 THEN 'Senin'
    WHEN 2 THEN 'Selasa'
    WHEN 3 THEN 'Rabu'
    WHEN 4 THEN 'Kamis'
    WHEN 5 THEN 'Jum\'at'
    WHEN 6 THEN 'Sabtu'
    WHEN 7 THEN 'Minggu'
    END AS hari2 FROM ((`b_ms_jadwal_dokter` INNER JOIN b_ms_pegawai ON b_ms_jadwal_dokter.dokter_id = b_ms_pegawai.id) INNER JOIN b_ms_unit ON b_ms_jadwal_dokter.unit_id = b_ms_unit.id)  WHERE b_ms_unit.id='{$k}' AND b_ms_jadwal_dokter.aktif = 1 ORDER BY hari ASC, dokter_id ASC " ;
    $resultSet = $conn->query($sql);
        while($emp = mysqli_fetch_assoc($resultSet)){
            ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td class="hari2"> <?php echo $emp['hari2']; ?></td>
            </tr>
            <!-- <?php if ($emp['hari']==2){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?>
            <?php if ($emp['hari']==3){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?>
            <?php if ($emp['hari']==4){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?>
            <?php if ($emp['hari']==5){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?>
            <?php if ($emp['hari']==6){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?>
            <?php if ($emp['hari']==7){ ?>
                <tr>
                <td class="hidden"> <?php echo $emp['id']; ?></td>
                <td> <?php echo $emp['nama']; ?></td>
                <td> <?php echo $emp['mulai']; ?></td>
                <td> <?php echo $emp['selesai']; ?></td>
                <td> <?php echo $emp['hari2']; ?></td>
            </tr>
            <?php
            }?> -->
                
            <?php }
            echo $sql;
    ?>
    
    
    