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
   	$query = $this->db->query('SELECT * FROM tamu ORDER BY tanggal AND waktu DESC');
   	return $query->result();
   }

   public function insert()
   {
   	$this->id = uniqid();

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
}