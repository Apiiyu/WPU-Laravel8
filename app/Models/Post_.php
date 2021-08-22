<?php

namespace App\Models;

class Post 
{
  private static $BlogPosts = [
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

  public static function all(){
    return collect(self::$BlogPosts); // Mengubah Array biasa menjadi collection
  }

  public static function find($slug){
    $posts = static::all(); // Mengambil Collection Array dari method all
    return $posts->firstWhere('slug', $slug); // Mengambil data array yang diberi klausa where
  }
}
