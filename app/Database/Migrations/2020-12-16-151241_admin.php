<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'          => [
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
		]);
		//
		$this->forge->addKey('username',true);
		$this->forge->createTable('admin');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
		$this->forge->dropTable('admin');
	}
}
