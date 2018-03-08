<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" name="input" action="<?php echo base_url('masterlipat1/simpanbjadi')?>" method="post">

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Desain Barang<span class="required"> *</span></label>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <select class="select2_group form-control" name="kddesbrg" required>
                <?php foreach ($desainbarang as $dsnbrg): ?>
                    <option value="<?php echo $dsnbrg['kddesbrg'] ?>"><?php echo $dsnbrg['nmleb'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
        </div>
        
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Anggota<span class="required"> *</span></label>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <select class="select2_group form-control" name="kd_anggota" required>
                <?php foreach ($data as $d): ?>
                    <option value="<?php echo $d['kd_anggota'] ?>"><?php echo $d['nm_anggota'] ?></option>
                <?php endforeach; ?>
                </select>
            </div>
        </div>
    
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Jadi<span class="required"> *</span></label>
            <div class="col-md-3 col-sm-3 col-xs-4" required>
                <input type="date" id="tgl_jadi" name="tgl_jadi" maxlength="25" required="required" class="form-control col-md-7 col-xs-12">
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jumlah<span class="required"> *</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12" required>
                <input type="text" id="jumlah" name="jumlah" maxlength="3" required="required" class="form-control col-md-7 col-xs-12">
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kelompok<span class="required"> *</span></label>
            <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                <select class="select2_group form-control" name="kdklp" required>
                <?php foreach ($kelompok as $klp): ?>
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