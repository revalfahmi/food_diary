<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Suka extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		//
		$this->forge->addField([
			'id_suka'          => [
					'type'           => 'VARCHAR',
					'constraint'     => 10,
					'null'           => false,
					'unique'		 => true
			],
			'id_posting'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
				'null'           => false,
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
				'null'           => false,
			],
		]);
		$this->forge->addKey('id_suka', true);
		$this->forge->addForeignKey('username','pengguna','username');
		$this->forge->addForeignKey('id_posting','daftar_postingan','id_posting');
		$this->forge->createTable('tbl_suka');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('tbl_suka');
	}
}
