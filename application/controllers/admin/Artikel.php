<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		$this->load->library('upload');
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


	public function simpan_tulisan(){
		$config['upload_path'] = './assets/img/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
		$config['encrypt_name'] = TRUE;
		$id_artikel=strip_tags($this->input->post('id_artikel'));	
		$judul=strip_tags($this->input->post('judul'));
		$artikel=strip_tags($this->input->post('artikel'));
		$video=strip_tags($this->input->post('video'));
		$tanggal=strip_tags($this->input->post('tanggal'));
 
		$data = array(
			'id_artikel' => $id_artikel,
			'judul' => $judul,
			'artikel' => $artikel,
			'video' => $video,
			'tanggal' => $tanggal,
			);
		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$config['image_library']='gd2';
				$config['source_image']='./assets/img/'.$gbr['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['quality']= '60%';
				$config['width']= 848;
				$config['height']= 480;
				$config['new_image']= './assets/img/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$foto=$gbr['file_name'];
				$this->MArtikel->simpan_tulisan($judul,$artikel,$foto,$video,$tanggal);
				redirect('admin/Artikel/index');
			}else{
				redirect('admin/Artikel/index');
			}

		}else{
			redirect('admin/Artikel/index');
		}
	}
}