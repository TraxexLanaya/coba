<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Test Name','title' => 'About' ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=>[
        [
            'title' => 'Judul Artikel 1',
            'author' => 'AAAA AAA',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat natus cum fugit optio accusantium eum corporis a provident! Voluptas optio alias quasi error harum explicabo odio accusantium, illum perspiciatis! Fugit.' 
        ],
         [
            'title' => 'Judul Artikel 2',
            'author' => 'BBBB BBBB BBB',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat natus cum fugit optio accusantium eum corporis a provident! Voluptas optio alias quasi error harum explicabo odio accusantium, illum perspiciatis! Fugit.' 
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});