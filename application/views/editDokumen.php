<?php include 'header.php'; 

$type = $this->uri->segment('2');

foreach ($read as $r) {

  $tgl_akt_in = $r["tgl_akt_in"];

  $verificator = $r["verificator"];

  $dok_id = $r["dok_id"];

  $tgl_akt_out = $r["tgl_akt_out"];

  $tgl_admin_in = $r["tgl_admin_in"];

  $tgl_admin_out = $r["tgl_admin_out"];

  $keterangan = $r["keterangan"];

  $sap_no = $r["sap_no"];

  $tgl_bayar = $r["tgl_bayar"];

  $bantex = $r["bantex"];

  $unit_kerja = $r["unit_kerja"];

  $no_surat = $r["no_surat"];

  $no_dok_masuk = $r["no_dok_masuk"];

  $tgl_keuangan = $r["tgl_keuangan"];

  $vendor = $r["vendor"];

  $invoice = $r["invoice"];

  $currency = $r["currency"];

  $nominal = $r["nominal"];

  $perihal = $r["perihal"];

  $ppn = $r["ppn"];

  $tgl_pajak_in = $r["tgl_pajak_in"];

  $tgl_pajak_out = $r["tgl_pajak_out"];

  $jurnal = $r["jurnal"];

  $pospk = $r["pospk"];

  $tgl_pengarsipan = $r["tgl_pengarsipan"];

  $pengembalian = $r["pengembalian"];

  $no_gedung = $r["no_gedung"];

  $no_rak = $r["no_rak"];

}



?>

        <div class="container-fluid">



          <?php include 'breadcumb.php'; ?>

          <h1 class="h3 mb-2 text-gray-800"><?php if ($type == 'view') {echo 'Detail Dokumen | '.$perihal;}else{echo 'Edit Dokumen';} ?></h1>



          <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">Form <?php if($type == 'view'){if($level != 6){echo '

                  <a href="'.base_url('dokumen/edit/'.$id).'" class="float-right" ><span class="fas fa-pencil-alt"></span> Edit</a> <br><br>

              ';}} ?></h6>

              

            </div>

            <div class="card-body">

               <?php echo form_open('home/store') ?>

               <input type="text" value="<?php echo $id ?>" hidden="" name="dok_id">

                <div class="row">

                  <div class="col-md-12">

                    <h4>Tanggal</h4>

                    <hr>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Admin</span>

                        <input type="text" value="<?php echo $tgl_admin_in ?>" class="form-control date" name="tgl_admin_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Admin</span>

                        <input type="text" value="<?php echo $tgl_admin_out ?>" class="form-control date" name="tgl_admin_out">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Pajak</span>

                        <input type="text" value="<?php echo $tgl_pajak_in ?>" class="form-control date" name="tgl_pajak_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Pajak</span>

                        <input type="text" value="<?php echo $tgl_pajak_out ?>" class="form-control date" name="tgl_pajak_out">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Akuntansi</span>

                        <input type="text" value="<?php echo $tgl_akt_in ?>" class="form-control date" name="tgl_akt_in">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Keluar Akuntansi</span>

                        <input type="text" value="<?php echo $tgl_akt_out ?>" class="form-control date" name="tgl_akt_out">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Masuk Keuangan</span>

                        <input type="text" value="<?php echo $tgl_keuangan ?>" class="form-control date" name="tgl_keuangan">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl bayar</span>

                        <input type="text" value="<?php echo $tgl_bayar ?>" class="form-control date" name="tgl_bayar">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Tgl Pengarsipan</span>

                        <input type="text" value="<?php echo $tgl_pengarsipan ?>" class="form-control date" name="tgl_pengarsipan">

                      </div>

                  </div>

                  <div class="col-6 col-md-6">

                      <div class="form-group">

                        <span class="label">Nomor gedung</span>

                        <input type="text" value="<?php echo $no_gedung ?>" class="form-control" name="no_gedung">

                      </div>

                  </div>

                  <div class="col-6 col-md-6">

                      <div class="form-group">

                        <span class="label">Nomor Rak</span>

                        <input type="text" value="<?php echo $no_rak ?>" class="form-control" name="no_rak">

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

                        <input type="text" value="<?php echo $verificator ?>" class="form-control" name="verificator">

                        

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Keterangan</span>

                        <input type="text" value="<?php echo $keterangan ?>" class="form-control" name="keterangan">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Dok. SAP</span>

                        <input type="text" value="<?php echo $sap_no ?>" class="form-control" name="sap_no">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Bantex</span>

                        <input type="text" value="<?php echo $bantex ?>" class="form-control" name="bantex">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Unit Kerja</span>

                         <!-- <input type="text" value="<?php //echo $unit_kerja ?>" name="unit_kerja" class="form-control slct"> -->

                        <select class="form-control" name="unit_kerja" >

                          <option selected="" disabled="" >--pilih unit kerja--</option>

                          <?php foreach ($mtL as $mt) { ?>

                          <option <?php if($unit_kerja == $mt['mitra_nama']){echo 'selected';} ?> ><?php echo $mt['mitra_nama'] ?></option>

                          <?php } ?>

                        </select>

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Surat/Invoice</span>

                        <input type="text" value="<?php echo $no_surat ?>" class="form-control" name="no_surat">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Dokumen Masuk</span>

                        <input type="text" value="<?php echo $no_dok_masuk ?>" class="form-control" name="no_dok_masuk">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nama Vendor</span>

                         <!--<input type="text" value="<?php echo $vendor ?>" name="vendor" class="form-control slct">
-->
                          <select class="form-control" name="vendor" >

                            <option selected="" disabled="" >--pilih vendor--</option>

                            <?php foreach ($vdL as $vd) { ?>

                            <option <?php if($vendor==$vd['vendor_nama']){echo 'selected';} ?> ><?php echo $vd['vendor_nama'] ?></option>

                            <?php } ?>

                          </select>

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Currency</span>

                        <select name="currency" class="form-control">
                            <option>Rp</option>
                        </select>
                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nominal</span>

                        <input type="text" value="<?php echo $nominal ?>" class="form-control" name="nominal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">Nama Dokumen</span>

                        <input type="text" value="<?php echo $perihal ?>" class="form-control" name="perihal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. PPN</span>

                        <input type="text" value="<?php echo $ppn ?>" class="form-control" name="ppn">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">No. Jurnal</span>

                        <input type="text" value="<?php echo $jurnal ?>" class="form-control" name="jurnal">

                      </div>

                  </div>

                  <div class="col-6 col-md-4">

                      <div class="form-group">

                        <span class="label">PO/SPK/NO</span>

                        <input type="text" value="<?php echo $pospk ?>" class="form-control" name="pospk">

                        <div class="checkbox">

                          <label><input type="checkbox" name="pengembalian" <?php if($pengembalian == 1){echo 'checked';} ?> > Status Pengembalian</label>

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

<script type="text/javascript">

  $(document).ready(function(){



    $('.slct').click(function(){

      var select = $(this).next()

      var val = $(this).val()

      select.toggle()

      $(this).toggle()

      select.val(val)

    })



    var type = "<?php echo $type ?>"

    if (type=='view') {

      $('input').attr('disabled', 'true')

      $('select').attr('disabled', 'true')

      $('input[type="submit"]').hide()

    }

  })

</script>