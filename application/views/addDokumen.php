<?php include 'header.php'; 

?>

        <div class="container-fluid">



          <?php include 'breadcumb.php'; ?>

          <h1 class="h3 mb-2 text-gray-800">Input Dokumen</h1>



          <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">Form </h6>

            </div>

            <div  class="card-body">

               <?php echo form_open('home/store') ?>

                <div id="app" class="row">

                  <div class="col-md-12">

                    <h4>Tanggal</h4>

                    <hr>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Admin</span>

                        <input type="text" class="form-control date" name="tgl_admin_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Admin</span>

                        <input type="text" class="form-control date" name="tgl_admin_out">

                      </div>

                  </div>

                  

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Pajak</span>

                        <input type="text" class="form-control date"  name="tgl_pajak_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Pajak</span>

                        <input type="text" class="form-control date"  name="tgl_pajak_out">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Akuntansi</span>

                        <input type="text" class="form-control date" name="tgl_akt_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Akuntan</span>

                        <input type="text" class="form-control date" name="tgl_akt_out">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Keuangan</span>

                        <input type="text" class="form-control date" name="tgl_keuangan">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl bayar</span>

                        <input type="text" class="form-control date" name="tgl_bayar">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Pengarsipan</span>

                        <input type="text" class="form-control date" name="tgl_pengarsipan">

                      </div>

                  </div>

                  <div class="col-6 col-md-6">

                      <div class="form-group">

                        <span class="label">Nomor gedung</span>

                        <input type="text" class="form-control" name="no_gedung">

                      </div>

                  </div>

                  <div class="col-6 col-md-6">

                      <div class="form-group">

                        <span class="label">Nomor Rak</span>

                        <input type="text" class="form-control" name="no_rak">

                      </div>

                  </div>

                </div>

                <hr>

                <div id="req" class="row">

                  <div class="col-md-12">

                    <h4>Detail Dokumen</h4><hr>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Verificator</span>

                        <input type="text" class="form-control" name="verificator">

                        <input type="text" name="dok_id" hidden="" value="<?php echo 'DOK'.time().rand() ?>">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Keterangan</span>

                        <input type="text" class="form-control" name="keterangan">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Dok. SAP</span>

                        <input type="text" class="form-control" name="sap_no">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Bantex</span>

                        <input type="text" class="form-control" name="bantex">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Unit Kerja</span>

                        <select class="form-control" name="unit_kerja" >

                          <option selected="" disabled="" >--pilih unit kerja--</option>

                          <?php foreach ($mitra as $mt) { ?>

                          <option><?php echo $mt['mitra_nama'] ?></option>

                          <?php } ?>

                        </select>

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Surat/Invoice</span>

                        <input type="text" class="form-control" name="no_surat">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Dokumen Masuk</span>

                        <input type="text" class="form-control" name="no_dok_masuk">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nama Vendor</span>

                        <select class="form-control" name="vendor" >

                          <option selected="" disabled="" >--pilih vendor--</option>

                          <?php foreach ($vendor as $vd) { ?>

                          <option><?php echo $vd['vendor_nama'] ?></option>

                          <?php } ?>

                        </select>

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Currency</span>
                        <select name="currency" class="form-control">
                            <?php foreach ($curs as $cur) { ?>
                            <option><?php  echo $cur['name'] ?></option>
                            <?php } ?>
                        </select>

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nominal</span>

                        <input type="text" class="form-control" name="nominal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nama Dokumen</span>

                        <input type="text" class="form-control" name="perihal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. PPN</span>

                        <input type="text" class="form-control" name="ppn">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Jurnal</span>

                        <input type="text" class="form-control" name="jurnal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">PO/SPK/NO</span>

                        <input type="text" class="form-control" name="pospk">

                        <div class="checkbox">

                          <label><input type="checkbox" name="pengembalian" value=""> Status Pengembalian</label>

                        </div>

                      </div>

                  </div>

                </div>

                <input type="submit" value="Simpan" class="btn btn-primary  btn-block" name="">

              </form>

            </div>

          </div>



        </div>

<?php include 'footer.php'; ?>



