

        <form action="<?= base_url('kode_baca/insert/') ?>" method="post" id="form-kode_baca" data-parsley-validate class="form-horizontal form-label-left">
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kabupaten <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php #echo form_input('namaanggan'); ?>
                    <input type="text" name="kabupaten" id="kabupaten" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kecamatan <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php #echo form_input('namaanggan'); ?>
                    <input type="text" name="kecamatan" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Desa <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php #echo form_input('alamat'); ?>
                    <input type="text" name="desa" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Baca Hari <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <?php #echo form_input('no_telp'); ?>
                    <input type="text" name="baca_hari" required="required" class="form-control col-md-7 col-xs-12">
                </div>
            </div>


<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="submit" id="submit_" class="btn btn-success">Proses</button>
      <button type="reset" class="btn btn-primary">Reset</button>
      <button onclick="window.history.back()" class="btn btn-danger pull-right">Kembali</button>
  </div>
</div>



</div>
</form>