<?php foreach($anggota as $d): ?>
                <form method="post" action="<?php echo base_url()?>masterlipat1/update" class="form-horizontal row-border">
                <div class="form-group" hidden>
                    <label class="col-sm-2 control-label">Kode Anggota</label>
                  <div class="col-sm-2">
                    <input type="text" name="kd_anggota" value="<?php echo $d['kd_anggota'] ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Client*</label>
                  <div class="col-sm-8">
                    <input type="text" name="nm_anggota" value="<?php echo $d['nm_anggota'] ?>" class="form-control" maxlength="60" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username*</label>
                  <div class="col-sm-8">
                    <input type="text" name="username" value="<?php echo $d['username'] ?>" class="form-control" maxlength="60" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password*</label>
                  <div class="col-sm-8">
                    <input type="text" name="password" value="" class="form-control" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Kontak</label>
                  <div class="col-sm-8">
                    <input type="text" name="kontak" value="<?php echo $d['kontak'] ?>" class="form-control" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">No. Rekening</label>
                  <div class="col-sm-8">
                    <input type="text" name="no_rek" value="<?php echo $d['no_rek'] ?>" class="form-control" required autofocus>
                  </div>
                </div>
                <div class="form-group">
                <label class="col-sm-2 control-label">Kelompok</label>
                    <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                      <select class="select2_group form-control" name="kdklp" required>
                        <?php foreach ($klp_masyarakat as $klp): ?>
                          <option value="<?php echo $klp['kdklp'] ?>"><?php echo $klp['nmklp'] ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
    </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label alert-danger">*) Wajib di isi.</label>
                </div>
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn-primary btn">Simpan</button>
                        <button type="reset" class="btn-danger btn">Batal</button>
                    </div>
                    </div>
                </div>
                </form>
<?php endforeach; ?>