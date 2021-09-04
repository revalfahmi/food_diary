<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PostingModel;
use App\Models\SukaModel;

class BerandaUser extends BaseController
{
	public function index()
	{
		$session = session();
		$akun = new LoginModel();
		$getAkun = $akun->where('username',$session->get('username_user'))->first();
		$data['nama'] = $getAkun['nama'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->where(['daftar_postingan.status' => '1']);
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;
		// die(var_dump($data['data_postingans']));
		return view('beranda_user',$data);
	}

	public function search()
	{
		$session = session();
		$akun = new LoginModel();
		$getAkun = $akun->where('username',$session->get('username_user'))->first();
		$data['nama'] = $getAkun['nama'];

		
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
		return view('beranda_user',$data);
	}

	public function detail($id) {
		$session = session();
		$akun = new LoginModel();
		$getAkun = $akun->where('username',$session->get('username_user'))->first();
		$data['nama'] = $getAkun['nama'];

		$db      = \Config\Database::connect();
		$postingan = $db->table('daftar_postingan');
		$postingan->select('*');
		$postingan->join('pengguna', 'pengguna.username = daftar_postingan.username');
		$postingan->where(['daftar_postingan.id_posting' => $id]);
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		// JUMLAH LIKES
		$likes = $db->table('tbl_suka');
		$likes->select('*');
		$likes->where(['id_posting' => $id]);
		$query = $likes->get();
		$data['jumlah_like'] = count($query->getResultArray());

		// DILIKE APA GAK
		$likes = $db->table('tbl_suka');
		$likes->select('*');
		$likes->where(['id_posting' => $id]);
		$likes->where(['username' => $session->get('username_user')]);
		$query = $likes->get();
		$data['likes'] = $query->getRow();

		$data['data_postingans'] = $resultpostingan;

		return view('detail_user',$data);
	}

	public function like($id){
		$session = session();
		$likes = new SukaModel();

		$data = [
			'id_suka'	=> rand(1,9999999999),
			'id_posting'		=> $id,
			'username'		=> $session->get('username_user'),
		];

		$likes->save($data);
		return redirect()->to(base_url('detail_u/'.$id));
	}

	public function dislike($id,$posting){
		$likes = new SukaModel();
		$likes->where('id_suka', $id)->delete();
		return redirect()->to(base_url('detail_u/'.$posting));
	}
	//--------------------------------------------------------------------

}