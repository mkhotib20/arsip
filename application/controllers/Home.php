<?php 

/**

 * 

 */

class home extends CI_Controller

{

	public function __construct() {

        parent::__construct();

        if (!$this->session->has_userdata('username')) {

            redirect('login');

        }

    }

	public function ada()

	{

		echo $_POST['tgl_start'];

	}

	public function index()

	{

		if (isset($_POST['tgl_start']) && isset($_POST['tgl_end']) ) {

			$tgl_start = $_POST['tgl_start'];

			$tgl_end = $_POST['tgl_end'];

			$read = $this->data->readFilter($tgl_start,  $tgl_end)->result_array();

		}

		else{

			$read = $this->data->read('tb_dokumen')->result_array();

		}

		$data = array('read' => $read );

		$this->load->view('home', $data);

	}

	public function delDok()

	{

		$id = $this->input->post('id');

		echo json_encode($this->data->delete('tb_dokumen', 'dok_id', $id));

	}

	public function store()

	{

		//echo $tgl_akt_in = $this->input->post("tgl_akt_in");

		$verificator = $this->input->post("verificator");
		$cur_user = $this->session->userdata('level');

		

		$dok_id = $this->input->post('dok_id');
		$jumlahDok = $this->data->isExist($dok_id, $cur_user)->num_rows();

		if ($this->input->post('pengembalian') == 'on') {

			$pengembalian = 1;

		}

		else{

			$pengembalian = 0;

		}

		$pengembalian;		

		$tgl_akt_out = $this->input->post("tgl_akt_out");

		$tgl_admin_in = $this->input->post("tgl_admin_in");

		$tgl_admin_out = $this->input->post("tgl_admin_out");

		$keterangan = $this->input->post("keterangan");

		$sap_no = $this->input->post("sap_no");

		$tgl_bayar = $this->input->post("tgl_bayar");

		$no_gedung = $this->input->post("no_gedung");

		$no_rak = $this->input->post("no_rak");

		$bantex = $this->input->post("bantex");

		$tgl_pengarsipan = $this->input->post("tgl_pengarsipan");

		$unit_kerja = $this->input->post("unit_kerja");

		$no_surat = $this->input->post("no_surat");

		$no_dok_masuk = $this->input->post("no_dok_masuk");

		$tgl_keuangan = $this->input->post("tgl_keuangan");
		if (isset($tgl_akt_out) && !isset($tgl_keuangan) ) {
			$tgl_keuangan = $tgl_akt_out;
		}

		$vendor = $this->input->post("vendor");

		$invoice = $this->input->post("invoice");

		$currency = $this->input->post("currency");

		$nominal = $this->input->post("nominal");

		$perihal = $this->input->post("perihal");

		$ppn = $this->input->post("ppn");

		$tgl_pajak_in = $this->input->post("tgl_pajak_in");

		$tgl_pajak_out = $this->input->post("tgl_pajak_out");

		$jurnal = $this->input->post("jurnal");

		$pospk = $this->input->post("pospk");

		if ($tgl_akt_in == '') {
			$tgl_akt_in = $tgl_pajak_out;
		}

		$data = array(

				'dok_id' => $dok_id,

				'tgl_akt_in' => $tgl_akt_in,

				'verificator' => $verificator,

				'pengembalian' => $pengembalian,

				'tgl_akt_out' => $tgl_akt_out,

				'tgl_admin_in' => $tgl_admin_in,

				'tgl_admin_out' => $tgl_admin_out,

				'tgl_pengarsipan' => $tgl_pengarsipan,

				'keterangan' => $keterangan,

				'sap_no' => $sap_no,

				'tgl_bayar' => $tgl_bayar,

				'bantex' => $bantex,

				'no_rak' => $no_rak,

				'no_gedung' => $no_gedung,

				'unit_kerja' => $unit_kerja,

				'no_surat' => $no_surat,

				'no_dok_masuk' => $no_dok_masuk,

				'tgl_keuangan' => $tgl_keuangan,

				'vendor' => $vendor,

				'invoice' => $invoice,

				'currency' => $currency,

				'nominal' => $nominal,

				'perihal' => $perihal,

				'ppn' => $ppn,

				'tgl_pajak_in' => $tgl_pajak_in,

				'tgl_pajak_out' => $tgl_pajak_out,

				'jurnal' => $jurnal,

				'pospk' => $pospk);
		if ($this->data->replace('tb_dokumen', $data)) {
			if ($jumlahDok == 0 ) {
				$level = $this->session->userdata('level');
				$notif['notif_pengirim']=$cur_user;
				switch ($cur_user) {
					case 1:

						if ($tgl_pajak_in != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 4

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}

						break;

					

					case 2:

						if ($tgl_keuangan != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 3

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}elseif ($tgl_akt_in != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 5

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}elseif ($tgl_pajak_in != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 4

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}elseif ($tgl_admin_in != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 1

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}

						break;

					case 3:

						if ($tgl_keuangan != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 1

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}

						break;

					case 4:

						if ($tgl_akt_in != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 5

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}

						break;

					

					case 5:

						if ($tgl_keuangan != '') {

							$notif = array(

								'notif_doc' => $dok_id,

								'notif_status' => 0,

								'notif_timestamp' => time(),

								'notif_user' => 3

							);

							$notif['notif_pengirim'] = $cur_user; $this->data->insert('tb_notification', $notif);

						}

						break;

					

					default:

						

						break;

				}
			}
			
			$this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');

			redirect(base_url('dokumen'));

		}

		else{

			$this->session->set_flashdata('msg', '<script>swal("Gagal", "Data tidak tersimpan", "error")</script>');

			redirect(base_url('dokumen'));

		}

		

		

	}


	public function updateNotif()

	{

		$username = $this->input->post('username');

		$dok_id = $this->input->post('dok_id');

		$data = $this->data->markAsRead($username, $dok_id);

		echo json_encode($data);

	}

	public function clearNotif()

	{

		$username = $this->input->post('username');

		$data = $this->data->clear($username);

		echo json_encode($data);

	}

	public function generate()

	{

		$read = $this->data->read('tb_dokumen', 'dok_id', 'DOK128192');

		$cnt = $read->num_fields();

		$res=$read->result_array();

		for ($i=0; $i <$cnt ; $i++) { 

			echo '<input type ="text" class="form-control" value="" >';

			echo '<br>';

		}

		

	}

	public function addDokumen()

	{

		$vendor = $this->data->read('tb_vendor')->result_array();

		$mitra = $this->data->read('tb_mitra')->result_array();
		$curs = $this->data->read('tb_currency')->result_array();

		$data = array('vendor' => $vendor, 'mitra' => $mitra , 'curs' => $curs);

		$this->load->view('addDokumen', $data);

	}

	public function editDokumen($id)
	{
		$this->data->markAsRead($username, $dok_id);
		$vendor = $this->data->read('tb_vendor')->result_array();

		$mitra = $this->data->read('tb_mitra')->result_array();

		$read = $this->data->read('tb_dokumen', 'dok_id', $id)->result_array();
		$curs = $this->data->read('tb_currency')->result_array();

		$data = array('id' => $id, 'read' => $read, 'vdL' => $vendor, 'mtL' => $mitra , 'curs' => $curs);

		$this->load->view('editDokumen', $data);

	}

	public function currency()
	{
		
	}
	public function departemen()
	{
		
	}

	public function setting($id='')

	{

		$username = $this->session->userdata('username');

		$read = $this->data->read('tb_user', 'username', $username)->result_array();

		$data = array('id' => $id, 'read'=>$read);

		$this->load->view('profile', $data);

	}

	public function coba()

	{
		$notif = $this->data->getNotif(4)->result_array();
		echo "<pre>";
		print_r($notif);
		echo "</pre>";
		// ${exit();} 
		// foreach ($_POST as $key => $value) {

		//     echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";

		// }

	}

	public function updateProfile()

	{

		$col = $this->input->post('col');

		$value = $this->input->post('value');

		$id = $this->input->post('id');

		

		$data = array($col => $value);

		$this->session->set_userdata($col, $value);



		$upd = $this->data->update('tb_user', $data, 'username', $id);

		echo json_encode($upd);

	}



}

 ?>