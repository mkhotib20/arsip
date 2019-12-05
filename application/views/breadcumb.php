<nav aria-label="breadcrumb">

	<ol class="breadcrumb">

		<?php 

			$identity = count($this->uri->segment_array());

			for ($i=1; $i < $identity ; $i++) {?>

				<li class="breadcrumb-item "><a href="<?php echo base_url(); 

					for ($j=1; $j <= $i; $j++) {

						echo $uriL = $this->uri->segment($j).'/';

					}

				 ?>"><?php echo ucfirst($this->uri->segment($i)) ?></a></li>

		<?php } ?>

		<li class="breadcrumb-item active"><?php ucfirst($this->uri->segment($identity)); ?></li>

	</ol>

</nav>



		