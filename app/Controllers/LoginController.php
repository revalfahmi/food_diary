<?php namespace App\Controllers;

use App\Models\LoginModel;

class LoginController extends BaseController
{
	public function index()
	{
		return view('auth/login');
	}

	public function registrasi() {
        return view('auth/registrasi');
	}
	
	public function daftar() {
		helper(['form']);

		$rules = [
            'nama'           => 'required|min_length[4]',
            'username'          => 'required|min_length[4]|max_length[10]',
            'email'       => 'required|valid_email',
			'pwd'   => 'required|min_length[8]|max_length[16]',
			'kpwd'   => 'required|matches[pwd]',
			'tmp_lahir'   => 'required|min_length[4]|max_length[20]',
			'tgl_lahir'   => 'required|valid_date',
			'asal'   => 'required|min_length[4]|max_length[20]',
		];
		
		if($this->validate($rules)){
			$model = new LoginModel();
			$cekUser = $model->where('username', $this->request->getVar('username'))->findAll();

			if($cekUser){
				return redirect()->to('regis');
			}else{
				$data = [
					'username'	=> $this->request->getVar('username'),
					'nama'		=> $this->request->getVar('nama'),
					'email'		=> $this->request->getVar('email'),
					'password'		=> $this->request->getVar('pwd'),
					'tanggal_lahir'		=> $this->request->getVar('tgl_lahir'),
					'tempat_lahir'		=> $this->request->getVar('tmp_lahir'),
					'asal_kota'		=> $this->request->getVar('asal'),
				];
				$model->save($data);
				return redirect()->to(base_url('login'));
	
			}

			
        }else{
			$data['errors'] = $this->validator;
			return view('auth/registrasi',$data);
        }
	}

	public function submit() {
		helper(['form']); 

		$rules = [
            'username'          => 'required',
			'password'   => 'required',
		];

		if($this->validate($rules)){
			$session = session();
			$model = new LoginModel();
			$username = $this->request->getVar('username');
			$password = $this->request->getVar('password');
			$cekUsername = $model->where('username', $username)->first();

			if($cekUsername){
				$pass = $cekUsername['password'];

				if ($pass === $password) {
					$ses_data = [
						'username_user'		=> $cekUsername['username'],
						'user_logged_in'	=> TRUE,
					];
					$session->set($ses_data);

					return redirect()->to(base_url(''));
				}else {
					return redirect()->to(base_url('login'));
				}
			} else {
				return redirect()->to(base_url('login'));
			}
		} else {
			$data['errors'] = $this->validator;
			return view('auth/login',$data);
		}
	}

	public function logout() {
		$session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
	}
}
