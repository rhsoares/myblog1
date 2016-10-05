<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = [
            [
                'title' => 'Post de exemplo 1',
                'imageUrl' => 'images/post1.jpg',
                'preview' => 'Nunc sed ligula congue, ultricies ex ut, tincidunt elit. Nunc sit amet purus ac dui sodales tincidunt. Nam molestie a est et efficitur. Sed condimentum lacus at vulputate varius.',
                'date' => '04/10/2016',
                'comments' => 27
            ],
            [
                'title' => 'Post de exemplo 2',
                'imageUrl' => 'images/post2.jpg',
                'preview' => 'Suspendisse potenti. Integer eu pretium ipsum. Suspendisse sed tempus augue. Vivamus eget vehicula urna, in convallis nisl. Mauris molestie mauris quis metus pharetra iaculis.',
                'date' => '02/10/2016',
                'comments' => 2
            ],
            [
                'title' => 'Post de exemplo 3',
                'imageUrl' => 'images/post3.jpg',
                'preview' => 'Phasellus varius magna ut arcu ultricies ultricies non quis elit. Fusce at tincidunt diam. Ut suscipit dolor vestibulum mauris posuere, quis cursus urna facilisis.',
                'date' => '01/10/2016',
                'comments' => 15
            ],
        ];

        $archives = ['Outubro/2016', 'Setembro/2016', 'Agosto/2016'];
        $categories = ['Vivamus vestibulum nulla', 'Integer vitae libero ac risus e', 'Vestibulum commo', 'Cras iaculis ultricies'];

        return view('home.index', [
            'posts' => $posts,
            'archives' => $archives,
            'categories' => $categories
        ]);
    }
}
