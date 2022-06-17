<?php
use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics= config('comics');
        foreach ($comics as $data) {
            $comic = new Comic();
            $comic->title = $data['title'];
            $comic->thumb = $data['thumb'];
            $comic->price = $data['price'];
            $comic->series = $data['series'];
            $comic->description = $data['description'];
            $comic->sale_date = $data['sale_date'];
            $comic->save();
        }

    }
}
