<?php

namespace App\Controllers;

use App\Models\ContatosModel;
use CodeIgniter\Controller;

class Contatos extends Controller
{

    public function index()
    {
		$db = \Config\Database::connect();
        if ($db->tableExists('contato'))
        {
            $model = new ContatosModel();
        
            if($model->getContatos())
            $data = [
                'contatos'  => $model->getContatos(),
                'title' => 'Agenda Eletrônica',
            ];
    
            echo view('templates/header', $data);
            echo view('contatos/overview', $data);
            echo view('templates/footer');
        }
        else
        {
            $data = [
                'title' => 'Agenda Eletrônica',
            ];
            echo view('templates/header', $data);
            echo view('templates/init');
            echo view('templates/footer');
        }
    }

    public function view($id = null)
    {
        $model = new ContatosModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nome'      => 'required|max_length[100]',
            'sobrenome' => 'permit_empty|max_length[100]',
            'email'     => 'permit_empty|max_length[100]|valid_email',
            'telefone'  => 'permit_empty|max_length[100]',
            'ra'        => 'permit_empty|numeric',
            ]))
        {
            $model->update($id, [
                'nome'      => $this->request->getPost('nome'),
                'sobrenome' => $this->request->getPost('sobrenome'),
                'email'     => $this->request->getPost('email'),
                'telefone'  => $this->request->getPost('telefone'),
                'ra'        => $this->request->getPost('ra'),
            ]);

            session()->setFlashdata('msg', 'Contato editado com sucesso!');
            return redirect()->to('/');
        }
        else
        {
            $data['contatos'] = $model->getContatos($id);
    
            if (empty($data['contatos']))
            {
                throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
            }
    
            $data['title'] = 'Editar Contato';
    
            echo view('templates/header', $data);
            echo view('contatos/view', $data);
            echo view('templates/footer');
        }
    }

    public function create()
    {
        $model = new ContatosModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'nome'      => 'required|max_length[100]',
            'sobrenome' => 'permit_empty|max_length[100]',
            'email'     => 'permit_empty|max_length[100]|valid_email',
            'telefone'  => 'permit_empty|max_length[100]',
            'ra'        => 'permit_empty|numeric',
            ]))
        {
            $model->save([
                'nome'      => $this->request->getPost('nome'),
                'sobrenome' => $this->request->getPost('sobrenome'),
                'email'     => $this->request->getPost('email'),
                'telefone'  => $this->request->getPost('telefone'),
                'ra'        => $this->request->getPost('ra'),
            ]);

            session()->setFlashdata('msg', 'Contato cadastrado com sucesso!');
            return redirect()->to('/contatos');
        }
        else
        {
            echo view('templates/header', ['title' => 'Cadastrar Novo Contato']);
            echo view('contatos/create');
            echo view('templates/footer');
        }

    }
}