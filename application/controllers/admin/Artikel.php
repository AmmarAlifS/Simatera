<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{	
		parent::__construct();
		// if (!$this->session->userdata('email')) {
        //     redirect('Auth_login'); // Redirect to login page if not logged in
        // }
		$this->load->library('upload');
		$this->load->helper('url');
		$this->load->helper('text');
		$this->load->model('MArtikel');
		$this->load->library('session');
	}

	public function index()
	{
		$data['login_simatera'] = $this->db->get_where('login_simatera', ['email' => $this->session->userdata('email')])->row_array();
		$data['art'] = $this->MArtikel->tampil()->result();
		$this->load->view('admin/themes/header.php', $data);
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/list_artikel.php', $data);
		$this->load->view('admin/themes/footer.php');
	}


	public function post()
	{
		$data['login_simatera'] = $this->db->get_where('login_simatera', ['email' => $this->session->userdata('email')])->row_array();
		$data['dd'] = $this->MArtikel->get_one('kategori');
		$this->load->view('admin/themes/header.php', $data);
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/post_artikel.php', $data);
		$this->load->view('admin/themes/footer.php');
	}

	public function simpan_artikel()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;

		$id_artikel = strip_tags($this->input->post('id_artikel'));
		$judul = strip_tags($this->input->post('judul'));
		$artikel=$this->input->post('artikel');
		$video = strip_tags($this->input->post('video'));
		$kategori=strip_tags($this->input->post('kategori'));

		$data = array(
			'id_artikel' => $id_artikel,
			'judul' => $judul,
			'artikel' => $artikel,
			'video' => $video,
			'kategori' => $kategori,
		);

		$this->upload->initialize($config);

		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/img/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 848;
				$config['height'] = 480;
				$config['new_image'] = './assets/img/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$foto = $gbr['file_name'];

				// Second image
				if ($this->upload->do_upload('filefoto2')) {
					$gbr2 = $this->upload->data();
					$config['source_image'] = './assets/img/' . $gbr2['file_name'];
					$config['new_image'] = './assets/img/' . $gbr2['file_name'];
					$this->image_lib->initialize($config);
					$this->image_lib->resize();

					$foto2 = $gbr2['file_name'];

					// Third image
					if ($this->upload->do_upload('filefoto3')) {
						$gbr3 = $this->upload->data();
						$config['source_image'] = './assets/img/' . $gbr3['file_name'];
						$config['new_image'] = './assets/img/' . $gbr3['file_name'];
						$this->image_lib->initialize($config);
						$this->image_lib->resize();

						$foto3 = $gbr3['file_name'];

						$this->MArtikel->simpan_artikel($judul, $artikel, $kategori, $foto, $foto2, $foto3, $video);
						redirect('admin/Artikel/index');
					} else {
						redirect('admin/Artikel/index');
					}
				} else {
					redirect('admin/Artikel/index');
				}
			} else {
				redirect('admin/Artikel/index');
			}
		} else {
			redirect('admin/Artikel/index');
		}
	}


	function hapus($id_artikel){
		$where = array('id_artikel' => $id_artikel);
		$this->MArtikel->hapus_data($where,'artikel_simatera');
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/Artikel/index');
	}

	function get_update(){
		$id_artikel=$this->uri->segment(4);
		$x['dd'] = $this->MArtikel->get_one('kategori');
		$x['data']=$this->MArtikel->get_tulisan_by_kode($id_artikel);
		$this->load->view('admin/themes/header.php');
		$this->load->view('admin/themes/side_nav.php');
		$this->load->view('admin/main/edit_artikel',$x);
		$this->load->view('admin/themes/footer.php');

	}

	function update_artikel()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE;
		
		$id_artikel = strip_tags($this->input->post('id_artikel'));
		$judul = strip_tags($this->input->post('judul'));
		$artikel=$this->input->post('artikel');
		$kategori = strip_tags($this->input->post('kategori'));
		$video = strip_tags($this->input->post('video'));
	
		$data = array(
			'id_artikel' => $id_artikel,
			'judul' => $judul,
			'artikel' => $artikel,
			'kategori' => $kategori,
			'video' => $video
		);
	
		$this->upload->initialize($config);
	
		// Upload the first image
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/img/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 848;
				$config['height'] = 480;
				$config['new_image'] = './assets/img/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
	
				$foto = $gbr['file_name'];
			}
		}
	
		// Upload the second image
		if (!empty($_FILES['filefoto2']['name'])) {
			if ($this->upload->do_upload('filefoto2')) {
				$gbr2 = $this->upload->data();
				$config['source_image'] = './assets/img/' . $gbr2['file_name'];
				$config['new_image'] = './assets/img/' . $gbr2['file_name'];
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
	
				// $foto2['foto2'] = $gbr2['file_name'];
				$foto2 = $gbr2['file_name'];
			}
		}
	
		// Upload the third image
		if (!empty($_FILES['filefoto3']['name'])) {
			if ($this->upload->do_upload('filefoto3')) {
				$gbr3 = $this->upload->data();
				$config['source_image'] = './assets/img/' . $gbr3['file_name'];
				$config['new_image'] = './assets/img/' . $gbr3['file_name'];
				$this->image_lib->initialize($config);
				$this->image_lib->resize();
	
				$foto3 = $gbr3['file_name'];
			}
		}
	    // Check if any images were uploaded
		if (!empty($foto) || !empty($foto2) || !empty($foto3)) {
			// Update artikel with images
			$this->MArtikel->update_artikel($id_artikel, $judul, $artikel, $kategori, $foto, $foto2, $foto3, $video);
			redirect('admin/Artikel/index');
		} else {
			// Update artikel without images
			$this->MArtikel->update_artikel_tanpaimg($id_artikel, $judul, $artikel, $kategori, $video);
			redirect('admin/Artikel/index');
		}
	
		echo $this->session->set_flashdata('msg', 'info');
		redirect('admin/Artikel/index');
	}


	// function update_artikel(){
	// 	$config['upload_path'] = './assets/img/';
	// 	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	// 	$config['encrypt_name'] = TRUE;
	// 	$id_artikel=strip_tags($this->input->post('id_artikel'));
	// 	$judul=strip_tags($this->input->post('judul'));
	// 	$artikel=strip_tags($this->input->post('artikel'));
	// 	$foto=strip_tags($this->input->post('foto'));
	// 	$foto2=strip_tags($this->input->post('foto2'));
	// 	$foto3=strip_tags($this->input->post('foto3'));
	// 	$video=strip_tags($this->input->post('video'));

	// 	$data = array(
	// 		'id_artikel' => $id_artikel,
	// 		'judul' => $judul,
	// 		'artikel' => $artikel,
	// 		'video' => $video,
	// 		);
		

	// 	$this->upload->initialize($config);
	// 	if(!empty($_FILES['filefoto']['name']))
	// 	{
	// 		if ($this->upload->do_upload('filefoto'))
	// 		{
	// 			$gbr = $this->upload->data();
	// 			$config['image_library']='gd2';
	// 			$config['source_image']='./assets/img/'.$gbr['file_name'];
	// 			$config['create_thumb']= FALSE;
	// 			$config['maintain_ratio']= FALSE;
	// 			$config['quality']= '60%';
	// 			$config['width']= 848;
	// 			$config['height']= 480;
	// 			$config['new_image']= './assets/img/'.$gbr['file_name'];
	// 			$this->load->library('image_lib', $config);
	// 			$this->image_lib->resize();

	// 			$foto=$gbr['file_name'];
	// 			$id_artikel=strip_tags($this->input->post('id_artikel'));
	// 			$judul=strip_tags($this->input->post('judul'));
	// 			$artikel=strip_tags($this->input->post('artikel'));
	// 			$video=strip_tags($this->input->post('video'));

	// 			// $path='./assets/img/'.$foto;
	// 			// unlink($path);

	// 			$this->MArtikel->update_artikel($id_artikel,$judul,$artikel,$foto,$video);
	// 			echo $this->session->set_flashdata('msg','info');
	// 			redirect('admin/Artikel/index');

	// 		}else{
	// 			echo $this->session->set_flashdata('msg','warning');
	// 			redirect('admin/Artikel/post');
	// 		}
	// 	}else{
	// 		$id_artikel=strip_tags($this->input->post('id_artikel'));
	// 		$judul=strip_tags($this->input->post('judul'));
	// 		$artikel=strip_tags($this->input->post('artikel'));
	// 		$video=strip_tags($this->input->post('video'));
	// 		$this->MArtikel->update_artikel_tanpaimg($id_artikel,$judul,$artikel,$video);
	// 		echo $this->session->set_flashdata('msg','info');
	// 		redirect('admin/Artikel/index');
	// 	} 
	// }

}