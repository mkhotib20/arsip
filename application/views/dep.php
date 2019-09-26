<?php include 'header.php'; ?>

        <div class="container-fluid">

          <?php //include 'breadcumb.php'; ?>
          <h1 class="h3 mb-2 text-gray-800">List Departemen</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form</h6>
            </div>
            <div class="card-body">
              <?php echo form_open('setting/saveDep') ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-gorup">
                      <label>Nama Unit Kerja</label>
                      <input type="text" class="form-control" name="dep">
                      <input type="text" value="" hidden="" name="id">
                    </div>
                  </div>
                </div>
                <br>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-md float-right">
                  <input type="reset" value="Reset" class="btn btn-dark btn-md float-right mr-2">
              </form>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Vendor</th>
                      <th hidden="">Nama Vendor</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($dep as $vd) { ?>
                    <tr>
                      <td></td>
                      <td><?php echo $vd['dep_name'] ?></td>
                      <td hidden="" ><?php echo $vd['dep_id'] ?></td>
                      <td style="text-align: center;" ><a href="#" id="delete" class="btn btn-danger btn-circle btn-md"><i class="fas fa-trash"></i></a> <a id="edit" href="#" class="btn btn-warning btn-circle btn-md"><i class="fas fa-pencil-alt"></i></a></td>
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
  $('#dataTable').on('click', '#edit', function(){
    var currentrow = $(this).closest('tr')
    var vd = currentrow.find('td:eq(1)').text()
    var id = currentrow.find('td:eq(2)').text()
    $('input[name="dep"]').val(vd)
    $('input[name="id"]').val(id)
  })
    $('#dataTable').on('click', '#delete', function(){
    var currentrow = $(this).closest('tr')
    var vd = currentrow.find('td:eq(1)').text()
    var id = currentrow.find('td:eq(2)').text()
      swal({
        title: "Yakin akan menghapus unit kerja "+vd+" ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
       
        if (willDelete) {
          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('setting/deleteStg')?>",
              dataType : "JSON",
              data : {id:id, name:'dep_id', tbl:'tb_dep'},
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
