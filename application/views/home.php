<?php include 'header.php'; ?>



        <div class="container-fluid">



          <?php include 'breadcumb.php'; ?>

          <h1 class="h3 mb-2 text-gray-800">Tracking Document</h1>



          <div class="card shadow mb-4">

            <div class="card-header py-3">

              <h6 class="m-0 font-weight-bold text-primary">List   <?php if($level==1 || $level==2){echo '

                  <a href="'.base_url('dokumen/tambah').'" class="float-right" ><span class="fas fa-plus"></span> Dokumen</a> <br><br>

              ';} ?> </h6> 

            </div>

            <div class="card-body">

              <?php if($level == 5 || $level == 2 ){include 'filterDate.php';} ?>

              <br>

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>

                    <tr>

                      <th>No</th>
                      <th>No. Surat</th>
                      <th>No Rak</th>
                      <th>No Gedung</th>
                      <th>Nama Dokumen</th>
                      <th>Tanggal Bayar</th>
                      <th>Nama Vendor</th>
                      <th>No. Dok SAP</th>
                      <th>Currency</th>

                      <th>Amount</th>

                      <th style="width: 10px">Status</th>

                      <th <?php if($level == 6){echo 'hidden';} ?> >Action</th>

                      <th>Detail</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php foreach ($read as $r) {

                        if ($r['tgl_admin_out']) {

                          $status = 'Proses di Pajak';

                        }

                        if ($r['tgl_pajak_out']) {

                          $status = 'Proses di Akuntansi';

                        }

                        if ($r['tgl_akt_out']) {

                          $status = 'Proses di Keuangan';

                        }

                        if ($r['tgl_bayar']) {

                          $status = 'Selesai Bayar';

                        }

                        if ($r['tgl_pengarsipan']) {

                          $status = $r['bantex'];

                        }

                        if ($r['tgl_akt_out'] == '' && $r['pengembalian'] != '0' ) {

                          $status = 'Hold';

                        }

                     ?>

                    <tr>

                      <td></td>

                      <td><?php echo $r['no_surat'] ?></td>

                      <td><?php echo $r['no_rak'] ?></td>

                      <td><?php echo $r['no_gedung'] ?></td>

                      <td><?php echo $r['perihal'] ?></td>

                      <td><?php echo $r['tgl_bayar'] ?></td>

                      <td><?php echo $r['vendor'] ?></td>

                      <td ><?php echo $r['sap_no'] ?></td>

                      <td><?php echo $r['currency'] ?></td>

                      <td><?php echo $r['nominal'] ?></td>

                      <td><?php echo $status; ?></td>

                      <td <?php if($level == 6){echo 'hidden';} ?> style="text-align: center;" > 

                        <a href="<?php echo base_url('dokumen/edit/'.$r['dok_id']) ?>" class="btn btn-warning btn-circle btn-md"><i class="fas fa-pencil-alt"></i></a>

                       <?php if($level == 1 || $level == 2){echo '

                          <a href="#" id="delete" data-id="'.$r['dok_id'].'" class="btn btn-danger btn-circle btn-md"><i class="fas fa-trash"></i></a>

                       ';} ?>

                       </td>

                      <td style="text-align: center;" ><a href="<?php echo base_url('dokumen/view/'.$r['dok_id']) ?>" class="btn btn-success btn-circle btn-md"><i class="fas fa-eye"></i></a> 

                     <a href="#" data-toggle="modal" data-rak="<?php echo $r['no_rak'] ?>" data-gedung="<?php echo $r['no_gedung'] ?>" data-target="#modalArsip" class="btn btn-primary btn-circle btn-md rakgedung"><i class="fas fa-building"></i></a></td>

                    </tr>

                    <?php } ?>

                  </tbody>

                </table>

              </div>

            </div>

          </div>

        </div>

<?php include 'footer.php'; ?>

<script type="text/javascript">



$(document).ready(function(){

  $('#dataTable').DataTable();

})

  $('#dataTable').on('click', '#delete', function(){

    var currentrow = $(this).closest('tr')

    var id = $(this).data('id')

      swal({

        title: "Yakin akan menghapus dokumen "+id+" ?",

        icon: "warning",

        buttons: true,

        dangerMode: true,

      })

      .then((willDelete) => {

       

        if (willDelete) {

          $.ajax({

              type : "POST",

              url  : "<?php echo base_url('home/delDok')?>",

              dataType : "JSON",

              data : {id:id},

               success: function(data){

                swal("Sukses", "Data anda terhapus", "success");

                currentrow.remove()              

              },

              error: function(){

                swal("Gagal", "Maaf data tidak terhapus :)", "warning");

              }

          });

        }

      });

  })

</script>