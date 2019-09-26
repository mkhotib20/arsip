<?php 
/**
 * 
 */
class setting extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata('username')) {
            redirect('login');
        }
    }	
	public function index()
	{
		$read = $this->data->readUser()->result_array();
		$role = $this->data->getRole()->result_array();
		$data = array('role' => $role, 'read' => $read);
		$this->load->view('user', $data);
	}
	public function deleteStg()
	{
		$name = $this->input->post('name');
		$tbl = $this->input->post('tbl');
		$id = $this->input->post('id');
		echo json_encode($this->data->delete($tbl, $name, $id));
	}
	public function vendor()
	{
		$read = $this->data->read('tb_vendor')->result_array();
		$data = array('vendor' => $read);
		$this->load->view('vendor', $data);
	}
	public function unitKerja()
	{
		$read = $this->data->read('tb_mitra')->result_array();
		$data = array('vendor' => $read);
		$this->load->view('unitKerja', $data);
	}
	public function departemen()
	{
		$read = $this->data->read('tb_dep')->result_array();
		$data = array('dep' => $read);
		$this->load->view('dep', $data);
	}
	public function saveUser()
	{
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$pwd = $this->input->post('pwd');
		$role = $this->input->post('role');
		$data = array(
			'nama_lengkap' => $nama,
			'username' => $username,
			'role' => $role,
			'password' => $pwd,

			 );
		if ($this->data->replace('tb_user', $data)) {
			$this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');
			redirect(base_url('setting/user'));
		}
	}
	public function saveVendor()
	{
		$vendor = $this->input->post('vendor');
		$id = $this->input->post('id');

		$data = array(
			'vendor_id' => $id,
			'vendor_nama' => $vendor

			 );
		if ($this->data->replace('tb_vendor', $data)) {
			$this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');
			redirect(base_url('setting/vendor'));
		}
	}
	public function saveUk()
	{
		$uk = $this->input->post('uk');
		$id = $this->input->post('id');

		$data = array(
			'mitra_id' => $id,
			'mitra_nama' => $uk

			 );
		if ($this->data->replace('tb_mitra', $data)) {
			$this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');
			redirect(base_url('setting/unit-kerja'));
		}
	}
	public function saveDep()
	{
		$uk = $this->input->post('dep');
		$id = $this->input->post('id');

		$data = array(
			'dep_id' => $id,
			'dep_name' => $uk

			 );
		if ($this->data->replace('tb_dep', $data)) {
			$this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');
			redirect(base_url('setting/departemen'));
		}
	}

}
 ?>