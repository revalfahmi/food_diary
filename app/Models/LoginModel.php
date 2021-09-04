<?php 
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'pengguna';
    protected $allowedFields = ['username', 'nama', 'email', 'password','tanggal_lahir','tempat_lahir','asal_kota'];
}