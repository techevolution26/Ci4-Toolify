<?php

namespace App\Controllers;
use CodeIgniter\Exceptions\PageNotFoundException;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view(string $page ='home') {
        if(! is_file(APPPATH. 'Views/pages/' . $page .'.php')){
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('template/header', $data)
        .view('pages/' . $page)
        .view('template/footer');
    }
}
