<?php
class pengarsipan extends CI_Controller
{
    public function index()
    {
        $read = $this->data->getArsip()->result_array();
        $data = array('read' => $read );
		$this->load->view('listArsip', $data);
    }
    public function edit($id)
    {
        $read = $this->data->read('tb_arsip', 'arsip_id', $id)->result_array();
        foreach ($read as $rd) {
            $data = array(
                'id' => $id,
                'no_surat' => $rd['no_surat'], 
                'no_gedung' => $rd['no_gedung'],
                'bantex' => $rd['bantex'],
                'no_rak' => $rd['no_rak'],
                'jenis_dokumen' => $rd['jenis_dokumen'],
                'departemen' => $rd['departemen'],
                'dep' => $this->data->read('tb_dep')->result_array()
            );
        }
        
		$this->load->view('pengarsipan', $data);
    }
    public function pindah()
    {
		$this->load->view('mass-move');
    }
    public function excPindah()
    {
		$th = $this->input->post('tahun');
		// $no_rak = $this->input->post('no_rak');
		$no_gedung = $this->input->post('no_gedung');
    	$exc1 = $this->data->findReplace('tb_dokumen', $no_gedung, $th);
    	$exc2 = $this->data->findReplace('tb_arsip', $no_gedung, $th);
		if($exc1 && $exc2){
		    redirect('dokumen/mass-move');
        }
        redirect('dokumen/mass-move');
    }
    
    public function tambah()
    {
        $data = array(
            'id' => '',
            'no_surat' => '', 
            'no_gedung' => '',
            'no_rak' => '',
            'bantex' => '',
            'jenis_dokumen' => '',
            'dep' => $this->data->read('tb_dep')->result_array()
        );
		$this->load->view('pengarsipan', $data);
    }
    public function store()
    {
        $arsip_id= $this->input->post('arsip_id');
        $no_gedung = $this->input->post('no_gedung');
        $no_surat = $this->input->post('no_surat');
        $no_rak = $this->input->post('no_rak');
        $jenis_dokumen = $this->input->post('jenis_dokumen');
        $bantex = $this->input->post('bantex');
        $departemen = $this->input->post('departemen');

        $data = array('no_gedung' => $no_gedung, 
            'no_rak' => $no_rak,
            'jenis_dokumen' => $jenis_dokumen,
            'departemen' => $departemen,
            'bantex' => $bantex,
            'no_surat' => $no_surat,
            'arsip_id' => $arsip_id,
        );
        if ($this->data->replace('tb_arsip', $data)) {
            $this->session->set_flashdata('msg', '<script>swal("Sukses", "Data anda tersimpan", "success")</script>');
			redirect(base_url('dokumen/pengarsipan'));
        }
        else{
            $this->session->set_flashdata('msg', '<script>swal("Gagal", "Terjadi kesalahan", "error")</script>');
			redirect(base_url('dokumen/pengarsipan'));
        }
    }
}

?>