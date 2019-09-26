<?php 
/**
 * 
 */
class login extends CI_Controller
{
	
	
	public function index()
	{
		$this->load->view('login');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', '<script>swal("Infor", "Anda telah logout", "info")</script>');
		redirect(base_url());
	}
	public function proses()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$query = $this->data->read('tb_user', 'username', $user);

		if ($query->num_rows()!=0) {
			$read = $query->result_array();
			foreach ($read as $r) {
				$password = $r['password'];
				$username = $r['username'];
				$nama = $r['nama_lengkap'];
				$level = $r['role'];
			}
			if ($pass==$password) {
				$this->session->set_userdata('username', $username);
				$this->session->set_userdata('level', $level);
				$this->session->set_userdata('nama_lengkap', $nama);
				$this->session->set_flashdata('msg', '<script>swal("Info", "Selamat datang", "info")</script>');
		        redirect(base_url('dokumen'));
			}
			else{
					echo '<div class="alert alert-danger">Login failed.</div>';
					$this->session->set_flashdata('msg', '<script>swal("Failed", "Data dan password anda salah", "error")</script>');
		          redirect(base_url('login'));
			}
		}
		else{
					$this->session->set_flashdata('msg', '<script>swal("Failed", "Data dan password anda salah", "error")</script>');
	          redirect(base_url('login'));
		}
	}

}
 ?>