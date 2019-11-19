<?php
namespace App\Controllers\Moviies;
use CodeIgniter\RESTful\ResourcePresenter;

class Home extends ResourcePresenter
{
    public function index()
    {

        $start = new \App\Models\movies\Start();
        $records = $start->findAll();
        
        $start = \Config\Services::parser();
        

        return $start->setData(['records' => $records])

            ->render('movies/startList');
    }
    
    public function show($id)
    {

        $start = new \App\Models\movies\Start();
        $record = $start->find($id);

        $parser = \Config\Services::parser();
        

        return $parser->setData($record)

            ->render('movies/star');
    }
}