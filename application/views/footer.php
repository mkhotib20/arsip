  
      </div>

      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalArsip" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Rak Dokumen</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p><small>Nomor Gedung</small> <br><b id="gedung"></b></p>
          <p><small>Nomor Rak</small> <br><b id="rak"></b></p>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

   

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
 
  <script type="text/javascript" src="<?=base_url('assets/')?>//jquery.inputmask.bundle.js" ></script>
  <script src="<?=base_url('assets/')?>/sweetalert.min.js"></script>


</body>
<script type="text/javascript">
  $(document).on('click', '.rakgedung', function(){
    var gedung = $(this).data('gedung')
    var rak = $(this).data('rak')
    $('#gedung').text(gedung)
    $('#rak').text(rak)
  })
  $('.date').inputmask({"mask": "99/99/9999"});
  $('input').attr('readonly', 'true');
  
  $('select[name="currency"]').hide()
  $('select[name="jenis_dok"]').hide()
  $('input[type="checkbox"]').attr('disabled', 'true');
  var level = '<?php echo $level ?>'

  switch (level) {
    case '1': //admin
      $('input[name="tgl_admin_in"]').removeAttr('readonly')
      $('input[name="tgl_admin_out"]').removeAttr('readonly')
      $('input[name="bantex"]').removeAttr('readonly')
      $('input[name="tahun"]').removeAttr('readonly')
      $('input[name="no_dok_masuk"]').removeAttr('readonly')
      
      $('input[name="currency"]').removeAttr('readonly')
      $('select[name="currency"]').show()
      $('input[name="currency"]').remove()

      $('input[name="keterangan"]').removeAttr('readonly')
      $('input[name="perihal"]').removeAttr('readonly')
      $('input[name="no_surat"]').removeAttr('readonly')
      $('input[name="tgl_pengarsipan"]').removeAttr('readonly')
      $('input[name="no_gedung"]').removeAttr('readonly')
      $('input[name="no_rak"]').removeAttr('readonly')
      $('input[name="nominal"]').removeAttr('readonly')
      $('input[name="vendor"]').remove()
      $('input[name="jenis_dok"]').remove()
      $('select[name="jenis_dok"]').show()
      $('select[name="vendor"]').show()
      $('input[name="unit_kerja"]').remove()
      $('select[name="unit_kerja"]').show()
      $('select[name="unit_kerja"]').removeAttr('disabled')

      break;
    case '2': //super admin
      $('input').removeAttr('readonly')
      $('select').removeAttr('readonly')
      $('input[name="vendor"]').remove()
      $('select[name="vendor"]').show()
      $('input[name="unit_kerja"]').remove()
      $('select[name="unit_kerja"]').show()
      $('select[name="jenis_dok"]').show()
        $('select[name="currency"]').show()
      break;
    case '3': //keuangan
      $('input[name="tgl_keuangan"]').removeAttr('readonly')
      $('input[name="tgl_bayar"]').removeAttr('readonly')
        $('select[name="currency"]').remove()
      if ($('input[name="tgl_keuangan"]').val() != '' ) {
        $('input[name="sap_no"]').removeAttr('readonly')
        $('input[name="nominal"]').removeAttr('readonly')
        $('select[name="vendor"]').remove()
        $('select[name="unit_kerja"]').remove()
      }
      break;
    case '4': //pajak
      $('input[name="tgl_pajak_in"]').removeAttr('readonly')
      $('input[name="tgl_pajak_out"]').removeAttr('readonly')
      if ($('input[name="tgl_pajak_in"]').val() != '' ) {
        $('input[name="nominal"]').removeAttr('readonly')
        $('input[name="currency"]').removeAttr('readonly')
        $('select[name="currency"]').show()
        $('input[name="currency"]').remove()
        $('input[name="keterangan"]').removeAttr('readonly')
        $('select[name="vendor"]').remove()
        $('select[name="unit_kerja"]').remove()
      $('input[name="no_faktur"]').removeAttr('readonly')
      }
      break;
    case '5': //akt
      $('input[name="tgl_akt_in"]').removeAttr('readonly')
      $('input[name="tgl_akt_out"]').removeAttr('readonly')
      $('input[name="tgl_start"]').removeAttr('readonly')
      $('input[name="tgl_end"]').removeAttr('readonly')
        $('input[name="vendor"]').remove()
        $('select[name="vendor"]').show()
        $('input[name="unit_kerja"]').remove()
      $('input[name="jenis_dok"]').remove()
      $('select[name="jenis_dok"]').show()
        $('select[name="unit_kerja"]').show()
      if ($('input[name="tgl_akt_in"]').val() != '' ) {
        $('input[name="currency"]').removeAttr('readonly')
        $('select[name="currency"]').show()
        $('input[name="currency"]').remove()
        $('input[name="ppn"]').removeAttr('readonly')
        $('input[name="keterangan"]').removeAttr('readonly')
        $('input[name="nominal"]').removeAttr('readonly')
        $('input[name="jurnal"]').removeAttr('readonly')
        $('input[name="pospk"]').removeAttr('readonly')
        $('input[name="no_surat"]').removeAttr('readonly')
        $('input[type="checkbox"]').removeAttr('disabled')
        $('input[name="perihal"]').removeAttr('readonly')
        $('input[name="verificator"]').removeAttr('readonly')
	    $('input[name="vendor"]').removeAttr('readonly')
        $('input[name="unit_kerja"]').removeAttr('readonly')

      }
      
      break;
  
    default:
      break;
  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('input[name="tgl_akt_in"]').change(function(){
      if ($(this).val() != '') {
        $('input[name="currency"]').removeAttr('readonly')
        $('select[name="currency"]').show()
        $('input[name="currency"]').remove()
        $('input[name="ppn"]').removeAttr('readonly')
        $('input[name="keterangan"]').removeAttr('readonly')
        $('select[name="nominal"]').removeAttr('readonly')
        $('input[name="jurnal"]').removeAttr('readonly')
        $('input[name="poskp"]').removeAttr('readonly')
        $('input[type="checkbox"]').removeAttr('disabled')
      }
    })
    
    $('input[name="tgl_admin_out"]').change(function(){
      $('input[name="tgl_pajak_in"]').val($('input[name="tgl_admin_out"]').val())
    })
    $('input[name="tgl_pajak_out"]').change(function(){
      $('input[name="tgl_akt_in"]').val($('input[name="tgl_pajak_out"]').val())
    })
    $('input[name="tgl_akt_out"]').change(function(){
      $('input[name="tgl_keuangan"]').val($('input[name="tgl_akt_out"]').val())
    })
  })

</script>
<script>
  var username = '<?php echo $level; ?>'
  $('.rmv').click(function(){
    var dok_id = $(this).attr('kh-value')
    //alert(dok_id)
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url('home/updateNotif')?>',
      async: true,
      dataType: 'JSON',
      data: {username:username, dok_id:dok_id},
      success: function(data){
          $('#alertsDropdown').find('.badge').remove()
        }
      
    })
  })
  $('.rmv').hover(function(){
    $(this).find('i').attr('class', 'fas fa-pencil-alt text-white')
    $(this).find('.icon-circle').attr('class', 'icon-circle bg-warning')

  }, function(){
    $(this).find('i').attr('class', 'fas fa-file-alt text-white')
    $(this).find('.icon-circle').attr('class', 'icon-circle bg-primary')
  })
  $('#clearAll').click(function(){
    $.ajax({
      type: 'POST',
      url: '<?php echo base_url('home/clearNotif')?>',
      async: true,
      dataType: 'JSON',
      data: {username:username},
      success: function(data){
        $('.1').remove()
          
        }
    })
  })
</script>
<?php echo $this->session->flashdata('msg'); ?>
</html>
