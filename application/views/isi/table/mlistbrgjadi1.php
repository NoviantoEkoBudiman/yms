<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Desain Barang</th>
      <th>Anggota</th>
      <th>Tanggal Jadi</th>
      <th>Jumlah</th>
      <th>Pilihan</th>
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
    <td width="10%"><div class="btn-group btn-xs">
    <button type="submit" class="btn btn-default btn-xs">Aksi</button>
    <button type="submit" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="<?php echo base_url('masterlipat1/edit/'.$list['kdbrgjadi'])?>">Edit</a></li>
      <li><a href="<?php echo base_url('masterlipat1/hapus/'.$list['kdbrgjadi'])?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data anggota ini?')">Hapus</a>
      </li>
    </ul>
    </td>
    </tr>
  <?php } ?>
  </tbody>
</table>