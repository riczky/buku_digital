<?php 

// Untuk menampilkan nama user sesuai dengan yang login
Class Fungsi{

	protected $ci;

	public function __construct(){
		$this->ci =& get_instance();
	}

	public function user_login()
	{
		$this->ci->load->model('user_m');
		$user_id = $this->ci->session->userdata('userid');
		$user_data = $this->ci->user_m->get_nama($user_id)->row();
		return $user_data;
	}

	function PdfGenerator($html, $filename, $paper, $orientation)
	{
		// instantiate and use the dompdf class
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation);

		// Render the HTML as PDF
		$dompdf->render();

		// Output the generated PDF to Browser
		$dompdf->stream($filename, array('Attachment' => 0));
	}

	public function count_inbox(){
		$this->ci->load->model('inbox_m');
		return $this->ci->inbox_m->get_data()->num_rows();
	}

	
	public function count_kategori(){
		$this->ci->load->model('kategori_m');
		return $this->ci->kategori_m->get_data()->num_rows();
	}
	
	public function count_keahlian(){
		$this->ci->load->model('keahlian_m');
		return $this->ci->keahlian_m->get_data()->num_rows();
	}

		public function count_buku(){
		$this->ci->load->model('book_m');
		return $this->ci->book_m->get_data_buku()->num_rows();
	}
		
		public function count_sampul(){
		$this->ci->load->model('sampul_m');
		return $this->ci->sampul_m->get_data()->num_rows();
	}

	public function count_user(){
		$this->ci->load->model('user_m');
		return $this->ci->user_m->get_nama()->num_rows();
	}
}


