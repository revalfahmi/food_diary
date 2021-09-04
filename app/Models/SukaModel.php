<?php 
namespace App\Models;

use CodeIgniter\Model;

class SukaModel extends Model
{
    protected $table = 'tbl_suka';
    protected $allowedFields = ['id_suka', 'id_posting', 'username', 'liked'];
}