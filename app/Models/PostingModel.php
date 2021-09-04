<?php 
namespace App\Models;

use CodeIgniter\Model;

class PostingModel extends Model
{
    protected $table = 'daftar_postingan';
    protected $allowedFields = ['id_posting', 'username', 'judul_posting', 'kategori','isi_posting','waktu','tgl_post','file','status'];
}