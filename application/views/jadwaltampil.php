<table class="table table-striped">
                <thead>
                  <th class='hidden'>ID</th>
                  <th>Nama Dokter</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Hari</th>
              </thead>
              <tbody id="coba">
               <?php foreach($result as $row):?>
                    <tr>
                    <td class="hidden"> <?php echo $row->id; ?></td>
                    <td> <?php echo $row->nama; ?></td>
                    <td> <?php echo $row->mulai; ?></td>
                    <td> <?php echo $row->selesai; ?></td>
                    <td class="hari2"> <?php echo $row->hari2; ?></td>
                </tr>
                <?php endforeach;?>
              </tbody>
          </table>