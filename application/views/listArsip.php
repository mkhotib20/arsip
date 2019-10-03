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
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>#</th>
                        <th>No. Surat</th>
                        <th>Nomor Gedung</th>
                        <th>Nomor Rak</th>
                        <th>Jenis dokumen</th>
                        <th>Departemen</th>
                        <th>Bantex</th>
                        <th>Edit Lokasi Dokumen</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($read as $dk) {
                     ?>
                    <tr>
                        <td></td>
                        <td><?php echo $dk['no_surat'];?></td>
                        <td><?php echo $dk['no_gedung'];?></td>
                        <td><?php echo $dk['no_rak'];?></td>
                        <td><?php echo $dk['jenis_dokumen'];?></td>
                        <td><?php echo $dk['dep_name'];?></td>
                        <td><?php echo $dk['bantex'];?></td>
                        <td><a href="<?php echo base_url('dokumen/pengarsipan/lokasi/'.$dk['arsip_id']) ?>" 
                        class="btn btn-warning btn-circle btn-md"><i class="fas fa-pencil-alt"></i></a></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
<?php include 'footer.php'; ?>
<script>
$(document).ready(function(){
  $('#dataTable').DataTable();
})
  $('#dataTable').on('click', '#delete', function(){
    var currentrow = $(this).closest('tr')
    var id = currentrow.find('td:eq(4)').text()
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
</script>