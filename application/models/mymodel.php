<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Getnasabah($where=""){
		$data = $this->db->query('select * from nasabah '.$where);
		return $data;
		
	}
	public function Getmarketing($where=""){
		$data = $this->db->query('select * from marketing '.$where);
		return $data;
		
	}
	public function Getkolek($where=""){
		$data = $this->db->query('select * from kolektibilitas '.$where);
		return $data;
		
	}
	public function Getkredit($where=""){
		$data = $this->db->query('select * from daftar_kredit '.$where);
		return $data;
		
	}
	public function Getpembayaran($where=""){
		$data = $this->db->query('select * from pembayaran_kredit '.$where);
		return $data;
		
	}	
	public function hapus_memo($id){
		return $this->db->delete('memo',array('id'=>$id));
	}
	public function edit_memo($id){
		$data = $this->db->get_where('memo',array('id'=>$id));
		return $data;
	}
	public function updatesurat($id){
		$no_surat = $this->input->post('no_surat');
		$tgl_surat = $this->input->post('tgl_surat');
		$tgl_terima = $this->input->post('tgl_terima');
		$dari = $this->input->post('dari');
		$kepada = $this->input->post('kepada');
		$perihal = $this->input->post('perihal');
		$data = array (
		'no_surat' => $no_surat,
		'tgl_surat' => $tgl_surat,
		'tgl_terima' => $tgl_terima,
		'dari' => $dari,
		'kepada' => $kepada,
		'perihal' => $perihal
		/* 'id'=>$id */
		);
		$this->db->update('surat',$data,array('id'=>$id));
		
	}
public function Getlogin($data){		
$q = $this->db->get_where('admin',$data);
return $q->num_rows();
 }
	public function Tambahnasabah(){
		$kode_nasabah = $this->input->post('kode_nasabah');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$provinsi = $this->input->post('provinsi');
		$telpon = $this->input->post('telpon');
		$no_ktp = $this->input->post('no_ktp');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jenis_nasabah = $this->input->post('jenis_nasabah');
		$tgl_registrasi = $this->input->post('tgl_registrasi');
		$marketing = $this->input->post('marketing');
		$area = $this->input->post('area');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat_pekerjaan = $this->input->post('alamat_pekerjaan');
		$telpon_pekerjaan = $this->input->post('telpon_pekerjaan');
		$nama_pekerjaan = $this->input->post('nama_pekerjaan');
		$nama_saudara = $this->input->post('nama_saudara');
		$telpon_saudara = $this->input->post('telpon_saudara');
		$hubungan_saudara = $this->input->post('hubungan_saudara');
	
		$data = array (
		'kode_nasabah' => $kode_nasabah,
		'nama' => $nama,
		'alamat' => $alamat,
		'kota' => $kota,
		'provinsi' => $provinsi,
		'telpon' => $telpon,
		'no_ktp' => $no_ktp,
		'tempat_lahir' => $tempat_lahir,
		'tgl_lahir' => $tgl_lahir,
		'jenis_kelamin' => $jenis_kelamin,
		'jenis_nasabah' => $jenis_nasabah,
		'tgl_registrasi' => $tgl_registrasi,
		'marketing' => $marketing,
		'area' => $area,
		'pekerjaan' => $pekerjaan,
		'alamat_pekerjaan' => $alamat_pekerjaan,
		'telpon_pekerjaan' => $telpon_pekerjaan,
		'nama_pekerjaan' => $nama_pekerjaan,
		'nama_saudara' => $nama_saudara,
		'telpon_saudara' => $telpon_saudara,
		'hubungan_saudara' => $hubungan_saudara
		);
	$this->db->insert('nasabah',$data);
		
	}
	public function Tambahmarketing(){
		$kode_marketing = $this->input->post('kode_marketing');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$telpon = $this->input->post('telpon');
		$area = $this->input->post('area');
		$ket = $this->input->post('ket');
	
		$data = array (
		'kode_marketing' => $kode_marketing,
		'nama' => $nama,
		'alamat' => $alamat,
		'kota' => $kota,
		'telpon' => $telpon,
		'area' => $area,
		'ket' => $ket
		);
	$this->db->insert('marketing',$data);
		
	}
	public function Tambahkolektibilitas(){
		$kode_kolektibilitas = $this->input->post('kode_kolektibilitas');
		$ket = $this->input->post('ket');
		$batas_akhir = $this->input->post('batas_akhir');
	
		$data = array (
		'kode_kolektibilitas' => $kode_kolektibilitas,
		'ket' => $ket,
		'batas_akhir' => $batas_akhir
		);
	$this->db->insert('kolektibilitas',$data);
		
	}
	
	
}
?>
