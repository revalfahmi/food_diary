<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Daftarpostingan extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		//
		$this->forge->addField([
			'id_posting'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 10,
					'null'           => false,
					'unique'		 => true
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
				'null'           => false,
			],
			'judul_posting'       => [
					'type'           => 'TEXT',
					'null'           => false,
			],
			'kategori' => [
					'type'           => 'TEXT',
					'null'           => false,
			],
			'isi_posting' => [
					'type'           => 'TEXT',
					'null'           => false,
			],
			'waktu' => [
				'type'           => 'TIME',
				'null'           => false,
			],
			'tgl_post' => [
				'type'           => 'TIMESTAMP',
				'null'           => false,
			],
			'file'	=> [
				'type'				=> 'TEXT',
				'null'				=> false,
			],
			'status'	=> [
				'type'				=> 'BOOLEAN',
				'null'				=> false,
			],
		]);
		$this->forge->addKey('id_posting', true);
		$this->forge->addForeignKey('username','pengguna','username');
		$this->forge->createTable('daftar_postingan');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('daftar_postingan');
	}
}
