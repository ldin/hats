<?php

class TypeTableSeeder extends Seeder {

  public function run()
  {
    DB::table('types')->delete();
    DB::table('types')->insert(array(
      array( 'type' => 'page', 'name'=>'Страница', 'status'=>'0', 'template'=>'page' ),
      array( 'type' => 'about', 'name'=>'Женская Коллекция', 'status'=>'1', 'template'=>'page'),
      array( 'type' => 'uslugi', 'name'=>'Детский ассортимент', 'status'=>'1', 'template'=>'page'),
      array( 'type' => 'ivest', 'name'=>'Советы', 'status'=>'1', 'template'=>'page'),
      array( 'type' => 'partners', 'name'=>'Нашим клиентам', 'status'=>'1', 'template'=>'page'),
    ));

  }

}

//заполнить базу:
//php artisan db:seed --class=TypeTableSeeder

