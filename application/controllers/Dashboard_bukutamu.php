<?php 
class Dashboard_bukutamu extends CI_Controller {

	public $bukutamu = NULL;

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Bukutamu_model');
		$this->bukutamu = $this->Bukutamu_model;

		$this->load->database();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/tabelbukutamu', 
			['bukutamu' => $this->bukutamu->read()]);
		$this->load->view('template/footer');
	}

	public function create()
	{
		if (isset($_POST['btn_submit'])) {
			$this->bukutamu->nama = $_POST['nama'];
			$this->bukutamu->tanggal = $_POST['tanggal'];
			$this->bukutamu->waktu = $_POST['waktu'];
			$this->bukutamu->alamat = $_POST['alamat'];
			$this->bukutamu->no_hp = $_POST['no_hp'];
			$this->bukutamu->bertemu_dengan = $_POST['bertemu_dengan'];
			$this->bukutamu->keperluan = $_POST['keperluan'];
			$this->bukutamu->foto = $_POST['foto'];

			// insert
			$this->bukutamu->insert();

			redirect(base_url() . 'dashboard_bukutamu');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/form-input');
			$this->load->view('template/footer');
		}
	}

}