<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContatos extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nome'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'sobrenome'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
                'null'       => true,
			],
			'telefone'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
                'null'       => true,
			],
			'email'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
                'null'       => true,
			],
			'ra'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
                'null'       => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('contato');
	}

	public function down()
	{
		$this->forge->dropTable('contato');
	}
}
