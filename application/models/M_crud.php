<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_crud extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function input_news($data)
	{
		$this->db->insert('news',$data);
		return true; 

	}

	function ambil()
 	{
 		$this->db->order_by('tanggal', 'DESC');
 		$query= $this->db->get('news');
 		return $query;
 	}
 	function kotak($num ,$uri){
     	$this->db->order_by('tanggal', 'DESC');
     	$query = $this->db->get('news', $num, $uri);
     	return $query;
 	}

	function update_news($where ,$table)
	{
		return $this->db->get_where($table ,$where);
	}

	function new_image($id,$penulis,$judul,$type,$isi,$gambar)
	{
		$query =$this->db->query("UPDATE news SET penulis ='$penulis' ,judul ='$judul' ,type ='$type' ,isi ='$isi' ,image ='$gambar' WHERE id_berita ='$id'");
	}

	function old_image($id,$penulis,$judul,$type,$isi)
	{
		$query = $this->db->query("UPDATE news SET penulis ='$penulis' ,judul ='$judul' ,type ='$type' ,isi ='$isi' WHERE id_berita ='$id'");
	}

	function news_delete($id)
	{
		$this->db->query("DELETE FROM news WHERE id_berita = '$id'");
	}
	function input_wisata($data)
	{
		$this->db->insert('destinasi' ,$data);
		return true;
	}
	function ambil_wisata()
 	{
 		$this->db->order_by('tanggal_post', 'DESC');
 		$query= $this->db->get('destinasi');
 		return $query;
 	}
 	function kotak_wisata($num ,$uri){
     	$this->db->order_by('tanggal_post', 'DESC');
     	$query = $this->db->get('destinasi', $num, $uri);
     	return $query;
 	}

 	function update_wisata($where ,$table)
	{
		return $this->db->get_where($table ,$where);
	}
	function new_image2($id,$wisata,$lokasi,$info,$des,$gambar)
	{
		$query =$this->db->query("UPDATE destinasi SET nama_wisata ='$wisata' ,lokasi ='$lokasi' ,informasi ='$info' ,deskripsi ='$des' ,gambar ='$gambar' WHERE id_wisata ='$id'");
	}

	function old_image2($id,$wisata,$lokasi,$info,$des)
	{
		$query = $this->db->query("UPDATE destinasi SET nama_wisata ='$wisata' ,lokasi ='$lokasi' ,informasi ='$info' ,deskripsi ='$des' WHERE id_wisata ='$id'");
	}

	function desti_delete($id)
	{
		$this->db->query("DELETE FROM destinasi WHERE id_wisata = '$id'");
	}
	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	function cekAkun($email,$psw)
	{
		$query =$this->db->query("SELECT * FROM user WHERE email ='$email' AND password = '$psw'");
		return $query;
	}
	function ambil_dasboard1()
 	{
 		$this->db->order_by('tanggal_post', 'DESC');
 		$this->db->limit(3);
 		$query= $this->db->get('destinasi');
 		return $query;
 	}
 	function ambil_dasboard2()
 	{
 		$this->db->order_by('tanggal', 'DESC');
 		$this->db->limit(3);
 		$query= $this->db->get('news');
 		return $query;
 	}
 	function read_news($id)
	{
		$this->db->select()->from('news')->where(array('id_berita'=>$id));
		$query = $this->db->get();
		return $query;
	}
	function display_komen($id)
	{
		$this->db->select()->from('komentar')->where(array('id_berita'=>$id));
		$query = $this->db->get();
		return $query;
	}
	function detil($id)
	{
		$this->db->select()->from('destinasi')->where(array('id_wisata'=>$id));
		$query = $this->db->get();
		return $query;
	}
	function jsDisplayDes()
 	{
 		$this->db->order_by('tanggal_post', 'DESC');
 		$this->db->limit(5);
 		$query= $this->db->get('destinasi');
 		return $query;
 	}
 	function ambil_user()
 	{
 		$this->db->order_by('date', 'DESC');
 		$query= $this->db->get('user');
 		return $query;
 	}
 	function kotak_user($num ,$uri){
     	$this->db->order_by('date', 'DESC');
     	$query = $this->db->get('user', $num, $uri);
     	return $query;
 	}
 	function user_delete($id)
	{
		$this->db->query("DELETE FROM user WHERE id_user = '$id'");
	}
	function display_review($id)
	{
		$this->db->select()->from('reviews')->where(array('id_destinasi'=>$id));
		$query = $this->db->get();
		return $query;
	}
	function input_posting($data)
	{
		$this->db->insert('user_post' ,$data);
		return true;
	}
	function ambil_record($where)
	{
		$this->db->select()->from('user_post')->where(array('id_user'=>$where));
		$query = $this->db->get();
		return $query;
	}
	function ambil_record_list()
	{
		$this->db->select()->from('user_post')->where(array('status'=>"0"));
		$query = $this->db->get();
		return $query;
	}
	function ambil_record_service()
	{
		$this->db->select()->from('user_post')->where(array('status'=>"1"));
		$query = $this->db->get();
		return $query;
	}
	function acc($id,$status)
	{
		$query = $this->db->query("UPDATE user_post SET status ='$status' WHERE id_post ='$id'");
	}
	function detil2($id)
	{
		$this->db->select()->from('user_post')->where(array('id_post'=>$id));
		$query = $this->db->get();
		return $query;
	}
	function popular()
 	{
 		$this->db->order_by('tanggal', 'ASC');
 		$this->db->limit(4);
 		$query= $this->db->get('news');
 		return $query;
 	}
}

