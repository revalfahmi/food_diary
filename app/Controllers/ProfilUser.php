<?php namespace App\Controllers;


use App\Models\LoginModel;
use App\Models\PostingModel;
use App\Models\SukaModel;

class ProfilUser extends BaseController
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
		$postingan->where(['daftar_postingan.username' => $session->get('username_user')]);
		$postingan->orderBy('tgl_post', 'DESC');
		$query = $postingan->get();
		$resultpostingan = $query->getResultArray();

		$data['data_postingans'] = $resultpostingan;

		return view('profil_user',$data);
	}

	public function edit() {
		$session = session();
		$akun = new LoginModel();
		$data['data_akun'] = $akun->where('username',$session->get('username_user'))->first();

		return view('form',$data);
	}

	public function submitedit() {
		$session = session();

		$rules = [
            'nama'           => 'required|min_length[4]',
			'pwdlama'   => 'required|min_length[8]|max_length[16]',
			'kpwd'   => 'required|matches[pwdbaru]',
			'pwdbaru'	=> 'required|min_length[8]|max_length[16]',
			'tmp_lahir'   => 'required|min_length[4]|max_length[20]',
			'tgl_lahir'   => 'required|valid_date',
			'asal'   => 'required|min_length[4]|max_length[20]',
		];

		if($this->validate($rules)){
			$session = session();
			$akun = new LoginModel();
			$dataAkun = $akun->where('username',$session->get('username_user'))->first();
			if($dataAkun['password'] === $this->request->getVar('pwdlama')){

				$data = [
					'nama'		=> $this->request->getVar('nama'),
					'password'		=> $this->request->getVar('pwdbaru'),
					'tanggal_lahir'		=> $this->request->getVar('tgl_lahir'),
					'tempat_lahir'		=> $this->request->getVar('tmp_lahir'),
					'asal_kota'		=> $this->request->getVar('asal'),
				];
				$username = $session->get('username_user');
				$akun->where('username', $username)->set($data)->update();

				return redirect()->to(base_url('profil_u'));
			}else{
				$session = session();
				$akun = new LoginModel();
				$data['data_akun'] = $akun->where('username',$session->get('username_user'))->first();

				return view('form',$data);
			}


        }else{
			$session = session();
			$akun = new LoginModel();
			$data['data_akun'] = $akun->where('username',$session->get('username_user'))->first();
			
			$data['errors'] = $this->validator;
			return view('form',$data);
		}
		
	}

	public function hapus($id){
		$session = session();
		$posting = new PostingModel();
		$likes = new SukaModel();

		$likes->where('id_posting', $id)->delete();
		$posting->where('id_posting', $id)->delete();
		return redirect()->to(base_url('profil_u'));
	}

}