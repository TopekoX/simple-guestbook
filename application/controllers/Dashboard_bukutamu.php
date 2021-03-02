<?php 
class Dashboard_bukutamu extends CI_Controller {

	public $bukutamu = NULL;
	public $config = NULL;

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
			$this->bukutamu->id = uniqid();
			$this->bukutamu->nama = $_POST['nama'];
			$this->bukutamu->tanggal = $_POST['tanggal'];
			$this->bukutamu->waktu = $_POST['waktu'];
			$this->bukutamu->alamat = $_POST['alamat'];
			$this->bukutamu->no_hp = $_POST['no_hp'];
			$this->bukutamu->bertemu_dengan = $_POST['bertemu_dengan'];
			$this->bukutamu->keperluan = $_POST['keperluan'];
			$this->bukutamu->foto = $this->bukutamu->uploadImage();
			
			// insert
			$this->bukutamu->insert();

			redirect(base_url() . 'dashboard_bukutamu');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/form-input');
			$this->load->view('template/footer');
		}
	}

	public function update($id)
	{
		if (isset($_POST['btn_submit'])) {
			$this->bukutamu->id = $_POST['id'];
			$this->bukutamu->nama = $_POST['nama'];
			$this->bukutamu->tanggal = $_POST['tanggal'];
			$this->bukutamu->waktu = $_POST['waktu'];
			$this->bukutamu->alamat = $_POST['alamat'];
			$this->bukutamu->no_hp = $_POST['no_hp'];
			$this->bukutamu->bertemu_dengan = $_POST['bertemu_dengan'];
			$this->bukutamu->keperluan = $_POST['keperluan'];
			
			if (!empty($_FILES["foto"]["name"])) {
			    $this->bukutamu->foto = $this->bukutamu->uploadImage();
			} else {
			    $this->bukutamu->foto = $_POST["old_foto"];
			}

			// update
			$this->bukutamu->update();

			redirect(base_url() . 'dashboard_bukutamu');
		} else {
			$query = $this->db->query("SELECT * FROM tamu WHERE id = '$id'");

			$row = $query->row();
			$this->bukutamu->id = $row->id;
			$this->bukutamu->nama = $row->nama;
			$this->bukutamu->tanggal = $row->tanggal;;
			$this->bukutamu->waktu = $row->waktu;
			$this->bukutamu->alamat = $row->alamat;
			$this->bukutamu->no_hp = $row->no_hp;
			$this->bukutamu->bertemu_dengan = $row->bertemu_dengan;
			$this->bukutamu->keperluan = $row->keperluan;
			$this->bukutamu->foto = $row->foto;

			$this->load->view('template/header');
			$this->load->view('template/form-update', ['bukutamu' => $this->bukutamu]);
			$this->load->view('template/footer');
		}
	}

	public function delete($id)
	{
		$this->bukutamu->id = $id;
		$this->bukutamu->delete();

		redirect(base_url() . 'dashboard_bukutamu');
	}

}