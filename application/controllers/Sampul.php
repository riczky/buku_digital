<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampul extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Check jika tidak ada user id
		check_not_login();
		$this->load->model('sampul_m');
		$this->load->model('kategori_m');
		$this->load->model('keahlian_m');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data = array(
            'title' => 'Data Sampul',
            'buku' => $this->sampul_m->get_data_sampul()
        );
        $this->template->load('template','sampul/sampul_data', $data);
	}

	public function add()
	{
		$data = array(
            'title' => 'Add Sampul',
            'kategori' => $this->kategori_m->get_data(),
            'keahlian' => $this->keahlian_m->get_data(),
            'buku' => $this->sampul_m->get_data_sampul(),
            // 'data' => $this->db->get('tbl_buku')->result()
        );
         $this->template->load('template','sampul/sampul_form_add', $data);
	}

	public function edit($id_sampul)
	{
		$data = array(
            'title' => 'Edit Sampul',
            'kategori' => $this->kategori_m->get_data(),
            'keahlian' => $this->keahlian_m->get_data(),
            'sampul' => $this->sampul_m->detail_data($id_sampul)
            // 'data' => $this->sampul_m->getDataById($id)
            // 'data' => $this->db->get('tbl_buku')->result(),

        );
         $this->template->load('template','sampul/sampul_form_edit', $data);
	}	

	public function prosesAdd()
	{
		if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('id_sampul', 'Id Sampul', 'required');
            $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
            $this->form_validation->set_rules('penulis', 'Penulis', 'required');
            $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
            $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('id_keahlian', 'Keahlian', 'required');
            
            $config['upload_path']          = './fileSampul/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = 3072;
            // $config['encrypt_name']            = TRUE;
            
            $this->load->library('upload',$config);

            // File1
            if (!empty($_FILES['file_sampul']['name'])) {
                  $this->upload->do_upload('file_sampul');
                  $data1 = $this->upload->data();
                  $file1 = $data1['file_name'];
            }
            // File2
            // if (!empty($_FILES['file_sampul']['name'])) {
            //       $this->upload->do_upload('file_sampul');
            //       $data2 = $this->upload->data();
            //       $file2 = $data2['file_name'];
            // }
            if ($this->form_validation->run()) {
                  $id_buku = $this->input->post('id_buku');
            	$id_sampul = $this->input->post('id_sampul');
                  $judul = $this->input->post('judul_buku');
                  $penulis = $this->input->post('penulis');
                  $penerbit = $this->input->post('penerbit');
                  $deskripsi = $this->input->post('deskripsi');
                  $kategori = $this->input->post('id_kategori');
                  $keahlian = $this->input->post('id_keahlian');

                  	$data = [	'id_buku' => $id_sampul,
                                    'id_sampul' => $id_sampul,		
                  			'judul_buku' => $judul, 
                                    'penulis' => $penulis,
                                    'penerbit' => $penerbit,
                                    'deskripsi' => $deskripsi,
                                    'id_kategori' => $kategori,
                                    'id_keahlian' => $keahlian,
                                    // 'user_id' => $user_id,
                                    // 'file_buku' => $file1,
                                    'file_sampul' => $file1
                                     ];
                        $insert = $this->db->insert('tbl_sampul',$data);
                        if ($insert) {
                              $this->session->set_flashdata('success', 'Data Buku berhasil disimpan');
                              redirect('sampul');
                        } else{
                              redirect('sampul');
                        }                        
                  }

            }
	}

	
	public function prosesEdit($id_sampul)
	{
		if (isset($_POST['submit'])) {
            
            $file_sampul = $_FILES['file_sampul']['name'];
            $old_image = $_FILES['old_image']['name'];   
            
            $id_buku = $this->input->post('id_buku');
            $id = $this->input->post('id_sampul');
            $judul = $this->input->post('judul_buku');
            $penulis = $this->input->post('penulis');
            $penerbit = $this->input->post('penerbit');
            $deskripsi = $this->input->post('deskripsi');
            $kategori = $this->input->post('id_kategori');
            $keahlian = $this->input->post('id_keahlian');
            // $old_image = $this->input->post('old_image');

            $config['upload_path']          = './fileSampul/';
            $config['allowed_types']        = 'png|jpg|jpeg';
            $config['max_size']             = 3072;
            // $config['encrypt_name']            = TRUE;
            
            $this->load->library('upload',$config);

            if (!$this->upload->do_upload('file_sampul')) {
               $old_image=$this->upload->data('file_name');
               
            }else{
               $sampul = $this->sampul_m->detail_data($id_sampul);
                     if ($sampul['file_sampul'] != '') {
                        unlink('fileSampul/' . $sampul['file_sampul']);
                     }
               $file_sampul=$this->upload->data('file_name');
            }

            $data = array(          
                                    'id_buku' => $id,
                                    'id_sampul' => $id,     
                                    'judul_buku' => $judul, 
                                    'penulis' => $penulis,
                                    'penerbit' => $penerbit,
                                    'deskripsi' => $deskripsi,
                                    'id_kategori' => $kategori,
                                    'id_keahlian' => $keahlian,
                                    'file_sampul' => $file_sampul != '' ? $file_sampul : $old_image
            );
            $this->sampul_m->update($data, 'tbl_sampul');
            $this->session->set_flashdata('success', 'Data berhasil di Update');
            redirect('sampul');
            	              
            }	
	}


	public function del($id)
	{
		   // Hapus Data Sampul
            $sampul = $this->sampul_m->getDataById($id);
            if ($sampul['id_sampul'] != '') {
                  unlink('fileSampul/'. $sampul['file_sampul']);
            }

            $id = $this->input->post('id_sampul');
            $this->sampul_m->del($id);

            if ($this->db->affected_rows() > 0) {
                  $this->session->set_flashdata('success', 'Data Sampul  berhasil dihapus');
            }
            redirect('sampul');
	}

}	