<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ContatosSeeder extends Seeder
{
    public function run()
    {
        $richard = [
			'nome' => 'richard',
			'sobrenome' => 'a roberto',
			'telefone' => '11992199265',
			'email' => 'richard.roberto@uni9.edu.br',
            'ra' =>  '3021100805' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($richard);
    
        $breno = [
			'nome' => 'breno',
			'sobrenome' => 'm moura',
			'telefone' => '11953497302',
            'ra' =>  '3021103570' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($breno);
    
        $kevin = [
			'nome' => 'kevin',
			'sobrenome' => 's a da silva',
			'telefone' => '11989589652',
            'ra' =>  '3021101425' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($kevin);
    
        $victors = [
			'nome' => 'victor',
			'sobrenome' => 'f de souza',
			'telefone' => '11945220285',
            'ra' =>  '3021103830' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($victors);
    
        $victorb = [
			'nome' => 'victor',
			'sobrenome' => 's bernardo',
			'telefone' => '11979511322',
            'ra' =>  '3021100282' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($victorb);
    
        $cesar = [
			'nome' => 'cesar',
			'sobrenome' => 'a m vallim',
			'telefone' => '11954329904',
            'ra' =>  '3021104031' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($cesar);
    
        $elias = [
			'nome' => 'elias',
			'sobrenome' => 'y y myashiro',
			'telefone' => '11949147702',
            'ra' =>  '3010213269' 
        ];

        // Using Query Builder
        $this->db->table('contato')->insert($elias);
    
    }
}