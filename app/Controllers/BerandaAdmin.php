<?php namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\PostingModel;
use App\Models\SukaModel;

class BerandaAdmin extends BaseController
{
	public function index()
	{
		$session = session();
		$akun = new AdminModel();
		$getAkun = $akun->where('email',$session->get('admin_email'))->first();
		$data['id_admin'] = $getAkun['id_admin'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->where(['daftar_postingan.status' => '0']);
		$postingan->orderBy('tgl_post', 'ASC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;
		// die(var_dump($data['data_postingans']));
		return view('beranda_admin',$data);
	}

	public function jelajah() {
		$session = session();
		$akun = new AdminModel();
		$getAkun = $akun->where('email',$session->get('admin_email'))->first();
		$data['id_admin'] = $getAkun['id_admin'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->where(['daftar_postingan.status' => '1']);
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;

		return view('jelajah',$data);
	}

	public function search_beranda()
	{
		$session = session();
		$akun = new AdminModel();
		$getAkun = $akun->where('email',$session->get('admin_email'))->first();
		$data['id_admin'] = $getAkun['id_admin'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->like('daftar_postingan.judul_posting', $this->request->getVar('cari'));
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;
		// die(var_dump($data['data_postingans']));
		return view('beranda_admin',$data);
	}

	public function search_jelajah()
	{
		$session = session();
		$akun = new AdminModel();
		$getAkun = $akun->where('email',$session->get('admin_email'))->first();
		$data['id_admin'] = $getAkun['id_admin'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->like('daftar_postingan.judul_posting', $this->request->getVar('cari'));
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;
		// die(var_dump($data['data_postingans']));
		return view('jelajah',$data);
	}

	public function approve($id){
		$session = session();
		$posting = new PostingModel();

		$data = [
			'status'		=> '1',
		];
		$posting->where('id_posting', $id)->set($data)->update();
		return redirect()->to('/beranda_a');
	}

	public function delete($id){
		$session = session();
		$posting = new PostingModel();
		$likes = new SukaModel();

		$likes->where('id_posting', $id)->delete();
		$posting->where('id_posting', $id)->delete();
		return redirect()->to('/beranda_a');
	}

	//--------------------------------------------------------------------

}