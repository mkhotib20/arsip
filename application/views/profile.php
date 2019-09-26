<?php include 'header.php'; 
  foreach ($read as $r) {
    $id = $r['username'];
    $nama = $r['nama_lengkap'];
    $pwd = $r['password'];
  }
?>
<style type="text/css">
  .form-text{
    border: unset; 
    background-color: unset;
  }
  .save{
    display: none;
  }
</style>

        <div class="container-fluid">

          <?php //include 'breadcumb.php'; ?>
          <h1 class="h3 mb-2 text-gray-800">Setting Profile</h1>
          <div class="row">
            <div class="col-md-6 offset-md-3">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Form</h6>
                </div>
                <div class="card-body">
                      <div class="form-group">
                        <label>Username <a class="edit" href="#">Edit</a><a class="save" href="#">Save</a></label>
                        <input value="<?php echo $id ?>" type="text" class="form-text" readonly="" name="username"> 
                      </div>
                      <div class="form-group">
                        <label>Nama Lengkap <a class="edit" href="#">Edit</a><a class="save" href="#">Save</a></label>
                        <input value="<?php echo $nama ?>" type="text" class="form-text" readonly="" name="nama_lengkap">
                      </div>
                      <div class="form-group">
                        <label>Password <a class="edit" href="#">Edit</a><a class="save" href="#">Save</a></label>
                        <input value="<?php echo $pwd ?>" type="password" class="form-text" readonly="" name="password">
                      </div>
                </div>
              </div>
              
            </div>
          </div>

        </div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
  $(document).ready(function(){

    var id = '<?php echo $id ?>'
   
    $('.form-group').on('click', '.edit', function(){
      var input = $(this).parents('.form-group').find('input')
      var save = $(this).parents('.form-group').find('.save')
      var name = input.attr('name')
      var val = input.val()

      input.attr('class', 'form-control')
      input.removeAttr('readonly')
      $(this).toggle()
      save.toggle()
    })
    $('.form-group').on('click', '.save', function(){
      var edit = $(this).parents('.form-group').find('.edit')
      var input = $(this).parents('.form-group').find('input')
      var name = input.attr('name')
      var val = input.val()
      input.attr('class', 'form-text')
      input.attr('readonly', 'true')
      $(this).toggle()
      edit.toggle()
      
      $.ajax({
          type : "POST",
          url  : "<?php echo base_url('home/updateProfile')?>",
          dataType : "JSON",
          data : {value:val, col: name, id:id},
           success: function(data){
            swal("Sukses", "Data anda tersimpan", "success");
             input.val(val)              
          },
          error: function(){
            swal("Gagal", "Maaf data tidak tersimpan :)", "warning");
          }
      });
    })

  })
</script>