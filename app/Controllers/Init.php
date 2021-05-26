<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Init extends Controller
{

    public function index()
    {
		
        $migrate = \Config\Services::migrations();
        $seeder = \Config\Database::seeder();
        try
        {
            $migrate->latest();
            $seeder->call('ContatosSeeder');

            session()->setFlashdata('msg', 'Agenda aberta!');
            return redirect()->to('/');
        }
        catch (\Throwable $e)
        {
            var_dupm($e);
        }
    }

}