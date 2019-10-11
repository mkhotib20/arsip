<?php include 'header.php'; 
?>
        <div class="container-fluid">

          <?php include 'breadcumb.php'; ?>
          <h1 class="h3 mb-2 text-gray-800">Input Arsip</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form </h6>
            </div>
            <div  class="card-body">
               <?php echo form_open('pengarsipan/store') ?>
                <div id="app" class="row">
                  <div class="col-md-12">
                    <h4>Tanggal</h4>
                    <hr>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Nomor Surat</span>
                        <input type="text" value="<?php echo $no_surat ?>" class="form-control" name="no_surat">
                        <input type="text" hidden value="<?php echo $id ?>" class="form-control"  name="arsip_id">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Nomor Gedung</span>
                        <input type="text" class="form-control"  value="<?php echo $no_gedung ?>"  name="no_gedung">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Nomor Rak</span>
                        <input type="text" class="form-control"  value="<?php echo $no_rak ?>"  name="no_rak">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Jenis dokumen</span>
                        <input type="text" class="form-control"  value="<?php echo $jenis_dokumen ?>"  name="jenis_dokumen">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Bantex</span>
                        <input type="text" class="form-control" value="<?php echo $bantex ?>"  name="bantex">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Departemen</span>
                        <select name="departemen" class="form-control" id="">
                          <option selected disabled>--pilih departemen--</option>
                          <?php foreach ($dep as $dp) { ?>
                            <option <?php if($departemen==$dp['dep_id']){echo 'selected';} ?> value="<?php echo $dp['dep_id'] ?>"><?php echo $dp['dep_name'] ?></option>
                            <?php } ?>
                        </select>
                      </div>
                  </div>
                </div>
                <input type="submit" value="Simpan" class="btn btn-primary  btn-block" name="">
              </form>
            </div>
          </div>

        </div>
<?php include 'footer.php'; ?>

<script>
    $('input[name="no_gedung"]').removeAttr('readonly')
    $('input[name="no_surat"]').removeAttr('readonly')
    $('input[name="bantex"]').removeAttr('readonly')
    $('input[name="no_rak"]').removeAttr('readonly')
    $('input[name="jenis_dokumen"]').removeAttr('readonly')
</script>