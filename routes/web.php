<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
  return view('about', [
    'title' => 'About',
    'nama' => 'Rafi Khoirulloh',
    'age' => 17,
    'address' => 'Jl. Babakan Jati'    
  ]);
});


Route::get('/posts', function () {
  $BlogPosts = [
    [
      'title' => 'First Posts',
      'slug' => 'first-post',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ],
    [
      'title' => 'Second Posts',
      'slug' => 'second-posts',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ],
    [
      'title' => 'Third Posts',
      'slug' => 'third-posts',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ]
  ];
  return view('posts', ['title' => 'Posts', 'blog' => $BlogPosts]);
});

// <-- Single Posts -->
Route::get('/posts/{slug}', function ($slug) {
  $Post = [
    [
      'title' => 'First Posts',
      'slug' => 'first-post',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ],
    [
      'title' => 'Second Posts',
      'slug' => 'second-posts',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ],
    [
      'title' => 'Third Posts',
      'slug' => 'third-posts',
      'authors' => 'Rafzy',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, omnis. Porro voluptates quos ratione corporis, rem architecto sint modi quia, doloribus quis expedita voluptate, necessitatibus recusandae id qui aliquam est.
      Veritatis, fugiat maxime! Expedita consequatur incidunt explicabo reprehenderit est possimus, consequuntur quibusdam, pariatur sed numquam corporis quia quae maxime adipisci distinctio voluptate nulla et sit id? Sed repellat quod voluptatibus?
      Quis ducimus molestiae odit pariatur iure facilis magnam minus? Ad, error itaque illo optio dolore quas vitae recusandae. Laudantium minima accusantium vero fugiat dolores earum dolore aperiam omnis optio quibusdam.
      Consectetur culpa magnam, error non vel accusantium! Quod totam repellat distinctio? Veritatis earum excepturi doloremque maiores, quis illo voluptate quas fugit soluta sit ipsa accusamus veniam deserunt obcaecati dolorum consectetur!
      Odit obcaecati dolorem nemo. Praesentium facilis sapiente molestiae explicabo esse commodi sunt voluptas, quisquam ullam enim eos saepe est assumenda quis animi amet, vero eaque excepturi sit nemo atque nam!'
    ]
  ];

  $NewPost = [];
  foreach($Post as $SinglePost) {
    if($SinglePost['slug'] === $slug){
      $NewPost = $SinglePost;
    }
  }
  
  return view('post', ['title' => 'Single Post', 'post' => $NewPost]);
});