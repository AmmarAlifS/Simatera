<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		if (!$this->session->userdata('email')) {
            redirect('Auth_login'); // Redirect to login page if not logged in
        }
		$this->load->helper('url');
		$this->load->model('m_kategori');
		$this->load->library('upload');
		$this->load->library('session');
	}

	function index()
	{
		$data['login_simatera'] = $this->db->get_where('login_simatera', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->m_kategori->tampil_data()->result();
		$this->load->view('admin/themes/header.php', $data);
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/kategori.php', $data);
		$this->load->view('admin/themes/footer.php');	

	}
	// function index(){
	// 	$data['product'] = $this->m_data->tampil_data()->result();
	// 	$this->load->view('dashboard',$data);
	// }

	// function tambah_kategori(){
		
	// 	$data['title'] = $this->db->query("SELECT * FROM tbl_identitas")->row()->identitas_nama;
	// 	$this->load->view('admin/v_employee_input', $data);
	// }

	function tambah_kategori(){
		$kategoricode = $this->input->post('kategoricode');
		$nama_kategori = $this->input->post('nama_kategori');
 
		$data = array(
			'kategoricode' => $kategoricode,
			'nama_kategori' => $nama_kategori
			);
		$this->m_kategori->input_data($data,'kategori');
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/Kategori/index');
	}

	function hapus($kategoricode){
		$where = array('kategoricode' => $kategoricode);
		$this->m_kategori->hapus_data($where,'kategori');
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Kategori/index');
	}

	function edit($kategoricode){
		$where = array('id' => $kategoricode);
		$data['employee'] = $this->m_kategori->edit_data($where,'kategori')->result();
		$data['title'] = $this->db->query("SELECT * FROM tbl_identitas")->row()->identitas_nama;
		echo $this->session->set_flashdata('msg','info');
		$this->load->view('admin/kategori',$data);
	}

	function update_kategori(){
		$kategoricode = $this->input->post('kategoricode');
		$nama_kategori = $this->input->post('nama_kategori');
 
		$data = array(
			'kategoricode' => $kategoricode,
			'nama_kategori' => $nama_kategori
			);

		$where = array(
			'kategoricode' => $kategoricode
			);

	$this->m_kategori->update_data($where,$data,'kategori');
	echo $this->session->set_flashdata('msg','info');
	redirect('admin/Kategori/index');
}

}
?>