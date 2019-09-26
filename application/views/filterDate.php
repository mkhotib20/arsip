<div class="form-group">
                <h5>Filter Rentang Tanggal Masuk Akuntansi</h5>
                <?php echo form_open('dokumen') ?>
                <div class="row">
                  <div class="col-md-4">
                    <label for="tgl_start">Mulai dari</label>
                    <input type="text" class="form-control date" name="tgl_start">
                  </div>
                  <div class="col-md-4">
                    <label class="label" for="tgl_start">Sampai</label>
                    <input type="text" class="form-control date" name="tgl_end">
                  </div>
                  <div class="col-md-12">
                  <br>
                    <input type="submit" class="btn btn-success" value="Filter" >
                  </div>

                </div>
                
              </div>