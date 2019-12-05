 <li class="nav-item <?php if($this->uri->segment(1)=='setting'){echo 'active';} ?>">

    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">

      <i class="fas fa-fw fa-cogs"></i>

      <span>Setting</span>

    </a>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">

      <div class="bg-white py-2 collapse-inner rounded">

        <h6 class="collapse-header">Menu Setting:</h6>

        <a class="collapse-item" href="<?php echo base_url('setting/user') ?>">User</a>

        <a class="collapse-item" href="<?php echo base_url('setting/vendor') ?>">Vendor</a>
        <a class="collapse-item" href="<?php echo base_url('setting/departemen') ?>">Departemen</a>
        <a class="collapse-item" href="<?php echo base_url('setting/currency') ?>">Currency</a>

        <a class="collapse-item" href="<?php echo base_url('setting/unit-kerja') ?>">Unit Kerja</a>
		<a class="collapse-item" href="<?php echo base_url('setting/jenis') ?>">Jenis Dokumen</a>

      </div>

    </div>

  </li>
  <li class="nav-item <?php if($this->uri->segment(2)=='mass-move'){echo 'active';} ?>">

        <a class="nav-link" href="<?php echo base_url('dokumen/mass-move') ?>">

          <i class="fas fa-fw fa-table"></i>

          <span>Pemindahan Massal Dokumen</span></a>

      </li>