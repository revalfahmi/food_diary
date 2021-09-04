<?php namespace App\Controllers;

use App\Models\AdminModel;

class LoginControllerAdmin extends BaseController {

    public function index() {

        return view('auth/login_admin');
    }

    public function submit() {
        helper(['form']); 

		$rules = [
            'email'          => 'required',
			'password'   => 'required',
		];

		if($this->validate($rules)){
			$session = session();
			$model = new AdminModel();
			$email = $this->request->getVar('email');
			$password = $this->request->getVar('password');
			$cekEmail = $model->where('email', $email)->first();

			if($cekEmail){
				$pass = $cekEmail['password'];

				if ($pass === $password) {
					$ses_data = [
						'admin_email'		=> $cekEmail['email'],
						'admin_logged_in'	=> TRUE,
					];
					$session->set($ses_data);

					return redirect()->to(base_url('beranda_a'));
				}else {
					return redirect()->to(base_url('login_admin'));
				}
			} else {
				return redirect()->to(base_url('login_admin'));
			}
		} else {
			$data['errors'] = $this->validator;
			return view('auth/login_admin',$data);
		}
    }

    public function logout() {
		$session = session();
        $session->destroy();
        return redirect()->to(base_url('login_admin'));
	}

}