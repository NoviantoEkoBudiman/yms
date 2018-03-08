<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" name="input" action="<?php echo base_url('masterlipat1/create')?>" method="post">
					
<div class="form-group" hidden>
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Anggota<span class="required"></span>
</label>
<div class="col-md-3 col-sm-12 col-xs-12 form-group">
    <input name="kd_anggota" id="kd_anggota" value="Kode sudah otomatis terisi" class="form-control" readonly="readonly">
    </div>
</div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Anggota<span class="required"> *</span>
        </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="nm_anggota" name="nm_anggota" maxlength="40" required="required" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
                    
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">username<span class="required"> *</span>
            </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="username" name="username" maxlength="25" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Password<span class="required"> *</span>
                </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" id="password" name="password" maxlength="35" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Kontak<span class="required"> *</span>
                    </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="kontak" name="kontak" maxlength="16" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">No. Rekening<span class="required"> *</span>
            </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="no_rek" name="no_rek" maxlength="50" required="required" class="form-control col-md-7 col-xs-12">
            </div>
        </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelompok<span class="required"> *</span></label>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <select class="select2_group form-control" name="kdklp" required>
                <?php foreach ($klp_masyarakat as $klp): ?>
                    <option value="<?php echo $klp['kdklp'] ?>"><?php echo $klp['nmklp'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
    </div>
    
<div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <input type="submit" class="btn btn-primary" value="Simpan"></input>
            <input type="reset" class="btn btn-danger" value=" &nbsp; Batal &nbsp; "></input>  
        </div>
    </div>
</form>