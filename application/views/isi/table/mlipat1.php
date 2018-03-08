<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Anggota</th>
      <th>Username</th>
      <th>Kontak</th>
      <th>No. Rekening</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $no=1;
  foreach ($data as $d) { ?>
  <tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d->nm_anggota ?></td>
    <td><?php echo $d->username ?></td>
    <td><?php echo $d->kontak ?></td>
    <td><?php echo $d->no_rek ?></td>
    <td width="10%"><div class="btn-group btn-xs">
    <button type="submit" class="btn btn-default btn-xs">Aksi</button>
    <button type="submit" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="<?php echo base_url('masterlipat1/edit/'.$d->kd_anggota)?>">Edit</a></li>
      <li><a href="<?php echo base_url('masterlipat1/hapus/'.$d->kd_anggota)?>" onClick="return confirm('Apakah Anda yakin ingin menghapus data anggota ini?')">Hapus</a>
      </li>
    </ul>
    </td>
    </tr>
  <?php } ?>
  </tbody>
</table>