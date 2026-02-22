<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Selamat Datang');
});

Route::get('/hello', function () {
    return 'Hello World!';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '244107020187 Sultan Nashira Ariva';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-'. $postId . ' Komentar ke-: ' . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID: ' . $id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name; 
});

Route::get('/user/{name?}', function ($name='John') { 
    return 'Nama saya '.$name; 
});