<?php include 'header.php'; ?>

        <div class="container-fluid">
          <?php include 'breadcumb.php'; ?>
          <h1 class="h3 mb-2 text-gray-800">Arsip Dokumen</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List </h6> 
              <a href="<?php echo base_url('dokumen/pengarsipan/tambah') ?>" class="float-right" ><span class="fas fa-plus"></span> Arsip</a>
            </div>
            <div class="card-body">
                    <p>Halaman ini digunakan untuk mengganti nomor gedung dan rak berdasarkan tahun</p>
               <?php echo form_open('/pengarsipan/excPindah') ?>
                <div class="row">
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Tahun</span>
                        <input type="text" class="form-control"  name="tahun">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Nomor Gedung</span>
                        <input type="text" class="form-control" name="no_gedung">
                      </div>
                  </div>
                  <div class="col-6 col-md-4">
                      <div class="form-group">
                        <span class="label">Nomor Rak</span>
                        <input type="text" class="form-control" name="no_rak">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <input type="submit" class="btn btn-success btn-block">
                  </div>
              </div>
              </form>
            </div>
          </div>
        </div>
<?php include 'footer.php'; ?>
