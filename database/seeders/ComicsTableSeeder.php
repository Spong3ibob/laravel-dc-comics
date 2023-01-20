<?php

namespace Database\Seeders;

use App\Models\Comics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('db');

        foreach($comics as $comic){
            $new_comic = new Comics();
            $new_comic->title = $comic['title'];
            $new_comic->type = $comic['type'];
            $new_comic->price = $comic['price'];
            $new_comic->sale_date = $comic['sale_date'];
            $new_comic->save();
        }
    }
}
