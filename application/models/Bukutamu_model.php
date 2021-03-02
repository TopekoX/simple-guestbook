<?php

class Bukutamu_model extends CI_Model
{
   public $id;
   public $nama;
   public $tanggal;
   public $waktu;
   public $alamat;
   public $no_hp;
   public $bertemu_dengan;
   public $keperluan;
   public $foto;

   public function __construct()
   {
   	parent::__construct();
   	
   	$this->load->database();
   }

   public function read()
   {
   	$query = $this->db->query('SELECT * FROM tamu ORDER BY tanggal DESC, waktu DESC');
   	return $query->result();
   }

   public function getById($id)
    {
        return $this->db->query("SELECT * FROM tamu WHERE id = '$id'")->row();
    }

   public function insert()
   {
   	$this->db->query("INSERT INTO tamu VALUES(
   		'$this->id',
   		'$this->nama',
   		'$this->tanggal',
   		'$this->waktu',
   		'$this->alamat',
   		'$this->no_hp',
   		'$this->bertemu_dengan',
   		'$this->keperluan',
   		'$this->foto'
   		)");
   }

   public function update()
   {
      $this->db->query("UPDATE tamu SET
         nama = '$this->nama',
         tanggal = '$this->tanggal',
         waktu = '$this->waktu',
         alamat = '$this->alamat',
         no_hp = '$this->no_hp',
         bertemu_dengan = '$this->bertemu_dengan',
         keperluan = '$this->keperluan',
         foto = '$this->foto' 
         WHERE id = '$this->id'
         ");
   }

   public function delete()
   {
      $this->deleteImage($this->id);
      $this->db->query("DELETE FROM tamu WHERE id='$this->id'");
   }

   public function uploadImage()
   {
       $config['upload_path']          = './uploads/';
       $config['allowed_types']        = 'gif|jpg|png|jpeg';
       $config['file_name']            = $this->id;
       $config['overwrite']            = true;
       $config['max_size']             = 20000; // 20MB
       // $config['max_width']            = 1024;
       // $config['max_height']           = 768;

       $this->load->library('upload', $config);

       if ($this->upload->do_upload('foto')) {
           return $this->upload->data('file_name');
       }
       //print_r($this->upload->display_errors());
       return "default.png";
   }

   private function deleteImage($id)
   {
       $tamu = $this->getById($id);
       if ($tamu->foto != "default.png") {
          $filename = explode(".", $tamu->foto)[0];
         return array_map('unlink', glob(FCPATH."uploads/$filename.*"));
       }
   }

}