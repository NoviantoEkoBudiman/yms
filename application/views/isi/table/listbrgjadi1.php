<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Desain Barang</th>
      <th>Anggota</th>
      <th>Tanggal Jadi</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($listbarang as $list) { ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $list['nmleb'] ?></td>
    <td><?php echo $list['nm_anggota'] ?></td>
    <td><?php echo $list['tgl_jadi'] ?></td>
    <td><?php echo $list['jumlah'] ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>