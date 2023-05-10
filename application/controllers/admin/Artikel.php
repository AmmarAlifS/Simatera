<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('MArtikel');
	}

	public function index()
	{
		$data['art'] = $this->MArtikel->tampil()->result();
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/list_artikel.php', $data);
		$this->load->view('admin/themes/footer.php');
	}

	public function post()
	{
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/post_artikel.php');
		$this->load->view('admin/themes/footer.php');
	}

	function simpan_tulisan(){
		$config['upload_path'] = './assets/images/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = TRUE;
		$artikel_id=strip_tags($this->input->post('artikel_id'));	
		$artikel_judul=strip_tags($this->input->post('artikel_judul'));
		$artikel_isi=strip_tags($this->input->post('artikel_isi'));
		$tanggal=strip_tags($this->input->post('tanggal'));
		$vidio=strip_tags($this->input->post('vidio'));
		$author=strip_tags($this->input->post('author'));
 
		$data = array(
			'artikel_id' => $artikel_id,
			'artikel_judul' => $artikel_judul,
			'artikel_isi' => $artikel_isi,
			'tanggal' => $tanggal,
			'vidio' => $vidio,
			'author' => $author,
			);
		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$config['image_library']='gd2';
				$config['source_image']='./assets/images/'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 848;
				$config['height']= 480;
				$config['new_image']= './assets/images/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar=$gbr['file_name'];
				$this->MArtikel->simpan_tulisan($artikel_judul,$artikel_isi,$tanggal,$gambar,$vidio,$author);
				echo $this->session->set_flashdata('msg','success');
				redirect('admin/Artikel/index');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/Artikel/index');
			}

		}else{
			redirect('admin/Artikel/index');
		}
	}
}