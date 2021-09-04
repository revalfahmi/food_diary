<?php namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\PostingModel;
use App\Models\SukaModel;

class PostingController extends BaseController
{
	public function index()
	{
		$session = session();
		return view('postingan');
	}

	public function submitPost() {
		helper(['form']);
		$session = session();

		$rules = [
            'menu'           => 'required|min_length[4]',
            'jam'          => 'required',
            'kategori'       => 'required',
			'deskripsi'   => 'required|min_length[5]',
			'foto'   => 'uploaded[foto]|is_image[foto]',
		];

		if ($this->validate($rules)) {
			$model = new PostingModel();
			$file = $this->request->getFile('foto');
			$newname = $file->getRandomName();
			$file->move(ROOTPATH. 'public/upload',$newname);
			$link = base_url('upload/'.$newname);
			$data = [
				'id_posting'	=> rand(0,9999999999),
				'username'		=> $session->get('username_user'),
				'judul_posting'	=> $this->request->getVar('menu'),
				'kategori'		=> $this->request->getVar('kategori'),
				'isi_posting'	=> $this->request->getVar('deskripsi'),
				'waktu'			=> $this->request->getVar('jam'),
				'file'			=> $link, 
				'status'		=> 0
			];
			$model->save($data);
			return redirect()->to(base_url(''));
		} else {
			$data['errors'] = $this->validator;
			return view('postingan', $data);
		}
	}

}
