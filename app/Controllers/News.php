<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news_list' => $model->getNews(),
            'title' => 'News archive',
        ];
        
        return view('template/header', $data)
        .view('news/index')
        .view('template/footer');
    }

    public function show(?string $slug =null) {

        $model =model(NewsModel::class);
        $data['news'] =$model ->getNews($slug);

        if ($data['news'] === null) {
            throw new PageNotFoundException('Cannot find the requested news item.'. $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('template/header', $data)
        .view('news/view')
        .view('template/footer');
    }

    public function new() {
        helper('form');
        return view('template/header', ['title' => 'Create a news item'])
        .view('news/create')
        .view('template/footer');
    }

    public function create() {
        helper('form');
        $data = $this->request->getPost(['title', 'body']);


        if(! $this->validateData($data, [                          // Define your validation rules here,checks data fits validation
            'title' => 'required|max_length[255]|min_length[3]',
            'body' => 'required|max_length[5000]|min_length[10]',

            // error_log("Validation failed: " . json_encode($data))

        ])) {

            return $this->new();

        }
        // log_message('error', json_encode($this->validateData($data, '')));

        $post = $this-> validator->getValidated();

        $model = model(NewsModel::class);
        $model->save([
            'title' => $post['title'],
            'slug' => url_title($post['title'], '-', true),
            'body'=>$post['body'],
        ]);

        return view('template/header', ['title' => 'Create a news item '])
        .view('news/success')
        .view('template/footer');
    }

}
