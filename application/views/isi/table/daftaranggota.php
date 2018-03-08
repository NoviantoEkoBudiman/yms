<table id="daftaranggota" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Petugas</th>
      <th>Username</th>
      <th>Password</th>
      <th>Link Project</th>
      <th>Pilihan</th>
    </tr>
  </thead>
<tbody>
<!-- load data client dari db -->
<?php
$no = 1;
foreach ($data as $d) { ?>                                    
  <tr class="odd gradeX">
    <td><?php echo $no++ ?>.</td>
    <td><?php echo $d['nm_anggota'] ?></td>
    <td><?php echo $d['username'] ?></td>
    <td><?php echo $d['kontak'] ?></td>
    <td><?php echo $d['no_rek'] ?></td>
    <td>
      <div class="btn-group">
        <?php echo anchor('masterlipat1/edit/'.$d['kd_anggota'],'<button type="button" class="btn btn-primary-alt"><i class="ti ti-pencil-alt"></i></button>')?>
        <?php echo anchor('masterlipat1/hapus/'.$d['kd_anggota'],'<button type="button" class="btn btn-danger-alt"><i class="ti ti-trash"></i></button>',array('onclick' => "return confirm('Apakah Anda yakin akan menghapus data ini?')"))?>
      </div>
    </td>
  </tr>
<?php } ?>  
</tbody>
</table>