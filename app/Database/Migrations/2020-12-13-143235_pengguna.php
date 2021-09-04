<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'username'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 10,
					'null'           => false,
					'unique'		 => true
			],
			'nama'       => [
					'type'           => 'TEXT',
					'null'           => false,
			],
			'email' => [
					'type'           => 'TEXT',
					'null'           => false,
			],
			'password' => [
					'type'           => 'VARCHAR',
					'constraint'     => '16',
					'null'           => false,
			],
			'tanggal_lahir'	=> [
				'type'				=> 'DATE',
				'null'				=> false,
			],
			'tempat_lahir'	=> [
				'type'				=> 'VARCHAR',
				'constraint'			=> 20,
				'null'				=> false,
			],
			'asal_kota'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 20,
				'null'				=> false,
			],
		]);
		$this->forge->addKey('username',true);
		$this->forge->createTable('pengguna');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('pengguna');
	}
}
