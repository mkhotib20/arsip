<?php include 'header.php'; ?>
<style type="text/css">

</style>
        <div class="container-fluid">

          <?php //include 'breadcumb.php'; ?>
          <h1 class="h3 mb-2 text-gray-800">List User</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Table</h6>
            </div>
            <div class="card-body">
              <?php echo form_open('setting/saveUser') ?>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-gorup">
                      <label>Username</label>
                      <input type="text" class="form-control" name="username">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-gorup">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-gorup">
                      <label>Password</label>
                      <input type="password" class="form-control" name="pwd">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-gorup">
                      <label>Role User</label>
                      <select class="form-control" name="role" >
                        <option disabled="" selected="">--pilih role--</option>
                        <?php foreach ($role as $r) { ?>
                        <option value="<?php echo $r['role_id'] ?>" ><?php echo ucfirst($r['role_name']) ?></option>
                        <?php } ?>
                      </select>
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
                      <th>Nama User</th>
                      <th>Role</th>
                      <th>Username</th>
                      <th hidden="">Nama Vendor</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($read as $key) { ?>
                    <tr>
                      <td></td>
                      <td><?php echo $key['nama_lengkap'] ?></td>
                      <td><?php echo ucfirst($key['role_name']) ?></td>
                      <td><?php echo $key['username'] ?></td>
                      <td hidden="" ><?php echo $key['role'] ?></td>
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
    var nama = currentrow.find('td:eq(1)').text()
    var username = currentrow.find('td:eq(3)').text()
    var role = currentrow.find('td:eq(4)').text()
    $('input[name="nama"]').val(nama)
    $('input[name="username"]').val(username)
    $('input[name="pwd"]').val(username)
    $('select[name="role"]').val(role)
  })

  $('#dataTable').on('click', '#delete', function(){
    var currentrow = $(this).closest('tr')
    var id = currentrow.find('td:eq(3)').text()
      swal({
        title: "Yakin akan menghapus user "+id+" ?",
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
              data : {id:id, name:'username', tbl:'tb_user'},
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
